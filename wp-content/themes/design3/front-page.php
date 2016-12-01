<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="home-section1">
		<div class="container">			
			<div class="col-sm-8 col-xs-12">
				<article>
					<?php the_content(); ?>
				</article>			
			</div>
		</div>
	</section>

	<?php get_template_part('tjanster'); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

