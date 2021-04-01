<?php
/**
 * The base template for displaying 404 pages (not found).
 *
 * @package Voodioo
 */
?>
<?php get_header( voodioo_template_base() ); ?>

	<div <?php voodioo_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php voodioo_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include voodioo_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_sidebar(); // Loads the sidebar.php. ?>

		</div><!-- .row -->

	</div><!-- .site-content_wrap -->

<?php get_footer( voodioo_template_base() ); ?>
