<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ClionaJoyce
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="site-info g-2up">
      <div class="gi">
        <p class="copyright">&copy; <?php date("Y") ?> Cliona Joyce. All rights reserved.</p>
        </div>
        <div class="contact-details gi">
        <p><a class="phone" href="tel:087 342 8486">087 342 8486</a></p>
        <p><a class="email" href="mailto:cliona@clionajoyce.ie">cliona@clionajoyce.ie</a></p>
        <p>Corrib Medical Centre,<br>17/18 Mill Street,<br>Galway</p>
      </div>
			 <!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clionajoyce' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'clionajoyce' ), 'WordPress' ); ?></a> -->
			 <!-- <span class="sep"> | </span> -->
			 <?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'clionajoyce' ), 'clionajoyce', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
