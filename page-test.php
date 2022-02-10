<?php
/**
 * Page title action.
 *
 * @package Virtue Theme
 */

/**
 * Page title action.
 *
 * @hooked virtue_page_title - 20
 */
do_action( 'virtue_page_title_container' );
?>

<div id="content" class="container <?php echo esc_attr( virtue_container_class() ); ?>">
	<div class="row">
		<div class="main <?php echo esc_attr( virtue_main_class() ); ?>" role="main">
			<div class="entry-content" itemprop="mainContentOfPage" itemscope itemtype="https://schema.org/WebPageElement">
				<?php get_template_part( 'templates/content', 'page' ); ?>

				<?php

				var_dump( "user can", current_user_can( 'cdt_export_excel' ), "enabled formats", cares_data_tools_get_report_formats() );

				?>
			</div>
			<?php
			/**
			 * Hook for virtue footer.
			 *
			 * @hooked virtue_page_comments - 20
			 */
			do_action( 'virtue_page_footer' );
			?>
		</div><!-- /.main -->
