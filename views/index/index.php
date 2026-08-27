<?php

   $url = "http://";  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://";   
    
          
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];
    
    $no_security = explode(':', $url)[0];
    $valid_url = str_replace('www.', '', $_SERVER["HTTP_HOST"]);
    
    if (strpos($url, 'www') == false) {
        header("Location: https://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
    } else if ($no_security == 'http') {
        header("Location: http://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<head>
  <meta charset="utf-8" />
 
<link rel="canonical" href="https://sctcc.edu/degrees-programs/architectural-construction-technology" />
<link rel="image_src" href="https://sctcc.edu/sites/default/files/styles/metatag_image/public/uploads/img/2023-04/ArchitecturalConstruction_2022-20.jpg.webp?h=8050abc0&amp;itok=8iNolgis" />
<meta property="og:site_name" content="St. Cloud Technical and Community College" />
<meta property="og:type" content="Program" />
<meta property="og:url" content="https://sctcc.edu/degrees-programs/architectural-construction-technology" />
<meta property="og:title" content="Architectural Construction Technology | St. Cloud Technical and Community College" />
<meta property="og:image" content="https://sctcc.edu/sites/default/files/styles/metatag_image/public/uploads/img/2023-04/ArchitecturalConstruction_2022-20.jpg.webp?h=8050abc0&amp;itok=8iNolgis" />
<meta name="Generator" content="Drupal 10 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="https://sctcc.edu/themes/sctcc/favicon.ico" type="image/vnd.microsoft.icon" />

    <title>Architectural Construction Technology | St. Cloud Technical and Community College</title>
    <link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/align.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/fieldgroup.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/container-inline.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/clearfix.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/details.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/hidden.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/item-list.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/js.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/nowrap.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/position-container.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/reset-appearance.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/resize.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/system-status-counter.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/system-status-report-counters.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/system-status-report-general-info.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/system/components/tablesort.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/filter/filter.caption.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/media/filter.caption.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/media/oembed.formatter.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/views/views.module.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/modules/contrib/ckeditor_indentblock/css/plugins/indentblock/ckeditor.indentblock.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/modules/contrib/paragraphs/css/paragraphs.unpublished.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/modules/contrib/sitewide_alert/css/sitewide_alert.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/core/assets/vendor/normalize-css/normalize.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/stable/css/core/normalize-fixes.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/action-links.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/breadcrumb.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/button.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/collapse-processed.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/container-inline.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/details.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/exposed-filters.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/field.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/form.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/icons.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/inline-form.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/item-list.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/link.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/links.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/menu.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/more-link.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/pager.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/tabledrag.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/tableselect.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/tablesort.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/tabs.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/textarea.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/ui-dialog.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/messages.css?tjz698" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/contrib/classy/css/components/node.css?tjz698" />
<link rel="stylesheet" media="all" href="//use.typekit.net/mpl3rqi.css" />
<link rel="stylesheet" media="all" href="https://sctcc.edu/themes/sctcc/css/main.css?tjz698" />
<link rel="stylesheet" media="all" href="//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

       
</head>
<body class="path-node page-node-type-program"> 
<!-- End Google Tag Manager (noscript) -->
<!-- Minnesota_St. Cloud_St. Cloud Technical & Community College Pixel_5.16.22 -->
<script src="//action.dstillery.com/orbserv/nsjs?adv=cl1016361&ns=3141&nc=stcl&ncv=24&dstOrderId=[OrderId]&dstOrderAmount=[OrderAmount]" type="text/javascript"></script><noscript>
    <img width="1" height="1" src="//action.dstillery.com/orbserv/nspix?adv=cl1016361&ns=3141&nc=stcl&ncv=24&dstOrderId=[OrderId]&dstOrderAmount=[OrderAmount]" /></noscript>
<!-- End Minnesota_St. Cloud_St. Cloud Technical & Community College Pixel_5.16.22 -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1174779465894958');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id=1174779465894958&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<a href="#main-content" class="visually-hidden focusable skip-link">
  Skip to main content
</a>

  <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
    <div class="overlay"></div>
<div class="layout-container">

  <header role="banner" class="header">
    <div class="header__topbar">
            <div class="header__logo">
        <a href="/" rel="home">
          <img src="https://sctcc.edu/sites/default/files/wrapper/2023-04/sctcc-header-logo.svg"
               alt="SCTCC logo"
               width="149"
               height="55"
          />
        </a>
      </div>
              <div class="header__topbar-menu">
                                <div class="header__secondary-menu">
                <div class="region region-secondary-menu">
    <nav role="navigation" aria-label="Secondary" id="block-secondarynavigation" class="block block-menu navigation menu--secondary-navigation">
<h2 class="visually-hidden">Secondary navigation</h2>
        

        <ul class="menu">
                        <li class="menu-item menu-dropdown">
                                              <button class="menu__toggle no-link" aria-expanded="false">
                <span>Current Students</span>
              </button>
                          <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/student-resources" >Student Services</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/quick-resource-guide-sctcc-students" >Quick Guide</a>
                  </li>
              <li class="menu-item">
          <a href="http://outlook.com/minnstate.edu" >Email</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.learn.minnstate.edu/?target=%2fd2l%2fhome" >D2L Brightspace</a>
                  </li>
              <li class="menu-item">
          <a href="https://eservices.minnstate.edu/eservices/login.html?campusid=208" >eServices</a>
                  </li>
              <li class="menu-item">
          <a href="https://mnpals-sct.primo.exlibrisgroup.com/discovery/search?vid=01MNPALS_SCT:SCT&amp;sortby=rank" >Library Catalog</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.navigate.eab.com/" >Navigate</a>
                  </li>
              <li class="menu-item">
          <a href="https://bookstop.sctcc.edu/home" >BOOKStore</a>
                  </li>
              <li class="menu-item">
          <a href="https://eservices.minnstate.edu/registration/search/basic.html?campusid=208" >Class Schedules</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                                              <button class="menu__toggle no-link" aria-expanded="false">
                <span>Faculty &amp; Staff</span>
              </button>
                          <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/employees" >Employee Resources</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/academic-calendar" >Academic Calendar</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/employee_directory" >Employee Directory</a>
                  </li>
              <li class="menu-item">
          <a href="http://outlook.com/minnstate.edu" >Email</a>
                  </li>
              <li class="menu-item">
          <a href="https://eservices.minnstate.edu/faculty/public/secure/home/index?campusid=208" >Faculty eServices</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.learn.minnstate.edu/?target=/d2l/home" >D2L Brightspace</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.campus.eab.com/" >Navigate</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/help-desk-faculty" >Technology Support</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/quick-resource-guide-sctcc-employees" >Quick Guide</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                                              <button class="menu__toggle no-link" aria-expanded="false">
                <span>Alumni</span>
              </button>
                          <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctccathletics.com" >Cyclones Athletics</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/foundation" >Foundation</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/get-involved" >Get Involved</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/giving" >Ways to Give</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item">
                      <a href="https://sctcc.edu/events">Events</a>
                            </li>
                        <li class="menu-item">
                      <a href="https://translate.google.com/translate?hl=&amp;sl=en&amp;tl=es&amp;u=https%3A%2F%2Fsctcc.edu">Select Language</a>
                            </li>
          </ul>
  



  </nav>

  </div>

            </div>
          
                      <div class="mobile--hamburger" role="Navigation" aria-label="full">
              <button class="header__menu-toggle toggle-button menu-toggle" aria-expanded="false"><span class="visually-hidden">Menu</span></button>
            </div>
                  
                    <div class="search--main" role="Search">
            <button class="header__search-toggle toggle-button search-button" aria-expanded="false">
              <span class="visually-hidden">Expand Search</span>
            </button>
            <div class="header__search">
                                <div class="region region-search">
    <div class="views-exposed-form block block-views block-views-exposed-filter-blocksearch-main-page-1" data-drupal-selector="views-exposed-form-search-main-page-1" id="block-exposedformsearch-mainpage-1">
  
    
      <form action="https://sctcc.edu/search" method="get" id="views-exposed-form-search-main-page-1" accept-charset="UTF-8">
  <div class="form--inline clearfix">
  <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-keyword form-item-keyword form-no-label">
      


    <label for="edit-keyword" class="visually-hidden">Search</label>
        <input data-drupal-selector="edit-keyword" type="text" id="edit-keyword" name="keyword" value="" size="30" maxlength="128" class="form-text" />

        </div>
<div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions"><input data-drupal-selector="edit-submit-search-main" type="submit" id="edit-submit-search-main" value="Submit" class="button js-form-submit form-submit" />
</div>

</div>

</form>

  </div>

  </div>

                          </div>
          </div>
        </div>
            
    </div>
        <div class="header__inner">
      <div class="header__menu-wrapper">
                  <div class="header__main-menu">
              <div class="region region-main-menu">
    <nav role="navigation" aria-label="Main" id="block-sctcc-main-menu" class="block block-menu navigation menu--main">
<h2 class="visually-hidden">Main navigation</h2>
        
        <ul class="menu">
                        <li class="menu-item menu-dropdown menu-item--active-trail">
                      <div class="item_sub">
              <a href="https://sctcc.edu/degrees-programs" data-drupal-link-system-path="node/39">Degrees &amp; Programs</a>
              <button class="menu__toggle" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
              <button class="menu__toggle-lg visually-hidden" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
            </div>
                                <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/business-it" >Business, IT, &amp; Education Programs</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/health" >Health Sciences &amp; Nursing Programs</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/aa" >Liberal Arts &amp; Transfer Studies</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/construction"  class="active-trail" >Trades in Construction</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/manufacturing" >Trades in Manufacturing</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/transportation" >Trades in Transportation Repair</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/degrees-programs/all-degrees-programs" >All Degrees &amp; Programs</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/degrees-programs/career-program-finder" >Career &amp; Program Finder</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/degrees" >Degree and Certification Options</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/learning-options" >Programs for High School Students</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                      <div class="item_sub">
              <a href="https://sctcc.edu/admissions-apply-sctcc" data-drupal-link-system-path="node/40">Admissions</a>
              <button class="menu__toggle" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
              <button class="menu__toggle-lg visually-hidden" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
            </div>
                                <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/admissions-apply-sctcc" >How to Apply</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/visit" >Tour SCTCC</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/form/request-for-information" >Request Information</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/accuplacer" >Course Placement &amp; Testing - Accuplacer</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/orientation" >eOrientation &amp; Registration</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/records" >Records &amp; Registration</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/change-your-program-status" >Change your Program Status</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/admissions-forms" >Admissions Forms</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/meet-admissions-and-recruitment-staff" >Meet our Admissions Staff</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/express" >Express Enroll at SCTCC</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/summer" >Summer Session at SCTCC</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                      <div class="item_sub">
              <a href="https://sctcc.edu/tuition-aid" data-drupal-link-system-path="node/41">Tuition &amp; Aid</a>
              <button class="menu__toggle" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
              <button class="menu__toggle-lg visually-hidden" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
            </div>
                                <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/applying-financial-aid" >Applying for Financial Aid</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/tuition" >Tuition &amp; Fees</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/scholarships" >Scholarships</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/payment-policies" >Payments &amp; Policies</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/Paying-Your-Bill" >Paying Your Bill with Financial Aid</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/financial-aid-types" >Types of Aid</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/financial-aid-forms" >Forms &amp; Resources</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/Financial-Aid-Eligibility" >Maintaining Financial Aid Eligibility</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/veterans-aid" >Veterans &amp; Military Aid</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                      <div class="item_sub">
              <a href="https://sctcc.edu/student-resources" data-drupal-link-system-path="node/42">Student Stuff</a>
              <button class="menu__toggle" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
              <button class="menu__toggle-lg visually-hidden" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
            </div>
                                <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/student-stuff/academic-info-students" >Academic</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/quick-resource-guide-sctcc-students" >Quick Guide for SCTCC Students</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/student-resources" >Student Resources</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/student-stuff/campus-life" >Campus Life</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctccathletics.com/landing/index" >Cyclones Athletics</a>
                  </li>
              <li class="menu-item">
          <a href="http://sctcc.edu/student-handbook" >Student Handbook</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/report-it" >Just Report It</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                      <div class="item_sub">
              <a href="https://sctcc.edu/about-sctcc" data-drupal-link-system-path="node/43">About Us</a>
              <button class="menu__toggle" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
              <button class="menu__toggle-lg visually-hidden" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
            </div>
                                <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/contact-us" >Contact Us</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/visit" >Visit Us</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/about-sctcc" >About SCTCC</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/about-us/news-events" >News, Stories, &amp; Events</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/leadership" >Leadership</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/Community-Culture-Institutional-Climate" >Community, Culture, and Institutional Climate</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/accreditation" >Accreditation at SCTCC</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/employment-opportunities" >Careers at SCTCC</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
                        <li class="menu-item menu-dropdown">
                      <div class="item_sub">
              <a href="https://sctcc.edu/community-training" data-drupal-link-system-path="node/197">Community &amp; Training</a>
              <button class="menu__toggle" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
              <button class="menu__toggle-lg visually-hidden" aria-expanded="false"><span class="visually-hidden">Expand Submenu</span></button>
            </div>
                                <div class="menu__drop">
              <div class="menu__drop-inner">
                        <ul class="menu__submenu">
              <li class="menu-item">
          <a href="https://sctcc.edu/training" >Customized Training</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/Community-Culture-Institutional-Climate" >Community, Culture, and Institutional Climate</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/giving" >Ways to Give</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/foundation" >SCTCC Foundation</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/sctcc-dental-clinic" >Community Dental Clinic</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/northwaygroup" >The Northway Group</a>
                  </li>
              <li class="menu-item">
          <a href="https://sctcc.edu/youth-programs-camps" >Youth Programs &amp; Camps</a>
                  </li>
          </ul>
  
              </div>
            </div>
                  </li>
          </ul>
  



  </nav>

  </div>

          </div>
              </div>
    </div>
  </header>

    <div class="region region-help">
    <div data-drupal-messages-fallback class="hidden"></div>

  </div>


  <main role="main">
    <a id="main-content" tabindex="-1"></a>            <div class="header_alert">
        <div class="region region-alert">
      <div data-sitewide-alert role="banner"></div>

  </div>

    </div>
    
            <div class="section__nav">
        <div class="region region-section-nav">
    <div class="block block-sctcc-section-bar-sticky" id="block-sectionbarsticky-2">
  
    
      

<div class="sctcc-section-bar site-section-bar">
            <nav class="site-section-bar__nav" role="navigation" aria-label="Section">
            <button class="site-section_bar__nav-toggle" aria-expanded="false">
                More in this Section            </button>
            <div class="site-section_bar__nav-menu">
                
<div class="menu menu--main site-section-nav">
                  <ul class="menu menu--level-1">
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs">Degrees &amp; Programs</a>
                                          <ul class="menu menu--level-2">
                  <li>
                                    <a href="https://sctcc.edu/construction">Trades in Construction</a>
                                          <ul class="menu menu--level-3">
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/architectural-construction-technology" data-drupal-link-system-path="node/470">Architectural Construction Technology</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/carpentry" data-drupal-link-system-path="node/471">Carpentry</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/electrical-construction-technology" data-drupal-link-system-path="node/472">Electrical Construction Technology</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/heating-air-conditioning-refrigeration" data-drupal-link-system-path="node/474">Heating, Air Conditioning, &amp; Refrigeration</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/land-surveyingcivil-engineering" data-drupal-link-system-path="node/476">Land Surveying/Civil Engineering</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/plumbing" data-drupal-link-system-path="node/477">Plumbing</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/water-environment-technologies" data-drupal-link-system-path="node/481">Water Environment Technologies</a>
                      </li>
              </ul>
    
                      </li>
              </ul>
    
                      </li>
              </ul>
    
</div>

 
            </div>
        </nav>
    </div>

  </div>

  </div>

    </div>
    
                                  <div class="banner with-hero-img">
        <div class="banner__image">
                      
            <div class="field field--name-field-media-image field--type-image field--label-hidden field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/hero_banner/public/uploads/img/2023-04/ArchitecturalConstruction_2022-20.jpg?h=8050abc0&amp;itok=G5ErdM59 1x" media="(min-width: 1025px)" type="image/jpeg" width="1200" height="384"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/hero_banner_md/public/uploads/img/2023-04/ArchitecturalConstruction_2022-20.jpg?h=8050abc0&amp;itok=f-c6Tycl 1x" media="(min-width: 700px)" type="image/jpeg" width="700" height="390"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/hero_banner_sm/public/uploads/img/2023-04/ArchitecturalConstruction_2022-20.jpg?h=8050abc0&amp;itok=12iUuCJQ 1x" type="image/jpeg" width="320" height="265"/>
                  <img loading="lazy" width="1200" height="384" src="https://sctcc.edu/sites/default/files/styles/hero_banner/public/uploads/img/2023-04/ArchitecturalConstruction_2022-20.jpg?h=8050abc0&amp;itok=G5ErdM59" alt="Architecture student with intructor at computer" typeof="foaf:Image" />

  </picture>

</div>
      
                                <button class="banner__video-toggle"><span class="visually-hidden">Video play</span></button>
                  </div>
                  <div class="banner__video remote_video" role="dialog" aria-label="Video: Architectural Construction Technology">
            <button class="banner__video-close" aria-expanded="false"><span class="visually-hidden">Video close</span></button>
            
            <div class="field field--name-field-media-oembed-video field--type-string field--label-hidden field__item"><iframe src="https://sctcc.edu/media/oembed?url=https%3A//vimeo.com/1121256276&amp;max_width=1200&amp;max_height=675&amp;hash=s_QYRV_Jqys8oASnos9tzK35MDxQ4TGYJhZdgiB_pF0" width="1200" height="675" class="media-oembed-content" loading="lazy" title="Architectural Construction Tech"></iframe>
</div>
      
          </div>
                    <div class="banner__header-title pdetails__banner">
  
              
      
  <h1 class="page-title"><span class="field field--name-title field--type-string field--label-hidden">Architectural Construction Technology</span>
</h1>

  
                  <div class="program__types">
                   <span>AAS</span>
                   <span>Diploma</span>
              </div>
      </div>



      </div>
        
              <div class="breadcrumb">
          <div class="region region-breadcrumb">
    <div class="block block-sctcc-section-bar-sticky block-sctcc-section-breadcrumb" id="block-sctccbreadcrumb">
  
    
      
  <div class="site-section-bar__breadcrumb">
    <nav aria-label="breadcrumbs">
    <ul class="sctcc-breadcrumb breadcrumb">
                    <li class="breadcrumb__crumb"><a href="/">Home</a></li>
                    <li class="breadcrumb__crumb"><a href="https://sctcc.edu/degrees-programs">Degrees &amp; Programs</a></li>
                    <li class="breadcrumb__crumb"><a href="https://sctcc.edu/construction">Trades in Construction</a></li>
            </ul>
</nav>

  </div>


  </div>

  </div>

      </div>
        
    
    <div class="layout-content">
                                <div class="content-wrapper sidebar">
              <aside class="left-sidebar">
            <div class="region region-left-sidebar">
    <div class="block block-sctcc-section-bar-sticky block-sctcc-interior-navbar-sticky" id="block-interiornavbarsticky">
  
    
      <div class="sctcc-section-bar site-section-bar">
  <nav class="site-section-bar__nav" role="navigation" aria-label="Section">
    <div class="site-section_bar__nav-menu">
      
<div class="menu menu--main site-section-nav">
                  <ul class="menu menu--level-1">
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs">Degrees &amp; Programs</a>
                                          <ul class="menu menu--level-2">
                  <li>
                                    <a href="https://sctcc.edu/construction">Trades in Construction</a>
                                          <ul class="menu menu--level-3">
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/architectural-construction-technology" data-drupal-link-system-path="node/470">Architectural Construction Technology</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/carpentry" data-drupal-link-system-path="node/471">Carpentry</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/electrical-construction-technology" data-drupal-link-system-path="node/472">Electrical Construction Technology</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/heating-air-conditioning-refrigeration" data-drupal-link-system-path="node/474">Heating, Air Conditioning, &amp; Refrigeration</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/land-surveyingcivil-engineering" data-drupal-link-system-path="node/476">Land Surveying/Civil Engineering</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/plumbing" data-drupal-link-system-path="node/477">Plumbing</a>
                      </li>
                  <li>
                                    <a href="https://sctcc.edu/degrees-programs/water-environment-technologies" data-drupal-link-system-path="node/481">Water Environment Technologies</a>
                      </li>
              </ul>
    
                      </li>
              </ul>
    
                      </li>
              </ul>
    
</div>


    </div>
  </nav>
</div>

  </div>

  </div>

        </aside>
            <div class="layout-content sidebar main-content">

                  <div class="page-intro">
            <p>Are you hoping to help create the world around us? Our Architectural Construction Technology program might be perfect for you.</p>

                          <div class="page-links">
                
      <div class="field pdetails__links field--name-field-program-intro-links field--type-link field--label-hidden field__items">
              <div class="field__item pdetails__item"><a href="https://sctcc.edu/program-faculty/act">Instructors</a></div>
          </div>
  
              </div>
                      </div>
                  <div class="region region-content">
    <div id="block-sctcc-content" class="block block-system block-system-main-block">
  
    
      



<article data-history-node-id="470" about="https://sctcc.edu/degrees-programs/architectural-construction-technology" class="pdetails full node node--type-program node--view-mode-full">
   
    <div class="prog-certs paragraph">
      <h2 class="certs__program-main-heading">DEGREES IN <span class="field field--name-title field--type-string field--label-hidden">Architectural Construction Technology</span>
</h2>
      <div class="views-element-container"><div class="view view-cert-details view-id-cert_details view-display-id-block_1 js-view-dom-id-f4ffe720e646ad0dd91d580778dad21ebd4ac1ebb8f8dd4fed83dd4859ea12ea">
  
    
      
      <div class="view-content">
          <div class="views-row">
<div about="https://sctcc.edu/taxonomy/term/424" id="taxonomy-term-424" class="certs__program taxonomy-term vocabulary-certs">
  <div class="content">
    <div class="certs__program-heading">
      <h3 class="certs__program-name">
                  Architectural Construction Technology Associate of Applied Science
              </h3>
              <span class="certs__tags">
            <div class="field field--name-field-cert-type-abbr field--type-string field--label-hidden field__item">AAS</div>
      </span>
          </div>

    <div class="certs__program-content">
      <div class="certs__program-left">
                    <div class="certs__program-desc">
              
            <div class="field field--name-field-cert-description field--type-string-long field--label-hidden field__item">The AAS will prepare students for work as general contractors, architectural or engineering firms, and building material centers, suppliers, and manufacturers. Transfer to other schools with articulation agreements. </div>
      
            </div>
        
        <div class="contact-fifty-fifty__link faculty-card__cta--link">
          <a href="https://sctcc.edu/cert-details/ACT2">Course List</a>
        </div>
      </div>

      <div class="certs__program-right pdegree">
        <div class="faculty-card">
          <div class="faculty-card__heading">
            <h3>By the Numbers</h3>
          </div>
          <div class="faculty-card__body">
            <div class="faculty-card__number prog-type__number">
              <span class="number">
            <div class="field field--name-field-cert-credits field--type-integer field--label-hidden field__item">61</div>
      </span>
              <span class="number-label">Credits</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
    <div class="views-row">
<div about="https://sctcc.edu/taxonomy/term/423" id="taxonomy-term-423" class="certs__program taxonomy-term vocabulary-certs">
  <div class="content">
    <div class="certs__program-heading">
      <h3 class="certs__program-name">
                  Architectural Construction Technology Diploma
              </h3>
              <span class="certs__tags">
            <div class="field field--name-field-cert-type-abbr field--type-string field--label-hidden field__item">DIP</div>
      </span>
          </div>

    <div class="certs__program-content">
      <div class="certs__program-left">
                    <div class="certs__program-desc">
              
            <div class="field field--name-field-cert-description field--type-string-long field--label-hidden field__item">The diploma will provide students with the the basic skills for a career as an architect.</div>
      
            </div>
        
        <div class="contact-fifty-fifty__link faculty-card__cta--link">
          <a href="https://sctcc.edu/cert-details/ACT1">Course List</a>
        </div>
      </div>

      <div class="certs__program-right pdegree">
        <div class="faculty-card">
          <div class="faculty-card__heading">
            <h3>By the Numbers</h3>
          </div>
          <div class="faculty-card__body">
            <div class="faculty-card__number prog-type__number">
              <span class="number">
            <div class="field field--name-field-cert-credits field--type-integer field--label-hidden field__item">52</div>
      </span>
              <span class="number-label">Credits</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

    </div>
  
      
          </div>
</div>

    </div>
    <div class="node__content">
    <div class="pdetails__content">
      
      
      <div class="field field--name-field-body-paras field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">




  <div class="wysiwyg paragraph">

    
              <div class="wysiwyg__body">
          <h2>Why Choose This Program</h2>

<p>Students in our program get a well-rounded, basic construction background, along with computer-aided drafting (CAD) skills that will prepare them for success in the business world.</p>

<p>Students in our program can expect to study construction technology, materials, design, blueprint reading, and architectural, structural, and civil drafting techniques. These areas of study ensure our students have the tools they need to excel.</p>

<p>Graduates are prepared for careers in residential and light commercial construction industries. With this degree, you can put your skills to work with a variety of companies. Our students have worked with construction companies, architectural or engineering firms, and even building material suppliers or manufacturers.</p>

        </div>
      
    
  </div>

</div>
              <div class="field__item">



  <div class="stats3col paragraph">
                  <h2 class="stats3col__header">
          
        </h2>
      
              <div class="stats3col__intro paragraph__intro">
          
        </div>
      
              <div class="stats3col__items">
          

      <div class="field field--name-field-stat3up-items field--type-entity-reference-revisions field--label-hidden column3col field__items">
              <div class="field__item column3col__col" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">  <div class="paragraph paragraph--type--stat-item paragraph--view-mode--default">
          
            <div class="field field--name-field-stat-item-stat field--type-entity-reference field--label-hidden field__item">



<article data-history-node-id="458" about="/node/458" class="statistic node node--type-stat node--view-mode-default">

  <div class="statistic__content">
          <div class="statistic__number">
        100%
      </div>
              <div class="statistic__caption">
        2024 Program Placement Rate
      </div>
      </div>

</article>
</div>
      
      </div>
</div>
              <div class="field__item column3col__col" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">  <div class="paragraph paragraph--type--stat-item paragraph--view-mode--default">
          
            <div class="field field--name-field-stat-item-stat field--type-entity-reference field--label-hidden field__item">



<article data-history-node-id="4715" about="/node/4715" class="statistic node node--type-stat node--view-mode-default">

  <div class="statistic__content">
          <div class="statistic__number">
        $46
      </div>
              <div class="statistic__caption">
        Minnesota Median Wage
      </div>
      </div>

</article>
</div>
      
            <div class="field field--name-field-stat-item-link field--type-link field--label-hidden field__item"><a href="https://apps.deed.state.mn.us/lmi/oes/">Minnesota DEED</a></div>
      
      </div>
</div>
          </div>
  
        </div>
      
              <div class="stats3col__cta">
          
        </div>
            </div>
</div>
              <div class="field__item">




  <div class="wysiwyg paragraph">

    
              <div class="wysiwyg__body">
          <p><i><i>Placement rate is self-reported data of graduates available for work in field of study up to one year post graduation</i><em>. Wage data is from Minnesota Dept. of Employment and Economic Development (DEED)</em></i><em>. <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="d6663931-fa11-4e33-aa78-917fbf45ca7b" href="https://sctcc.edu/consumer-info">SCTCC Consumer Information.</a></em></p>

        </div>
      
    
  </div>

</div>
              <div class="field__item">




  <div class="accordion content-narrow paragraph">

    
              <h2 class="paragraph__header">
          From Degree to Career
        </h2>
      
              <div class="paragraph__intro">
          <p>When you choose the Architectural Construction Technology program at SCTCC, you’ll gain skills that will directly transfer to the workplace. There are several employers that are ready to hire.</p>

        </div>
      
      <div class="accordion__all">
        <button class="accordion__expand-all">Expand all</button>
        <button class="accordion__collapse-all js-disabled" aria-expanded="false"
                disabled>Collapse all</button>
      </div>

              <div class="accordion__items">
          
      <div class="field field--name-field-accordion-items field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        What You&#039;ll Learn
      </button>

      <div class="accordion__content">
        <p>At SCTCC we teach our students in the Architectural Construction Technology program the skills they need to succeed in their careers. Our students understand how to read and interpret schematics, manuals, and blueprints and can develop and draw, using conventional drafting techniques, to create preliminary plans and working drawings.</p>

<p>With a degree from our program, students can expect to create conceptual and working drawings on a computer using AutoCad and Revit software, identify the structural and architectural elements that apply to the construction of light commercial buildings, and demonstrate an understanding of the thermal-dynamics of building envelopes.</p>

<p>We even equip students with the ability to demonstrate skills to use systematic procedures for takeoff, listing, and pricing of materials for residential and commercial construction and utilize an understanding of the principles of residential floor plan and exterior design. When graduating from SCTCC, you will have the ability to read and interpret residential and commercial building plans, including Civil, Architectural, Structural and Mechanical-Electrical selections.</p>

<p>To ensure our graduates are prepared for the workforce, we also teach them how to interpret various bidding procedures, finds, and disseminate information from commercial project manuals. Students will show skills of using principles of design that apply to multi-family and light commercial construction and identifying basic requirements of the IRC, Minnesota Building Code, and ADA Codes.</p>

<h5>Quick Glance</h5>

<ul>
	<li>Read and interpret schematics, manuals, and blueprints&nbsp;</li>
	<li>Develop and draw (using conventional drafting techniques) preliminary plans and working drawings&nbsp;</li>
	<li>Create conceptual and working drawings on a computer using AutoCad and Revit software&nbsp;</li>
	<li>Identify the structural and architectural elements that apply to the construction of light commercial buildings&nbsp;</li>
	<li>Demonstrate an understanding of the thermal-dynamics of building envelopes&nbsp;</li>
	<li>Demonstrate skills in using a systematic procedure for takeoff, listing and pricing of materials for residential and commercial construction&nbsp;</li>
	<li>Read and interpret residential and commercial building plans, including Civil, Architectural, Structural and Mechanical-Electrical selections&nbsp;</li>
	<li>Interpret various bidding procedures and finds and disseminates information from commercial project manuals&nbsp;</li>
	<li>Demonstrates an understanding of the principles of residential floor plan and exterior design&nbsp;</li>
	<li>Uses principles of design that apply to multi-family and light commercial construction&nbsp;</li>
	<li>Identifies basic requirements of the IRC, Minnesota Building Code, and ADA Codes</li>
</ul>

<p><br />
<a class="cta--link" href="https://webapps.sctcc.edu/plo/plo.php?id=ACT" rel="noopener" target="_blank">View all program learner outcomes</a></p>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        Career Choices
      </button>

      <div class="accordion__content">
        <p>There are many career paths for SCTCC graduates with a degree in Architectural Construction Technology. Our students can work for general contractors, material suppliers, as drafters, or estimators. SCTCC graduates have even found opportunities in architectural and engineering firms, building material centers, and building material manufacturers.</p>

<p>With so many versatile skills that are highly adaptable in the workforce, our students have found jobs with a variety of companies. Students have worked at construction companies, architectural firms, engineering firms, building material suppliers and manufacturers, and some can even work for themselves.</p>

<p>A day in the life of an SCTCC graduate often consists of working as a drafter for an architectural firm while using their skills in using AutoCad and Revit software and utilizing knowledge of floor plans.</p>

<h5>Quick Glance</h5>

<p><strong>Types of Careers</strong></p>

<ul>
	<li>General contractors&nbsp;</li>
	<li>Architectural and engineering firms&nbsp;</li>
	<li>Material suppliers&nbsp;</li>
	<li>Building material manufacturers&nbsp;</li>
	<li>Drafters&nbsp;</li>
	<li>Estimators&nbsp;</li>
</ul>

<p><strong>Potential Employers</strong></p>

<ul>
	<li>Construction Companies&nbsp;</li>
	<li>Architectural Firms&nbsp;</li>
	<li>Engineering Firms&nbsp;</li>
	<li>Building Material Suppliers&nbsp;</li>
	<li>Building Material Manufacturers&nbsp;</li>
	<li>Self Employed</li>
</ul>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        Where Grads Work
      </button>

      <div class="accordion__content">
        <p>Our graduates from SCTCC have worked with several successful companies that are leading in Architectural Construction Technology.</p>

<p>We ensure our students have the skills they need to work wherever their path takes them. Whether they want to work with Coldspring, Distinctive Drafting and Design, or Werschay Homes, it is possible. Our graduates have worked with all of those companies and even more.</p>

<h5>Quick Glance</h5>

<ul>
	<li>Carpentry Contractors Co.</li>
	<li>Coldspring</li>
	<li>Distinctive Drafting and Design</li>
	<li>Littfin Truss</li>
	<li>Rice Companies</li>
	<li>Simonson Lumber</li>
	<li>The Design Team</li>
</ul>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        Transfer Options
      </button>

      <div class="accordion__content">
        <p>Whether you want to enter the workforce or continue your education, SCTCC is prepared to help you reach your goals. Our general education courses can transfer and are part of the Minnesota Transfer Curriculum (MnTC).</p>

<p><strong><a href="https://www.mnstate.edu/academics/majors/construction-management/" target="_blank">Minnesota State University - Moorhead B.S. Construction Management</a></strong></p>

<p>The B.S. Degree in Construction Management from Minnesota State -Moorhead provides a unique blend of construction knowledge and business know-how.</p>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
          </div>
  
        </div>
      
    
  </div>

</div>
              <div class="field__item">




  <div class="carousel-img paragraph">

    
      
      
              <div class="carousel-img__items">
          
      <div class="field field--name-field-carousel-img-slides field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">


  <div class="carousel-img_ clearfix paragraph">

    
              <div class="carousel-img__img">
          <div class="media media--type-image media--view-mode-carousel-image-feature">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-21.jpg?h=4e7446d3&amp;itok=tMa9LUKN 1x" media="(min-width: 1025px)" type="image/jpeg" width="1100" height="620"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_md/public/uploads/img/2023-04/ArchitecturalConstruction_2022-21.jpg?h=4e7446d3&amp;itok=L6RqJJnT 1x" media="(min-width: 700px)" type="image/jpeg" width="953" height="537"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_sm/public/uploads/img/2023-04/ArchitecturalConstruction_2022-21.jpg?h=4e7446d3&amp;itok=qBSrmdFh 1x" type="image/jpeg" width="659" height="371"/>
                  <img loading="eager" width="1100" height="620" src="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-21.jpg?h=4e7446d3&amp;itok=tMa9LUKN" alt="Architectural Design student with instructor" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

        </div>
      
      
    
  </div>

</div>
              <div class="field__item">


  <div class="carousel-img_ clearfix paragraph">

    
              <div class="carousel-img__img">
          <div class="media media--type-image media--view-mode-carousel-image-feature">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-13.jpg?h=4fc21ad4&amp;itok=F7ua5XJ6 1x" media="(min-width: 1025px)" type="image/jpeg" width="1100" height="620"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_md/public/uploads/img/2023-04/ArchitecturalConstruction_2022-13.jpg?h=4fc21ad4&amp;itok=zBoJFxoK 1x" media="(min-width: 700px)" type="image/jpeg" width="953" height="537"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_sm/public/uploads/img/2023-04/ArchitecturalConstruction_2022-13.jpg?h=4fc21ad4&amp;itok=mGq0wyZj 1x" type="image/jpeg" width="659" height="371"/>
                  <img loading="eager" width="1100" height="620" src="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-13.jpg?h=4fc21ad4&amp;itok=F7ua5XJ6" alt="Architectural Design student" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

        </div>
      
      
    
  </div>

</div>
              <div class="field__item">


  <div class="carousel-img_ clearfix paragraph">

    
              <div class="carousel-img__img">
          <div class="media media--type-image media--view-mode-carousel-image-feature">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-33.jpg?h=9dc8b1c4&amp;itok=QciLWOwU 1x" media="(min-width: 1025px)" type="image/jpeg" width="1100" height="620"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_md/public/uploads/img/2023-04/ArchitecturalConstruction_2022-33.jpg?h=9dc8b1c4&amp;itok=CxjGZba3 1x" media="(min-width: 700px)" type="image/jpeg" width="953" height="537"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_sm/public/uploads/img/2023-04/ArchitecturalConstruction_2022-33.jpg?h=9dc8b1c4&amp;itok=0d-SuLec 1x" type="image/jpeg" width="659" height="371"/>
                  <img loading="eager" width="1100" height="620" src="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-33.jpg?h=9dc8b1c4&amp;itok=QciLWOwU" alt="Architectural Design student" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

        </div>
      
      
    
  </div>

</div>
              <div class="field__item">


  <div class="carousel-img_ clearfix paragraph">

    
              <div class="carousel-img__img">
          <div class="media media--type-image media--view-mode-carousel-image-feature">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-10.jpg?h=72b1e43d&amp;itok=hERitQT0 1x" media="(min-width: 1025px)" type="image/jpeg" width="1100" height="620"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_md/public/uploads/img/2023-04/ArchitecturalConstruction_2022-10.jpg?h=72b1e43d&amp;itok=cKFIgpjx 1x" media="(min-width: 700px)" type="image/jpeg" width="953" height="537"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_sm/public/uploads/img/2023-04/ArchitecturalConstruction_2022-10.jpg?h=72b1e43d&amp;itok=LQtQq9bt 1x" type="image/jpeg" width="659" height="371"/>
                  <img loading="eager" width="1100" height="620" src="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-10.jpg?h=72b1e43d&amp;itok=hERitQT0" alt="Architectural Design classroom" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

        </div>
      
      
    
  </div>

</div>
              <div class="field__item">


  <div class="carousel-img_ clearfix paragraph">

    
              <div class="carousel-img__img">
          <div class="media media--type-image media--view-mode-carousel-image-feature">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-18.jpg?h=8f2a6ce1&amp;itok=gXGzMTts 1x" media="(min-width: 1025px)" type="image/jpeg" width="1100" height="620"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_md/public/uploads/img/2023-04/ArchitecturalConstruction_2022-18.jpg?h=8f2a6ce1&amp;itok=4ZYHZfz_ 1x" media="(min-width: 700px)" type="image/jpeg" width="953" height="537"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/carousel_image_feature_sm/public/uploads/img/2023-04/ArchitecturalConstruction_2022-18.jpg?h=8f2a6ce1&amp;itok=JWevSHCV 1x" type="image/jpeg" width="659" height="371"/>
                  <img loading="eager" width="1100" height="620" src="https://sctcc.edu/sites/default/files/styles/carousel_image_feature/public/uploads/img/2023-04/ArchitecturalConstruction_2022-18.jpg?h=8f2a6ce1&amp;itok=gXGzMTts" alt="Architectural Design students" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

        </div>
      
      
    
  </div>

</div>
          </div>
  
          <div class="carousel-img__pager"></div>
        </div>
      
    
  </div>

</div>
              <div class="field__item">




  <div class="gen2col paragraph">

    
              <h2 class="gen2col__header paragraph__header">
          Ready to Take the Next Step?
        </h2>
      
              <div class="gen2col__intro paragraph__intro default-anchor">
          <p>Are you ready to learn more about the Architectural Construction program and being a student at SCTCC?</p>
        </div>
      
              <div class="gen2col__items" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">
          
      <div class="field field--name-field-columns-2col-content field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">	
	




	<div class="gen2col__item clearfix paragraph column-with-img column-with-link">

					<div class="column__outer">
									<div class="column__img-wrapper">
						<div class="paragraph__img">
							<div class="media media--type-image media--view-mode-columns-content-block">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/columns_content_block/public/uploads/img/2023-04/MKAD_2022-15.jpg?h=4067b8c7&amp;itok=-VTlcTn4" width="1050" height="824" alt="Marketing design student at laptop with notes" typeof="foaf:Image" class="image-style-columns-content-block" />


</div>
          </div>

  </div>

						</div>
					</div>
								<div class="column__content-wrapper">
					<div class="column__title-outer">
						<div class="column__title-wrapper">
															<h3 class="paragraph__title">
																			<a href="https://sctcc.edu/form/request-for-information">
											Request Information
										</a>
																	</h3>
							
													</div>
					</div>
											<div class="column__body paragraph__body">
							<p>Fill out this form to receive useful information that's specific to your program.</p>

						</div>
									</div>
			</div>

							<div class="paragraph__link"></div>
			
		
	</div>

</div>
              <div class="field__item">	
	




	<div class="gen2col__item clearfix paragraph column-with-img column-with-link">

					<div class="column__outer">
									<div class="column__img-wrapper">
						<div class="paragraph__img">
							<div class="media media--type-image media--view-mode-columns-content-block">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/columns_content_block/public/uploads/img/2023-02/hero%20-%20Northway%20Donut.jpg?h=ed8e1385&amp;itok=f1gQKGae" width="1050" height="824" alt="Front of SCTCC" typeof="foaf:Image" class="image-style-columns-content-block" />


</div>
          </div>

  </div>

						</div>
					</div>
								<div class="column__content-wrapper">
					<div class="column__title-outer">
						<div class="column__title-wrapper">
															<h3 class="paragraph__title">
																			<a href="https://sctcc.edu/meet-admissions-and-recruitment-staff">
											Connect with the Admissions team
										</a>
																	</h3>
							
													</div>
					</div>
											<div class="column__body paragraph__body">
							<ul>
	<li>Call us at<strong> <a href="tel:320-308-5089">320-308-5089</a></strong></li>
	<li>
	<p>Email us at&nbsp;<strong><a href="mailto:recruitment@sctcc.edu">recruitment@sctcc.edu</a></strong></p>
	</li>
	<li>On campus Monday-Friday, 8 a.m.-4:30 p.m.</li>
</ul>

						</div>
									</div>
			</div>

							<div class="paragraph__link"></div>
			
		
	</div>

</div>
          </div>
  
        </div>
      
    
  </div>

</div>
              <div class="field__item">



  <div class="event3col paragraph">

    
      
              <div class="event3col__intro paragraph__intro">
          <p>Visiting campus is an excellent opportunity to learn about SCTCC programs, the application process, and tour the state-of-the-art-labs and classrooms.</p>
        </div>
      
                                                                  <div class="event3col__items--by-tag">
          <div class="views-element-container"><div class="view view-events view-id-events view-display-id-events3col js-view-dom-id-9c60ad21518ea224552ad1aa3c4d1aac33b20e7ba06cb4e7f8a1b64d4dccd93f">
  
    
      
      <div class="view-content">
          <div class="views-row">
  


<article data-history-node-id="9138" about="https://sctcc.edu/about-us/news-events/events/cyclone-tour-192" class="node cards events__card node--type-event node--view-mode-card" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">

  
  <div class="events__card-content cards__content">
    <div class="without-link node__content events__card-header cards__header">
                    <div class="events__card-date cards__date">8.28.26 09:00am</div>
                    <div class="events__card-time-location cards__location-time">
                                <div class="events__card-location cards__location"> Main entrance: 1540 Northway Drive, St. Cloud, MN </div>
                  </div>
                  
    </div>
    <div class="events__card-text cards__text">
      
              <h3 class="events__card-title cards__title">
          <a href="https://sctcc.edu/about-us/news-events/events/cyclone-tour-192" rel="bookmark"><span class="field field--name-title field--type-string field--label-hidden">Cyclone Tour</span>
</a>
        </h3>
            
    </div>
  </div>

</article>
</div>
    <div class="views-row">
  


<article data-history-node-id="9139" about="https://sctcc.edu/about-us/news-events/events/cyclone-tour-193" class="node cards events__card node--type-event node--view-mode-card" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">

  
  <div class="events__card-content cards__content">
    <div class="without-link node__content events__card-header cards__header">
                    <div class="events__card-date cards__date">9.1.26 01:00pm</div>
                    <div class="events__card-time-location cards__location-time">
                                <div class="events__card-location cards__location"> Main entrance: 1540 Northway Drive, St. Cloud, MN </div>
                  </div>
                  
    </div>
    <div class="events__card-text cards__text">
      
              <h3 class="events__card-title cards__title">
          <a href="https://sctcc.edu/about-us/news-events/events/cyclone-tour-193" rel="bookmark"><span class="field field--name-title field--type-string field--label-hidden">Cyclone Tour</span>
</a>
        </h3>
            
    </div>
  </div>

</article>
</div>
    <div class="views-row">
  


<article data-history-node-id="9140" about="https://sctcc.edu/about-us/news-events/events/cyclone-tour-204" class="node cards events__card node--type-event node--view-mode-card" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">

  
  <div class="events__card-content cards__content">
    <div class="without-link node__content events__card-header cards__header">
                    <div class="events__card-date cards__date">9.3.26 09:00am</div>
                    <div class="events__card-time-location cards__location-time">
                                <div class="events__card-location cards__location"> Main entrance: 1540 Northway Drive, St. Cloud, MN </div>
                  </div>
                  
    </div>
    <div class="events__card-text cards__text">
      
              <h3 class="events__card-title cards__title">
          <a href="https://sctcc.edu/about-us/news-events/events/cyclone-tour-204" rel="bookmark"><span class="field field--name-title field--type-string field--label-hidden">Cyclone Tour</span>
</a>
        </h3>
            
    </div>
  </div>

</article>
</div>

    </div>
  
          </div>
</div>

        </div>
        <div class="event3col__more">
          <a href="https://sctcc.edu/about-us/news-events/events?field_event_tags_target_id%5B31%5D=31" title="More Events" class="cta cta--button">More Events</a>
        </div>
      
    
  </div>

</div>
              <div class="field__item">




  <div class="wysiwyg paragraph">

    
              <div class="wysiwyg__body">
          <h2>Paying for College</h2>

<p>Students choose SCTCC for a lot of reasons, but saving money is one reason we hear from almost every student at SCTCC.&nbsp;We’ve got a breakdown of the costs for the program, along with information on financial aid and scholarships.</p>

<p>This program requires laptops. Find <a href="https://sctcc.edu/technology-services#laptop">information on required specifications</a></p>

<p>Apply just once and you are considered for all eligible SCTCC scholarships! There are scholarships available specifically for students in the Architectural Construction program.</p>

<center><a class="cta--button" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="9679f234-697e-4ccd-aa72-e81974942450" href="https://sctcc.edu/program-costs">Program Costs</a>&nbsp; &nbsp;<a class="cta--button" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="68c45a9e-c796-4e42-97d9-c1b1c6afdfc5" href="https://sctcc.edu/applying-financial-aid">Applying for Financial Aid</a>&nbsp; &nbsp;<a class="cta--button" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="cc429e50-6b30-4b49-b9e0-457bf1c18d40" href="https://sctcc.edu/scholarships">SCTCC Scholarships</a></center>

<div class="align-center media media--type-image media--view-mode-default">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/uploads/img/2023-07/best-value-2023.png" width="2000" height="622" alt="SCTCC is the best value with tuition at $6740. MinnState university is $11479. UofM is $16308. MN private university is $53497. *Based on average 2026-27 tuition &amp; fees for 15 credits or full-time for an academic year. Some institutions charge additional fees. Fees vary by program. For exact costs, contact the institution that interests you. Average costs do not include room &amp; board." typeof="foaf:Image">

</div>
          </div>

  </div>


        </div>
      
    
  </div>

</div>
              <div class="field__item">





  <div class="wysiwyg content-narrow paragraph">

    
              <div class="wysiwyg__body">
          

<figure role="group" class="caption caption-drupal-media align-center">

<div class="wysiwyg-remote-video video video--inline clearfix">
	<div class="video__wrapper">
					<div class="video__cover">
				
            <div class="field field--name-field-media-image field--type-image field--label-hidden field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/wysiwyg_full/public/uploads/vid/cover/2023-04/architecture-frame.jpg?h=b4a7ba09&amp;itok=IYfQ-2Li" width="800" height="451" alt="Architectural Lab Tour" typeof="foaf:Image" class="image-style-wysiwyg-full">


</div>
      
				<button class="video__play">
					Play Video<span class="video__play-accent"></span>
				</button>
			</div>
		
					<div class="video__embed">
				
            <div class="field field--name-field-media-oembed-video field--type-string field--label-hidden field__item"><iframe src="https://sctcc.edu/media/oembed?url=https%3A//player.vimeo.com/video/816298397%3Fh%3D5ceb0e71c1%26amp%3Bbadge%3D0%26amp%3Bautopause%3D0%26amp%3Bplayer_id%3D0%26amp%3Bapp_id%3D58479&amp;max_width=0&amp;max_height=0&amp;hash=3Wn2SCFGzphLngpV6KU2XOzPYtaCz1N4BVdDHtWP6NI" width="426" height="240" class="media-oembed-content" loading="eager" title="SCTCC Architecture Virtual Tour"></iframe>
</div>
      
			</div>
			</div>
</div>

<figcaption>Virtual Lab Tour</figcaption>
</figure>


        </div>
      
    
  </div>

</div>
              <div class="field__item">




  <div class="accordion content-narrow paragraph">

    
              <h2 class="paragraph__header">
          Program Info for Current Students
        </h2>
      
      
      <div class="accordion__all">
        <button class="accordion__expand-all">Expand all</button>
        <button class="accordion__collapse-all js-disabled" aria-expanded="false"
                disabled>Collapse all</button>
      </div>

              <div class="accordion__items">
          
      <div class="field field--name-field-accordion-items field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        Laptop Computer Requirements
      </button>

      <div class="accordion__content">
        <p>Architectural Construction program has a laptop requirement.</p>

<h5><a href="https://sctcc.edu/technology-services#laptop">Find information on required laptop specifications for the program.</a></h5>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        Related Links
      </button>

      <div class="accordion__content">
        <p><a class="cta--link" href="https://www.cmbaonline.org/" rel="noopener" target="_blank">Central MN Builder's Association</a></p>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
              <div class="field__item">


  <div class="accordion__item clearfix paragraph">

    
      <button class="accordion__toggle" aria-expanded="false">
        Clubs &amp; Organizations
      </button>

      <div class="accordion__content">
        <p>Central Minnesota Builders Association Student Chapter</p>

<p><a class="cta--link" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="110dbc13-17ed-485b-bf54-cd7e4a849ac7" href="https://sctcc.edu/clubs">SCTCC Student Clubs</a></p>

        <div class="accordion__top-wrapper">
          <button class="accordion__top">Back to top</button>
        </div>
      </div>

    
  </div>

</div>
          </div>
  
        </div>
      
    
  </div>

</div>
              <div class="field__item">


  <div class="contact-listing paragraph">
          <div class="contact-listing__container">
        <div class="contact-listing__top">
                      <h2 class="contact-listing__heading paragraph__header">
              Architectural Construction Instructor
            </h2>
                            </div>
        <div class="contact-listing__contact">
                      
      <div class="field field--name-field-r-selected-contact field--type-entity-reference field--label-hidden field__items">
              <div class="field__item">

<article data-history-node-id="4652" about="https://sctcc.edu/about-us/faculty-staff-directory/roy-kollar" class="node node--type-directory node--view-mode-contact-listing-w-image" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">
  <div class="node__content">
    <div class="node__content directory__contact-listing directory__contact-listing-w-image faculty-card">
      <div class="faculty-card__heading"></div>
      <div class="faculty-card__body">

                  <div class="faculty-card__image">
            
            <div class="field field--name-field-directory-image field--type-entity-reference field--label-hidden field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/directory_small/public/uploads/img/2025-05/Roy%20Kollar%201.jpg?h=7ba0ebd9&amp;itok=j9y6qTNc" width="200" height="250" alt="Roy Kollar" typeof="foaf:Image" class="image-style-directory-small" />


</div>
      
          </div>
        
        <div class="directory-list-w-img__content">
          <div class="contact-listing__display--name faculty-card__cta--link">
            <a href="https://sctcc.edu/about-us/faculty-staff-directory/roy-kollar">
              
            <div class="field field--name-field-directory-display-name field--type-string field--label-hidden field__item">  <p>Roy Kollar</p>


</div>
      
            </a>
          </div>

                      <div class="contact-listing__subtitle faculty-card__subtitle">
              
            <div class="field field--name-field-directory-job-title field--type-string field--label-hidden field__item">  <p>Architectural Drafting Technology Instructor</p>


</div>
      
            </div>
                                <div class="contact-listing__link faculty-card__link">
              
            <div class="field field--name-field-directory-email field--type-email field--label-hidden field__item"><a href="mailto:roy.kollar@sctcc.edu">roy.kollar@sctcc.edu</a></div>
      
            </div>
                                      </div>
      </div>
    </div>
  </div>
</article>
</div>
          </div>
  
                  </div>
      </div>
      </div>
</div>
              <div class="field__item">



  <div class="news3up paragraph">

    
              <h2 class="news3up__header">
          Good Stuff
        </h2>
      
      
                                                                  <div class="news3up__items--by-tag">
          <div class="views-element-container"><div class="view news__listing view-news-list view-id-news_list view-display-id-news3up js-view-dom-id-4ad01e9941e1100cec1b576549331cfae6be84f1d206597b084f057344862647">
  
    
  
  
      <div class="view-content">
          <div class="views-row">


<article data-history-node-id="3032" about="https://sctcc.edu/about-us/news-events/news/local-builderdevelopers-spirit-lives-through-scholarship" class="node cards content-narrow news__card node--type-news node--view-mode-card-small-image">

    
  <div class="news__card-content cards__content">
    <div class="node__content news__card-header cards__header">
              <div class="news__card-date cards__date">10.04.21</div>
                    <div class="news__card-author cards__author"> Kate Wallace </div>
          </div>

          <div class="news__card-image cards__image">
        <div class="media media--type-image media--view-mode-news-listing-card">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/news_listing_card/public/uploads/img/2023-05/reker-webhead.jpg?itok=oTCioWNP" width="699" height="259" alt="Karen Reker and Martina Saarela" typeof="foaf:Image" class="image-style-news-listing-card" />


</div>
          </div>

  </div>

      </div>
        <div class="news__card-text cards__text">
          <h3 class="news__card-title cards__title">
        <a href="https://sctcc.edu/about-us/news-events/news/local-builderdevelopers-spirit-lives-through-scholarship" rel="bookmark"><span class="field field--name-title field--type-string field--label-hidden">Local Builder/Developer&#039;s Spirit Lives On Through Scholarship</span>
</a>
      </h3>
        
          <div class="news__card-summary cards__summary"> 
                
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">  When Karen Reker set up a scholarship in her late husband’s name, she didn’t know that the first recipient of the scholarship would share several commonalities with him, even right down to names. This...

</div>
      
      </div>
      </div>
</article>
</div>
    <div class="views-row">


<article data-history-node-id="642" about="https://sctcc.edu/news/04-22-2019/first-year-architectural-student-designs-house-habitat-humanity-build" class="node cards content-narrow news__card node--type-news node--view-mode-card-small-image">

    
  <div class="news__card-content cards__content">
    <div class="node__content news__card-header cards__header">
              <div class="news__card-date cards__date">04.22.19</div>
                    <div class="news__card-author cards__author"> Matt Klinkhammer </div>
          </div>

          <div class="news__card-image cards__image">
        <div class="media media--type-image media--view-mode-news-listing-card">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/news_listing_card/public/uploads/img/2023-04/Habitat.jpg?itok=ORhCq9xD" width="699" height="259" alt="Architectural Construction Class" typeof="foaf:Image" class="image-style-news-listing-card" />


</div>
          </div>

  </div>

      </div>
        <div class="news__card-text cards__text">
          <h3 class="news__card-title cards__title">
        <a href="https://sctcc.edu/news/04-22-2019/first-year-architectural-student-designs-house-habitat-humanity-build" rel="bookmark"><span class="field field--name-title field--type-string field--label-hidden">First-Year Architectural Student Designs House for Habitat for Humanity Build</span>
</a>
      </h3>
        
          <div class="news__card-summary cards__summary"> 
                
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">  First-year Architectural Construction Technology student, Brianna Scherbing, was surprised to learn that a house she designed will be built by Central Minnesota Habitat for Humanity. Scherbing’s...

</div>
      
      </div>
      </div>
</article>
</div>
    <div class="views-row">


<article data-history-node-id="660" about="https://sctcc.edu/news/11-20-2018/experience-not-required-architecture-program" class="node cards content-narrow news__card node--type-news node--view-mode-card-small-image">

    
  <div class="news__card-content cards__content">
    <div class="node__content news__card-header cards__header">
              <div class="news__card-date cards__date">11.20.18</div>
                    <div class="news__card-author cards__author"> Kate Wallace </div>
          </div>

          <div class="news__card-image cards__image">
        <div class="media media--type-image media--view-mode-news-listing-card">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">  <img loading="lazy" src="https://sctcc.edu/sites/default/files/styles/news_listing_card/public/uploads/img/2023-04/ArchitecturalConstruction_October2016_008.jpeg?itok=hYbXXY2E" width="699" height="259" alt="student drafting architectural plans" typeof="foaf:Image" class="image-style-news-listing-card" />


</div>
          </div>

  </div>

      </div>
        <div class="news__card-text cards__text">
          <h3 class="news__card-title cards__title">
        <a href="https://sctcc.edu/news/11-20-2018/experience-not-required-architecture-program" rel="bookmark"><span class="field field--name-title field--type-string field--label-hidden">Experience not required for Architecture program</span>
</a>
      </h3>
        
          <div class="news__card-summary cards__summary"> 
                
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">  When you’re ready to take the next step and start applying to a program at SCTCC, experience in the field isn’t necessary. Jed Johnson, SCTCC Architectural Construction Technology instructor, says...

</div>
      
      </div>
      </div>
</article>
</div>

    </div>
  
        </div>
</div>

        </div>
                  <div class="news3up__more">
            <a href="https://sctcc.edu/about-us/news-events/news?tags=50" title="More News" class="cta cta--button">More News</a>
          </div>
              
    
  </div>

</div>
          </div>
  
      <div class="program__more-programs paragraph">
        <h2 class="program__more-heading paragraph__header">More Like Architectural Construction Technology</h2>
        <div class="program__more-content">
          <div class="program__more-programs-wrapper">
            
      <div class="field field--name-field-similar-progs field--type-entity-reference field--label-hidden field__items">
              <div class="field__item">



<article data-history-node-id="471" about="https://sctcc.edu/degrees-programs/carpentry" class="program card node node--type-program node--view-mode-card-w-image" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">
  <div class="program__card">
    <div class="program__image">
      <div class="media media--type-image media--view-mode-program-filter-cards">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/program_filter_cards/public/uploads/img/2023-04/Carpentry10-22_046.jpg?h=38822719&amp;itok=XlEuFrAM 1x" media="(min-width: 1025px)" type="image/jpeg" width="400" height="400"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/program_filter_cards_md/public/uploads/img/2023-04/Carpentry10-22_046.jpg?h=38822719&amp;itok=qI7F1rBV 1x" media="(min-width: 700px)" type="image/jpeg" width="305" height="264"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/program_filter_cards_sm/public/uploads/img/2023-04/Carpentry10-22_046.jpg?h=38822719&amp;itok=QfKOtsiM 1x" type="image/jpeg" width="659" height="530"/>
                  <img loading="eager" width="400" height="400" src="https://sctcc.edu/sites/default/files/styles/program_filter_cards/public/uploads/img/2023-04/Carpentry10-22_046.jpg?h=38822719&amp;itok=XlEuFrAM" alt="Carpentry students working on roof" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

    </div>
    <div class="program__content">
      <div class="program__content-inner">
                  <h3 class="program__title">
            <a href="https://sctcc.edu/degrees-programs/carpentry" >
              <span class="field field--name-title field--type-string field--label-hidden">Carpentry</span>

            </a>
          </h3>
                <div class="program__types">
                      <span>Diploma</span>
                  </div>
      </div>
    </div>
  </div>
  <div class="program__link">
  </div>
</article>
</div>
              <div class="field__item">



<article data-history-node-id="489" about="https://sctcc.edu/degrees-programs/computer-aided-mechanical-design" class="program card node node--type-program node--view-mode-card-w-image" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-bottom">
  <div class="program__card">
    <div class="program__image">
      <div class="media media--type-image media--view-mode-program-filter-cards">
        
  <div class="field field--name-field-media-image field--type-image field--label-visually_hidden">
              <div class="field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/program_filter_cards/public/uploads/img/2023-05/1%20crop%20Mechanical_design_2022-14.jpg?h=9aff6af0&amp;itok=XQAILQS_ 1x" media="(min-width: 1025px)" type="image/jpeg" width="400" height="400"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/program_filter_cards_md/public/uploads/img/2023-05/1%20crop%20Mechanical_design_2022-14.jpg?h=9aff6af0&amp;itok=Bvr2W5z7 1x" media="(min-width: 700px)" type="image/jpeg" width="305" height="264"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/program_filter_cards_sm/public/uploads/img/2023-05/1%20crop%20Mechanical_design_2022-14.jpg?h=9aff6af0&amp;itok=pSl2eiRF 1x" type="image/jpeg" width="659" height="530"/>
                  <img loading="eager" width="400" height="400" src="https://sctcc.edu/sites/default/files/styles/program_filter_cards/public/uploads/img/2023-05/1%20crop%20Mechanical_design_2022-14.jpg?h=9aff6af0&amp;itok=XQAILQS_" alt="Mechanical Design student" typeof="foaf:Image" />

  </picture>

</div>
          </div>

  </div>

    </div>
    <div class="program__content">
      <div class="program__content-inner">
                  <h3 class="program__title">
            <a href="https://sctcc.edu/degrees-programs/computer-aided-mechanical-design" >
              <span class="field field--name-title field--type-string field--label-hidden">Mechanical Design Engineering Technology</span>

            </a>
          </h3>
                <div class="program__types">
                      <span>AAS</span>
                      <span>Diploma</span>
                  </div>
      </div>
    </div>
  </div>
  <div class="program__link">
  </div>
</article>
</div>
          </div>
  
          </div>
          <div class="program__more-pathway-links">
                          <div class="program__more-pathway">
                <a href="https://sctcc.edu/construction" hreflang="en">Trades in Construction</a>
              </div>
                                  </div>
        </div>
      </div>
    </div>

  </div>
</article>

  </div>

  </div>

      </div>
    </div>
    </div>

    
  </main>

  <footer role="contentinfo">
                
          <div class="sock">
        <div class="sock__image">
          
            <div class="field field--name-field-sock-bkg-img field--type-image field--label-hidden field__item">    <picture>
                  <source srcset="https://sctcc.edu/sites/default/files/styles/footer_sock/public/wrapper/2025-10/FALL-2025_web_3.jpg?h=a01aad3d&amp;itok=4hzCNYij 1x" media="(min-width: 1025px)" type="image/jpeg" width="1600" height="709"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/footer_sock/public/wrapper/2025-10/FALL-2025_web_3.jpg?h=a01aad3d&amp;itok=4hzCNYij 1x" media="(min-width: 700px)" type="image/jpeg" width="1600" height="709"/>
              <source srcset="https://sctcc.edu/sites/default/files/styles/footer_sock_sm/public/wrapper/2025-10/FALL-2025_web_3.jpg?h=a01aad3d&amp;itok=KAKuUdW2 1x" type="image/jpeg" width="320" height="350"/>
                  <img loading="eager" width="1600" height="709" src="https://sctcc.edu/sites/default/files/styles/footer_sock/public/wrapper/2025-10/FALL-2025_web_3.jpg?h=a01aad3d&amp;itok=4hzCNYij" alt="students walking outside door one with fall colors visible" typeof="foaf:Image" />

  </picture>

</div>
      
        </div>
        <div class="sock__content">
          <h2 class="sock__title">
            Education
            <span class="sock__title--styled">
              That Matters
            </span>
          </h2>
          <div class="sock__cta">
            
  <div class="field__item">
    <a href="https://sctcc.edu/admissions">Apply for Free</a>
  </div>
  <div class="field__item">
    <a href="https://sctcc.edu/visit">Tour Campus</a>
  </div>
  <div class="field__item">
    <a href="https://sctcc.edu/form/request-for-information">Request Info</a>
  </div>

          </div>
        </div>
      </div>
                    <div class="footer-utility-links">
        <div class="footer-utility-inner">
          <button class="site-footer__button">Back to Top</button>
          
  
      
            <div class="field field--name-field-site-wrapper-utility-link field--type-link field--label-hidden field__item"><a href="https://sctcc.edu/accessibility-services">Any SCTCC student with a disability that impacts their education or ability to fully participate on campus is eligible to apply for Accessibility Services.</a></div>
      
  


        </div>
      </div>
    
    <div class="footer-main">
      <div class="footer-inner">
                <div class="footer-main__column footer-main__column--first">
          <div class="footer-main__logo">
            <div class="footer-main__img">
              <a href="/" rel="home">
                <img src="https://sctcc.edu/sites/default/files/wrapper/2023-04/sctcc-footer-logo.svg"
                    alt="SCTCC logo"
                    width="145"
                />
              </a>
            </div>

                          <div class="footer-main__social-media">
                
  
                <a class="main--footer_first-column_social-profiles_item social-icons social-icons-Instagram"
         href="https://www.instagram.com/sctcc"
         target="_blank"
      >
        <span class="visually-hidden">Instagram</span>
      </a>
    
  
                <a class="main--footer_first-column_social-profiles_item social-icons social-icons-Facebook"
         href="https://www.facebook.com/sctcc"
         target="_blank"
      >
        <span class="visually-hidden">Facebook</span>
      </a>
    
  
                <a class="main--footer_first-column_social-profiles_item social-icons social-icons-LinkedIn"
         href="https://www.linkedin.com/school/sctcc"
         target="_blank"
      >
        <span class="visually-hidden">LinkedIn</span>
      </a>
    
  
                <a class="main--footer_first-column_social-profiles_item social-icons social-icons-YouTube"
         href="https://www.youtube.com/videosctcc"
         target="_blank"
      >
        <span class="visually-hidden">YouTube</span>
      </a>
    


              </div>
                      </div>

                                        
          <div class="footer-main__content-info">
            <address class="footer-address">
              <p>1540 Northway Drive<br />
St. Cloud, MN 56303</p>

            </address>
            <div class="footer-phone">
              <a href="tel:+1 (800) 222-1009">+1 (800) 222-1009</a>
            </div>
            <div class="footer-email">
              <a href="mailto:recruitment@sctcc.edu">recruitment@sctcc.edu</a>
            </div>
          </div>
        </div>
                
                  <div class="footer-main__column footer-main__column--last">
            
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/accessibility-statement">Accessibility Statement</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/employment-opportunities">Careers at SCTCC</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/campus-maps">Campus Hours, Directions &amp; Maps</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/contact-us">Contact Us</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://mnscu.sharepoint.com/sites/SCTCC">Intranet - Employee Portal</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/report-it">Just Report It</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/about-us/leadership/policies-and-procedures/s16-nondiscrimination-and-harassment-policy">Nondiscrimination Policy</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/online-privacy-statement">Online Privacy</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/request-proposal">Request for Proposal</a>
  </div>



  
  
      
  <div class="main--footer_third-column_link-item">
    <a href="https://sctcc.edu/safety">Safety &amp; Security</a>
  </div>



  


          </div>
              </div>
    </div>

                  <div class="footer-info">
        <div class="footer-info-inner">
          <div class="footer-info__copyright">
                          ©2022-25 - St. Cloud Technical &amp; Community College | Accredited by the Higher Learning Commission
                      </div>
                      <div class="footer-info__acc-logo">
              <img src="https://sctcc.edu/sites/default/files/wrapper/2022-11/iftest_minn-state_accredit.svg"
                  alt="St. Cloud Technical &amp; Community College, a member of Minnesota State"
                  width="373"
              />
            </div>
                  </div>
      </div>
      </footer>
</div>

  </div>


<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","pathPrefix":"","currentPath":"node\/470","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en","currentQuery":{"gad_campaignid":"20976812395","gad_source":"1","gbraid":"0AAAAADK2j41tEWPZFIDXeLqz8_9sYXRM7","gclid":"Cj0KCQjwnbrUBhDOARIsAKKhPpc4zjkkpaIrIlqnZeAWGZPJFdM6vrFofqQtrK9P5ykuOQrMk0bw9XEaAjauEALw_wcB"}},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"google_analytics":{"account":"G-0HYZZHM02D","trackOutbound":true,"trackMailto":true,"trackTel":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"sitewideAlert":{"refreshInterval":15000,"automaticRefresh":true},"ajaxTrustedUrl":{"\/search":true},"user":{"uid":0,"permissionsHash":"992960ff50ff5b86dfecc0682a370b303e0c3f17a89cb005996c4aed1feab3d5"}}</script>
<script src="https://sctcc.edu/core/assets/vendor/jquery/jquery.min.js?v=3.7.1"></script>
<script src="https://sctcc.edu/core/assets/vendor/once/once.min.js?v=1.0.1"></script>
<script src="https://sctcc.edu/core/misc/drupalSettingsLoader.js?v=10.6.14"></script>
<script src="https://sctcc.edu/core/misc/drupal.js?v=10.6.14"></script>
<script src="https://sctcc.edu/core/misc/drupal.init.js?v=10.6.14"></script>
<script src="https://sctcc.edu/modules/contrib/google_analytics/js/google_analytics.js?v=10.6.14"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/paragraphs/accordion.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/nodes/cards.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/paragraphs/image-carousel.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/paragraphs/column-card.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/vendor/scrollsync.js?tjz698"></script>
<script src="https://sctcc.edu/core/assets/vendor/loadjs/loadjs.min.js?v=4.3.0"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/interface/header.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/main.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/nodes/program.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/interface/section-nav.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/paragraphs/table.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/interface/wysiwyg-float-elem.js?tjz698"></script>
<script src="https://sctcc.edu/themes/sctcc/js/_compiled/interface/wysiwyg-remote-video.js?tjz698"></script>
<script src="https://sctcc.edu/modules/contrib/sitewide_alert/js/init.js?v=10.6.14"></script>

<script>
  const text = document.querySelector('.story__quote');
  // Remove preceding and following spaces from quote
  text.innerHTML=text.innerHTML.trim();
</script>
</body>
</html>

