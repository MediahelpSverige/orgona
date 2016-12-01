<section class="home-section2">
	<div class="container">
		<div class="col-xs-12">
			<h3>
				<?php the_field('home-tjanster'); ?>
			</h3>				
		</div>

		<?php 
		$the_query = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 6, 'order' => 'ASC' )); ?>

		<?php if ( $the_query->have_posts() ) : ?>
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>
				<div class="col-sm-4 col-xs-12">
					<a href="<?php the_permalink(); ?>" class="home-tjanster" style="background-image: url('<?php echo $thumb['0'];?>')">

						<h3>
							<?php the_title(); ?>
						</h3>							
					</a>						
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>			
	</div>
</section>