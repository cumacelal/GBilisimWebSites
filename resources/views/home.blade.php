@extends('layouts.master')
@section('title' , 'Gaziantep Bilişim / Anasayfa ')
@section('author' , 'Gaziantep Bilişim')
@section('description' , 'Kamu ve özel kuruluşlara profesyonel yazılım çözümleri vermektedir.')


@section('page')
  <!--==========================-->
  <!--=         Banner         =-->
  <!--==========================-->
  <section class="banner banner-one">
    <div class="circle-shape" data-parallax='{"y" : 230}'><img src="media/banner/circle-shape.png" alt="circle"></div>
    <div class="container">
      <div class="banner-content-wrap">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="banner-content">
              <h1 class="banner-title wow pixFadeUp" data-wow-delay="0.3s">
                <span>PROFESYONEL</span> YAZILIM<br>

              </h1>

              <p class="description wow pixFadeUp" data-wow-delay="0.5s">
                <i class="fa fa-check"></i> Kamu ve Özel Kuruluşlara Yazılımsal Çözümler<br style="display:block;">
                <i class="fa fa-check"></i> Mobil uygulama ve Oyun Geliştirme<br style="display:block;">
                <i class="fa fa-check"></i> Takip Sistemi Yazılımları<br style="display:block;">
                <i class="fa fa-check"></i> ve Daha Fazlası için Gaziantep Bilişim<br style="display:block;">

              </p>

              <a href="{{ route('about') }}" class="pxs-btn banner-btn wow pixFadeUp" data-wow-delay="0.6s">Detay</a>
            </div><!-- /.banner-content -->
          </div><!-- /.col-lg-6 -->

          <div class="col-lg-6">
            <div class="promo-mockup wow pixFadeLeft">
              <img src="media/banner/macbook.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div><!-- /.promo-mockup -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.banner-content-wrap -->
    </div><!-- /.container -->

    <div class="bg-shape">
      <img src="media/banner/shape-bg.png" alt="">
    </div>
  </section><!-- /.banner banner-one -->

  <!--===========================-->
  <!--=         Feature         =-->
  <!--===========================-->
  <section class="featured">
    <div class="container">
      <div class="section-title text-center wow pixFade">
        <h3 class="sub-title">GAZİANTEP BİLİŞİM</h3>
        <h2 class="title">İhtiyacınız olan tek şey rakipsiz bir uygulama</h2>
      </div><!-- /.section-title -->

      <div class="row">
        <div class="col-md-4">
          <div class="saaspik-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.3s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/1.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="javascript:void(0);">Güvenilir Paket Yazılım
                <br> Problem analizi yapıp o sorunu en doğru ve en güvenilir şekilde yazılım geliştirmekteyiz.
              </a></h3>
            </div>
          </div><!-- /.pixsass-box style-one -->
        </div><!-- /.col-md-4 -->

        <div class="col-md-4">
          <div class="saaspik-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.5s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/2.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="javascript:void(0);"> Kamu & Özel Sektör <br>
                Kamu ve özel sektör için geliştirdiğimiz programlar profesyonel kalitede hizmet vermektedir.

</a></h3>
            </div>
          </div><!-- /.pixsass-box style-one -->
        </div><!-- /.col-md-4 -->

        <div class="col-md-4">
          <div class="saaspik-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.7s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/3.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="javascritp:void(0);" style="text-align:center;">Mobil Uygulama & Oyun <br>
                İhtiyaca yönelik geliştiriğimiz uygulamlarda mobil platformlarda da destek vermekteyiz.

</a></h3>
            </div>
          </div><!-- /.pixsass-box style-one -->
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.featured -->

    <!--===================================-->
  <!--=         Genera Informes         =-->
  <!--===================================-->
  <section class="genera-informes">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pix-order-one">
          <div class="section-title style-two">
            <h2 class="title wow pixFadeUp">
             <span style="background: linear-gradient(
45deg
, #ca41fd, transparent);
    color: white;">GAZİANTEP</span> <br>
             <span style="    background: linear-gradient(
