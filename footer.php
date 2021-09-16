<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package braintraffic
 */

?>

	<!--<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'braintraffic' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'braintraffic' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'braintraffic' ), 'braintraffic', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>-->
				<div class=main-footer>
				<p class="footer-copy" >&copy 2020 Brain Traffic</p>
				<a class="footer-link" href="https://www.confabevents.com/">Confab Conference</a>
				<a class="footer-link" href="https://www.buttonconf.com/">Button Conference</a>
				<a class="footer-link" href="https://www.contentstrategy.com/">Content Strategy Podcast</a>
				<a class="footer-link" href="https://www.braintraffic.com/contact">Contact Us</a>
				<a class="footer-link" href="https://www.braintraffic.com/mailing-list">Newsletter</a>
				<a class="footer-link" href="https://twitter.com/braintraffic">Twitter</a>
				<a class="footer-link" href="https://www.linkedin.com/company/brain-traffic">LinkedIn</a>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
