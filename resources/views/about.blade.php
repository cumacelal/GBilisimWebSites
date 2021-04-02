@extends('layouts.master')
@section('title' , 'Gaziantep Bilişim / Hakkımızda ')
@extends('layouts.page_banner')
@section('page_banner_title' , 'Hakkımızda')
@section('sayfa' , 'Hakkımızda')
@section('geri' , 'Anasayfa')
@section('page')

  <!--=========================-->
  <!--=         About         =-->
  <!--=========================-->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="about-content">
            <div class="section-title">
              <h3 class="sub-title wow pixFadeUp">Hakkımızda</h3>
              <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                Vizyon

              </h2>
            </div>
            <!-- /.section-title -->

            <p class="description wow pixFadeUp" data-wow-delay="0.4s">
              Gaziantep başta olmak üzere Türkiye ve dünyada en başarılı bilişim şirketi olmak.

Küresel pazarda rekabet gücü ile tercih edilen, güven duyulan, çevreye ve insana duyarlı, istihdam yaratma gücü olan bir bilişim firması olmak.
            </p>

            <div class="singiture wow pixFadeUp" data-wow-delay="0.5s">
              <h2>
                Misyon
              </h2>
              <p class="description wow pixFadeUp" data-wow-delay="0.4s">
                Yetişmiş mühendislere istihdam ve kendisini daha da geliştirmesine imkan sağlamak.
              </p>
              {{-- <img src="media/about/sing.png" class="wow pixFadeUp" data-wow-delay="0.6s" alt="sign"> --}}
            </div>
            <!-- /.singiture -->
          </div>
          <!-- /.about-content -->
        </div>
        <!-- /.col-lg-7 -->

        <div class="col-lg-5">
          <div class="about-thumb wow pixFadeRight" data-wow-delay="0.6s">
            <img src="media/about/1.jpg" alt="about">
          </div>
          <!-- /.about-thumb -->
        </div>
        <!-- /.col-lg-5 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about -->

  <!--===========================-->
  <!--=         Feature         =-->
  <!--===========================-->
  <section class="featured-four-ab">
    <div class="container">
      <div class="section-title text-center">
        <h3 class="sub-title wow pixFadeUp">GAZİANTEP BİLİŞİM Olarak ; </h3>
        <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">Yaptığımız bazı projeler</h2>
      </div><!-- /.section-title -->

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.5s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/20.png" alt="">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="javascript:void(0);">KAMU VE ÖZEL SEKTÖRE YÖNELİK ÇÖZÜMLER</a></h3>
              <p>
                Satın Alma Süreçlerinin mevzuata uygun yönetimini  ve 'Satın Alma Süreçlerinin' dijital ortamda yürütülmesini sağlayan paket yazılım uygulamasıdır.



              </p>

              <a href="#" class="more-btn"><i class="ei ei-arrow_right"></i></a>

              <svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
                <path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z" />
              </svg>
            </div>
          </div><!-- /.pixsass-box style-four -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.6s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/19.png" alt="">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="javascript:void(0);">İHTİYACA YÖNELİK ÇÖZÜMLER</a></h3>

              <p>
                PowerPoint veya benzeri uygulamalarda hazırlanan sunumların bulut tabanlı bir sistem altında, hızlı, kolay, kurumsal kimliğe uygun bir formatta hazırlanmasını sağlayan bir uygulamadır.
              </p>

              <a href="#" class="more-btn"><i class="ei ei-arrow_right"></i></a>
            </div>

            <svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
              <path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z" />
            </svg>
          </div><!-- /.pixsass-box style-four -->
        </div><!-- /.col-lg-4 col-md-6 -->

        <div class="col-lg-4 col-md-6">
          <div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.9s">
            <div class="saaspik-icon-box-icon">
              <img src="media/feature/18.png" alt="">
            </div>
            <div class="pixsass-icon-box-content">
              <h3 class="pixsass-icon-box-title"><a href="javascript:void(0);">SAĞLIK SEKTÖRÜNE YÖNELİK ÇÖZÜMLER</a></h3>
              <p>
                Pandemi ortamında hasta denetimine yardımcı olmak amacıyla kurum tarafından belirlenen gönüllü vatandaşların hasta kişileri takip etmek için hazırlanmış bir projedir.
              </p>

              <a href="#" class="more-btn"><i class="ei ei-arrow_right"></i></a>
            </div>

            <svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
              <path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z" />
            </svg>
          </div><!-- /.pixsass-box style-four -->
        </div><!-- /.col-lg-4 col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.featured -->


@endsection
