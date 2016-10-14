<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

		</div><!-- .site-content-overlay-->
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
		<div class="footer-sections">
			<div class="first">
				<label for="mce-EMAIL">Subscribe to our newsletter</label>
				<form action="//cvchospitality.us13.list-manage.com/subscribe/post?u=d4684262c99c2ee203dc6dc06&amp;id=6b411d1052" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d4684262c99c2ee203dc6dc06_6b411d1052" tabindex="-1" value=""></div>
					<input type="email" value="" name="EMAIL" placeholder="email address" class="required email" id="mce-EMAIL"><input type="submit" class="button" value="subscribe" name="subscribe" id="mc-embedded-subscribe" >
				</form>
			</div><!-- .first-->
			<div class="second">
				<a href="https://www.linkedin.com/company/2571885">LinkedIn</a>
				<span class="sep">|</span>
				<a href="/sitemap/">Sitemap</a>
			</div><!-- .second-->
			<div class="third">
				<div>
					<span class="footer-item">AR Lic #AA26000764</span>
					<span class="sep">|</span>
					<span class="footer-item">GC Lic #CGC1520405</span>
				</div>
				<div>
					<span class="footer-item">&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) ?></span>
					<span class="sep">|</span>
					<span class="footer-item signature">Website by <a target="superiocity" href="http://www.superiocity.com">Superiocity</a></span>
				</div>
			</div><!-- .third -->
		</div><!-- .footer-sections-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
