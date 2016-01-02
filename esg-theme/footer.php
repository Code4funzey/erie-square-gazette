
	<footer class="row full-width">
		<nav class="footer-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<div class="tagline-footer text-center">
				<?php echo get_bloginfo('description'); ?>
				<br>
				&copy <?php echo date("Y"); ?> <?php bloginfo('name'); ?> - All Rights Reserved.
			</div>
		</nav>			
	</footer>




  </div><!-- end of container-->
  </div> <!-- end of outside-container -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script>
	$(document).ready(function(){
		$('.hamburger-icon').click(function(){
			$('.mobile-links').slideToggle('fast', function(){});
		});
	});
</script>
<?php wp_footer() ?>
  </body>
</html>