45deg
, #579bfb, transparent);
    color: white;">BAKLAVA OYUNU</span>
            </h2>

            <p class="wow pixFadeUp" data-wow-delay="0.3s">
              Şehrimizin simgesi konumuna gelen fıstık ve baklavanın oyunda buluştuğu uygulamadır.

            </p>
          </div><!-- /.section-title style-two -->

          <ul class="list-items wow pixFadeUp" data-wow-delay="0.4s">
            <li>Baklavaları bloklara yerleştirin</li>
            <li>Kazandığınız puanlar ile </li>
            <li>En iyiler listesine girin</li>
          </ul>

          <a href="{{ route('game') }}" class="pix-btn btn-outline wow pixFadeUp" data-wow-delay="0.5s">Detay</a>
        </div><!-- /.col-lg-6 -->


        <div class="col-lg-6">
          <div class="wrap">
            <img src="media/baklava.png"  class="wow pixFadeLeft" data-wow-delay="0.5s">
          </div>
        </div>
        <!-- <div class="informes-feature-image">
          <div class="image-one" data-parallax='{"y" : 20}'>
            <img src="media/feature/5.png" class="wow pixFadeDown" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
          </div>

          <div class="image-two" data-parallax='{"y" : -20}'>
            <img src="media/feature/51.png" class=" mw-none wow pixFadeDown" data-wow-delay="0.3s" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
          </div>

        </div> -->

      </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="shape-bg">
      <img src="media/background/shape.png" class="wow fadeInRight" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
    </div>
  </section><!-- /.genera-informes -->

  <!--=================================-->
  <!--=         Editor Design         =-->
  <!--=================================-->
  <section class="editor-design">
    <div class="container">
      <div class="row">

        <div class="editure-feature-image wow pixFadeRight">
          <div class="image-one" data-parallax='{"x" : 30}'>
            <img src="media/feature/4.png" class="wow pixFadeRight" data-wow-delay="0.3s" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
          </div>
          <div class="image-two">
            <div class="image-two-inner" data-parallax='{"x" : -30}'>
              <img src="assets\img\personel-takip.gif" class="wow pixFadeLeft" data-wow-delay="0.5s" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
          </div>

        </div>

        <div class="col-lg-6 offset-lg-6">
          <div class="editor-content">
            <div class="section-title style-two">
              <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                PERSONEL  <br>
                TAKİP SİSTEMİ
              </h2>

              {{-- <p class="wow pixFadeUp" data-wow-delay="0.5s">
                Mesai saatlerinin kontrol altına alınmasını ve personellerin konum bazlı kontrolünün sağlanmasını hedefleyen bir mobil/web uygulamadır.

              </p> --}}
            </div>

            <div class="description wow pixFadeUp" data-wow-delay="0.5s">
              <p>
                Mesai saatlerinin kontrol altına alınmasını ve personellerin konum bazlı kontrolünün sağlanmasını hedefleyen bir mobil/web uygulamadır.

              </p>

              <a href="#" class="pix-btn wow pixFadeUp" data-wow-delay="0.9s">Detay</a>
            </div>
          </div><!-- /.editor-content -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="shape-bg">
      <img src="media/background/shape_bg.png" class="wow fadeInLeft" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
    </div>
  </section><!-- /.editor-design -->

  <!--===================================-->
  <!--=         Genera Informes         =-->
  <!--===================================-->
  <section class="genera-informes">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pix-order-one">
          <div class="section-title style-two">
            <h2 class="title wow pixFadeUp">
              SCADA <br> İZLEME SİSTEMİ
            </h2>

            <p class="wow pixFadeUp" data-wow-delay="0.3s">
              SCADA takip sistemimizde depo seviyesi,analog çıkış değerleri ve alarmları görebildiğimiz bir sistemdir.

            </p>
          </div><!-- /.section-title style-two -->

          <ul class="list-items wow pixFadeUp" data-wow-delay="0.4s">
            <li>SCADA takip sistemimizde depo seviyesi,analog çıkış değerleri ve alarmları görebildiğimiz bir sistemdir.</li>
            <li>Haritalandırma özelliği; istasyonları harita üzerinde konumlandırmaya yarar.</li>
            <li>Olası bir problem yaşandığında Çağrı Merkezi Sistemiyle anında yetkili kişiye ulaşılabiliyor.</li>

          </ul>

          <a href="#" class="pix-btn btn-outline wow pixFadeUp" data-wow-delay="0.5s">Detay</a>
        </div><!-- /.col-lg-6 -->


        <div class="col-lg-6">
          <div class="wrap">
            <div class="tank waterTankHere1"></div>
          </div>
        </div>
        <!-- <div class="informes-feature-image">
          <div class="image-one" data-parallax='{"y" : 20}'>
            <img src="media/feature/5.png" class="wow pixFadeDown" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
          </div>

          <div class="image-two" data-parallax='{"y" : -20}'>
            <img src="media/feature/51.png" class=" mw-none wow pixFadeDown" data-wow-delay="0.3s" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
          </div>

        </div> -->

      </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="shape-bg">
      <img src="media/background/shape.png" class="wow fadeInRight" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
    </div>
  </section><!-- /.genera-informes -->

  <!--=================================-->
  <!--=         Revolutionize         =-->
  <!--=================================-->
  <section class="revolutionize">
    <div class="bg-angle"></div>
    <div class="container">
      <div class="section-title dark-title text-center">
        <h3 class="sub-title wow pixFadeUp">GAZİANTEP BİLİŞİM</h3>
        <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
          Masaüstü Yazılım , Mobil Platform ve  Oyun Geliştirme süreçlerinde profesyonel çözümler.
        </h2>
      </div><!-- /.section-title dark-title -->

      <div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
        <ul id="pix-tabs-nav">
          <li><a href="#tab1">Paket Yazılımlar</a></li>
          <li><a href="#tab2">Takip Yazımlımları</a></li>
          <li><a href="#tab3">Kamuya Yönelik Özel Çözümler</a></li>
          <li><a href="#tab4">Mobil Uygulama Geliştirme</a></li>

        </ul> <!-- tabs-nav -->

        <div id="pix-tabs-content">
          <div id="tab1" class="content">
            <img src="media/revolutionize/1.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">

            <div class="shape-shadow"></div>
          </div>
          <div id="tab2" class="content">
            <img src="media/revolutionize/2.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            <div class="shape-shadow"></div>
          </div>
          <div id="tab3" class="content">
            <img src="media/revolutionize/3.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            <div class="shape-shadow"></div>
          </div>

          <div id="tab4" class="content">
            <img src="media/revolutionize/4.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            <div class="shape-shadow"></div>
          </div>

          <div id="tab5" class="content">
            <img src="media/revolutionize/5.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            <div class="shape-shadow"></div>
          </div>
          <div id="tab6" class="content">
            <img src="media/revolutionize/6.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            <div class="shape-shadow"></div>
          </div>
          <div id="tab7" class="content">
            <img src="media/revolutionize/7.jpg" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            <div class="shape-shadow"></div>
          </div>

        </div> <!-- tabs-content -->
      </div> <!-- Tabs -->
    </div><!-- /.container -->
  </section><!-- /.revolutionize -->

  <!--===========================-->
  <!--=         Service         =-->
  <!--===========================-->
  <section class="featured-two">
    <div class="container">
      <div class="section-title text-center">
        <h3 class="sub-title wow pixFadeUp">GAZİANTEP BİLİŞİM </h3>
        <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">Çözümlerimizde</h2>
      </div><!-- /.section-title -->

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.4s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/6.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="#">Paket Yazılımlar</a></h3>
              <p>
              İşletmenize uygun profesyonel paket yazılım çözümleri.
              </p>
            </div>
          </div><!-- /.pixsass-box style-two -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/7.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="#">Özelleştirme</a></h3>

              <p>
              Tamamen soruna yönelik özelleştirilmiş çözümler ile amaca hizmet.
              </p>
            </div>
          </div><!-- /.pixsass-box style-two -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/8.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="#">Birden Fazla Yönetici</a></h3>
              <p>
                  Çoklu proje yönetim desteği.
              </p>
            </div>
          </div><!-- /.pixsass-box style-two -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.7s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/9.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="#">Bulut Veriler</a></h3>
              <p>
                  Bulut depolama kaynakları ile güvenli ve hızlı veritabanı çözümleri.
              </p>
            </div>
          </div><!-- /.pixsass-box style-two -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.8s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/10.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="#">UI/UX Tasarım</a></h3>
              <p>
                  Kullanıcı dostu arayüz tasarımları ile kullanımı kolay programlar.
              </p>
            </div>
          </div><!-- /.pixsass-box style-two -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.9s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/11.png" alt="Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="#">Müşteri Desteği</a></h3>
              <p>
                Programın kurulum ve sonrasında en verimli kullanıcı deneyimi için destek.
              </p>
            </div>
          </div><!-- /.pixsass-box style-two -->
        </div><!-- /.col-lg-4 col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.featured -->





    <div class="scroll-circle wow pixFadeLeft">
      <img src="media/background/circle8.png" data-parallax='{"y" : 130}' alt="circle">
    </div>
  </section>
  <!-- /.pricing -->

  <!--==================================-->
  <!--=         Call To Action         =-->
  <!--==================================-->
  <section class="call-to-action">
    <div class="overlay-bg"><img src="media/background/ellipse.png" alt="bg"></div>
    <div class="container">
      <div class="action-content text-center wow pixFadeUp">
        <h2 class="title">
          ‘‘Teknoloji, vatandaş sorunlarının çözümünde ne kadar kullanılıyorsa,
          kent o kadar akıllıdır.’’
        </h2>

        <p style="text-align:right;">
          <b>Fatma ŞAHİN</b>
          <br>
          <small>Gaziantep Büyükşehir Belediye Başkanı</small>
        </p>


      </div>
      <!-- /.action-content -->
    </div>
    <!-- /.container -->

    <div class="scroll-circle">
      <img src="media/background/circle13.png" data-parallax='{"y" : -130}' alt="circle">
    </div>
    <!-- /.scroll-circle -->
  </section>
  <!-- /.call-to-action -->
@endsection
