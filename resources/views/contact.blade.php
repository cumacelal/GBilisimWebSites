@extends('layouts.master')
@section('title' , 'Gaziantep Bilişim / İletişim ')
@extends('layouts.page_banner')
@section('page_banner_title' , 'İletişim')
@section('sayfa' , 'İletişim')
@section('geri' , 'Anasayfa')
@section('page')

  <!--=========================-->
  <!--=         About         =-->
  <!--=========================-->
  <section class="contactus">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-infos">
							<div class="contact-info">
								<h3 class="title">Adresimiz</h3>
								<p class="description">
                  Gazi, Uzay Parkı, Zübeyde Hanım Blv., 27060 Şehitkamil/Gaziantep
								</p>

								<div class="info phone">
									<i class="ei ei-icon_phone" style="color:#007bff"></i>
									<span>
                    <a href="tel:+903426060643">
                     0342 606 06 43
                     </a>
                  </span>
								</div>
							</div>
							<!-- /.contact-info -->

							<div class="contact-info">
								<h3 class="title">Proje olarak yardımamı mı ihtiyacın var ? </h3>
								<p class="description">
									Bizimle İletişime Geçebilirsin<br>

								</p>

								<div class="info">
									<i class="ei ei-icon_mail_alt" style="color:#007bff"></i>
									<span>
                    <a href="mailto:info@gaziantepbilisim.com.tr">
                    info@gaziantepbilisim.com.tr
                    </a>
                  </span>
								</div>
							</div>
							<!-- /.contact-info -->
						</div>
						<!-- /.contact-infos -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-8">
						<div class="contact-froms">
							<form action="https://saaspik.pixelsigns.art/saaspik/php/mailer.php" class="contact-form" data-pixsaas="contact-froms">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="name" placeholder="Ad Soyad" required="">
									</div>

									<div class="col-md-6">
										<input type="email" name="email" placeholder="E-Posta" required="">
									</div>
								</div>

								<input type="text" name="subject" placeholder="Konu">

								<textarea name="content" placeholder="Mesajınız" required=""></textarea>

								<button type="submit" class="pix-btn submit-btn">
									<span class="btn-text">Gönder</span>
									<i class="fas fa-spinner fa-spin"></i>
								</button>
								<input type="hidden" name="recaptcha_response" id="recaptchaResponse">


								<div class="row">
									<div class="form-result alert" style="display: none;">
										<div class="content"></div>
									</div>
								</div>
							</form>
							<!-- /.contact-froms -->
						</div>
						<!-- /.faq-froms -->
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
    <section>
    	<div class="brk-map" data-height="520" data-brk-library="component__map">
    		<div class="brk-map__section">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3183.707856283333!2d37.35046401525533!3d37.064444479894966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e1119b9912b3%3A0xd99ec9c3da06e14!2sGaziantep%20Gezegenevi%20ve%20Bilim%20Merkezi!5e0!3m2!1str!2str!4v1605777664019!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    		</div>
    	</div>
    </section>

@endsection
