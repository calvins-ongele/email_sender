class SEOAnalyzer {
  constructor(options = {}) {
    // 1. Container Configuration
    this.container = options.container ? document.querySelector(options.container) : null;
    this.isMinimized = options.isMinimized || false; // Initial toggle state

    // 2. Direct Data vs Selectors Setup
    this.data = options.data || null;
    this.selectors = Object.assign({
      title: 'input[name="title"], title',
      slug: 'input[name="slug"]',
      metaDescription: 'textarea[name="meta_description"], meta[name="description"]',
      keyphrase: 'input[name="focus_keyphrase"], meta[name="keywords"]',
      content: '#content-editor, main, article, body'
    }, options.selectors || {});

    // 3. Analyzer Dictionaries & Rules
    this.transitionWords = [
      'however', 'therefore', 'although', 'because', 'first', 'second', 'finally',
      'for example', 'in addition', 'as a result', 'furthermore', 'meanwhile',
      'consequently', 'moreover', 'in contrast', 'besides', 'on the other hand'
    ];
    this.passivePatterns = /\b(am|is|are|was|were|be|been|being)\s+([a-z]+ed|[a-z]+en)\b/gi;

    // Initialize UI and Observers
    this._injectStyles();
    this._setupDOMContainer();
    this.analyze();

    // Auto-trigger updates on form inputs if we are in form mode
    if (!this.data) {
      this._attachInputListeners();
    }
  }

  /**
   * Main entry point to scrape/parse data and update UI.
   */
  analyze() {
    const rawData = this.data ? this._parseDirectData(this.data) : this._scrapePageData();
    const seoResults = this._analyzeSEO(rawData);
    const readabilityResults = this._analyzeReadability(rawData);

    const overallScore = this._calculateOverallScore([...seoResults, ...readabilityResults]);

    this._renderUI(overallScore, seoResults, readabilityResults);

    return { score: overallScore, seo: seoResults, readability: readabilityResults };
  }

  /* =========================================================================
   * DATA INGESTION & PARSING
   * ========================================================================= */
  _parseDirectData(data) {
    const rawContent = data.content || '';
    const parser = new DOMParser();
    const doc = parser.parseFromString(rawContent, 'text/html');

    return {
      title: data.title || '',
      slug: data.slug || window.location.pathname,
      metaDescription: data.metaDescription || '',
      keyphrase: (data.keyphrase || '').toLowerCase(),
      doc: doc,
      plainText: doc.body.textContent || ''
    };
  }

  _scrapePageData() {
    const getVal = (selector) => {
      const el = document.querySelector(selector);
      if (!el) return '';
      if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') return el.value.trim();
      if (el.tagName === 'META') return el.getAttribute('content') || '';
      return el.textContent.trim();
    };

    const rawContent = getVal(this.selectors.content);
    const parser = new DOMParser();
    const doc = parser.parseFromString(rawContent, 'text/html');

    return {
      title: getVal(this.selectors.title),
      slug: getVal(this.selectors.slug) || window.location.pathname,
      metaDescription: getVal(this.selectors.metaDescription),
      keyphrase: getVal(this.selectors.keyphrase).toLowerCase(),
      doc: doc,
      plainText: doc.body.textContent || ''
    };
  }

  /* =========================================================================
   * ANALYZER LOGIC
   * ========================================================================= */
  _analyzeSEO(data) {
    const results = [];
    const words = this._getWords(data.plainText);
    const wordCount = words.length;
    const keyphrase = data.keyphrase;

    if (wordCount >= 300) {
      results.push({ type: 'good', text: `Content length: Good (${wordCount} words). Recommended minimum is 300 words.` });
    } else if (wordCount >= 150) {
      results.push({ type: 'improvement', text: `Content length: Below target (${wordCount} words). Recommended 300+ words.` });
    } else {
      results.push({ type: 'bad', text: `Content length: Too short (${wordCount} words). Target at least 300 words.` });
    }

    const titleLen = data.title.length;
    if (titleLen >= 40 && titleLen <= 60) {
      results.push({ type: 'good', text: `SEO Title length: Great (${titleLen} characters).` });
    } else if (titleLen > 60) {
      results.push({ type: 'improvement', text: `SEO Title length: Slightly long (${titleLen} chars). May be truncated.` });
    } else {
      results.push({ type: 'bad', text: `SEO Title length: Too short (${titleLen} chars). Ideal range is 40-60.` });
    }

    if (keyphrase) {
      if (data.title.toLowerCase().includes(keyphrase)) {
        results.push({ type: 'good', text: 'Keyphrase in Title: Focus keyphrase appears in the SEO title.' });
      } else {
        results.push({ type: 'bad', text: 'Keyphrase in Title: Focus keyphrase was not found in the title.' });
      }
    }

    const metaLen = data.metaDescription.length;
    if (metaLen >= 120 && metaLen <= 156) {
      results.push({ type: 'good', text: `Meta Description: Well optimized (${metaLen} characters).` });
    } else if (metaLen > 156) {
      results.push({ type: 'improvement', text: `Meta Description: Too long (${metaLen} chars). Snippet will be cut off.` });
    } else {
      results.push({ type: 'bad', text: `Meta Description: Too short (${metaLen} chars). Aim for 120-156 characters.` });
    }

    if (keyphrase && metaLen > 0) {
      if (data.metaDescription.toLowerCase().includes(keyphrase)) {
        results.push({ type: 'good', text: 'Keyphrase in Meta Description: Focus keyphrase is present.' });
      } else {
        results.push({ type: 'improvement', text: 'Keyphrase in Meta Description: Add focus keyphrase here.' });
      }
    }

    if (keyphrase) {
      const firstPara = data.doc.querySelector('p')?.textContent.toLowerCase() || '';
      if (firstPara.includes(keyphrase)) {
        results.push({ type: 'good', text: 'Keyphrase in Intro: Focus keyphrase appears in the first paragraph.' });
      } else {
        results.push({ type: 'bad', text: 'Keyphrase in Intro: Keyphrase missing from the first paragraph.' });
      }
    }

    if (keyphrase && wordCount > 0) {
      const occurrences = this._countOccurrences(data.plainText.toLowerCase(), keyphrase);
      const density = (occurrences / wordCount) * 100;

      if (density >= 0.5 && density <= 2.5) {
        results.push({ type: 'good', text: `Keyphrase density: ${density.toFixed(1)}% (${occurrences} matches). Target: 0.5%–2.5%.` });
      } else if (density > 2.5) {
        results.push({ type: 'bad', text: `Keyphrase density: Overused (${density.toFixed(1)}%). Avoid keyword stuffing.` });
      } else {
        results.push({ type: 'improvement', text: `Keyphrase density: Low (${density.toFixed(1)}%). Add keyphrase a few more times.` });
      }
    }

    if (data.slug) {
      const cleanSlug = data.slug.toLowerCase();
      const isReadable = /^[a-z0-9-/]+$/.test(cleanSlug);
      const containsKp = keyphrase ? cleanSlug.includes(keyphrase.replace(/\s+/g, '-')) : true;

      if (isReadable && cleanSlug.length <= 75 && containsKp) {
        results.push({ type: 'good', text: 'URL Slug: Short, clean, and includes keyphrase.' });
      } else {
        results.push({ type: 'improvement', text: 'URL Slug: Needs optimization (ensure short length and keyword inclusion).' });
      }
    }

    const headings = Array.from(data.doc.querySelectorAll('h2, h3, h4'));
    if (headings.length >= 2) {
      results.push({ type: 'good', text: `Subheadings: Great distribution (${headings.length} subheadings found).` });
    } else {
      results.push({ type: 'improvement', text: 'Subheadings: Add at least 2 subheadings (H2/H3) to structure content.' });
    }

    const links = Array.from(data.doc.querySelectorAll('a'));
    const internalLinks = links.filter(a => a.getAttribute('href')?.startsWith('/') || a.origin === window.location.origin);
    const externalLinks = links.filter(a => a.origin && a.origin !== window.location.origin);

    if (internalLinks.length > 0) {
      results.push({ type: 'good', text: `Internal links: Great (${internalLinks.length} found).` });
    } else {
      results.push({ type: 'improvement', text: 'Internal links: Add internal links to related site content.' });
    }

    if (externalLinks.length > 0) {
      results.push({ type: 'good', text: `Outbound links: Great (${externalLinks.length} found).` });
    } else {
      results.push({ type: 'improvement', text: 'Outbound links: Add links to authoritative external sites.' });
    }

    const images = Array.from(data.doc.querySelectorAll('img'));
    if (images.length === 0) {
      results.push({ type: 'improvement', text: 'Images: No images found. Add visual assets.' });
    } else {
      const missingAlt = images.filter(img => !img.getAttribute('alt')?.trim());
      if (missingAlt.length === 0) {
        results.push({ type: 'good', text: `Image ALT tags: All ${images.length} images have ALT text.` });
      } else {
        results.push({ type: 'bad', text: `Image ALT tags: ${missingAlt.length} of ${images.length} images missing ALT tags.` });
      }
    }

    return results;
  }

  _analyzeReadability(data) {
    const results = [];
    const text = data.plainText;
    const sentences = text.match(/[^.!?]+[.!?]+/g) || [];
    const paragraphs = Array.from(data.doc.querySelectorAll('p')).filter(p => p.textContent.trim().length > 0);

    if (sentences.length > 0) {
      const longSentences = sentences.filter(s => this._getWords(s).length > 20);
      const longPercentage = (longSentences.length / sentences.length) * 100;
      if (longPercentage <= 25) {
        results.push({ type: 'good', text: `Sentence length: ${longPercentage.toFixed(1)}% exceed 20 words (Target ≤ 25%).` });
      } else {
        results.push({ type: 'bad', text: `Sentence length: ${longPercentage.toFixed(1)}% exceed 20 words. Shorten sentences.` });
      }
    }

    if (paragraphs.length > 0) {
      const longParas = paragraphs.filter(p => this._getWords(p.textContent).length > 150);
      if (longParas.length === 0) {
        results.push({ type: 'good', text: 'Paragraph length: All paragraphs are under 150 words.' });
      } else {
        results.push({ type: 'improvement', text: `Paragraph length: ${longParas.length} paragraph(s) exceed 150 words.` });
      }
    }

    if (sentences.length > 0) {
      let count = 0;
      sentences.forEach(s => {
        if (this.transitionWords.some(w => s.toLowerCase().includes(w))) count++;
      });
      const transitionPct = (count / sentences.length) * 100;
      if (transitionPct >= 30) {
        results.push({ type: 'good', text: `Transition words: ${transitionPct.toFixed(1)}% of sentences use them.` });
      } else {
        results.push({ type: 'improvement', text: `Transition words: Only ${transitionPct.toFixed(1)}% used. Target is 30%+` });
      }
    }

    if (sentences.length > 0) {
      const passiveMatches = text.match(this.passivePatterns) || [];
      const passivePct = (passiveMatches.length / sentences.length) * 100;
      if (passivePct <= 10) {
        results.push({ type: 'good', text: `Passive voice: ${passivePct.toFixed(1)}% used (Ideal ≤ 10%).` });
      } else {
        results.push({ type: 'improvement', text: `Passive voice: ${passivePct.toFixed(1)}% used. Try using active voice.` });
      }
    }

    return results;
  }

  /* =========================================================================
   * UI RENDERER & CSS INJECTION
   * ========================================================================= */
  _injectStyles() {
    if (document.getElementById('seo-analyzer-styles')) return;

    const styleTag = document.createElement('style');
    styleTag.id = 'seo-analyzer-styles';
    styleTag.textContent = `
      .seo-analyzer-card {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 10px 0;
        color: #1e293b;
        transition: all 0.2s ease-in-out;
      }
      .seo-analyzer-floating {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99999;
        max-height: 80vh;
        width: 380px;
        overflow-y: auto;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
      }
      .seo-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 8px;
        margin-bottom: 12px;
      }
      .seo-header-actions {
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .seo-title { font-weight: 700; font-size: 15px; margin: 0; }
      .seo-badge {
        padding: 3px 8px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
        color: #fff;
      }
      .seo-badge.Good { background-color: #22c55e; }
      .seo-badge.Could-be-improved { background-color: #f59e0b; }
      .seo-badge.Needs-attention { background-color: #ef4444; }

      .seo-toggle-btn {
        background: transparent;
        border: none;
        color: #64748b;
        cursor: pointer;
        font-size: 16px;
        padding: 0 4px;
        line-height: 1;
        border-radius: 4px;
      }
      .seo-toggle-btn:hover { color: #0f172a; background: #f1f5f9; }

      /* Minimized state mechanics */
      .seo-analyzer-card.is-minimized {
        padding: 10px 16px;
      }
      .seo-analyzer-card.is-minimized .seo-header {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
      }
      .seo-analyzer-card.is-minimized .seo-body {
        display: none;
      }

      .seo-section-label { font-size: 13px; font-weight: 600; margin: 12px 0 6px 0; color: #475569; }
      .seo-list { list-style: none; padding: 0; margin: 0; }
      .seo-list li {
        display: flex;
        align-items: flex-start;
        font-size: 13px;
        line-height: 1.4;
        margin-bottom: 6px;
      }
      .seo-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-right: 8px;
        margin-top: 3px;
        flex-shrink: 0;
      }
      .seo-dot.good { background-color: #22c55e; }
      .seo-dot.improvement { background-color: #f59e0b; }
      .seo-dot.bad { background-color: #ef4444; }
    `;
    document.head.appendChild(styleTag);
  }

  _setupDOMContainer() {
    if (!this.container) {
      // Check if a floating container already exists from a previous instance
      let existingFloat = document.querySelector('.seo-analyzer-floating');

      if (existingFloat) {
        this.container = existingFloat;
      } else {
        const floatDiv = document.createElement('div');
        floatDiv.className = 'seo-analyzer-card seo-analyzer-floating';
        document.body.appendChild(floatDiv);
        this.container = floatDiv;
      }

      const floatDiv = document.createElement('div');
      floatDiv.className = 'seo-analyzer-card seo-analyzer-floating';
      document.body.appendChild(floatDiv);
      this.container = floatDiv;
    } else {
      this.container.classList.add('seo-analyzer-card');
    }

    if (this.isMinimized) {
      this.container.classList.add('is-minimized');
    }
  }

  _renderUI(score, seoResults, readabilityResults) {
    const scoreClass = score.replace(/\s+/g, '-');

    const renderList = (items) => items.map(i => `
      <li>
        <span class="seo-dot ${i.type}"></span>
        <span>${i.text}</span>
      </li>
    `).join('');

    this.container.innerHTML = `
      <div class="seo-header">
        <h4 class="seo-title">SEO Report</h4>
        <div class="seo-header-actions">
          <span class="seo-badge ${scoreClass}">${score}</span>
          <button class="seo-toggle-btn" title="Toggle Report">
            ${this.isMinimized ? '&#43;' : '&#8722;'}
          </button>
        </div>
      </div>
      <div class="seo-body">
        <div class="seo-section-label">SEO Checks</div>
        <ul class="seo-list">${renderList(seoResults)}</ul>
        
        <div class="seo-section-label">Readability Checks</div>
        <ul class="seo-list">${renderList(readabilityResults)}</ul>
      </div>
    `;

    // Re-bind the toggle event listener after DOM re-render
    const toggleBtn = this.container.querySelector('.seo-toggle-btn');
    toggleBtn.addEventListener('click', () => this.toggle());
  }

  toggle() {
    this.isMinimized = !this.isMinimized;
    this.container.classList.toggle('is-minimized', this.isMinimized);
    
    const toggleBtn = this.container.querySelector('.seo-toggle-btn');
    if (toggleBtn) {
      toggleBtn.innerHTML = this.isMinimized ? '&#43;' : '&#8722;';
    }
  }

  /* =========================================================================
   * HELPERS & LISTENERS
   * ========================================================================= */
  _attachInputListeners() {
    const debouncedAnalyze = this._debounce(() => this.analyze(), 300);
    document.querySelectorAll('input, textarea').forEach(input => {
      input.addEventListener('input', debouncedAnalyze);
    });
  }

  _getWords(text) {
    return text.trim().toLowerCase().match(/\b[a-z0-9'-]+\b/g) || [];
  }

  _countOccurrences(text, searchStr) {
    if (!searchStr) return 0;
    const escaped = searchStr.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    const matches = text.match(new RegExp(`\\b${escaped}\\b`, 'gi'));
    return matches ? matches.length : 0;
  }

  _calculateOverallScore(allChecks) {
    const badCount = allChecks.filter(c => c.type === 'bad').length;
    const impCount = allChecks.filter(c => c.type === 'improvement').length;

    if (badCount >= 3) return 'Needs attention';
    if (badCount > 0 || impCount >= 3) return 'Could be improved';
    return 'Good';
  }

  _debounce(fn, delay) {
    let timer;
    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, args), delay);
    };
  }
}