<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-89987232-1', 'auto');
    ga('send', 'pageview');
    var myVar;
    function loader() {
        myVar = setTimeout(showPage, 3000);
    }
    function showPage() {
        console.log('here');
        document.getElementById("loader").style.display = "none";
        document.getElementById("root").style.display = "block";
        // document.getElementsByTagName("body").style.display('load');
    }
</script>
