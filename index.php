<?php /* Template Name: Index */ ?>
<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h2><?php esc_html_e( 'Latest Posts', 'THEMENAME' ); ?></h2>

			<?php get_template_part( 'loop' ); ?>

			<?php get_template_part( 'pagination' ); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
