  
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="/public/js/main.js"></script>
    <script>
        (function() {
            const isDev = false;

            (() => {
                const pageTypeValue = document.body?.dataset.pageType || 'landing';
                const payload = {
                    event: 'page_viewed',
                    page_type: pageTypeValue,
                    timestamp: new Date().toISOString(),
                };

                if (typeof window !== 'undefined') {
                    if (typeof window.snowplow === 'function') {
                        window.snowplow('trackStructEvent', 'page', 'viewed', payload.page_type);
                    } else if (isDev) {
                        console.info('[analytics] page_viewed', payload);
                    }
                }
            })();
        })();
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || (a.contentWindow && a.contentWindow.document);
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'a3023b8d2ac5af03',t:'MTc4NzU3MzIwNA=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>