<?php

/*

Template Name: News Page

*/
	get_header();
?>



<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 <div class="edu-container">
<ul>

    <!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
	

        <div class="edu-wrapper edu-newslist">
		<div class="edu-row">
		
		<div class="edu-col-md-4">

			<a  href="<?php the_permalink(); ?>" class="edu-image" 
			<?php if (has_post_thumbnail()) { ?>
				style="background-image:url(<?php the_post_thumbnail_url(); ?>)"
           <?php } else { ?>

			<?php } ?>
			
			>

		   </a>
		</div>
		<div class="edu-col-md-8">
		<div>
			<span class="edu-date"><?php the_date(); ?></span>
			<h4>
			<a href="<?php the_permalink(); ?>"  >
			<?php the_title(); ?>
		</a></h4>
			<div class="sn-info">
				
				<!-- <span class="sn-cat"><?php the_category(); ?></span> -->
			</div>
			<div class="edu-excerpt">
				<?php the_excerpt(); ?>
			</div>

			
			<a class="btn edu-btn" href="<?php the_permalink(); ?>">read more</a>
		   </div>
		</div>

		</div>
		</div>
    <?php endwhile; ?>
    <!-- end of the loop -->
		   
</ul>
 </div>
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

