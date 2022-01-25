<?php /* Template Name: 404 */ ?>

<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h2><?php esc_html_e( 'Page not found', 'THEMENAME' ); ?></h1>
				<h4>
					<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'THEMENAME' ); ?></a>
				</h4>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
