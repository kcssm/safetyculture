<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package safetyculture
 */

?>

	</div><!-- #content -->
	<aside id="three-col" class="row widget-area">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</aside>
	<aside id="five-col" class="row widget-area">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</aside><!-- #secondary -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
