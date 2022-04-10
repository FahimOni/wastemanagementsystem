<?php
/**
 * The template for displaying the footer
 *
 * @subpackage Recycling Energy
 * @since 1.0
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="copyright">
			<div class="container footer-content">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
			</div>
		</div>
		<?php get_template_part( 'template-parts/footer/site', 'info' ); ?> 
	</footer>
<?php wp_footer(); ?>

</body>
</html>