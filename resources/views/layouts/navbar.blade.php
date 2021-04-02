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
          <img src="assets/img/main-logo.png" alt="site logo" class="main-logo">
          <img src="assets/img/sticky-logo.png" alt="site logo" class="sticky-logo">
        </a>
      </div>

      <nav class="site-nav">
        <div class="close-menu">
          <span>Kapat</span>
          <i class="ei ei-icon_close"></i>
        </div>

        <div class="site-logo">
          <a href="{{ route('main') }}" class="logo">
            <img src="assets/img/main-logo.png" alt="site logo" class="main-logo">
            <img src="assets/img/sticky-logo.png" alt="site logo" class="sticky-logo">
          </a>
        </div>
        <!-- /.site-logo -->

        <div class="menu-wrapper" data-top="992">
          <ul class="site-main-menu">

            <li><a href="{{ route('main') }}">Anasayfa</a></li>
            <li><a href="{{ route('about') }}">Hakkımızda</a></li>
            <li><a href="{{ route('services') }}">Hizmetler</a></li>
            <li class="menu-item-has-children">
              <a href="blog.html">Ürünler</a>
              <ul class="sub-menu">
                <li><a href="#">Pandemi Elçisi</a></li>
                <li><a href="#">İKOM</a></li>
                <li><a href="#">3D Simiülatör</a></li>
                <li><a href="#">Mahalle Bazlı Covid-19 Haritası</a></li>
                <li><a href="#">Satın Alma Süreç Yönetimi</a></li>
                <li><a href="#">UKOME - Bilgi ve Evrak Yönetimi</a></li>
                <li><a href="#">Mahalle Kartı</a></li>
                <li><a href="#">Gaziantep Valiliği Çağrı Merkezi ve Denetim</a></li>
                <li><a href="#">UKOME - Ruhsat</a></li>
                <li><a href="#">UKOME - Proje İnşaat Onay</a></li>
                <li><a href="#">Kalite Yönetim Sistemi</a></li>
                <li><a href="#">Anket Sistemi</a></li>
                <li><a href="#">Personel Takip Sistemi (PDKS)</a></li>
                <li><a href="#">Evim Dünyalara Bedel</a></li>
                <li><a href="#">HKU Kamera Takip Sistemi</a></li>
                <li><a href="#">SAYBİT (Sayıştay Format Dönüştürücü)</a></li>
                <li><a href="#">SCADA İzleme Sistemi</a></li>
                <li><a href="#">Kiralama Takip</a></li>
                <li><a href="#">Belediye Sosyal Ağ Projesi</a></li>
                <li><a href="#">e-Sınav Sistemi</a></li>
                <li><a href="#">Öğrenci Devamsızlık Takibi</a></li>
                <li><a href="#">Performans Takip</a></li>

              </ul>
            </li>
            <li><a href="{{ route('contact') }}">İletişim</a></li>

          </ul>

        </div>
        <!-- /.menu-wrapper -->

      </nav><!-- /.site-nav -->
    </div><!-- /.header-inner -->
  </div><!-- /.container -->
</header><!-- /.site-header -->
