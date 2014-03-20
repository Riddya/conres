<!-- footer -->


<div class="tweets">
    <div class="container">
        <?php dynamic_sidebar('sidebar-twitter'); ?>
        <a class="followus" href="http://twitter.com/ConRes">Follow Us →</a>
    </div>
</div>




<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="inner">
                    <h4>About Continental Resources</h4>
                    <hr>
                    <p>
                        Businesses, higher education and government organizations rely on Continental Resources (ConRes)
                        for high technology products, services and support - from complete IT infrastructure and data
                        center solutions,
                        to test instrument sales and rentals, to building OEM/embedded computing devices.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="inner">
                    <ul class="slist">
                        <?php
                        $sites = wp_get_sites();

                        foreach ($sites as $site) {
                            $details = get_blog_details($site['blog_id']);
                            echo '<li><a href="' . $details->siteurl . '">' . $details->blogname . '</a></li>';
                        };
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="inner">
                    <ul class="slist">
                        <li><a href="/test-equipment-local-contacts">Contact us</a></li>
                        <li><a href="/careers">Careers with Conres</a></li>
                        <li><a href="/conres-privacy-pollicy">Privacy</a></li>
                        <li><a href="/conres-terms-and-conditions">Terms</a></li>
                        <li><a href="/site-map">sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footNote">
            © 2013 Continental Resources | (800) 937-4688
        </div>
    </div>

</footer>
<!-- /footer -->

<?php wp_footer(); ?>

<!-- analytics -->
<script>
    (function (f, i, r, e, s, h, l) {
        i['GoogleAnalyticsObject'] = s;
        f[s] = f[s] || function () {
            (f[s].q = f[s].q || []).push(arguments)
        }, f[s].l = 1 * new Date();
        h = i.createElement(r),
            l = i.getElementsByTagName(r)[0];
        h.async = 1;
        h.src = e;
        l.parentNode.insertBefore(h, l)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
</script>

</body>
</html>
