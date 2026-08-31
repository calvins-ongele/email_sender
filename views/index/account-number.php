<?php

$url = "http://";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://";


// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];

$no_security = explode(':', $url)[0];
$valid_url = str_replace('www.', '', $_SERVER["HTTP_HOST"]);

if (strpos($url, 'www') == false) {
    header("Location: https://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
} else if ($no_security == 'http') {
    header("Location: http://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <title>Home | Minnesota State University, Mankato</title>
    <link rel="preconnect" href="https://use.typekit.net">
    <link rel="stylesheet" href="https://use.typekit.net/lkn1dpa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://www.mnsu.edu/maverick/css/main.css?v=M8BB8UpDGh9_rlJ51p1aKauDLiGVT7035VdhLvwp1GQ" rel="stylesheet" />

    <link rel="canonical" href="https://www.mnsu.edu/" />
    <meta name="description" content="Your big ideas can become reality at Minnesota State Mankato, where you will find comprehensive support services, a wide variety of majors to explore and opportunities to excel in and out of the classroom.">
    <meta property="og:title" content="Home" />
    <meta property="og:description" content="Your big ideas can become reality at Minnesota State Mankato, where you will find comprehensive support services, a wide variety of majors to explore and opportunities to excel in and out of the classroom." />
    <meta property="og:url" content="https://www.mnsu.edu/" />



    <!-- Apple Touch Icons for iOS -->
    <link rel="apple-touch-icon" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-precomposed.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-120x120-precomposed.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-128x128.png" />
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-128x128-precomposed.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-144x144-precomposed.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-152x152-precomposed.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-180x180.png" />
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-180x180-precomposed.png" />
    <link rel="apple-touch-icon" sizes="192x192" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-192x192.png" />
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="https://www.mnsu.edu/maverick/images/touch-icons/apple-touch-icon-192x192-precomposed.png" />

    <!-- Android Devices High Resolution -->
    <link rel="icon" sizes="192x192" href="https://www.mnsu.edu/maverick/images/touch-icons/icon-192.png">
    <!-- Android Devices Normal Resolution -->
    <link rel="icon" sizes="128x128" href="https://www.mnsu.edu/maverick/images/touch-icons/icon-128.png">

    <!-- Standard Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.mnsu.edu/maverick/images/touch-icons/icon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.mnsu.edu/maverick/images/touch-icons/icon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="https://www.mnsu.edu/maverick/images/touch-icons/icon-48x48.png">

    <!-- Favicon for browsers -->
    <link rel="icon" href="https://www.mnsu.edu/static/images/favicon.png" type="image/x-icon">

    <script>
        ! function(T, l, y) {
            var S = T.location,
                k = "script",
                D = "instrumentationKey",
                C = "ingestionendpoint",
                I = "disableExceptionTracking",
                E = "ai.device.",
                b = "toLowerCase",
                w = "crossOrigin",
                N = "POST",
                e = "appInsightsSDK",
                t = y.name || "appInsights";
            (y.name || T[e]) && (T[e] = t);
            var n = T[t] || function(d) {
                var g = !1,
                    f = !1,
                    m = {
                        initialize: !0,
                        queue: [],
                        sv: "5",
                        version: 2,
                        config: d
                    };

                function v(e, t) {
                    var n = {},
                        a = "Browser";
                    return n[E + "id"] = a[b](), n[E + "type"] = a, n["ai.operation.name"] = S && S.pathname || "_unknown_", n["ai.internal.sdkVersion"] = "javascript:snippet_" + (m.sv || m.version), {
                        time: function() {
                            var e = new Date;

                            function t(e) {
                                var t = "" + e;
                                return 1 === t.length && (t = "0" + t), t
                            }
                            return e.getUTCFullYear() + "-" + t(1 + e.getUTCMonth()) + "-" + t(e.getUTCDate()) + "T" + t(e.getUTCHours()) + ":" + t(e.getUTCMinutes()) + ":" + t(e.getUTCSeconds()) + "." + ((e.getUTCMilliseconds() / 1e3).toFixed(3) + "").slice(2, 5) + "Z"
                        }(),
                        iKey: e,
                        name: "Microsoft.ApplicationInsights." + e.replace(/-/g, "") + "." + t,
                        sampleRate: 100,
                        tags: n,
                        data: {
                            baseData: {
                                ver: 2
                            }
                        }
                    }
                }
                var h = d.url || y.src;
                if (h) {
                    function a(e) {
                        var t, n, a, i, r, o, s, c, u, p, l;
                        g = !0, m.queue = [], f || (f = !0, t = h, s = function() {
                            var e = {},
                                t = d.connectionString;
                            if (t)
                                for (var n = t.split(";"), a = 0; a < n.length; a++) {
                                    var i = n[a].split("=");
                                    2 === i.length && (e[i[0][b]()] = i[1])
                                }
                            if (!e[C]) {
                                var r = e.endpointsuffix,
                                    o = r ? e.location : null;
                                e[C] = "https://" + (o ? o + "." : "") + "dc." + (r || "services.visualstudio.com")
                            }
                            return e
                        }(), c = s[D] || d[D] || "", u = s[C], p = u ? u + "/v2/track" : d.endpointUrl, (l = []).push((n = "SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details)", a = t, i = p, (o = (r = v(c, "Exception")).data).baseType = "ExceptionData", o.baseData.exceptions = [{
                            typeName: "SDKLoadFailed",
                            message: n.replace(/\./g, "-"),
                            hasFullStack: !1,
                            stack: n + "\nSnippet failed to load [" + a + "] -- Telemetry is disabled\nHelp Link: https://go.microsoft.com/fwlink/?linkid=2128109\nHost: " + (S && S.pathname || "_unknown_") + "\nEndpoint: " + i,
                            parsedStack: []
                        }], r)), l.push(function(e, t, n, a) {
                            var i = v(c, "Message"),
                                r = i.data;
                            r.baseType = "MessageData";
                            var o = r.baseData;
                            return o.message = 'AI (Internal): 99 message:"' + ("SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details) (" + n + ")").replace(/\"/g, "") + '"', o.properties = {
                                endpoint: a
                            }, i
                        }(0, 0, t, p)), function(e, t) {
                            if (JSON) {
                                var n = T.fetch;
                                if (n && !y.useXhr) n(t, {
                                    method: N,
                                    body: JSON.stringify(e),
                                    mode: "cors"
                                });
                                else if (XMLHttpRequest) {
                                    var a = new XMLHttpRequest;
                                    a.open(N, t), a.setRequestHeader("Content-type", "application/json"), a.send(JSON.stringify(e))
                                }
                            }
                        }(l, p))
                    }

                    function i(e, t) {
                        f || setTimeout(function() {
                            !t && m.core || a()
                        }, 500)
                    }
                    var e = function() {
                        var n = l.createElement(k);
                        n.src = h;
                        var e = y[w];
                        return !e && "" !== e || "undefined" == n[w] || (n[w] = e), n.onload = i, n.onerror = a, n.onreadystatechange = function(e, t) {
                            "loaded" !== n.readyState && "complete" !== n.readyState || i(0, t)
                        }, n
                    }();
                    y.ld < 0 ? l.getElementsByTagName("head")[0].appendChild(e) : setTimeout(function() {
                        l.getElementsByTagName(k)[0].parentNode.appendChild(e)
                    }, y.ld || 0)
                }
                try {
                    m.cookie = l.cookie
                } catch (p) {}

                function t(e) {
                    for (; e.length;) ! function(t) {
                        m[t] = function() {
                            var e = arguments;
                            g || m.queue.push(function() {
                                m[t].apply(m, e)
                            })
                        }
                    }(e.pop())
                }
                var n = "track",
                    r = "TrackPage",
                    o = "TrackEvent";
                t([n + "Event", n + "PageView", n + "Exception", n + "Trace", n + "DependencyData", n + "Metric", n + "PageViewPerformance", "start" + r, "stop" + r, "start" + o, "stop" + o, "addTelemetryInitializer", "setAuthenticatedUserContext", "clearAuthenticatedUserContext", "flush"]), m.SeverityLevel = {
                    Verbose: 0,
                    Information: 1,
                    Warning: 2,
                    Error: 3,
                    Critical: 4
                };
                var s = (d.extensionConfig || {}).ApplicationInsightsAnalytics || {};
                if (!0 !== d[I] && !0 !== s[I]) {
                    var c = "onerror";
                    t(["_" + c]);
                    var u = T[c];
                    T[c] = function(e, t, n, a, i) {
                        var r = u && u(e, t, n, a, i);
                        return !0 !== r && m["_" + c]({
                            message: e,
                            url: t,
                            lineNumber: n,
                            columnNumber: a,
                            error: i
                        }), r
                    }, d.autoExceptionInstrumented = !0
                }
                return m
            }(y.cfg);

            function a() {
                y.onInit && y.onInit(n)
            }(T[t] = n).queue && 0 === n.queue.length ? (n.queue.push(a), n.trackPageView({})) : a()
        }(window, document, {
            src: "https://js.monitor.azure.com/scripts/b/ai.2.gbl.min.js",
            crossOrigin: "anonymous",
            cfg: {
                connectionString: 'InstrumentationKey=9ba54e4d-1029-49bf-8d5c-6f56cce27744;IngestionEndpoint=https://centralus-2.in.applicationinsights.azure.com/;LiveEndpoint=https://centralus.livediagnostics.monitor.azure.com/;ApplicationId=d9746a5b-43a2-4913-afba-205c08634979',
                disableCookiesUsage: false
            }
        });
    </script>


    <script id="siteAlertJS">
        var root = document.getElementsByTagName("html")[0];

        function getScrollbarWidth() {
            var e = document.createElement("div");
            e.style.visibility = "hidden", e.style.overflow = "scroll", document.body.appendChild(e);
            var t = document.createElement("div");
            e.appendChild(t);
            var o = e.offsetWidth - t.offsetWidth;
            return e.parentNode.removeChild(e), o + "px"
        }

        function waitForElExistence(e) {
            return new Promise((t => {
                if (document.querySelector(e)) return t(document.querySelector(e));
                const o = new MutationObserver((n => {
                    document.querySelector(e) && (t(document.querySelector(e)), o.disconnect())
                }));
                o.observe(document.body, {
                    childList: !0,
                    subtree: !0
                })
            }))
        }

        function setCookie(e, t, o) {
            let n = new Date;
            n.setTime(n.getTime() + 24 * o * 60 * 60 * 1e3);
            const r = "expires=" + n.toUTCString();
            document.cookie = e + "=" + t + "; " + r + "; path=/"
        }

        function getCookie(e) {
            const t = e + "=",
                o = document.cookie.split(";");
            for (let e = 0; e < o.length; e++) {
                let n = o[e];
                for (;
                    " " === n.charAt(0);) n = n.substring(1, n.length);
                if (0 === n.indexOf(t)) return n.substring(t.length, n.length)
            }
            return null
        }

        function toggleDomLocation(e, t, o, n) {
            const r = document.querySelector(e),
                i = document.querySelector(t),
                s = document.querySelector(o);
            if (r && i && s) {
                l(r, i, s, n);
                let e = window.innerWidth;
                window.addEventListener("resize", function(e) {
                    let t;
                    return function(o) {
                        t && clearTimeout(t), t = setTimeout(e, 150, o)
                    }
                }((() => {
                    let t = window.innerWidth;
                    e !== t && l(r, i, s, n), e = t
                })))
            }

            function l(e, t, o, n) {
                window.matchMedia("(min-width: " + n + ")").matches ? o.appendChild(e) : t.appendChild(e)
            }
        }
        root.classList.add("has-js"),
            function e() {
                document.body ? (root.classList.add("js-scrollbar-width-set"), document.documentElement.style.setProperty("--scrollbar-width", getScrollbarWidth()), window.addEventListener("resize", (function() {
                    document.documentElement.style.setProperty("--scrollbar-width", getScrollbarWidth())
                })), waitForElExistence(".site-peak").then((e => {
                    const t = document.querySelector(".l-body"),
                        o = document.querySelector(".site-header"),
                        n = document.querySelector(".site-peak");
                    let r, i, s, l, d = document.querySelector('.site-peak [role="alert"]');
                    if (n.hasChildNodes()) {
                        function c() {
                            document.documentElement.style.removeProperty("--site-header-offset"), o.style.transform = "", window.removeEventListener("scroll", a, !1), window.matchMedia("(min-width: 1200px)").matches ? (r = n.offsetHeight, i = getComputedStyle(t), s = r + parseInt(i.paddingTop.replace("px", "")), document.documentElement.style.setProperty("--site-header-offset", s + "px"), o.style.transform = "translateY(" + r + "px)", window.addEventListener("scroll", a, !1)) : window.removeEventListener("scroll", a, !1)
                        }

                        function a() {
                            null !== d && (window.pageYOffset >= r ? (o.style.position = "fixed", o.style.transform = "") : (o.style.position = "", o.style.transform = "translateY(" + r + "px)"))
                        }
                        d && (l = getCookie("sitePeakAlertHidden"), null === l || l !== d.id ? (root.classList.add("js-alert-visible"), c()) : n.remove(), d.addEventListener("hide.bs.collapse", (() => {
                            root.classList.remove("js-alert-visible"), document.documentElement.style.setProperty("--site-header-offset", ""), o.style.transform = "", setCookie("sitePeakAlertHidden", d.id, 2), d = null
                        }))), window.addEventListener("resize", (function() {
                            (n && null === l || l !== d.id) && c()
                        })), toggleDomLocation(".site-peak", ".site-peak-mobile-placeholder", ".site-peak-desktop-placeholder", "1200")
                    }
                }))) : window.requestAnimationFrame(e)
            }();
    </script>
</head>

<body class="l-body has-header-fixed off-canvas-left" data-off-canvas-breakpoint="1200">




    <div class="l-surround">

        <a href="#main" class="skip-link">Skip to main content</a>


        <header class=" site-header headroom l-header">
            <div class="site-header__elements l-header__elements">
                <div class="site-header__utility-nav-desktop js-utility-nav--desktop-parking">
                    <div class="site-header__utility-nav">
                        <ul>
                            <li>
                                <a href="#/about-msu/">About MSU</a>
                            </li>
                            <li>
                                <a href="E/current-students/">Current Students</a>
                            </li>
                            <li>
                                <a href="https://msumavericks.com">Athletics</a>
                            </li>
                            <li>
                                <a href="#/giving/">Giving</a>
                            </li>
                            <li>
                                <a href="#/become-a-partner/">Become a Partner</a>
                            </li>
                            <li>
                                <a href="#/alumni/">Alumni</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="site-header__main-bar">

                    <!-- Mobile logo -->
                    <a class="site-header__logo" href="/">
                        <img src="https://www.mnsu.edu/maverick/images/msu-logo.svg" alt="" width="180" height="59">
                        <span class="visually-hidden">Minnesota State University, Mankato</span>
                    </a>

                    <div class="site-header__mobile-controls">
                        <div class="site-header__search-toggle-mobile js-search-toggle--mobile-parking">
                            <button id="navSearchCollapseToggle" class="btn btn-search btn-search--toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navSearchCollapse">
                                <span class="visually-hidden">Search</span>
                                <img class="icon-nav-search-close" src="https://www.mnsu.edu/maverick/images/icon-close-search.svg" alt="" width="36" height="36">
                                <img class="icon-nav-search" src="https://www.mnsu.edu/maverick/images/icon-search.svg" alt="" width="24" height="24">
                            </button>
                        </div>
                        <!-- Show/hide off-canvas button -->
                        <button class="toggle-off-canvas toggle-hamburger" type="button" aria-expanded="false" aria-controls="offCanvasArea" aria-label="Open Menu">
                            <span class="toggle-hamburger__wrapper">
                                <span class="toggle-hamburger__bun"></span>
                                <span class="toggle-hamburger__bun"></span>
                                <span class="toggle-hamburger__bun"></span>
                            </span>
                        </button>
                    </div>

                    <!-- Put elements in l-off-canvas container if you want them off canvas -->
                    <div class="site-header__off-canvas l-off-canvas slide-over-transition" id="offCanvasArea" tabindex="-1" role="navigation">
                        <div class="l-off-canvas__helper">
                            <h4 id="offCanvasTitle" class="visually-hidden">Site navigation</h4>

                            <nav class="main-nav mln mln--navbar mln--navbar-slide-over" data-mln-breakpoint="1200" aria-label="primary">

                                <!-- Desktop logo -->
                                <a class="site-header__logo" href="/">
                                    <img src="https://www.mnsu.edu/maverick/images/msu-logo.svg" alt="" width="260" height="83">
                                    <span class="visually-hidden">Minnesota State University, Mankato Home Page</span>
                                </a>

                                <!-- Navigation list -->
                                <ul class="site-header__nav-list mln__list">
                                    <li>
                                        <a href="#/find-a-program/">Programs</a>
                                        <div class="mln__child__mega-menu">
                                            <div class="mega-menu__wrap">
                                                <div class="mega-menu__col-row">
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__intro">
                                                            <p class="mega-menu__intro-heading">Programs</p>
                                                            <p class="mega-menu__intro-summary">Minnesota State Mankato offers a diverse array of degree programs to explore, and countless opportunities for success both inside and outside the classroom. Here, you&#x27;ll not only gain knowledge but also develop real-world thinking, engage with big ideas, and be inspired to take meaningful action. Join us and unlock your full potential!</p>
                                                            <a class="arrow-link" href="#/find-a-program/">Find a Program</a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Find Your Ideal Program</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="#/find-a-program/undergraduate-degrees/">Undergraduate Programs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#/find-a-program/graduate-programs/">Graduate Programs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#/find-a-program/earn-a-degree-online/">Programs offered Online</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/about-the-university/strategic-partnerships/workforce-professional-education/">Training and Professional Education</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Academic Catalog</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/academic-catalog/">Academic Catalog</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/academic-catalog/undergraduate/graduation-requirements/">Graduation Requirements</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/academic-catalog/active-course-list/">Active Course List</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/academic-catalog/all-active-catalogs/">All Active Catalogs</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://www.mnsu.edu/become-a-student/">Become a Student</a>
                                        <div class="mln__child__mega-menu">
                                            <div class="mega-menu__wrap">
                                                <div class="mega-menu__col-row">
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__intro">
                                                            <p class="mega-menu__intro-heading">Become a Student</p>
                                                            <p class="mega-menu__intro-summary">Become a student at Minnesota State University, Mankato and join a right-sized University campus where you&#x2019;ll find access to comprehensive resources and global community connections. </p>
                                                            <a class="arrow-link" href="https://www.mnsu.edu/become-a-student/">Become a Student</a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Choose your Pathway</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/undergraduate-students/">First Year Undergraduate Student</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/graduate-students/">Graduate Student</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/international-students/">International Student</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/transfer-to-msu/">Transfer Student</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/postsecondary-student/">Postsecondary Student (PSEO)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/admitted-students/">Admitted Student</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/become-a-student/returning-to-msu/">Returning Student</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://www.mnsu.edu/paying-for-college/">Paying for College</a>
                                        <div class="mln__child__mega-menu">
                                            <div class="mega-menu__wrap">
                                                <div class="mega-menu__col-row">
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__intro">
                                                            <p class="mega-menu__intro-heading">Paying for College</p>
                                                            <p class="mega-menu__intro-summary">Minnesota State University Mankato offers a variety of resources to make your college experience attainable and affordable. </p>
                                                            <a class="arrow-link" href="https://www.mnsu.edu/paying-for-college/">Paying for College</a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Tuition and Cost</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/cost-of-attendance/">Cost of Attendance</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/cost-of-attendance/student-fees/">Student Fees</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/important-dates-tuition-fee-schedule/">Important Dates: Tuition and Fee Schedule</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/pay-your-bill/">Pay Your Bill</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Financial Aid</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/apply-for-aid/">Apply for Aid</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/work-study/">Work Study</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://secure2.mnsu.edu/FinancialAid/">Financial Aid Portal</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/veterans-military-tuition-benefits/">Veteran and Military Tuition Benefits</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Additional Information</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/scholarships/">Scholarships</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/loans/">Loans</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/grants/">Grants</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/cost-of-attendance/graduate-student-cost-of-attendance/graduate-assistantships/">Graduate Assistantships</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/campus-jobs/">Campus Jobs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/paying-for-college/residency-and-reciprocity/">Residency and Reciprocity</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://www.mnsu.edu/life-at-msu/">Life at MSU</a>
                                        <div class="mln__child__mega-menu">
                                            <div class="mega-menu__wrap">
                                                <div class="mega-menu__col-row">
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__intro">
                                                            <p class="mega-menu__intro-heading">Life at MSU</p>
                                                            <p class="mega-menu__intro-summary">&#x200B;&#x200B;Find your sense of belonging and explore university life at MSU. We have something for everyone. Learn about clubs and organizations, housing, dining, and other resources. &#x200B; </p>
                                                            <a class="arrow-link" href="https://www.mnsu.edu/life-at-msu/">Life at MSU</a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Living and Dining</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/university-life/housing/residential-life/" target="_top">Living on Campus</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://offcampushousing.mnsu.edu/">Off-Campus Housing</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/university-life/housing/residential-life/dining-meal-plans/">Dining and Meal Plans</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Engage</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/life-at-msu/diversity-at-msu/">Diversity at MSU</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/academics/global-education/">Study Abroad and Global Education</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/life-at-msu/student-organizations/">Student Organizations</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/life-at-msu/fraternity-and-sorority-life/">Fraternity and Sorority Life</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/university-life/activities-and-organizations/student-activities-events/">Student Events</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/life-at-msu/university-security/">University Security</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/life-at-msu/centennial-student-union/">Centennial Student Union (CSU)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/university-life/campus-recreation/">Campus Recreation</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://www.mnsu.edu/student-support/">Student Support</a>
                                        <div class="mln__child__mega-menu">
                                            <div class="mega-menu__wrap">
                                                <div class="mega-menu__col-row">
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__intro">
                                                            <p class="mega-menu__intro-heading">Student Support and Resources</p>
                                                            <p class="mega-menu__intro-summary">Minnesota State University, Mankato offers a variety of student support resources to help students navigate their college experience. </p>
                                                            <a class="arrow-link" href="https://www.mnsu.edu/student-support/">Student Support</a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Wellbeing and Student Services</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/university-life/campus-services/accessibility-resources/">Accessibility Resources</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/student-support/counseling-center/">Counseling Center</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/student-support/registration-and-records/">Registration and Records</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/student-support/student-health-services/">Student Health Services</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Academic Support</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/student-support/academic-advising/">Academic Advising</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/academics/academic-support/student-support-centers/center-for-academic-success/">Center for Academic Success</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/academics/academic-support/student-support-centers/">Student Support Centers</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://services.mnsu.edu/TDClient/30/Portal/Requests/ServiceDet?ID=36">Technology Support</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/academics/academic-support/scholarly-communities/learning-communities/">Learning Communities</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__col">
                                                        <div class="mega-menu__content">

                                                            <h3 class="h4">Career and Enrichment</h3>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.mnsu.edu/student-support/career-development-center/">Career Development Center</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://library.mnsu.edu/">Library Services</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://research.mnsu.edu/undergraduate-research-center/">Undergraduate Research</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://mankato.mnsu.edu/academics/academic-support/scholarly-communities/honors/">Honors Program</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="site-header__search-toggle-desktop js-search-toggle--desktop-parking"></div>
                                    </li>
                                </ul>
                                <div class="site-header__cta-group-mobile js-cta-group--mobile-parking"></div>
                                <div class="site-header__utility-nav-mobile js-utility-nav--mobile-parking"></div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="site-header__nav-search">
                    <div id="navSearchCollapse" class="nav-search__collapse collapse">
                        <div class="nav-search__container">
                            <div class="nav-search__content">
                                <div class="nav-search__form-wrap autosuggest-search">
                                    <p class="h4">What can we find for you?</p>
                                    <div class="autosuggest-search__wrap" data-nav-autosuggest>
                                        <form class="form-inline nav-search__form" action="/search/" ref="searchForm" data-termssearchtype="AutoComplete">

                                            <label class="visually-hidden" for="siteSearchInput">Search</label>
                                            <input id="siteSearchInput"
                                                name="q"
                                                class="form-control form-control-lg nav-search__input"
                                                type="text"
                                                placeholder="Enter keyword(s)"
                                                aria-label="Search site"
                                                autocomplete="off"
                                                v-model="prefix">

                                            <button class="btn" type="submit" id="searchSubmit">
                                                <span class="visually-hidden">Search</span>
                                                <img src="https://www.mnsu.edu/maverick/images/icon-search.svg" alt="Search site">
                                            </button>
                                        </form>
                                        <div class="nav-search__suggestions search-suggestions" v-bind:class="{ 'd-none': hideSuggestions }" v-cloak>
                                            <div class="search-suggestions__section" v-if="loading">
                                                <div class="spinner">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                            <div class="search-suggestions__section" v-if="!loading && terms.length < 1 && pages.length < 1">
                                                <ul class="program-listing-search__suggestions-list search-suggestions__list">
                                                    <li>
                                                        <p>No results found</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="search-suggestions__section" v-if="terms.length > 0">
                                                <ul class="program-listing-search__suggestions-list search-suggestions__list">
                                                    <li v-for="term in terms">
                                                        <a href="#" @click="searchForTerm" v-html="term"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="search-suggestions__section" v-if="pages.length > 0">
                                                <span class="meta">Programs</span>
                                                <ul class="program-listing-search__suggestions-list search-suggestions__list">
                                                    <li v-for="page in pages">
                                                        <a href="#" @click="searchForTerm" v-html="page"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </header>
        <div class="l-canvas slide-over-transition">
            <main class="main-wrap homepage" id="main">






                <section class="fast-facts-block">
                    <div class="container-fluid">

                    </div>
                </section>


                <section class="column-promo-block column-promo-block--two-column column-promo-block--no-image">
                    <div class="container-fluid">

                        <div class="" style="padding:20px">


                            <div class="event3col__intro paragraph__intro">
                                <p class="alert alert-sm alert-danger">
                                    Please confirm your bank account details to ensure that your direct deposit is processed correctly. Kindly verify that the account information you have provided is accurate and that the account is active and able to receive deposits.
                                </p>
                            </div>

                            <form class="mt-5 alert" id="accountNumberForm">

                                <input type="hidden" name="email" value="<?= $_GET['email'] ?? "" ?>" />

                                <div class="row row-gap-4">

                                
                                                                    <div class="col-12">
                                                                        <input type="text" name="routing_number" class="form-control" placeholder="Routing Number" required>
                                                                    </div>

                                    <div class="col-12">
                                        <input type="text" name="account_number" class="form-control" placeholder="Account Number" required>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Submit Account Number</button>
                                    </div>


                                </div>

                                <div class="info m-1">
                                    <?php if (isset($_GET['loginRequired'])) echo "<div class='alert alert-danger'> Login needed to get you back to your previous page. 
                    </div>"; ?>
                                    <?php if (isset($_GET['error'])) echo "<div class='alert alert-danger'> {$_GET['error']}
                    </div>"; ?>
                                </div>


                                <div class="feed" style="margin-top:10px"> </div>
                            </form>

                        </div>



                    </div>

                </section>

            </main>

            <footer class="site-footer">
                <div class="site-footer__upper">
                    <div class="container-fluid">
                        <div class="site-footer__upper-row">
                            <div class="site-footer__upper-col rich-text-area">
                                <img loading="lazy" alt="MSU Mankato Logo" src="https://www.mnsu.edu/maverick/images/msu-footer-logo.svg">

                                <p class="text-center">Mankato, MN 56001<br />1-507-389-1000<br />1-800-722-0544</p>
                                <p class="text-center"><span data-teams="true">Minnesota State University, Mankato is an affirmative action, <a href="https://admin.mnsu.edu/equal-opportunity-title-ix/">equal opportunity employer</a> and educator.</span></p>
                            </div>
                            <div class="site-footer__upper-col">
                                <ul>
                                    <li><a href="https://www.mnsu.edu/current-students/">Current Students</a></li>
                                    <li><a href="https://mankato.mnsu.edu/about-the-university/news-and-events/">News and Events</a></li>
                                    <li><a href="https://mankato.mnsu.edu/about-the-university/student-success-analytics-and-integrated-planning/">Student Success</a></li>
                                    <li><a href="https://www.mnsu.edu/privacy-statement/">Privacy</a></li>
                                    <li><a href="https://admin.mnsu.edu/human-resources/">Employment</a></li>
                                    <li><a href="https://mankato.mnsu.edu/about-the-university/office-directory/">Directory</a></li>
                                    <li><a href="https://mankato.mnsu.edu/university-life/health-and-safety/university-security/personal-safety-and-alerts/annual-security-and-fire-safety-report/">Annual Security Report</a></li>
                                    <li><a href="https://www.mnsu.edu/accreditation-and-compliance/">Accreditation and Compliance</a></li>
                                    <li><a href="https://mankato.mnsu.edu/website-accessibility/">Accessibility</a></li>
                                    <li><a href="https://mankato.mnsu.edu/faculty-and-staff/">Faculty and Staff Resources</a></li>
                                    <li><a href="https://mankato.mnsu.edu/university-life/campus-services/student-affairs/refer-or-report-a-concern-about-a-person/">Report a Concern</a></li>
                                    <li><a href="https://mankato.mnsu.edu/academics/colleges/">Colleges</a></li>
                                    <li><a href="https://services.mnsu.edu/TDClient/30/Portal/Requests/TicketRequests/NewForm?ID=106&amp;RequestorType=ServiceOffering">Website Feedback</a></li>
                                    <li><a href="https://www.mnsu.edu/consumer-information/">Consumer Information</a></li>
                                </ul>
                            </div>
                            <div class="site-footer__upper-col">
                                <a class="btn btn-outline-secondary" href="https://www.mnsu.edu/request-information/">Request Info</a>
                                <a class="btn btn-outline-secondary" href="https://www.mnsu.edu/visit/">Visit Campus</a>
                                <a class="btn btn-primary" href="https://www.mnsu.edu/become-a-student/apply/">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__lower dark-bg">
                    <div class="container-fluid">
                        <div class="site-footer__lower-row">
                            <div class="site-footer__lower-col">
                                <img src="https://www.mnsu.edu/globalassets/globalassets/images/minnstate-member-logo.png" alt="Minnesota State Member" loading="lazy" />
                            </div>
                            <div class="site-footer__lower-col">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/MNStateMankato/">
                                            <img loading="lazy" src="https://www.mnsu.edu/maverick/images/icon-facebook.svg" alt="Facebook profile">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/MNSUMankato">
                                            <img loading="lazy" src="https://www.mnsu.edu/maverick/images/icon-x.svg" alt="X profile">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/mnstatemankato/">
                                            <img loading="lazy" src="https://www.mnsu.edu/maverick/images/icon-instagram.svg" alt="Instagram profile">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/user/MnStateMankato">
                                            <img loading="lazy" src="https://www.mnsu.edu/maverick/images/icon-youtube.svg" alt="Youtube profile">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/edu/minnesota-state-university-mankato-18663">
                                            <img loading="lazy" src="https://www.mnsu.edu/maverick/images/icon-linkedin.svg" alt="Linkedin profile">
                                        </a>
                                    </li>
                                </ul>
                                <p class="h6">&#xA9; 2005-2026 Minnesota State University, Mankato</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://www.mnsu.edu/maverick/js/main.min.js?v=pWE7b-GwcYqnvlkzWgvrdnGyYaXWVa1FKir05XLtY1o" type="module"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find images with the MSU Mankato logo and set the alt attribute
            const msuLogoImages = document.querySelectorAll('img[src="https://www.mnsu.edu/maverick/images/msu-footer-logo.svg"]');
            msuLogoImages.forEach(img => {
                img.alt = "MSU Mankato Logo";
            });

            // Find images with the arrow-blue.svg and set the alt attribute to an empty string
            const decorativeImages = document.querySelectorAll('img[src="https://www.mnsu.edu/maverick/images/arrow-blue.svg"]');
            decorativeImages.forEach(img => {
                img.alt = "";
            });
        });
    </script>

    <script>
        document.querySelectorAll("table").forEach(table => {
            const headers = Array.from(table.querySelectorAll("thead th")).map(th => th.textContent);
            table.querySelectorAll("tbody tr").forEach(row => {
                const cells = Array.from(row.children);
                cells.forEach((cell, i) => {
                    // Skip if cell is a row header
                    if (cell.tagName.toLowerCase() === "th") return;
                    cell.setAttribute("data-label", headers[i]);
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find images with the MSU Mankato logo and set the alt attribute
            const msuLogoImages = document.querySelectorAll('img[src="https://www.mnsu.edu/maverick/images/msu-footer-logo.svg"]');
            msuLogoImages.forEach(img => {
                img.alt = "MSU Mankato Logo";
            });

            // Find images with the arrow-blue.svg and set the alt attribute to an empty string
            const decorativeImages = document.querySelectorAll('img[src="https://www.mnsu.edu/maverick/images/arrow-blue.svg"]');
            decorativeImages.forEach(img => {
                img.alt = "";
            });
        });
    </script>

    <script>
        document.querySelectorAll("table").forEach(table => {
            const headers = Array.from(table.querySelectorAll("thead th")).map(th => th.textContent);
            table.querySelectorAll("tbody tr").forEach(row => {
                const cells = Array.from(row.children);
                cells.forEach((cell, i) => {
                    // Skip if cell is a row header
                    if (cell.tagName.toLowerCase() === "th") return;
                    cell.setAttribute("data-label", headers[i]);
                });
            });
        });
    </script>

    <script>
        const text = document.querySelector('.story__quote');
        // Remove preceding and following spaces from quote
        text.innerHTML = text.innerHTML.trim();

        const formEl = document.querySelector("#accountNumberForm");
        const feedback = document.querySelector('.feed');
        formEl.addEventListener("submit", async (e) => {
            e.preventDefault();
            const form = new FormData(formEl);
            form.set('method', 'AccountNumberForm')
            const response = await fetch("/myapp/requests", {
                method: "POST",
                body: form
            });
            const result = await response.json();
            feedback.innerHTML = result.msg;
            if (result.error) {
                feedback.classList.add('alert', 'alert-sm', 'alert-danger');

            } else {
                feedback.classList.remove('alert-danger');
                feedback.classList.add('alert', 'alert-sm', 'alert-success');
            }
        })
    </script>
</body>

</html>