<?php get_header(); ?>

<?php get_template_part( 'page', 'slideshow' ); ?>

<div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
