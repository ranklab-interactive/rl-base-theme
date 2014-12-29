<div class="row clearfix">
    <footer class="large-12 columns ">
    	<!-- logo -->
		<div class="logo-footer">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/style/images/logo.png" alt="Logo" class="logo-footer">
			</a>
		</div>
		<!-- /logo -->
        <div id="copyright">&copy;<?php echo date("Y "); echo stripslashes(get_option('ranklab_copyright')); ?></div>
    </footer>
</div><!-- end footer-container -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.equalizer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
  <script>
    $(document).foundation({
/* TODO -  Customize Sidr menu if applicable*/       
});
    $(document).ready(function(){
        $('#device-menu').sidr({
            name: 'sidr-left',
            body: '.device-only',
            side: 'left',
            source: '.menu-nav-header'
        });
        $('#more-menu').sidr({
            name: 'sidr-inner',
            body: '.false-body',
            renaming: false,
            side: 'new',
            source: '.more-menu-nav-header'
        });
/* TODO -  Customize Slick Slider */
    $('.home-block-2-slider-scroll').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        useCSS: false
    });
    });
</script>
</body>
</html>
