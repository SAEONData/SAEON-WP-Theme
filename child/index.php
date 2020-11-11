<?php
/**
 * The main template file.
*/


get_header(); ?>


		<main id="main" class="post-wrap" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					the_content();
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			no content

		<?php endif; ?>

		</main>
		

<?php get_footer(); ?>