<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="logo-container">
			<a href="/">
				<div class="logo-container-inner">
					<img src="<?php echo get_template_directory_uri() ?>/images/logo-75.png"
					     alt="CVC Hospitality Logo" class="logo" width="75" height="23">
					<div class="logo-sub">Hospitality, Inc.</div>
				</div><!-- .logo-container-inner -->
			</a>
		</div><!-- .logo-container -->
		<div class="first">
			Subscribe to our newsletter
			<form>
				<input type="email"><input type="submit" value="subscribe">
			</form>
		</div><!-- .subscribe -->
		<div class="second">
			<span class="phone">1-800-000-0000</span>
			<span class="footer-item">&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) ?></span>
			<span class="sep">|</span>
			<span class="footer-item signature">Website by <a target="superiocity" href="http://www.superiocity.com">Superiocity</a></span>
		</div><!-- .misc -->
		<div class="third">
			<a href="https://www.linkedin.com/company/2571885">LinkedIn</a>
			<a href="/sitemap">Sitemap</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
