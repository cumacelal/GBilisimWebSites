
<footer id="footer">
			<div class="container">
				<div class="footer-inner wow pixFadeUp" style="visibility: visible; animation-name: pixFadeUp;">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title"><a href="{{ route('main')}}">Anasayfa</a></h3>

								<ul class="footer-menu">
									<li><a href="{{ route('about')}}">Hakkımızda</a></li>
									<li><a href="{{ route('services')}}">Hizmetler</a></li>
								</ul>
							</div>
							<!-- /.widget footer-widget -->
						</div>
						<!-- /.col-lg-3 col-md-6 -->

						<div class="col-lg-3 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title" ><a href="{{ route('product') }}">Ürünler</a></h3>

								<ul class="footer-menu">
									<li><a href="{{ route('product') }}">Pandemi Elçisi</a></li>
									<li><a href="{{ route('product') }}">İKOM</a></li>
									<li><a href="{{ route('product') }}">Satın Alma Süreç Yönetimi</a></li>
								</ul>
							</div>
							<!-- /.widget footer-widget -->
						</div>
						<!-- /.col-lg-3 col-md-6 -->

						<div class="col-lg-3 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title"><a href="{{ route('contact')}}">İletişim</a></h3>

								<ul class="footer-menu">
									<li>
                      <a href="mailto:info@gaziantepbilisim.com.tr">E-Posta Gönder</a>
                  </li>
									<li><a href="tel:+903426060643">Telefon Et</a></li>
								</ul>
							</div>
							<!-- /.widget footer-widget -->
						</div>
						<!-- /.col-lg-3 col-md-6 -->

						<div class="col-lg-3 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title">Adresimiz</h3>
								<h6>Şube 1</h6>
								<p>
									 Gazi, Uzay Parkı, Zübeyde Hanım Blv., 27060 Şehitkamil/Gaziantep
								</p>
								<h6>Şube 2</h6>
								<p>
									 Çamtepe Mh. Mahmut Tevfik Atay Bul. Gaziantep Teknopark 4/A No:58, 27060 Şehitkamil/Gaziantep
								</p>

								<ul class="footer-social-link">
									<li><a href="https://www.facebook.com/gaziantepbilisimas" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/gaziantepbilisimas" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://www.twitter.com/GantepBilisim" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://tr.linkedin.com/company/gaziantep-bili%C5%9Fim-ve-ak%C4%B1ll%C4%B1-kent-teknolojileri" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<!-- /.widget footer-widget -->
						</div>
						<!-- /.col-lg-3 col-md-6 -->
					</div>
					<!-- /.row -->

				</div><!-- /.footer-inner -->

				<div class="site-info">
					<div class="copyright">
						<p>© {{ date('Y') }} Tüm Hakları Saklıdır.</p>
					</div>

					{{-- <ul class="site-info-menu">
						<li><a href="#">Privacy &amp; Policy.</a></li>
						<li><a href="#">Faq.</a></li>
						<li><a href="#">Terms.</a></li>
					</ul> --}}
				</div><!-- /.site-info -->

			</div><!-- /.container -->
		</footer>
