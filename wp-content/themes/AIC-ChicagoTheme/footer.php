</section>
<!--<footer class="row">
    <?php //do_action('foundationPress_before_footer'); ?>
    <?php //dynamic_sidebar("footer-widgets"); ?>
    <?php //do_action('foundationPress_after_footer'); ?>
</footer>-->

<!--end content-->

<footer>
    <div class="row">
        <div class="medium-3 columns" id="newsletter">
            <h4>Newsletter Signup</h4>

            <form action="" method="post">
                <input type="text" name="name" id="newsletter_name" placeholder="NAME"/>
                <input type="email" name="email" id="newsletter_email" placeholder="E-MAIL"/>

                <div class="row">
                    <div class="columns right-align">
                        <input class="button right-align" type="submit" value="Submit"/>
                    </div>
                </div>
                <hr/>
            </form>
        </div>
        <div class="medium-6 columns">
            <h4>Links</h4>

            <div class="row">
                <div class="small-6 columns">
                    <ul class="side-nav" id="footer_nav_left">
                        <li><a href="us.html">About Us</a></li>
                        <li><a href="history.html">History</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="powwow.html">Powwows</a></li>
                        <li><a href="opportunities.html">Opportunities</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="membership.html">Membership</a></li>
                    </ul>
                </div>
                <div class="small-6 columns">
                    <ul class="side-nav" id="footer_nav_right">
                        <li><a href="education.html">Education</a></li>
                        <li><a href="arts.html">Arts</a></li>
                        <li><a href="wellness.html">Wellness</a></li>
                        <li><a href="activities.html">Activities</a></li>
                        <li><a href="photos.html">Photos</a></li>
                        <li><a href="videos.html">Videos</a></li>
                        <li><a href="store.html">Store</a></li>
                        <li><a href="donate.html">Donate</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="medium-3 columns text-center" id="social_links">
            <div class="icon-three-men" data-icon="f"></div>

            <div class="row">
                <div class="small-4 columns">
                    <a href="https://www.facebook.com/AmericanIndianCenter" class="icon-facebook" data-icon="c"></a>
                </div>
                <div class="small-4 columns">
                    <a href="https://twitter.com/native_chicago" class="icon-twitter" data-icon="g"></a>
                </div>
                <div class="small-4 columns">
                    <a href="https://www.flickr.com/photos/aic-chicago/" class="icon-flickr" data-icon="d"></a>
                </div>
            </div>
            <div id="copyright">
                <p>Copyright © American Indian Center of Chicago. <br/> All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<a class="exit-off-canvas"></a>

<?php do_action('foundationPress_layout_end'); ?>
</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
<script src="http://doomsdaytuesday.com/aic-chicago/wp-content/themes/AIC-ChicagoTheme/js/vendor/jquery.js"></script>
<script src="http://doomsdaytuesday.com/aic-chicago/wp-content/themes/AIC-ChicagoTheme/js/foundation.js"></script>
<script src="http://doomsdaytuesday.com/aic-chicago/wp-content/themes/AIC-ChicagoTheme/js/custom/init-foundation.js"></script>
<script src="http://doomsdaytuesday.com/aic-chicago/wp-content/themes/AIC-ChicagoTheme/assets/bower_components/slick.js/slick/slick.js"></script>

<script>
    $(document).foundation();
</script>
</body>
</html>
