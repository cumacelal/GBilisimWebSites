<header class="site-header header_trans-fixed" data-top="992">
  <div class="container">
    <div class="header-inner">
      <div class="toggle-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <!-- /.toggle-menu -->

      <div class="site-mobile-logo">
        <a href="{{ route('main') }}" class="logo">
          <img src="{{ URL::to('/') }}/assets/img/main-logo.png" alt="site logo" class="main-logo">
          <img src="{{ URL::to('/') }}/assets/img/sticky-logo.png" alt="site logo" class="sticky-logo">
        </a>
      </div>

      <nav class="site-nav">
        <div class="close-menu">
          <span>Kapat</span>
          <i class="ei ei-icon_close"></i>
        </div>

        <div class="site-logo">
          <a href="{{ route('main') }}" class="logo">
            <img src="{{ URL::to('/') }}/assets/img/main-logo.png" alt="site logo" class="main-logo">
            <img src="{{ URL::to('/') }}/assets/img/sticky-logo.png" alt="site logo" class="sticky-logo">
          </a>
        </div>
        <!-- /.site-logo -->

        <div class="menu-wrapper" data-top="992">
          <ul class="site-main-menu">

            <li><a href="{{ route('main') }}">Anasayfa</a></li>
            <li><a href="{{ route('about') }}">Hakkımızda</a></li>
            <li><a href="{{ route('services') }}">Hizmetler</a></li>
            <li><a href="{{ route('product') }}">Ürünler</a></li>
            {{-- <li class="menu-item-has-children" id="mobile" onclick="window.location = '{{ route('product') }}'" >
              <a href="{{ route('product') }}">Ürünler</a>
              <ul class="sub-menu" >
                <li><a href="{{ route('product') }}">Pandemi Elçisi</a></li>
                <li><a href="{{ route('product') }}">İKOM</a></li>
                <li><a href="{{ route('product') }}">3D Simiülatör</a></li>
                <li><a href="{{ route('product') }}">Mahalle Bazlı Covid-19 Haritası</a></li>
                <li><a href="{{ route('product') }}">Satın Alma Süreç Yönetimi</a></li>
                <li><a href="{{ route('product') }}">UKOME - Bilgi ve Evrak Yönetimi</a></li>
                <li><a href="{{ route('product') }}">Mahalle Kartı</a></li>
                <li><a href="{{ route('product') }}">Gaziantep Valiliği Çağrı Merkezi ve Denetim</a></li>
                <li><a href="{{ route('product') }}">UKOME - Ruhsat</a></li>
                <li><a href="{{ route('product') }}">UKOME - Proje İnşaat Onay</a></li>
                <li><a href="{{ route('product') }}">Kalite Yönetim Sistemi</a></li>
                <li><a href="{{ route('product') }}">Anket Sistemi</a></li>
                <li><a href="{{ route('product') }}">Personel Takip Sistemi (PDKS)</a></li>
                <li><a href="{{ route('product') }}">Evim Dünyalara Bedel</a></li>
                <li><a href="{{ route('product') }}">HKU Kamera Takip Sistemi</a></li>
                <li><a href="{{ route('product') }}">SAYBİT (Sayıştay Format Dönüştürücü)</a></li>
                <li><a href="{{ route('product') }}">SCADA İzleme Sistemi</a></li>
                <li><a href="{{ route('product') }}">Kiralama Takip</a></li>
                <li><a href="{{ route('product') }}">Belediye Sosyal Ağ Projesi</a></li>
                <li><a href="{{ route('product') }}">e-Sınav Sistemi</a></li>
                <li><a href="{{ route('product') }}">Öğrenci Devamsızlık Takibi</a></li>
                <li><a href="{{ route('product') }}">Performans Takip</a></li>

              </ul>
            </li> --}}
            <li><a href="{{ route('contact') }}">İletişim</a></li>

          </ul>

        </div>
        <!-- /.menu-wrapper -->

      </nav><!-- /.site-nav -->
    </div><!-- /.header-inner -->
  </div><!-- /.container -->
</header><!-- /.site-header -->
