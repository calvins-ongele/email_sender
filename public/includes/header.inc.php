<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<link rel="icon" type="image/*" href="/public/assets/uploads/<?php echo $this->_company['c_icon'] ?>" />
<style>
    *{  --primary: <?= $this->_company['c_primary_color'] ?>;  }
   

</style>
 
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<title><?php echo $this->title ?> | <?= $this->page_id=='home' ? $this->_company['c_short_desc'] : $this->_company['c_name'] ?></title>
   

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="/public/assets/uploads/<?= $this->_company['c_logo'] ?>"> 
     
    <meta name="description" content="Explore clinically-proven weight loss treatments including Mounjaro and Wegovy. Clinician-led service with discreet delivery.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.<?= $_SERVER['SERVER_NAME'] ?>/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $this->_company['c_name'] ?> | UK Trusted Online Pharmacy">
    <meta property="og:description" content="Explore clinically-proven weight loss treatments including Mounjaro and Wegovy. Clinician-led service with discreet delivery.">
    
    <meta property="og:url" content="https://www.<?= $_SERVER['SERVER_NAME'] ?>/">
    <meta property="og:site_name" content="<?= $this->_company['c_name'] ?>">
    <meta property="og:locale" content="en_GB">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@SimplePharmacyO">
    <meta name="twitter:title" content="<?= $this->_company['c_name'] ?> | UK Trusted Online Pharmacy">
    <meta name="twitter:description" content="Explore clinically-proven weight loss treatments including Mounjaro and Wegovy. Clinician-led service with discreet delivery.">
  
    <style>
        :root {
            color-scheme: light;
            --ink: #121417;
            --muted: #4a4f57;
            --surface: #f7f4ef;
            --surface-tint: #f7f2ee;
            --accent: #1A3D7A;
            --accent-strong: #1A3D7A;
            --accent-surface-start: rgb(240, 253, 250);
            --accent-surface-end: rgb(239, 246, 255);
            --accent-surface-blue-start: #eaf2ff;
            --accent-surface-blue-end: #d9e8ff;
            --hero-surface-gradient: linear-gradient(135deg, #D2E1F9 0%, #F2F6FD 40%, #FFFFFF 100%);
            --media-surface-gradient: #f7f2ee;
            --accent-shadow: rgba(15, 118, 110, .14);
            --accent-quiet: #a6d1c7;
            --accent-gradient: linear-gradient(135deg, #0a1f44, #1d5cff);
            --cta-primary: #1a3d7a;
            --card-border: 1px solid var(--edge);
            --cta-radius: 16px;
            --page-pad: min(8vw, 110px);
            --edge: #e1d8cc;
            --announcement-bg: #091E43;
            --announcement-text: #F3C3C6;
            --header-padding-y: 12px;
            --header-height: 61px;
            --hero-font: "Montserrat", "Avenir Next", "Avenir", "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
            --body-font: "Montserrat", "Avenir Next", "Avenir", "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif
        }

        * {
            box-sizing: border-box
        }

        html {
            font-family: var(--body-font);
            background: #fff;
            color: var(--ink);
            font-weight: 400;
            overflow-x: hidden;
            width: 100%;
            scroll-behavior: smooth;
            scrollbar-gutter: stable
        }

        body {
            margin: 0;
            min-height: 100%;
            overflow-x: hidden;
            width: 100%
        }

        a {
            color: inherit
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: var(--cta-primary);
            color: #fff;
            padding: 1rem 2rem;
            border-radius: var(--cta-radius);
            font-weight: 600;
            font-size: 1.125rem;
            text-decoration: none;
            transition: box-shadow .15s ease
        }

        .cta-button:hover {
            box-shadow: 0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        button,
        summary,
        input,
        textarea {
            font-family: var(--body-font)
        }

        main [data-component]:not([data-heading-tone=light]) h1 {
            color: var(--accent-strong);
            font-weight: 500;
            letter-spacing: -.035em;
            line-height: 1.2
        }

        main [data-component]:not([data-component=hero]):not([data-heading-tone=light]) h2 {
            color: var(--accent-strong);
            font-size: clamp(28px, 3.5vw, 46px);
            font-weight: 500;
            letter-spacing: -.035em;
            line-height: 1.2
        }

        .announcement-bar[data-astro-cid-3isblsjf] {
            background-color: var(--announcement-bg, #091E43);
            color: var(--announcement-text, #F3C3C6);
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            font-size: 13px;
            font-weight: 500;
            position: relative;
            z-index: 20
        }

        .announcement-bar__static[data-astro-cid-3isblsjf] {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 var(--page-pad)
        }

        .announcement-bar__carousel[data-astro-cid-3isblsjf] {
            display: none
        }

        .announcement-bar__link[data-astro-cid-3isblsjf] {
            color: inherit;
            text-decoration: none;
            white-space: nowrap
        }

        .announcement-bar__link[data-astro-cid-3isblsjf]:hover {
            text-decoration: underline
        }

        .announcement-bar__divider[data-astro-cid-3isblsjf] {
            opacity: .5
        }

        @media(max-width:600px) {
            .announcement-bar__static[data-astro-cid-3isblsjf] {
                display: none
            }

            .announcement-bar__carousel[data-astro-cid-3isblsjf] {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
                position: relative
            }

            .announcement-bar__slide[data-astro-cid-3isblsjf] {
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                opacity: 0;
                transform: translateY(8px);
                transition: opacity .4s ease, transform .4s ease;
                pointer-events: none
            }

            .announcement-bar__slide--active[data-astro-cid-3isblsjf] {
                opacity: 1;
                transform: translateY(0);
                pointer-events: auto
            }
        }

        .header[data-astro-cid-wimnwge2] {
            --header-gutter: max(var(--page-pad), calc((100% - 1200px)/2));
            position: relative;
            z-index: 10;
            background: transparent;
            border-bottom: 1px solid rgba(17, 24, 39, .08);
            width: 100%;
            max-width: 100%;
            overflow: visible;
            box-sizing: border-box
        }

        .header__inner[data-astro-cid-wimnwge2] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: var(--header-padding-y, 12px) var(--header-gutter);
            width: 100%;
            max-width: 100%;
            box-sizing: border-box
        }

        .hidden[data-astro-cid-wimnwge2] {
            display: none
        }

        .header__logo[data-astro-cid-wimnwge2] img[data-astro-cid-wimnwge2] {
            display: block;
            height: 32px;
            width: auto;
            max-width: 100%;
            filter: var(--header-logo-filter, brightness(0) saturate(100%) invert(11%) sepia(37%) saturate(4873%) hue-rotate(197deg) brightness(95%) contrast(96%))
        }

        .header__logo[data-astro-cid-wimnwge2] {
            min-width: 0;
            flex: 0 0 auto
        }

        @media(min-width:700px) {
            .header__logo[data-astro-cid-wimnwge2] img[data-astro-cid-wimnwge2] {
                height: 36px
            }
        }

        @media(min-width:700px)and (max-width:1100px) {
            .header__logo[data-astro-cid-wimnwge2] img[data-astro-cid-wimnwge2] {
                height: 32px
            }
        }

        @media(min-width:700px)and (max-width:1000px) {
            .header__logo[data-astro-cid-wimnwge2] img[data-astro-cid-wimnwge2] {
                height: 28px
            }
        }

        .header__nav[data-astro-cid-wimnwge2] {
            position: absolute;
            right: var(--header-gutter);
            top: calc(100% + 10px);
            display: grid;
            gap: 12px;
            font-size: 14px;
            color: var(--muted);
            font-weight: 500;
            background: #fff;
            border: 1px solid rgba(17, 24, 39, .08);
            border-radius: 16px;
            padding: 12px;
            box-shadow: 0 18px 32px #0f172a26;
            min-width: 220px;
            z-index: 20
        }

        .header__nav[data-astro-cid-wimnwge2].hidden {
            display: none
        }

        .header__nav-list[data-astro-cid-wimnwge2] {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 6px
        }

        .header__nav-item[data-astro-cid-wimnwge2] {
            position: relative;
            width: 100%;
            padding-left: 0
        }

        .header__nav-link[data-astro-cid-wimnwge2] {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            gap: 6px;
            text-decoration: none;
            color: #0a1f44;
            transition: color .2s ease, background .2s ease;
            padding: 8px 10px;
            border-radius: 10px;
            width: 100%;
            text-align: left
        }

        .header__nav-link--trigger[data-astro-cid-wimnwge2] {
            background: transparent;
            border: none;
            cursor: pointer;
            font: inherit
        }

        .header__nav-link[data-astro-cid-wimnwge2]:hover {
            background: #1118270d;
            color: var(--ink)
        }

        .header__caret[data-astro-cid-wimnwge2] {
            width: 14px;
            height: 14px;
            transition: transform .2s ease
        }

        .header__dropdown[data-astro-cid-wimnwge2][open]>button[data-astro-cid-wimnwge2]>.header__caret[data-astro-cid-wimnwge2] {
            transform: rotate(180deg)
        }

        .header__dropdown-items[data-astro-cid-wimnwge2] {
            position: fixed;
            left: 0;
            top: calc(var(--header-height, 64px) + 0px);
            width: 100vw;
            min-width: 100vw;
            transform: none;
            z-index: 40
        }

        .header__dropdown-items[data-astro-cid-wimnwge2].hidden {
            display: none
        }

        .header__dropdown-panel[data-astro-cid-wimnwge2] {
            background: #fff;
            border-top: 1px solid rgba(17, 24, 39, .08);
            border-bottom: 1px solid rgba(17, 24, 39, .08);
            border-left: none;
            border-right: none;
            border-radius: 0;
            padding: 0 var(--header-gutter);
            box-shadow: none;
            display: grid;
            gap: 16px;
            max-width: none;
            margin: 0;
            width: 100%;
            box-sizing: border-box
        }

        .header__dropdown-content[data-astro-cid-wimnwge2] {
            max-width: 1200px;
            margin: 0 auto;
            padding: 22px 0;
            width: 100%;
            box-sizing: border-box
        }

        .header__dropdown-two-pane[data-astro-cid-wimnwge2] {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 32px;
            align-items: start
        }

        .header__dropdown-pane--left[data-astro-cid-wimnwge2] {
            border-right: 1px solid rgba(17, 24, 39, .08);
            padding-right: 18px
        }

        .header__dropdown-left-list[data-astro-cid-wimnwge2] {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 6px
        }

        .header__dropdown-left-item[data-astro-cid-wimnwge2] {
            width: 100%;
            text-align: left;
            background: transparent;
            border: none;
            padding: 8px 10px;
            border-radius: 10px;
            font: inherit;
            color: var(--ink);
            cursor: pointer;
            transition: background .2s ease, color .2s ease
        }

        .header__dropdown-left-item[data-astro-cid-wimnwge2].is-active {
            background: #1118270f;
            color: var(--ink);
            font-weight: 600
        }

        .header__dropdown-panel-content[data-astro-cid-wimnwge2] {
            display: none
        }

        .header__dropdown-panel-content[data-astro-cid-wimnwge2].is-active,
        .header__desktop-content[data-astro-cid-wimnwge2] {
            display: block
        }

        .header__mobile-group-accordion[data-astro-cid-wimnwge2] {
            display: none
        }

        .header__dropdown-group[data-astro-cid-wimnwge2] {
            display: grid;
            gap: 10px
        }

        .header__dropdown-group-link[data-astro-cid-wimnwge2],
        .header__dropdown-group-label[data-astro-cid-wimnwge2] {
            font-weight: 500;
            font-size: 14px;
            color: #0a1f44
        }

        .header__dropdown-group-link--desktop[data-astro-cid-wimnwge2],
        .header__dropdown-group-label--desktop[data-astro-cid-wimnwge2] {
            display: inline-flex
        }

        .header__dropdown-group-link--mobile[data-astro-cid-wimnwge2],
        .header__dropdown-group-label--mobile[data-astro-cid-wimnwge2] {
            display: none
        }

        .header__dropdown-group-link[data-astro-cid-wimnwge2] {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px
        }

        .header__dropdown-group-link[data-astro-cid-wimnwge2]:hover {
            text-decoration: underline
        }

        .header__dropdown[data-astro-cid-wimnwge2] {
            padding-inline-start: 0;
            margin: 0
        }

        .header__dropdown-children[data-astro-cid-wimnwge2] {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 24px;
            margin-top: 6px;
            align-items: start
        }

        .header__dropdown-section[data-astro-cid-wimnwge2] {
            display: grid;
            gap: 8px
        }

        .header__dropdown-section-title[data-astro-cid-wimnwge2] {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: #6b7280;
            margin: 0
        }

        .header__dropdown-section--level-1[data-astro-cid-wimnwge2] {
            margin-top: 8px
        }

        .header__dropdown-left-item--link[data-astro-cid-wimnwge2] {
            text-decoration: none;
            color: var(--ink);
            display: block
        }

        .header__dropdown-section-list[data-astro-cid-wimnwge2] {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 6px
        }

        .header__dropdown-section-link[data-astro-cid-wimnwge2] {
            text-decoration: none;
            color: #0a1f44;
            font-size: 14px;
            font-weight: 500
        }

        .header__dropdown-section-link[data-astro-cid-wimnwge2]:hover {
            color: var(--ink);
            text-decoration: underline
        }

        .header__dropdown-section-list--desktop[data-astro-cid-wimnwge2] {
            display: block
        }

        .header__mobile-subgroup[data-astro-cid-wimnwge2] {
            display: none
        }

        .header__mobile-subgroup-toggle[data-astro-cid-wimnwge2] {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            padding: 8px 0;
            cursor: pointer;
            font: inherit;
            color: var(--ink)
        }

        .header__mobile-subgroup-toggle[data-astro-cid-wimnwge2]::-webkit-details-marker {
            display: none
        }

        .header__mobile-subgroup[data-astro-cid-wimnwge2][open] .header__caret[data-astro-cid-wimnwge2] {
            transform: rotate(180deg)
        }

        .header__dropdown-cta[data-astro-cid-wimnwge2] {
            text-decoration: none;
            color: var(--ink);
            font-weight: 600;
            font-size: 13px
        }

        .header__dropdown-cta[data-astro-cid-wimnwge2]:hover {
            text-decoration: underline
        }

        .header__actions[data-astro-cid-wimnwge2] {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            min-width: 0;
            flex: 0 1 auto;
            flex-wrap: wrap;
            justify-content: flex-end;
            max-width: 100%
        }

        .header__icon[data-astro-cid-wimnwge2] {
            display: grid;
            place-items: center;
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            border: none;
            background: transparent;
            color: #0a1f44;
            cursor: pointer;
            transition: background .2s ease, color .2s ease
        }

        .header__support[data-astro-cid-wimnwge2] {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            padding: 8px 10px;
            border-radius: 12px;
            background: transparent;
            color: #0a1f44;
            font-weight: inherit;
            font-size: 14px;
            text-decoration: none;
            transition: background .2s ease, color .2s ease
        }

        .header__support[data-astro-cid-wimnwge2]:hover,
        .header__icon[data-astro-cid-wimnwge2]:hover {
            background: #1118270f;
            color: var(--ink)
        }

        .header__icon[data-astro-cid-wimnwge2] svg[data-astro-cid-wimnwge2] {
            width: 20px;
            height: 20px
        }

        .header__basket-count[data-astro-cid-wimnwge2] {
            position: absolute;
            top: 2px;
            right: 2px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 18px;
            height: 18px;
            padding: 0 5px;
            border-radius: 999px;
            background: #dc2626;
            color: #fff;
            border: 2px solid #fff;
            font-size: .6875rem;
            font-weight: 800;
            line-height: 1;
            box-sizing: border-box
        }

        .header__basket-count[data-astro-cid-wimnwge2][hidden] {
            display: none
        }

        .header__menu-toggle[data-astro-cid-wimnwge2] {
            width: 24px;
            height: 24px;
            color: inherit
        }

        #astronav-menu {
            display: block;
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background-color: #f3f4f6;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23111827' stroke-width='2' stroke-linecap='round'%3E%3Cpath d='M4 7h16M4 12h16M4 17h16'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 24px 24px;
            border: none;
            padding: 0;
            cursor: pointer;
            transition: background-color .2s ease;
            font-size: 0;
            color: transparent;
            overflow: hidden
        }

        #astronav-menu:hover {
            background-color: #e5e7eb
        }

        #astronav-menu * {
            display: none !important
        }

        #astronav-menu[aria-expanded=true] {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23111827' stroke-width='2' stroke-linecap='round'%3E%3Cpath d='M6 6l12 12M18 6l-12 12'/%3E%3C/svg%3E")
        }

        @media(max-width:1030px) {

            .header__support[data-astro-cid-wimnwge2],
            .header__icon[data-astro-cid-wimnwge2] {
                display: none
            }

            .header__icon--basket[data-astro-cid-wimnwge2] {
                display: grid
            }

            .header__nav[data-astro-cid-wimnwge2] {
                text-align: left
            }

            .header__nav-list[data-astro-cid-wimnwge2] {
                justify-items: stretch
            }

            .header__nav-link[data-astro-cid-wimnwge2] {
                justify-content: space-between;
                text-align: left
            }

            .header__dropdown-items[data-astro-cid-wimnwge2] {
                position: static;
                left: auto;
                transform: none;
                min-width: 100%;
                width: 100%
            }

            .header__dropdown-panel[data-astro-cid-wimnwge2] {
                box-shadow: none;
                border: none;
                padding: 0
            }

            .header__dropdown-content[data-astro-cid-wimnwge2] {
                padding: 8px 10px 0
            }

            .header__dropdown-group-label[data-astro-cid-wimnwge2],
            .header__dropdown-group-link[data-astro-cid-wimnwge2] {
                padding-left: 5px
            }

            .header__dropdown-divider[data-astro-cid-wimnwge2] {
                border: none;
                border-top: 1px solid rgba(17, 24, 39, .08);
                margin: 8px 0 4px;
                width: 100%
            }

            .header__dropdown-two-pane[data-astro-cid-wimnwge2] {
                grid-template-columns: 1fr;
                gap: 16px
            }

            .header__dropdown-pane--left[data-astro-cid-wimnwge2] {
                border-right: none;
                padding-right: 0;
                display: none
            }

            .header__dropdown-panel-content[data-astro-cid-wimnwge2] {
                display: block
            }

            .header__dropdown-section-list--desktop[data-astro-cid-wimnwge2],
            .header__dropdown-group-link--desktop[data-astro-cid-wimnwge2],
            .header__dropdown-group-label--desktop[data-astro-cid-wimnwge2] {
                display: none
            }

            .header__dropdown-group-link--mobile[data-astro-cid-wimnwge2],
            .header__dropdown-group-label--mobile[data-astro-cid-wimnwge2] {
                display: block;
                padding: 8px 5px;
                text-decoration: none;
                color: var(--muted);
                font-size: 14px;
                font-weight: 500
            }

            .header__dropdown-group-link--mobile[data-astro-cid-wimnwge2]:hover {
                color: var(--ink)
            }

            .header__mobile-group-accordion[data-astro-cid-wimnwge2] {
                display: block;
                border-bottom: 1px solid rgba(17, 24, 39, .08);
                margin-bottom: 8px
            }

            .header__mobile-group-accordion[data-astro-cid-wimnwge2]>summary[data-astro-cid-wimnwge2] {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 8px;
                padding: 10px 5px;
                cursor: pointer;
                font-weight: 600;
                color: var(--ink);
                list-style: none
            }

            .header__mobile-group-accordion[data-astro-cid-wimnwge2]>summary[data-astro-cid-wimnwge2]::-webkit-details-marker {
                display: none
            }

            .header__mobile-group-accordion[data-astro-cid-wimnwge2][open]>summary[data-astro-cid-wimnwge2] .header__caret[data-astro-cid-wimnwge2] {
                transform: rotate(180deg)
            }

            .header__mobile-group-content[data-astro-cid-wimnwge2] {
                display: block;
                padding: 0 0 8px
            }

            .header__desktop-content[data-astro-cid-wimnwge2] {
                display: none
            }

            .header__mobile-links[data-astro-cid-wimnwge2] {
                list-style: none;
                margin: 0;
                padding: 0;
                display: grid;
                gap: 4px
            }

            .header__mobile-link[data-astro-cid-wimnwge2] {
                display: block;
                padding: 8px 5px;
                text-decoration: none;
                color: var(--muted);
                font-size: 14px;
                font-weight: 500
            }

            a[data-astro-cid-wimnwge2].header__mobile-link:hover {
                color: var(--ink);
                text-decoration: underline
            }

            .header__mobile-link--subcat[data-astro-cid-wimnwge2] {
                font-weight: 600;
                color: var(--ink)
            }

            .header__mobile-links--products[data-astro-cid-wimnwge2] {
                list-style: none;
                margin: 4px 0 8px;
                padding: 0 0 0 12px;
                display: grid;
                gap: 2px
            }

            .header__mobile-link--product[data-astro-cid-wimnwge2] {
                font-size: 13px
            }
        }

        @media(min-width:1031px) {
            #astronav-menu {
                display: none !important
            }

            .header__menu-toggle[data-astro-cid-wimnwge2] {
                display: none
            }

            .header__nav[data-astro-cid-wimnwge2],
            .header__nav[data-astro-cid-wimnwge2].hidden {
                position: static;
                display: block;
                background: transparent;
                border: none;
                box-shadow: none;
                padding: 0;
                min-width: auto;
                margin-left: 32px;
                flex: 1 1 auto
            }

            .header__nav-list[data-astro-cid-wimnwge2] {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 28px
            }

            .header__nav-item[data-astro-cid-wimnwge2] {
                width: auto
            }

            .header__nav-link[data-astro-cid-wimnwge2] {
                padding: 0;
                width: auto;
                justify-content: flex-start;
                white-space: nowrap
            }

            .header__nav-link[data-astro-cid-wimnwge2]:hover {
                background: transparent;
                text-decoration: underline
            }

            .header__dropdown-items[data-astro-cid-wimnwge2] {
                left: 0;
                transform: none;
                top: calc(var(--header-height, 64px) + 0px);
                width: 100vw;
                min-width: 100vw
            }

            .header__dropdown-panel[data-astro-cid-wimnwge2] {
                min-height: 320px
            }

            .header__nav-item--mobile-only[data-astro-cid-wimnwge2] {
                display: none
            }
        }

        @media(max-width:700px) {
            .header__inner[data-astro-cid-wimnwge2] {
                padding: 10px 16px;
                flex-wrap: wrap;
                gap: 12px
            }

            .header__logo[data-astro-cid-wimnwge2] img[data-astro-cid-wimnwge2] {
                height: 30px
            }

            .header__actions[data-astro-cid-wimnwge2] {
                flex-wrap: nowrap;
                gap: 6px
            }

            .header__nav[data-astro-cid-wimnwge2] {
                right: 16px;
                left: 16px
            }
        }

        .footer[data-astro-cid-wxezf4vu] {
            background: var(--cta-primary);
            border-top: none;
            color: #fff;
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
            padding: 56px min(8vw, 110px) 40px
        }

        .footer__inner[data-astro-cid-wxezf4vu] {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            gap: 32px
        }

        .footer__grid[data-astro-cid-wxezf4vu] {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 18px
        }

        .footer__column-title[data-astro-cid-wxezf4vu] {
            margin: 0 0 10px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: #fff;
            font-weight: 500
        }

        .footer[data-astro-cid-wxezf4vu] ul[data-astro-cid-wxezf4vu] {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 8px;
            font-size: 14px;
            color: #ffffffe6;
            font-weight: 400
        }

        .footer[data-astro-cid-wxezf4vu] a[data-astro-cid-wxezf4vu] {
            text-decoration: none;
            color: inherit;
            overflow-wrap: anywhere
        }

        .footer[data-astro-cid-wxezf4vu] a[data-astro-cid-wxezf4vu]:hover {
            color: #fff
        }

        .footer__row[data-astro-cid-wxezf4vu] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, .25)
        }

        .footer__social[data-astro-cid-wxezf4vu] {
            display: flex;
            gap: 12px
        }

        .footer__social[data-astro-cid-wxezf4vu] a[data-astro-cid-wxezf4vu] {
            display: grid;
            place-items: center;
            width: 40px;
            height: 40px;
            border-radius: 999px;
            background: #ffffff26;
            color: #ffffffd9;
            transition: background .2s ease, color .2s ease
        }

        .footer__social[data-astro-cid-wxezf4vu] a[data-astro-cid-wxezf4vu]:hover {
            background: var(--accent-strong);
            color: #fff
        }

        .footer__social[data-astro-cid-wxezf4vu] svg[data-astro-cid-wxezf4vu] {
            width: 18px;
            height: 18px
        }

        .footer__info[data-astro-cid-wxezf4vu] {
            font-size: 12px;
            color: #ffffffd9;
            display: grid;
            gap: 10px;
            font-weight: 400
        }

        .footer__seal[data-astro-cid-wxezf4vu] {
            display: inline-flex;
            align-items: center;
            width: fit-content;
            padding: 6px 8px;
            background: #ffffff14;
            border-radius: 14px
        }

        .footer__seal[data-astro-cid-wxezf4vu] img[data-astro-cid-wxezf4vu] {
            display: block;
            height: auto;
            width: 60px;
            max-width: 100%
        }

        .footer__trust-badges[data-astro-cid-wxezf4vu] {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap
        }

        .footer__gphc[data-astro-cid-wxezf4vu] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 8px;
            border-radius: 14px;
            background: #ffffff14;
            color: #fff;
            font-size: .75rem
        }

        .footer__info[data-astro-cid-wxezf4vu] a[data-astro-cid-wxezf4vu] {
            color: #fff;
            text-decoration: underline;
            text-underline-offset: 3px
        }

        .footer__info[data-astro-cid-wxezf4vu] strong[data-astro-cid-wxezf4vu] {
            color: #fff
        }

        .footer__copyright[data-astro-cid-wxezf4vu] {
            color: #fffc;
            padding-top: 8px
        }

        @media(max-width:700px) {
            .footer[data-astro-cid-wxezf4vu] {
                padding: 48px 24px 32px
            }

            .footer__row[data-astro-cid-wxezf4vu] {
                flex-direction: column;
                align-items: flex-start
            }
        }

        .sticky-cta[data-astro-cid-wi5z2meu] {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            width: 100dvw;
            max-width: 100dvw;
            box-sizing: border-box;
            overflow-x: hidden;
            z-index: 100;
            background: #fff;
            border-top: 1px solid rgba(17, 24, 39, .08);
            box-shadow: 0 -4px 20px #00000014;
            padding: 12px 24px;
            transform: translateY(100%);
            opacity: 0;
            transition: transform .3s ease, opacity .3s ease
        }

        .sticky-cta[data-astro-cid-wi5z2meu].is-visible {
            transform: translateY(0);
            opacity: 1
        }

        .sticky-cta__inner[data-astro-cid-wi5z2meu] {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box
        }

        .sticky-cta__content[data-astro-cid-wi5z2meu] {
            position: relative
        }

        .sticky-cta__content--reserved[data-astro-cid-wi5z2meu] {
            display: grid
        }

        .sticky-cta__content--reserved[data-astro-cid-wi5z2meu]>[data-astro-cid-wi5z2meu] {
            grid-area: 1 / 1
        }

        .sticky-cta__content--reserved[data-astro-cid-wi5z2meu]>[data-astro-cid-wi5z2meu][aria-hidden=true] {
            visibility: hidden;
            pointer-events: none
        }

        .sticky-cta__state[data-astro-cid-wi5z2meu] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box
        }

        .sticky-cta__text[data-astro-cid-wi5z2meu] {
            margin: 0;
            font-size: .9375rem;
            font-weight: 500;
            color: #111827
        }

        .sticky-cta__member-copy[data-astro-cid-wi5z2meu] {
            display: flex;
            flex-direction: column;
            gap: .25rem
        }

        .sticky-cta__member-status[data-astro-cid-wi5z2meu] {
            display: flex;
            flex-direction: column;
            gap: .75rem;
            align-items: flex-start
        }

        .sticky-cta__welcome[data-astro-cid-wi5z2meu],
        .sticky-cta__completed[data-astro-cid-wi5z2meu] {
            margin: 0
        }

        .sticky-cta__completed[data-astro-cid-wi5z2meu] {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-size: .8125rem;
            color: #4b5563
        }

        .sticky-cta__member-badge[data-astro-cid-wi5z2meu] {
            padding: .35rem .65rem;
            border-radius: 9999px;
            background: #eef2ff;
            color: #3730a3;
            font-size: .75rem;
            font-weight: 700;
            width: fit-content
        }

        .sticky-cta__completed[data-astro-cid-wi5z2meu] svg[data-astro-cid-wi5z2meu] {
            width: .9rem;
            height: .9rem;
            flex-shrink: 0;
            color: #3730a3
        }

        .sticky-cta__member-secondary[data-astro-cid-wi5z2meu] {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            color: #111827;
            font-size: .8125rem;
            font-weight: 600;
            text-decoration: none
        }

        .sticky-cta__member-secondary[data-astro-cid-wi5z2meu]:hover {
            text-decoration: underline;
            text-underline-offset: 3px
        }

        .sticky-cta__member-secondary[data-astro-cid-wi5z2meu] svg[data-astro-cid-wi5z2meu] {
            width: .95rem;
            height: .95rem;
            flex-shrink: 0
        }

        .sticky-cta__button[data-astro-cid-wi5z2meu] {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: var(--cta-primary);
            color: #fff;
            padding: .75rem 1.5rem;
            border-radius: .75rem;
            font-weight: 600;
            font-size: .9375rem;
            text-decoration: none;
            transition: box-shadow .15s ease;
            white-space: nowrap;
            flex-shrink: 0;
            max-width: 100%;
            box-sizing: border-box
        }

        .sticky-cta__button[data-astro-cid-wi5z2meu]:hover {
            box-shadow: 0 10px 20px -5px #00000026
        }

        .sticky-cta__button[data-astro-cid-wi5z2meu] svg[data-astro-cid-wi5z2meu] {
            width: 1.125rem;
            height: 1.125rem
        }

        @media(max-width:640px) {
            .sticky-cta[data-astro-cid-wi5z2meu] {
                padding: 10px 16px;
                padding-bottom: calc(30px + env(safe-area-inset-bottom, 0px))
            }

            .sticky-cta__state[data-astro-cid-wi5z2meu] {
                flex-direction: column;
                gap: 10px;
                text-align: center
            }

            .sticky-cta__text[data-astro-cid-wi5z2meu] {
                font-size: .8125rem
            }

            .sticky-cta__member-copy[data-astro-cid-wi5z2meu],
            .sticky-cta__member-status[data-astro-cid-wi5z2meu] {
                align-items: center
            }

            .sticky-cta__button[data-astro-cid-wi5z2meu] {
                width: 100%;
                justify-content: center;
                padding: .875rem 1.25rem;
                white-space: normal
            }
        }

        @media(min-width:641px) {
            .sticky-cta__state[data-astro-cid-wi5z2meu] {
                justify-content: center;
                text-align: center;
                flex-wrap: wrap
            }

            .sticky-cta__text[data-astro-cid-wi5z2meu] {
                text-align: center;
                max-width: 640px
            }
        }

        .trust[data-astro-cid-biyz2x6i] {
            background: var(--cta-primary);
            border-top: none;
            border-bottom: none;
            padding: 22px min(8vw, 110px);
            overflow-x: clip;
            position: relative;
            contain: paint
        }

        .trust__track[data-astro-cid-biyz2x6i] {
            max-width: 1200px;
            margin: 0 auto;
            contain: layout paint
        }

        .trust__inner[data-astro-cid-biyz2x6i] {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px 32px
        }

        .trust__inner--duplicate[data-astro-cid-biyz2x6i] {
            display: none
        }

        .trust__item[data-astro-cid-biyz2x6i] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #f3b8bd;
            font-size: 14px;
            font-weight: 500;
            white-space: nowrap
        }

        .trust__icon[data-astro-cid-biyz2x6i] {
            width: 20px;
            height: 20px;
            color: #f3b8bd;
            flex-shrink: 0
        }

        @media(max-width:700px) {
            .trust[data-astro-cid-biyz2x6i] {
                padding: 18px 0;
                overflow: hidden;
                width: 100%
            }

            .trust__track[data-astro-cid-biyz2x6i] {
                display: flex;
                flex-direction: row;
                width: max-content;
                box-sizing: border-box;
                animation: marquee 20s linear infinite;
                will-change: transform;
                contain: layout paint
            }

            .trust__inner[data-astro-cid-biyz2x6i],
            .trust__inner--duplicate[data-astro-cid-biyz2x6i] {
                display: flex;
                flex-shrink: 0;
                flex-wrap: nowrap;
                justify-content: flex-start;
                gap: 32px;
                padding-right: 32px;
                contain: layout paint
            }
        }

        @keyframes marquee {
            0% {
                transform: translate(0)
            }

            to {
                transform: translate(-50%)
            }
        }

        .category-card[data-astro-cid-f3saawlv] {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 16px 0 0;
            min-height: 80px;
            background: #fff;
            border-radius: 16px;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 1px 3px #00000014;
            transition: background-color .15s ease, box-shadow .15s ease;
            overflow: hidden
        }

        .category-card[data-astro-cid-f3saawlv]:hover,
        .category-card[data-astro-cid-f3saawlv]:focus-visible {
            background: #fff;
            box-shadow: 0 4px 12px #0000001a;
            outline: none
        }

        .category-card__label[data-astro-cid-f3saawlv] {
            flex: 1;
            font-size: 1rem;
            font-weight: 600;
            color: #111827;
            line-height: 1.3
        }

        .category-card__image[data-astro-cid-f3saawlv] {
            width: 80px;
            flex-shrink: 0;
            align-self: stretch;
            overflow: hidden;
            border-radius: 16px 0 0 16px
        }

        .category-card__image[data-astro-cid-f3saawlv] img[data-astro-cid-f3saawlv] {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block
        }

        .category-card__arrow[data-astro-cid-f3saawlv] {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #111827;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0
        }

        .category-card__arrow[data-astro-cid-f3saawlv] svg[data-astro-cid-f3saawlv] {
            width: 18px;
            height: 18px
        }

        .hero-placeholder[data-astro-cid-d257t26o] {
            position: relative;
            background: linear-gradient(135deg, #fff6, #fff6), var(--hero-surface-gradient);
            margin-top: -66px;
            padding-top: calc(64px + 2rem);
            padding-bottom: 4rem;
            overflow: hidden
        }

        @media(max-width:640px) {
            .hero-placeholder[data-astro-cid-d257t26o] {
                padding-top: calc(64px + .75rem);
                padding-bottom: 2rem
            }
        }

        @media(min-width:1024px) {
            .hero-placeholder[data-astro-cid-d257t26o] {
                padding-top: calc(64px + 1rem);
                padding-bottom: 1rem
            }
        }

        .hero-placeholder__inner[data-astro-cid-d257t26o] {
            max-width: 80rem;
            margin-inline: auto;
            padding-inline: 1rem;
            display: flex;
            gap: 3rem;
            align-items: stretch;
            justify-content: center;
            position: relative;
            z-index: 1
        }

        @media(min-width:640px) {
            .hero-placeholder__inner[data-astro-cid-d257t26o] {
                padding-inline: 1.5rem
            }
        }

        @media(min-width:1024px) {
            .hero-placeholder__inner[data-astro-cid-d257t26o] {
                padding-inline: 2rem
            }
        }

        .hero-placeholder__body[data-astro-cid-d257t26o] {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 0;
            flex: 1
        }

        .hero-placeholder__content[data-astro-cid-d257t26o] {
            max-width: 600px
        }

        .hero-placeholder__eyebrow[data-astro-cid-d257t26o] {
            margin: 2rem 0 .1rem;
            font-size: .675rem;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: #1f2937;
            font-weight: 600;
            font-family: var(--hero-font)
        }

        @media(min-width:1024px) {
            .hero-placeholder__eyebrow[data-astro-cid-d257t26o] {
                font-size: .8rem;
                margin-bottom: 2rem
            }
        }

        .hero-placeholder[data-astro-cid-d257t26o][data-component] .hero-placeholder__headline[data-astro-cid-d257t26o] {
            margin: 1.5rem 0;
            font-size: clamp(2.4rem, 4.5vw, 4.2rem);
            font-weight: 700;
            color: var(--cta-primary);
            letter-spacing: -.045em;
            line-height: .92;
            display: block;
            font-family: var(--hero-font)
        }

        .hero-placeholder__headline[data-astro-cid-d257t26o]>span[data-astro-cid-d257t26o] {
            display: inline
        }

        .hero-placeholder__accent[data-astro-cid-d257t26o] {
            margin-top: 0;
            margin-left: 0;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 600
        }

        .hero-placeholder__trustpilot[data-astro-cid-d257t26o] {
            margin-top: .5rem;
            display: inline-flex;
            align-items: center;
            gap: .875rem;
            text-decoration: none;
            color: inherit;
            transition: opacity .2s ease
        }

        .hero-placeholder__trustpilot[data-astro-cid-d257t26o]:hover {
            opacity: .85
        }

        .hero-placeholder__trustpilot-logo[data-astro-cid-d257t26o] {
            height: 1.25rem;
            width: auto
        }

        .hero-placeholder__trustpilot-rating[data-astro-cid-d257t26o] {
            display: inline-flex;
            align-items: center;
            gap: .5rem
        }

        .hero-placeholder__trustpilot-stars[data-astro-cid-d257t26o] {
            display: inline-flex;
            gap: 2px
        }

        .hero-placeholder__trustpilot-star[data-astro-cid-d257t26o] {
            position: relative;
            width: 18px;
            height: 18px;
            display: inline-block
        }

        .hero-placeholder__trustpilot-star[data-astro-cid-d257t26o] svg[data-astro-cid-d257t26o] {
            width: 18px;
            height: 18px;
            fill: currentColor
        }

        .hero-placeholder__trustpilot-star-bg[data-astro-cid-d257t26o] {
            color: #dcdce6
        }

        .hero-placeholder__trustpilot-star-fill[data-astro-cid-d257t26o] {
            position: absolute;
            top: 0;
            left: 0;
            color: #00b67a
        }

        .hero-placeholder__trustpilot-score[data-astro-cid-d257t26o] {
            font-size: .875rem;
            font-weight: 600;
            color: #111827
        }

        .hero-placeholder__trustpilot-count[data-astro-cid-d257t26o] {
            font-size: .75rem;
            color: #6b7280
        }

        .hero-placeholder__subhead[data-astro-cid-d257t26o] {
            margin: .75rem 0 0;
            font-size: .875rem;
            line-height: 1.6;
            color: #6b7280;
            max-width: 560px
        }

        @media(min-width:768px) {
            .hero-placeholder__subhead[data-astro-cid-d257t26o] {
                font-size: 1rem
            }
        }

        @media(min-width:1024px) {
            .hero-placeholder__subhead[data-astro-cid-d257t26o] {
                font-size: 1.125rem
            }
        }

        .hero-placeholder__primary-cta[data-astro-cid-d257t26o] {
            display: grid;
            gap: .625rem;
            align-items: start;
            justify-items: start;
            margin-top: 1.75rem;
            margin-bottom: .75rem
        }

        .hero-placeholder__actions[data-astro-cid-d257t26o] {
            display: grid;
            gap: .75rem;
            align-items: start;
            justify-items: start
        }

        .hero-placeholder__categories[data-astro-cid-d257t26o] {
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 100%;
            max-width: 450px;
            flex-shrink: 0;
            padding: 3rem
        }

        .hero-placeholder__cta[data-astro-cid-d257t26o] span[data-astro-cid-d257t26o] {
            font-size: 1.1rem
        }

        .hero-placeholder__note[data-astro-cid-d257t26o] {
            margin: 0;
            font-size: .875rem;
            color: #6b7280
        }

        .hero-placeholder__price-qualifier[data-astro-cid-d257t26o] {
            margin: 1.25rem 0 0;
            font-size: .95rem;
            font-weight: 600;
            color: #111827
        }

        @media(max-width:900px) {
            .hero-placeholder__inner[data-astro-cid-d257t26o] {
                flex-direction: column;
                align-items: flex-start;
                gap: 0
            }

            .hero-placeholder__categories[data-astro-cid-d257t26o] {
                max-width: 100%;
                padding: 1.5rem 0
            }

            .hero-placeholder__actions[data-astro-cid-d257t26o] {
                width: 100%
            }

            .hero-placeholder__primary-cta[data-astro-cid-d257t26o] {
                width: 100%;
                margin-top: 1.5rem
            }

            .hero-placeholder__cta[data-astro-cid-d257t26o] {
                width: 100%;
                justify-content: center
            }

            .hero-placeholder__price-qualifier[data-astro-cid-d257t26o] {
                margin: 1.75rem 0 1.2rem
            }
        }

        @media(max-width:640px) {
            .hero-placeholder__trustpilot[data-astro-cid-d257t26o] {
                align-items: flex-start;
                gap: .5rem
            }
        }

        .ai-says[data-astro-cid-ydycdnvt] {
            padding: 67px min(8vw, 110px);
            background: var(--surface-tint);
            overflow-x: hidden
        }

        .ai-says__inner[data-astro-cid-ydycdnvt] {
            max-width: 1200px;
            margin: 0 auto
        }

        .ai-says__header[data-astro-cid-ydycdnvt] {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 18px;
            flex-wrap: wrap
        }

        .ai-says__title-group[data-astro-cid-ydycdnvt] {
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .ai-says__title-row[data-astro-cid-ydycdnvt] {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .ai-says__sparkle[data-astro-cid-ydycdnvt] {
            width: 28px;
            height: 28px;
            flex-shrink: 0
        }

        .ai-says__header[data-astro-cid-ydycdnvt] h2[data-astro-cid-ydycdnvt] {
            margin: 0;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 500
        }

        .ai-says__header[data-astro-cid-ydycdnvt] p[data-astro-cid-ydycdnvt] {
            margin: 0;
            color: #4b5563;
            font-size: .9375rem;
            line-height: 1.6;
            font-weight: 400
        }

        @media(min-width:1024px) {
            .ai-says__header[data-astro-cid-ydycdnvt] p[data-astro-cid-ydycdnvt] {
                font-size: 1.125rem
            }
        }

        .ai-says__grid[data-astro-cid-ydycdnvt] {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            margin-top: 24px;
            max-width: 100%;
            contain: layout paint
        }

        .ai-says__card[data-astro-cid-ydycdnvt] {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            border: var(--card-border);
            display: flex;
            flex-direction: column;
            gap: 14px;
            min-height: 220px
        }

        .ai-says__card[data-astro-cid-ydycdnvt] header[data-astro-cid-ydycdnvt] {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .ai-says__logo[data-astro-cid-ydycdnvt] {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0
        }

        .ai-says__logo[data-astro-cid-ydycdnvt] img[data-astro-cid-ydycdnvt] {
            width: 100%;
            height: 100%;
            object-fit: contain
        }

        .ai-says__card[data-astro-cid-ydycdnvt] h3[data-astro-cid-ydycdnvt] {
            margin: 0;
            font-size: 16px;
            font-weight: 600;
            color: #111827
        }

        .ai-says__card[data-astro-cid-ydycdnvt] blockquote[data-astro-cid-ydycdnvt] {
            margin: 0;
            flex: 1
        }

        .ai-says__card[data-astro-cid-ydycdnvt] blockquote[data-astro-cid-ydycdnvt] p[data-astro-cid-ydycdnvt] {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            color: #374151;
            font-weight: 400;
            font-style: italic
        }

        .ai-says__footnote[data-astro-cid-ydycdnvt] {
            margin-top: 24px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb
        }

        .ai-says__footnote[data-astro-cid-ydycdnvt] p[data-astro-cid-ydycdnvt] {
            margin: 0;
            font-size: 13px;
            color: #1f2937;
            font-weight: 400
        }

        .ai-says__footnote[data-astro-cid-ydycdnvt] span[data-astro-cid-ydycdnvt] {
            font-style: italic
        }

        @media(max-width:700px) {
            .ai-says[data-astro-cid-ydycdnvt] {
                padding: 59px 24px
            }

            .ai-says__grid[data-astro-cid-ydycdnvt] {
                display: flex;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                gap: 16px;
                padding-bottom: 8px;
                -webkit-overflow-scrolling: touch;
                max-width: 100%;
                overscroll-behavior-x: contain;
                contain: layout paint
            }

            .ai-says__card[data-astro-cid-ydycdnvt] {
                min-width: 85%;
                scroll-snap-align: start
            }
        }

        .mission[data-astro-cid-vbjloogu] {
            padding: 67px min(8vw, 110px);
            background: #fff
        }

        .mission__inner[data-astro-cid-vbjloogu] {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 48px;
            align-items: center
        }

        .mission__inner--no-brands[data-astro-cid-vbjloogu] {
            grid-template-columns: 1fr
        }

        .mission__content[data-astro-cid-vbjloogu] h2[data-astro-cid-vbjloogu] {
            margin: 0 0 24px;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 600;
            line-height: 1.2;
            max-width: 400px
        }

        .mission__inner--no-brands[data-astro-cid-vbjloogu] .mission__content[data-astro-cid-vbjloogu] h2[data-astro-cid-vbjloogu] {
            max-width: 700px
        }

        .mission__link[data-astro-cid-vbjloogu] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #111827;
            text-decoration: underline;
            text-underline-offset: 4px;
            font-weight: 500;
            font-size: 15px;
            transition: color .2s ease
        }

        .mission__link[data-astro-cid-vbjloogu]:hover {
            color: var(--accent-strong)
        }

        .mission__link[data-astro-cid-vbjloogu] svg[data-astro-cid-vbjloogu] {
            width: 18px;
            height: 18px
        }

        .mission__brands[data-astro-cid-vbjloogu] {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px
        }

        .mission__brand[data-astro-cid-vbjloogu] {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            aspect-ratio: 1.4
        }

        .mission__brand[data-astro-cid-vbjloogu] img[data-astro-cid-vbjloogu] {
            max-width: 100%;
            max-height: 40px;
            object-fit: contain
        }

        .mission__brand-name[data-astro-cid-vbjloogu] {
            font-weight: 600;
            font-size: 14px;
            color: #374151;
            text-align: center
        }

        @media(max-width:900px) {
            .mission__inner[data-astro-cid-vbjloogu] {
                grid-template-columns: 1fr;
                gap: 32px
            }

            .mission__content[data-astro-cid-vbjloogu] h2[data-astro-cid-vbjloogu] {
                max-width: none
            }

            .mission__brands[data-astro-cid-vbjloogu] {
                grid-template-columns: repeat(3, 1fr)
            }
        }

        @media(max-width:700px) {
            .mission[data-astro-cid-vbjloogu] {
                padding: 59px 24px
            }

            .mission__brands[data-astro-cid-vbjloogu] {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        .trustbox[data-astro-cid-mymfrz4o] {
            padding: 46px min(8vw, 110px);
            background: radial-gradient(circle at top left, rgba(223, 242, 255, .95), transparent 42%), linear-gradient(180deg, #f8fbff, #eef5ff)
        }

        .trustbox__inner[data-astro-cid-mymfrz4o] {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            justify-items: center;
            gap: 18px
        }

        .trustbox__title[data-astro-cid-mymfrz4o] {
            margin: 0;
            color: #111827;
            font-size: clamp(21px, 2.1vw, 28px);
            font-weight: 500;
            line-height: 1.1;
            text-align: center
        }

        .trustbox__widget[data-astro-cid-mymfrz4o] {
            min-height: 28px;
            width: 100%;
            max-width: 520px
        }

        .trustbox__widget[data-astro-cid-mymfrz4o] iframe[data-astro-cid-mymfrz4o]+.trustbox__fallback[data-astro-cid-mymfrz4o] {
            display: none
        }

        .trustbox__fallback[data-astro-cid-mymfrz4o] {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #111827;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            line-height: 1
        }

        .trustbox__fallback-stars[data-astro-cid-mymfrz4o] {
            display: inline-flex;
            gap: 2px
        }

        .trustbox__fallback-star[data-astro-cid-mymfrz4o] {
            position: relative;
            display: inline-block;
            width: 26px;
            height: 26px;
            background: #d1d5db;
            color: #fff;
            font-size: 18px;
            line-height: 26px;
            text-align: center;
            overflow: hidden
        }

        .trustbox__fallback-star-fill[data-astro-cid-mymfrz4o],
        .trustbox__fallback-star-base[data-astro-cid-mymfrz4o] {
            position: absolute;
            inset: 0;
            display: block
        }

        .trustbox__fallback-star-fill[data-astro-cid-mymfrz4o] {
            background: #00b67a;
            overflow: hidden;
            z-index: 1
        }

        .trustbox__fallback-star-base[data-astro-cid-mymfrz4o] {
            z-index: 0
        }

        .trustbox__fallback-brand[data-astro-cid-mymfrz4o] {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 18px;
            font-weight: 600
        }

        .trustbox__fallback-brand-star[data-astro-cid-mymfrz4o] {
            color: #00b67a;
            font-size: 28px;
            line-height: .8
        }

        .trustbox__fallback-sr[data-astro-cid-mymfrz4o] {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        @media(max-width:700px) {
            .trustbox[data-astro-cid-mymfrz4o] {
                padding: 36px 24px
            }

            .trustbox__fallback[data-astro-cid-mymfrz4o] {
                flex-wrap: wrap;
                gap: 8px;
                font-size: 16px
            }

            .trustbox__fallback-star[data-astro-cid-mymfrz4o] {
                width: 24px;
                height: 24px;
                font-size: 16px
            }
        }

        .faq-table[data-astro-cid-u3flae7l] {
            margin-top: 12px;
            overflow-x: auto
        }

        .faq-table[data-astro-cid-u3flae7l] table[data-astro-cid-u3flae7l] {
            width: 100%;
            border-collapse: collapse;
            font-size: inherit;
            color: inherit
        }

        .faq-table[data-astro-cid-u3flae7l] th[data-astro-cid-u3flae7l],
        .faq-table[data-astro-cid-u3flae7l] td[data-astro-cid-u3flae7l] {
            padding: 10px 12px;
            border: 1px solid var(--accent);
            text-align: left;
            vertical-align: top;
            font-weight: inherit
        }

        .faq-table[data-astro-cid-u3flae7l] thead[data-astro-cid-u3flae7l] th[data-astro-cid-u3flae7l] {
            color: #fff;
            font-weight: 600;
            background: transparent;
            border-color: var(--accent-strong)
        }

        .faq-table[data-astro-cid-u3flae7l] thead[data-astro-cid-u3flae7l] tr[data-astro-cid-u3flae7l] {
            background: var(--accent-gradient)
        }

        @media(max-width:700px) {

            .faq-table[data-astro-cid-u3flae7l] th[data-astro-cid-u3flae7l],
            .faq-table[data-astro-cid-u3flae7l] td[data-astro-cid-u3flae7l] {
                padding: 8px 10px
            }
        }

        .mfaq[data-astro-cid-c5xvugsv] {
            padding: 83px min(8vw, 110px) 59px;
            background: #fff
        }

        .mfaq__inner[data-astro-cid-c5xvugsv] {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: 48px
        }

        .mfaq__intro[data-astro-cid-c5xvugsv] {
            align-self: start
        }

        .mfaq__intro[data-astro-cid-c5xvugsv] h2[data-astro-cid-c5xvugsv] {
            margin: 0 0 12px;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 500
        }

        .mfaq__intro[data-astro-cid-c5xvugsv] p[data-astro-cid-c5xvugsv] {
            margin: 0;
            color: #4b5563;
            line-height: 1.7;
            font-size: .9375rem;
            font-weight: 400
        }

        @media(min-width:1024px) {
            .mfaq__intro[data-astro-cid-c5xvugsv] p[data-astro-cid-c5xvugsv] {
                font-size: 1.125rem
            }
        }

        .mfaq__list[data-astro-cid-c5xvugsv] {
            display: grid;
            gap: 12px
        }

        .mfaq__list[data-astro-cid-c5xvugsv] details[data-astro-cid-c5xvugsv] {
            border-bottom: 1px solid #e5e7eb;
            padding: 18px 0
        }

        .mfaq__list[data-astro-cid-c5xvugsv] details[data-astro-cid-c5xvugsv]:last-child {
            border-bottom: none
        }

        .mfaq__list[data-astro-cid-c5xvugsv] summary[data-astro-cid-c5xvugsv] {
            cursor: pointer;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px
        }

        .mfaq__list[data-astro-cid-c5xvugsv] summary[data-astro-cid-c5xvugsv]::-webkit-details-marker {
            display: none
        }

        .mfaq__list[data-astro-cid-c5xvugsv] summary[data-astro-cid-c5xvugsv] h3[data-astro-cid-c5xvugsv] {
            margin: 0;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.4
        }

        .mfaq__list[data-astro-cid-c5xvugsv] summary[data-astro-cid-c5xvugsv]:after {
            content: "+";
            font-size: 20px;
            font-weight: 400;
            color: #6b7280;
            flex-shrink: 0;
            transition: transform .2s ease
        }

        .mfaq__list[data-astro-cid-c5xvugsv] details[data-astro-cid-c5xvugsv][open] summary[data-astro-cid-c5xvugsv]:after {
            content: "−"
        }

        .mfaq__answer[data-astro-cid-c5xvugsv],
        .mfaq__answer[data-astro-cid-c5xvugsv] p {
            margin: 12px 0 0;
            color: #4b5563;
            line-height: 1.6;
            font-size: 16px;
            font-weight: 400
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] p:first-child {
            margin-top: 0
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] ul,
        .mfaq__answer[data-astro-cid-c5xvugsv] ol {
            margin: 12px 0 0;
            padding-left: 1.25rem;
            color: #4b5563;
            line-height: 1.6;
            font-size: 16px;
            font-weight: 400
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] li {
            margin: 6px 0;
            color: #4b5563;
            line-height: 1.6;
            font-size: 16px;
            font-weight: 400
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] strong {
            color: #111827;
            font-weight: 600
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] a {
            color: #1a3d7a;
            font-weight: 600;
            text-decoration: underline;
            text-underline-offset: 2px
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] .faq-table {
            margin-top: 12px;
            overflow-x: auto
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] .faq-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: inherit;
            color: inherit
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] .faq-table th,
        .mfaq__answer[data-astro-cid-c5xvugsv] .faq-table td {
            padding: 10px 12px;
            border: 1px solid var(--accent);
            text-align: left;
            vertical-align: top;
            font-weight: inherit
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] .faq-table thead th {
            color: #fff;
            font-weight: 600;
            background: transparent;
            border-color: var(--accent-strong)
        }

        .mfaq__answer[data-astro-cid-c5xvugsv] .faq-table thead tr {
            background: var(--accent-gradient)
        }

        @media(max-width:960px) {
            .mfaq__inner[data-astro-cid-c5xvugsv] {
                grid-template-columns: 1fr
            }
        }

        @media(max-width:700px) {
            .mfaq[data-astro-cid-c5xvugsv] {
                padding: 67px 24px 43px
            }
        }

        .benefits[data-astro-cid-jfl2tvw5] {
            padding: 67px min(8vw, 110px);
            background: #fff
        }

        .benefits__inner[data-astro-cid-jfl2tvw5] {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            gap: 28px
        }

        .benefits__header[data-astro-cid-jfl2tvw5] h2[data-astro-cid-jfl2tvw5] {
            margin: 0 0 12px;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 500
        }

        .benefits__header[data-astro-cid-jfl2tvw5] p[data-astro-cid-jfl2tvw5] {
            margin: 0;
            color: #4b5563;
            font-size: .9375rem;
            line-height: 1.6;
            max-width: none;
            font-weight: 400
        }

        @media(min-width:1024px) {
            .benefits__header[data-astro-cid-jfl2tvw5] p[data-astro-cid-jfl2tvw5] {
                font-size: 1.125rem
            }
        }

        .benefits__stats[data-astro-cid-jfl2tvw5] {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0;
            align-items: start
        }

        .benefits__stat[data-astro-cid-jfl2tvw5] {
            display: grid;
            gap: 10px;
            padding: 0 24px;
            align-items: start;
            position: relative
        }

        .benefits__stat[data-astro-cid-jfl2tvw5]:first-child {
            padding-left: 0
        }

        .benefits__stat[data-astro-cid-jfl2tvw5]:last-child {
            padding-right: 0
        }

        .benefits__number[data-astro-cid-jfl2tvw5] {
            display: flex;
            align-items: flex-end;
            gap: 6px;
            color: var(--accent-strong);
            font-weight: 600;
            line-height: 1
        }

        .benefits__number[data-astro-cid-jfl2tvw5] span[data-astro-cid-jfl2tvw5]:first-child {
            font-size: clamp(48px, 5vw, 72px)
        }

        .benefits__unit[data-astro-cid-jfl2tvw5] {
            font-size: clamp(28px, 3vw, 40px);
            padding-bottom: 6px
        }

        .benefits__stat[data-astro-cid-jfl2tvw5] p[data-astro-cid-jfl2tvw5] {
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            color: #111827;
            max-width: none
        }

        .benefits__stat[data-astro-cid-jfl2tvw5]+.benefits__stat[data-astro-cid-jfl2tvw5] {
            border-left: 1px solid #e5e7eb
        }

        .benefits--compact[data-astro-cid-jfl2tvw5] .benefits__number[data-astro-cid-jfl2tvw5] span[data-astro-cid-jfl2tvw5]:first-child {
            font-size: clamp(28px, 3vw, 36px)
        }

        .benefits--compact[data-astro-cid-jfl2tvw5] .benefits__unit[data-astro-cid-jfl2tvw5] {
            font-size: clamp(20px, 2vw, 28px);
            padding-bottom: 3px
        }

        .benefits__footnote[data-astro-cid-jfl2tvw5] {
            border-top: 1px solid #e5e7eb;
            padding-top: 20px;
            display: grid;
            gap: 10px;
            font-size: 13px;
            color: #6b7280;
            font-weight: 400
        }

        .benefits__footnote[data-astro-cid-jfl2tvw5] a[data-astro-cid-jfl2tvw5] {
            color: #0f766e;
            text-decoration: underline;
            text-underline-offset: 4px;
            font-weight: 600
        }

        .benefits__ai-summary[data-astro-cid-jfl2tvw5] {
            border-top: 1px solid #e5e7eb;
            padding-top: 20px;
            display: grid;
            gap: 10px
        }

        .benefits__ai-header[data-astro-cid-jfl2tvw5] {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .benefits__ai-sparkle[data-astro-cid-jfl2tvw5] {
            width: 18px;
            height: 18px;
            flex-shrink: 0
        }

        .benefits__ai-summary[data-astro-cid-jfl2tvw5] p[data-astro-cid-jfl2tvw5] {
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
            color: #4b5563;
            font-weight: 400
        }

        @media(max-width:900px) {
            .benefits__stats[data-astro-cid-jfl2tvw5] {
                grid-template-columns: 1fr;
                gap: 20px
            }

            .benefits__stat[data-astro-cid-jfl2tvw5] {
                padding: 0
            }

            .benefits__stat[data-astro-cid-jfl2tvw5]+.benefits__stat[data-astro-cid-jfl2tvw5] {
                border-left: none;
                padding-left: 0
            }
        }

        @media(max-width:700px) {
            .benefits[data-astro-cid-jfl2tvw5] {
                padding: 59px 24px
            }
        }

        .how[data-astro-cid-yvrvggs3] {
            padding: 67px min(8vw, 110px);
            background: #fff;
            position: relative;
            z-index: 2
        }

        .how--overlap[data-astro-cid-yvrvggs3] {
            margin-top: -50px;
            padding-top: 0
        }

        .how__inner[data-astro-cid-yvrvggs3] {
            max-width: 1200px;
            margin: 0 auto
        }

        .how__header[data-astro-cid-yvrvggs3] h2[data-astro-cid-yvrvggs3] {
            margin: 0 0 12px;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 500
        }

        .how__header[data-astro-cid-yvrvggs3] p[data-astro-cid-yvrvggs3] {
            margin: 0;
            color: #4b5563;
            font-size: .9375rem;
            line-height: 1.6;
            max-width: 760px;
            font-weight: 400
        }

        @media(min-width:1024px) {
            .how__header[data-astro-cid-yvrvggs3] p[data-astro-cid-yvrvggs3] {
                font-size: 1.125rem
            }
        }

        .how__grid[data-astro-cid-yvrvggs3] {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 28px;
            margin-top: 20px
        }

        .how--overlap[data-astro-cid-yvrvggs3] .how__grid[data-astro-cid-yvrvggs3] {
            margin-top: 0
        }

        .how__step[data-astro-cid-yvrvggs3] {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background-color: #fff;
            border: var(--card-border);
            border-radius: 20px;
            padding: 24px
        }

        .how__image[data-astro-cid-yvrvggs3] {
            width: 100%;
            border-radius: 12px;
            overflow: hidden
        }

        .how__image[data-astro-cid-yvrvggs3] img[data-astro-cid-yvrvggs3] {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 12px
        }

        .how__grid--text-only[data-astro-cid-yvrvggs3] .how__step[data-astro-cid-yvrvggs3] {
            position: relative;
            min-height: 230px;
            background: linear-gradient(150deg, rgba(16, 185, 129, .08), transparent 58%), #fff
        }

        .how__step-number[data-astro-cid-yvrvggs3] {
            display: inline-flex;
            width: 42px;
            height: 42px;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            background: var(--accent-strong);
            color: #fff;
            font-size: 1rem;
            font-weight: 700
        }

        .how__grid--text-only[data-astro-cid-yvrvggs3] .how__step[data-astro-cid-yvrvggs3] h3[data-astro-cid-yvrvggs3] {
            margin-top: 24px
        }

        .how__step[data-astro-cid-yvrvggs3] h3[data-astro-cid-yvrvggs3] {
            margin: 18px 0 10px;
            font-size: 1rem;
            color: #111827;
            font-weight: 600
        }

        @media(min-width:1024px) {
            .how__step[data-astro-cid-yvrvggs3] h3[data-astro-cid-yvrvggs3] {
                font-size: 1.125rem
            }
        }

        .how__step[data-astro-cid-yvrvggs3] p[data-astro-cid-yvrvggs3] {
            margin: auto 0 0;
            color: #4b5563;
            line-height: 1.6;
            font-size: 14px;
            font-weight: 400
        }

        .how__cta[data-astro-cid-yvrvggs3] {
            margin-top: 32px
        }

        .how__cta-button[data-astro-cid-yvrvggs3] {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: .95rem 1.8rem;
            border-radius: 1rem;
            background: var(--cta-primary);
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: box-shadow .15s ease
        }

        .how__cta-button[data-astro-cid-yvrvggs3]:hover {
            box-shadow: 0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a
        }

        @media(max-width:700px) {
            .how[data-astro-cid-yvrvggs3] {
                padding: 59px 24px
            }

            .how--overlap[data-astro-cid-yvrvggs3] {
                margin-top: -32px
            }

            .how__step[data-astro-cid-yvrvggs3] {
                padding: 20px
            }

            .how__cta-button[data-astro-cid-yvrvggs3] {
                width: 100%
            }
        }

        .testimonial[data-astro-cid-iq3ewb3i] {
            padding: 40px min(8vw, 110px);
            background: var(--surface-tint)
        }

        .testimonial__inner[data-astro-cid-iq3ewb3i] {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 2rem;
            align-items: center
        }

        .testimonial__body[data-astro-cid-iq3ewb3i] {
            display: grid;
            gap: 1rem
        }

        .testimonial__body[data-astro-cid-iq3ewb3i] h2[data-astro-cid-iq3ewb3i] {
            margin: 0;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 500
        }

        .testimonial__text[data-astro-cid-iq3ewb3i] {
            display: grid;
            gap: 1rem;
            color: #374151;
            line-height: 1.6;
            font-size: 1rem;
            font-weight: 400
        }

        .testimonial__text[data-astro-cid-iq3ewb3i] p[data-astro-cid-iq3ewb3i] {
            margin: 0
        }

        .testimonial__text[data-astro-cid-iq3ewb3i] blockquote[data-astro-cid-iq3ewb3i] {
            margin: 10px 0 0;
            padding: .35rem 0;
            color: #111827;
            font-size: 1.0625rem;
            font-style: italic;
            font-weight: 400;
            line-height: 1.55
        }

        .testimonial__name[data-astro-cid-iq3ewb3i] {
            font-weight: 600;
            font-size: 1.125rem;
            color: #111827
        }

        .testimonial__link[data-astro-cid-iq3ewb3i] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--accent-strong);
            font-weight: 600;
            text-decoration: none
        }

        .testimonial__link[data-astro-cid-iq3ewb3i] svg[data-astro-cid-iq3ewb3i] {
            width: 18px;
            height: 18px;
            flex-shrink: 0
        }

        .testimonial__media[data-astro-cid-iq3ewb3i] {
            display: flex;
            justify-content: center
        }

        .testimonial__media[data-astro-cid-iq3ewb3i] img[data-astro-cid-iq3ewb3i] {
            border-radius: 1rem;
            object-fit: cover;
            width: 100%;
            max-width: 240px;
            height: auto;
            aspect-ratio: 4 / 5
        }

        .testimonial__before-after[data-astro-cid-iq3ewb3i] {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            width: min(100%, 520px)
        }

        .testimonial__before-after[data-astro-cid-iq3ewb3i] figure[data-astro-cid-iq3ewb3i] {
            position: relative;
            margin: 0;
            overflow: hidden;
            border-radius: 1rem;
            background: #e5e7eb
        }

        .testimonial__before-after[data-astro-cid-iq3ewb3i] img[data-astro-cid-iq3ewb3i] {
            display: block;
            width: 100%;
            height: 100%;
            aspect-ratio: 9 / 13;
            object-fit: cover
        }

        .testimonial__before-after[data-astro-cid-iq3ewb3i] figcaption[data-astro-cid-iq3ewb3i] {
            position: absolute;
            left: 10px;
            bottom: 10px;
            padding: .35rem .6rem;
            border-radius: 999px;
            background: #ffffffeb;
            color: var(--accent-strong);
            font-size: .75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .06em
        }

        @media(max-width:900px) {
            .testimonial__inner[data-astro-cid-iq3ewb3i] {
                grid-template-columns: 1fr;
                gap: 1.5rem
            }

            .testimonial__media[data-astro-cid-iq3ewb3i] {
                order: -1
            }

            .testimonial__media[data-astro-cid-iq3ewb3i] img[data-astro-cid-iq3ewb3i] {
                max-width: 200px
            }

            .testimonial__before-after[data-astro-cid-iq3ewb3i] {
                width: min(100%, 420px)
            }
        }

        @media(max-width:700px) {
            .testimonial[data-astro-cid-iq3ewb3i] {
                padding: 32px 24px
            }
        }

        .reviews[data-astro-cid-oprczqrd] {
            padding: 67px min(8vw, 110px);
            background: var(--surface-tint);
            overflow-x: hidden
        }

        .reviews__inner[data-astro-cid-oprczqrd] {
            max-width: 1200px;
            margin: 0 auto
        }

        .reviews__header[data-astro-cid-oprczqrd] {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 18px;
            flex-wrap: wrap
        }

        .reviews__title-group[data-astro-cid-oprczqrd] {
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .reviews__heading[data-astro-cid-oprczqrd] {
            margin: 0
        }

        .reviews__aggregate[data-astro-cid-oprczqrd] {
            display: flex;
            align-items: center;
            gap: 10px
        }

        .reviews__score[data-astro-cid-oprczqrd] {
            font-size: 14px;
            color: #1f2937;
            font-weight: 500
        }

        .reviews__trustpilot-brand[data-astro-cid-oprczqrd] {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #191919;
            flex: 0 0 auto
        }

        .reviews__trustpilot-star[data-astro-cid-oprczqrd] {
            font-size: 16px;
            line-height: 1;
            color: #00b67a
        }

        .reviews__header[data-astro-cid-oprczqrd]>a[data-astro-cid-oprczqrd] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--accent-strong);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px
        }

        .reviews__header[data-astro-cid-oprczqrd]>a[data-astro-cid-oprczqrd] svg[data-astro-cid-oprczqrd] {
            width: 18px;
            height: 18px
        }

        .reviews__grid[data-astro-cid-oprczqrd] {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 16px;
            margin-top: 24px;
            max-width: 100%;
            padding-bottom: 8px;
            -webkit-overflow-scrolling: touch;
            overscroll-behavior-x: contain;
            contain: layout paint
        }

        .reviews__card[data-astro-cid-oprczqrd] {
            background: #fff;
            border-radius: 16px;
            padding: 18px;
            border: var(--card-border);
            display: grid;
            gap: 10px;
            min-height: 280px;
            min-width: min(360px, calc(100vw - 64px));
            max-width: 360px;
            flex: 0 0 auto;
            scroll-snap-align: start
        }

        .reviews__author[data-astro-cid-oprczqrd] {
            margin: 0;
            font-size: 14px;
            font-weight: 500
        }

        .reviews__author[data-astro-cid-oprczqrd] a[data-astro-cid-oprczqrd],
        .reviews__review-title[data-astro-cid-oprczqrd] a[data-astro-cid-oprczqrd] {
            color: inherit;
            text-decoration: none
        }

        .reviews__author[data-astro-cid-oprczqrd] a[data-astro-cid-oprczqrd]:hover,
        .reviews__author[data-astro-cid-oprczqrd] a[data-astro-cid-oprczqrd]:focus-visible,
        .reviews__review-title[data-astro-cid-oprczqrd] a[data-astro-cid-oprczqrd]:hover,
        .reviews__review-title[data-astro-cid-oprczqrd] a[data-astro-cid-oprczqrd]:focus-visible {
            text-decoration: underline;
            text-underline-offset: .16em
        }

        .reviews__card[data-astro-cid-oprczqrd] header[data-astro-cid-oprczqrd] p[data-astro-cid-oprczqrd] {
            margin: 4px 0 0;
            color: #6b7280;
            font-size: 12px;
            font-weight: 400
        }

        .reviews__rating[data-astro-cid-oprczqrd] {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .reviews__stars[data-astro-cid-oprczqrd] {
            display: inline-flex;
            gap: 3px;
            color: #dcdce6
        }

        .reviews__sr-only[data-astro-cid-oprczqrd] {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .reviews__stars[data-astro-cid-oprczqrd] svg[data-astro-cid-oprczqrd] {
            width: 16px;
            height: 16px;
            fill: currentColor
        }

        .reviews__stars[data-astro-cid-oprczqrd] .is-active[data-astro-cid-oprczqrd] {
            color: var(--accent-strong)
        }

        .reviews__stars--large[data-astro-cid-oprczqrd] {
            gap: 2px
        }

        .reviews__stars--large[data-astro-cid-oprczqrd] svg[data-astro-cid-oprczqrd] {
            width: 24px;
            height: 24px
        }

        .reviews__star-wrapper[data-astro-cid-oprczqrd] {
            position: relative;
            display: inline-block
        }

        .reviews__star-bg[data-astro-cid-oprczqrd] {
            color: #dcdce6
        }

        .reviews__star-fill[data-astro-cid-oprczqrd] {
            position: absolute;
            top: 0;
            left: 0;
            color: var(--accent-strong)
        }

        .reviews__verified[data-astro-cid-oprczqrd] {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 11px;
            color: var(--accent-strong)
        }

        .reviews__verified[data-astro-cid-oprczqrd] svg[data-astro-cid-oprczqrd] {
            width: 12px;
            height: 12px
        }

        .reviews__review-title[data-astro-cid-oprczqrd] {
            margin: 0;
            font-size: 14px;
            font-weight: 500
        }

        .reviews__text[data-astro-cid-oprczqrd] {
            margin: 0;
            font-size: 12px;
            line-height: 1.6;
            color: #374151;
            font-weight: 400;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        .reviews__date[data-astro-cid-oprczqrd] {
            margin: auto 0 0;
            font-size: 12px;
            color: #6b7280;
            font-weight: 400
        }

        .reviews__footer[data-astro-cid-oprczqrd] {
            margin-top: 20px;
            display: flex;
            justify-content: flex-start
        }

        .reviews__trustpilot-link[data-astro-cid-oprczqrd] {
            display: inline-block;
            transition: opacity .2s ease
        }

        .reviews__trustpilot-link[data-astro-cid-oprczqrd]:hover {
            opacity: .8
        }

        .reviews__grid[data-astro-cid-oprczqrd]::-webkit-scrollbar {
            height: 8px
        }

        .reviews__grid[data-astro-cid-oprczqrd]::-webkit-scrollbar-thumb {
            background: #0f766e47;
            border-radius: 999px
        }

        .reviews__grid[data-astro-cid-oprczqrd]::-webkit-scrollbar-track {
            background: #e5e7ebe6;
            border-radius: 999px
        }

        @media(max-width:700px) {
            .reviews[data-astro-cid-oprczqrd] {
                padding: 59px 24px
            }

            .reviews__card[data-astro-cid-oprczqrd] {
                min-width: 80%;
                max-width: 80%
            }
        }

        .team[data-astro-cid-gkchqblh] {
            padding: 67px min(8vw, 110px);
            background: #fff;
            overflow-x: hidden
        }

        .team__inner[data-astro-cid-gkchqblh] {
            max-width: 1200px;
            margin: 0 auto
        }

        .team__header[data-astro-cid-gkchqblh] {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 18px;
            flex-wrap: wrap
        }

        .team__header-text[data-astro-cid-gkchqblh] {
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .team__header-text[data-astro-cid-gkchqblh] h2[data-astro-cid-gkchqblh] {
            margin: 0;
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 500
        }

        .team__header-text[data-astro-cid-gkchqblh] p[data-astro-cid-gkchqblh] {
            margin: 0;
            color: #4b5563;
            font-size: .9375rem;
            line-height: 1.6;
            font-weight: 400
        }

        @media(min-width:1024px) {
            .team__header-text[data-astro-cid-gkchqblh] p[data-astro-cid-gkchqblh] {
                font-size: 1.125rem
            }
        }

        .team__nav[data-astro-cid-gkchqblh] {
            display: flex;
            gap: 8px;
            flex-shrink: 0
        }

        .team__nav-btn[data-astro-cid-gkchqblh] {
            width: 44px;
            height: 44px;
            border: 1px solid #e5e7eb;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #374151;
            transition: all .2s
        }

        .team__nav-btn[data-astro-cid-gkchqblh]:hover:not(:disabled) {
            background: #f9fafb;
            border-color: #d1d5db
        }

        .team__nav-btn[data-astro-cid-gkchqblh]:disabled {
            opacity: .4;
            cursor: not-allowed
        }

        .team__carousel[data-astro-cid-gkchqblh] {
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
            overscroll-behavior-x: contain;
            margin-top: 24px
        }

        .team__carousel[data-astro-cid-gkchqblh]::-webkit-scrollbar {
            display: none
        }

        .team__track[data-astro-cid-gkchqblh] {
            display: flex;
            gap: 18px
        }

        .team__card[data-astro-cid-gkchqblh] {
            display: grid;
            gap: 10px;
            width: 280px;
            flex-shrink: 0;
            scroll-snap-align: start
        }

        .team__image[data-astro-cid-gkchqblh] {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 340px;
            background: var(--media-surface-gradient)
        }

        .team__image--placeholder[data-astro-cid-gkchqblh] {
            background: var(--surface-tint)
        }

        .team__image[data-astro-cid-gkchqblh] img[data-astro-cid-gkchqblh] {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            user-select: none;
            -webkit-user-drag: none;
            pointer-events: none
        }

        .team__meta[data-astro-cid-gkchqblh] .team__name[data-astro-cid-gkchqblh] {
            margin: 0;
            font-size: 18px;
            font-weight: 500
        }

        .team__meta[data-astro-cid-gkchqblh] .team__name[data-astro-cid-gkchqblh] a[data-astro-cid-gkchqblh] {
            color: inherit;
            text-decoration: none
        }

        .team__meta[data-astro-cid-gkchqblh] .team__name[data-astro-cid-gkchqblh] a[data-astro-cid-gkchqblh]:hover {
            text-decoration: underline;
            text-underline-offset: 3px
        }

        .team__meta[data-astro-cid-gkchqblh] p[data-astro-cid-gkchqblh] {
            margin: 4px 0 0;
            color: #6b7280;
            font-size: 14px;
            font-weight: 400
        }

        .team__meta[data-astro-cid-gkchqblh] .team__credentials[data-astro-cid-gkchqblh] {
            color: #374151
        }

        .team__meta[data-astro-cid-gkchqblh] .team__registration[data-astro-cid-gkchqblh] {
            color: #374151;
            font-size: 13px
        }

        .team__registration[data-astro-cid-gkchqblh] span[data-astro-cid-gkchqblh] {
            font-weight: 600
        }

        .team__registration[data-astro-cid-gkchqblh] a[data-astro-cid-gkchqblh] {
            color: inherit;
            text-decoration: none
        }

        .team__registration[data-astro-cid-gkchqblh] a[data-astro-cid-gkchqblh]:hover {
            text-decoration: underline;
            text-underline-offset: 3px
        }

        @media(max-width:700px) {
            .team[data-astro-cid-gkchqblh] {
                padding: 59px 24px
            }

            .team__header[data-astro-cid-gkchqblh] {
                flex-direction: column
            }

            .team__card[data-astro-cid-gkchqblh] {
                width: 220px
            }

            .team__image[data-astro-cid-gkchqblh] {
                height: 280px
            }
        }

        .reviewed[data-astro-cid-plwpaone] {
            padding: 48px min(8vw, 110px) 64px;
            background: #fff
        }

        .reviewed__inner[data-astro-cid-plwpaone] {
            max-width: 1200px;
            margin: 0 auto;
            border-top: 1px solid #e5e7eb;
            padding: 24px 0 0
        }

        .reviewed__blocks[data-astro-cid-plwpaone] {
            display: grid;
            gap: 20px
        }

        .reviewed__block[data-astro-cid-plwpaone] {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 24px;
            align-items: center
        }

        .reviewed__block--divider[data-astro-cid-plwpaone] {
            border-top: 1px solid #e5e7eb;
            padding-top: 20px
        }

        .reviewed__avatar[data-astro-cid-plwpaone] {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #e5e7eb;
            background: var(--surface-tint);
            display: flex;
            align-items: center;
            justify-content: center
        }

        .reviewed__avatar-image[data-astro-cid-plwpaone] {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center
        }

        .reviewed__content[data-astro-cid-plwpaone] {
            display: grid;
            gap: 6px
        }

        .reviewed__eyebrow[data-astro-cid-plwpaone] {
            margin: 0;
            text-transform: uppercase;
            letter-spacing: .12em;
            font-size: .7rem;
            font-weight: 600;
            color: #6b7280
        }

        .reviewed__name[data-astro-cid-plwpaone] {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            color: #111827
        }

        .reviewed__name[data-astro-cid-plwpaone] a[data-astro-cid-plwpaone] {
            color: inherit;
            text-decoration: none
        }

        .reviewed__name[data-astro-cid-plwpaone] a[data-astro-cid-plwpaone]:hover {
            text-decoration: underline;
            text-underline-offset: 3px
        }

        .reviewed__role[data-astro-cid-plwpaone] {
            margin: 0;
            font-size: .9375rem;
            color: #374151;
            font-weight: 500
        }

        .reviewed__separator[data-astro-cid-plwpaone] {
            margin: 0 8px;
            color: #9ca3af
        }

        .reviewed__role[data-astro-cid-plwpaone] a[data-astro-cid-plwpaone] {
            color: inherit;
            text-decoration: none
        }

        .reviewed__role[data-astro-cid-plwpaone] a[data-astro-cid-plwpaone]:hover {
            text-decoration: underline;
            text-underline-offset: 3px
        }

        .reviewed__intro[data-astro-cid-plwpaone] {
            margin: 6px 0 0;
            color: #4b5563;
            line-height: 1.6;
            font-size: .9375rem
        }

        .reviewed__intro--shared[data-astro-cid-plwpaone] {
            margin-top: 16px
        }

        .reviewed__date[data-astro-cid-plwpaone] {
            margin: 16px 0 0;
            font-weight: 600;
            color: #111827;
            font-size: .875rem
        }

        @media(max-width:700px) {
            .reviewed[data-astro-cid-plwpaone] {
                padding: 48px 24px
            }

            .reviewed__block[data-astro-cid-plwpaone] {
                grid-template-columns: 1fr;
                text-align: center
            }

            .reviewed__avatar[data-astro-cid-plwpaone] {
                display: none
            }
        }
    </style>
    <script data-cfasync="false" nonce="15d8c15e-c47d-4c40-9fd2-c142bd8b8215">
        try {
            (function(w, d) {
                ! function(lP, lQ, lR, lS) {
                    if (lP.zaraz) console.error("zaraz is loaded twice");
                    else {
                        lP[lR] = lP[lR] || {};
                        lP[lR].executed = [];
                        lP.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        lP.zaraz._v = "20";
                        lP.zaraz._n = "15d8c15e-c47d-4c40-9fd2-c142bd8b8215";
                        lP.zaraz.q = [];
                        lP.zaraz._f = function(lT) {
                            return async function() {
                                var lU = Array.prototype.slice.call(arguments);
                                lP.zaraz.q.push({
                                    m: lT,
                                    a: lU
                                })
                            }
                        };
                        for (const lV of ["track", "set", "debug"]) lP.zaraz[lV] = lP.zaraz._f(lV);
                        lP.zaraz.init = () => {
                            var lW = lQ.getElementsByTagName(lS)[0],
                                lX = lQ.createElement(lS),
                                lY = lQ.getElementsByTagName("title")[0];
                            lY && (lP[lR].t = lQ.getElementsByTagName("title")[0].text);
                            lP[lR].x = Math.random();
                            lP[lR].w = lP.screen.width;
                            lP[lR].h = lP.screen.height;
                            lP[lR].j = lP.innerHeight;
                            lP[lR].e = lP.innerWidth;
                            lP[lR].l = lP.location.href;
                            lP[lR].r = lQ.referrer;
                            lP[lR].k = lP.screen.colorDepth;
                            lP[lR].n = lQ.characterSet;
                            lP[lR].o = (new Date).getTimezoneOffset();
                            if (lP.dataLayer)
                                for (const lZ of Object.entries(Object.entries(dataLayer).reduce((l$, ma) => ({
                                        ...l$[1],
                                        ...ma[1]
                                    }), {}))) zaraz.set(lZ[0], lZ[1], {
                                    scope: "page"
                                });
                            lP[lR].q = [];
                            for (; lP.zaraz.q.length;) {
                                const mb = lP.zaraz.q.shift();
                                lP[lR].q.push(mb)
                            }
                            lX.defer = !0;
                            for (const mc of [localStorage, sessionStorage]) Object.keys(mc || {}).filter(me => me.startsWith("_zaraz_")).forEach(md => {
                                try {
                                    lP[lR]["z_" + md.slice(7)] = JSON.parse(mc.getItem(md))
                                } catch {
                                    lP[lR]["z_" + md.slice(7)] = mc.getItem(md)
                                }
                            });
                            lX.referrerPolicy = "origin";
                            lX.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(lP[lR])));
                            lW.parentNode.insertBefore(lX, lW)
                        };
                        ["complete", "interactive"].includes(lQ.readyState) ? zaraz.init() : lP.addEventListener("DOMContentLoaded", zaraz.init)
                    }
                }(w, d, "zarazData", "script");
                window.zaraz._p = async nK => new Promise(nL => {
                    if (nK) {
                        nK.e && nK.e.forEach(nM => {
                            try {
                                const nN = d.querySelector("script[nonce]"),
                                    nO = nN?.nonce || nN?.getAttribute("nonce"),
                                    nP = d.createElement("script");
                                nO && (nP.nonce = nO);
                                nP.innerHTML = nM;
                                nP.onload = () => {
                                    d.head.removeChild(nP)
                                };
                                d.head.appendChild(nP)
                            } catch (nQ) {
                                console.error(`Error executing script: ${nM}\n`, nQ)
                            }
                        });
                        Promise.allSettled((nK.f || []).map(nR => fetch(nR[0], nR[1])))
                    }
                    nL()
                });
                zaraz._p({
                    "e": ["(function(w,d){})(window,document)"]
                });
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>