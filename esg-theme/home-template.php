<?php /* Template Name: Homepage Template */ ?>

<?php get_header(); ?>
	<main class="row full-width homepage">
		<div class="large-12 medium-12 small-12 columns body-content front-page">
			<!-- Featured article -->
			<?php query_posts('cat=110'); ?>
			<div class="row">
				<div class="large-12 columns home-cat-link">
					<?php
					    // Get the ID of a given category
					    $category_id = get_cat_ID( 'Featured' );

					    // Get the URL of this category
					    $category_link = get_category_link( $category_id );
					?>

					<!-- Print a link to this category -->
					<a href="<?php echo esc_url( $category_link ); ?>" title="Featured Article ">Featured Article </a>
				</div>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
				<?php if ( has_post_thumbnail() ) {
				?>
					<div class="front-page-post-1-container row full-width home-section-padding-top">
						<div class="large-6 medium-12 small-12 columns front-page-image-1 remove-gutters-medium remove-gutters-left-large">
							<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php  the_post_thumbnail();?>
							</a>
						</div>		 
					<?php }?>
						<div class="large-6 medium-12 small-12 columns front-page-excerpt-1 remove-gutters-medium">
							<span class="front-page-title-1 ">
								<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title() ?> 
								</a>
							</span>
						    <?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,1000);
							?>
							<a href="<?php the_permalink() ?>" class="read-more-link" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								Read More 
							</a>
					    </div>
					</div>
			<?php endwhile; endif; ?>
			<div class="bar"></div>
			<!-- reset loop query -->
			<?php wp_reset_query(); ?>

			<!-- Campus Events -->
			<?php query_posts('cat=10'); ?>
			<?php $i = 0; ?> 
				<div class="large-12 columns home-cat-link" style="padding-left:0px; padding-top:10px;">
					<?php
					    // Get the ID of a given category
					    $category_id = get_cat_ID( 'campus-events' );

					    // Get the URL of this category
					    $category_link = get_category_link( $category_id );
					?>

					<!-- Print a link to this category -->
					<a href="http://www.esgonline.org/index.php/category/campus-events/" title="campus-events">Campus</a>
				</div>
					<div class="front-page-post-2-container row full-width  remove-gutters-right-large"><!-- start the row -->
			<?php if ( have_posts() ) : while ( have_posts() && $i < 3 ) : the_post(); ?> 
				<?php if ( has_post_thumbnail() ) {
				?>	
						<div class="large-4 medium-12 small-12 columns front-page-image-2 home-section-padding-top">
							<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php  the_post_thumbnail();?>
							</a>
							<br>	
							<span class="front-page-title-2 ">
								<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title() ?> 
								</a>
							</span> 
							<br>
					<?php }?>
						    <?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,80);
							?>
							<a href="<?php the_permalink() ?>" class="read-more-link" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								Read More 
							</a>
						</div>	
			<?php $i++; ?>
			<?php endwhile; endif; ?>
					</div><!-- end the row -->
					<br>
					<div class="bar"></div>
			<!-- reset loop query -->
			<?php wp_reset_query(); ?>		


			<!-- Local news -->
			<?php query_posts('cat=4'); ?>
			<?php $i = 0; ?> 
				<div class="large-12 columns home-cat-link" style="padding-left:0px; padding-top:10px;">
					<?php
					    // Get the ID of a given category
					    $category_id = get_cat_ID( 'community' );

					    // Get the URL of this category
					    $category_link = get_category_link( $category_id );
					?>
					<!-- Print a link to this category -->
					<a href="<?php echo esc_url( $category_link ); ?>" title="Community">Community</a>
				</div>
					<div class="front-page-post-3-container row full-width "><!-- start the row -->
			<?php if ( have_posts() ) : while ( have_posts() && $i < 2 ) : the_post(); ?> 
						<div class="large-4 medium-12 small-12 columns front-page-image-3 home-section-padding-top">
				<?php if ( has_post_thumbnail() ) {
				?>	
							<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php  the_post_thumbnail();?>
							</a>
							<br>	
					<?php }?>
							<span class="front-page-title-3 ">
								<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title() ?> 
								</a>
							</span> 
							<br>
						    <?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,80);
							?>
							<a href="<?php the_permalink() ?>" class="read-more-link" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								Read More 
							</a>
						</div>	
			<?php $i++; ?>
			<?php endwhile; endif; ?>
			<!-- reset loop query -->
			<?php wp_reset_query(); ?>
						<div class="large-4 medium-12 small-12 columns front-page-post-4-container">
			<!-- Start comics -->
			<?php query_posts('cat7'); ?>
			<?php $i = 0; ?> 
					<div class="front-page-post-3-container row full-width"><!-- start the row -->
			<?php if ( have_posts() ) : while ( have_posts() && $i < 2 ) : the_post(); ?> 
						<div class="large-12 medium-12 small-12 columns front-page-image-4 home-section-padding-top">
							<span class="front-page-title-3 ">
								<a href="<?php the_permalink() ?>" class="blogroll-post-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title() ?> 
								</a><br>
							</span> 
						    <?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,50);
							?>
							<a href="<?php the_permalink() ?>" class="read-more-link" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								Read More 
							</a>
						</div>	
			<?php $i++; ?>
			<?php endwhile; endif; ?>
			<!-- reset loop query -->
			<?php wp_reset_query(); ?>

						</div><!-- contains comics-->
					</div><!-- end the row -->			


		</div><!-- ends the row-->
		</div>
	</main>
<?php get_footer(); ?>