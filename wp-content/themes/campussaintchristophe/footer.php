<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Campus Saint Christophe
 */
?>

	</div><!-- #content -->

	<footer class="footer" role="contentinfo">
		<div class="container">
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri().'/img/footer-logo.png'; ?>" class="footer-logo" alt="">
				<ul class="footer-navigation-secondaire">
					<li>
						<a href="">
							<img src="" alt="">
						</a>
					</li>
					<li>
						c 2014
					</li>
					<li>
						<a href="">
							Mentions légales
						</a>
					</li>
					<li>
						<a href="">
							Crédits
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="footer-navigation">
					<li><a href="">Accueil</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Techopôle</a></li>
					<li><a href="">Services</a></li>
					<li><a href="">Cadre de vie</a></li>
					<li><a href="">Ecologie</a></li>
					<li><a href="">Localisation</a></li>
					<li><a href="">Disponibilites</a></li>
					<li><a href="">Galerie</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-mention">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>