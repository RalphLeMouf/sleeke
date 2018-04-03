			<!-- footer -->

			<footer class="footer" role="contentinfo">
				<div class="container">
					<h2 class="footer-newsletter-title">
						Stay In The Loop!
					</h2>
					<h4 class="footer-newsletter-sub">
						Subscribe to our newsletter and stay updated on special deals and new products. 
					</h4>
					<div class="footer-newsletter-form">
						<?php echo do_shortcode( '[mc4wp_form id="73"]' );?>
					</div> <!-- end newsletter form --> 
				
					<div class="row">
						<div class="col-md-3">
							<h2 class="footer-menu-title">
								General Info
							</h2>
							<?php footerMenu1(); ?>
						</div>
						<div class="col-md-3">
							<h2 class="footer-menu-title">
								Why Sleek'e Hair
							</h2>
							<?php footerMenu2(); ?>
						</div>
						<div class="col-md-3">
							<h2 class="footer-menu-title">
								Support
							</h2>
							<?php footerMenu3(); ?>
						</div>
						<div class="col-md-3">
							<h2 class="footer-menu-title">
								Get Social With Us!
							</h2>
							<div class="social-wrap clear">
								<div class="social">
									<a href="https://www.facebook.com/sleekehair/" class="icon" target="_blank">
										<i class="fab fa-facebook"></i>
									</a>
								</div>
								<div class="social">
									<a href="https://twitter.com/sleekehair" class="icon" target="_blank">
										<i class="fab fa-twitter"></i>
									</a>
								</div>
								<div class="social">
									<a href="https://www.youtube.com/channel/UCisDYOavUVPKP3g48lImRhw?view_as=subscriber" class="icon" target="_blank">
										<i class="fab fa-youtube"></i>
									</a>
								</div>
								<div class="social">
									<a href="https://www.instagram.com/sleekehair/" class="icon" target="_blank">
										<i class="fab fa-instagram"></i>
									</a>
								</div>
								<div class="social">
									<a href="https://www.pinterest.com/sleekehair/" class="icon" target="_blank">
										<i class="fab fa-pinterest"></i>
									</a>
								</div>

							</div> <!-- end social wrap --> 
						</div>
					</div> <!-- end row --> 
				</div> <!-- end container --> 
				
		
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. 
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<!-- NAV -->
		<script>
			$(document).ready(function() {
			    $("#header-mobile-nav-toggle").on("click", function(e) {
			        e.preventDefault();
			        $("body").toggleClass("mobile-nav-open");
			    });
			    $("#header-nav-mobile-backdrop").on("click", function() {
			        $("body").toggleClass("mobile-nav-open");
			    });
			});
		</script>
	</body>
</html>
