<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<!-- build:js scripts/vendor.js -->
<!-- bower:js -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/lodash/dist/lodash.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/chosen/chosen.jquery.min.js" ></script>
<!-- endbower -->
<!-- endbuild -->

<!-- build:js scripts/main.js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!-- endbuild -->

<script>
    var CONFIG = {
        templateUrl: '<?php echo get_template_directory_uri(); ?>',
        baseUrl: '<?php echo site_url(); ?>',
    };
</script>

<?php wp_footer(); ?>



</body>
</html>
