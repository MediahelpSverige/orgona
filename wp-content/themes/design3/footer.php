<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/swiper/dist/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/script.js" ></script>


<footer>
	<div class="footer-top">
		<div class="container">
			<div class="col-sm-6 col-xs-12">
				<h4>
					Meny
				</h4>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'footer-menu', 'container_class' => 'menu-main-menu-container') ); ?>
				</nav>		
			</div>
			<div class="col-sm-6 col-xs-12">
				<?php the_field('footer-contact', 15); ?>
			</div>
		</div>
			</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="col-xs-12 text-center">
				<p>Copyright &copy; <?php bloginfo ( 'name' ); ?> <?php echo date('Y'); ?></p>			
			</div>
		</div>		
	</div>
</footer>


<?php wp_footer();?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/node_modules/lightbox2/dist/js/lightbox.min.js"></script>
</body>
</html>
