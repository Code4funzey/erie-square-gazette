<?php get_header(); ?>
	<main class="row full-width">
		<div class="large-9 medium-9 small-12 columns body-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					
					<!-- post container -->
					<div class="blogroll-post">
						<span id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>
						<br>
						<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
						<br>
<!-- 						<?php if ( has_post_thumbnail() ) {
						?>
							<div class="single-featured-image-container">
								<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php  the_post_thumbnail();?>
								</a>
							</div>		 
						<?php }?> -->
						<?php the_content(); ?> 				
					</div>
					<!-- end of post container -->



				<?php endwhile; ?>
					<!-- Previous and next posts -->
					<div class="navigation">
						<div class="float-left">
							<?php posts_nav_link('','','&laquo; Previous Posts') ?>
						</div>
						<div class="float-right">
							<?php posts_nav_link('','Next Entries &raquo;','') ?>
						</div>
					</div>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
			<?php endif; ?>
		</div>
		<div class="large-3 medium-3 small-12 columns right-sidebar" id="right-sidebar">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
	</main>
<?php get_footer(); ?>