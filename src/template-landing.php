<?php /* Template Name: landing */ get_header(); ?>

	<main role="main" class="container" aria-label="Content">
		<!-- section -->
		<section>
	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments. ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->

			<!-- /article -->

		<?php endif; ?>
.
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
