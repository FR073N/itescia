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
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<img src="<?php echo get_template_directory_uri().'/img/footer-logo.png'; ?>" class="footer-logo" alt="">
						<ul class="footer-navigation-secondaire">
							<li class="footer-eurosic">
								<a href="eurosic.com">
									<img src="<?php echo get_template_directory_uri().'/img/footer-eurosic.jpg'; ?>" alt="">
								</a>
							</li>
							<li>
								<span>
									c 2014
								</span>
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
					<div class="col-md-6 col-sm-6 col-xs-6 footer-right">
						<div class="col-md-5 col-sm-5 col-xs-12">
							<ul class="footer-navigation">
								<li><a href="">Accueil</a></li>
								<li><a href="">News</a></li>
								<li><a href="">Techopôle</a></li>
								<li><a href="">Services</a></li>
								<li><a href="">Cadre de vie</a></li>
							</ul>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<ul class="footer-navigation">
								<li><a href="">Ecologie</a></li>
								<li><a href="">Localisation</a></li>
								<li><a href="">Disponibilites</a></li>
								<li><a href="">Galerie</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-mention">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada.
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>