<?php get_header(); ?>
	<main class="row full-width">
		<div class="large-9 medium-9 small-12 columns body-content">
			<?php if (have_posts()) : ?>
				<?php $i = 0; ?>
				<?php while (have_posts()) : the_post(); ?>

					

					<!-- post container -->
					<div class="blogroll-post">
						<!-- thumnail loop -->
						<?php if ( has_post_thumbnail() ) {
						?>
							<div class="blogroll-post-img-container">
								<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php  the_post_thumbnail();?>
								</a>
							</div>		 
						<?php }?>
						<!-- end of thumbnail loop -->
						<span id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>
						<br>
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