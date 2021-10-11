@extends('layouts.master')
@section('title' , 'Gaziantep Bilişim / ' .  'Baklava Oyunu' )
@section('author' , 'Gaziantep Bilişim')
@section('description' , "Baklava Oyunu")
@section('page_banner','classic')
@section('page_banner_title' , "Baklava Oyunu")
@section('sayfa' ,  'Baklava Oyunu')
@section('geri' , 'Anasayfa')

@section('page')

  <!--=========================-->
  <!--=         About         =-->
  <!--=========================-->
  <section class="about" style="padding-top:0px;">
    <div class="container">
      <div class="row">

              <div class="pixsass_post_author_box " style="margin-bottom:50px;background: #fff;">
               <img src="{{ URL::to('/') }}/media/puzzle.png" alt="Baklava Oyunu" title="Baklava Block Puzzle Oyunu">

                <hr>
                        <div class="profile_image">
                          <!--<img alt="author" src="{{ URL::to('/') }}/assets/img/fav/apple-touch-icon.png">-->
                         <!-- <a href="#"  title="Ürünler">   <i class="fa fa-arrow-left"></i> Geri </a>-->
                        </div><!-- /.profile_image -->

                        <div class="profile_content" style="margin-top: 30px;">
                          <h4 class="profile_name"> Baklava Oyunu </h4>
                          <span class="author-job">Gaziantep Bilişim ve Akıllı Kent Teknolojileri A.Ş.</span>

                          <div class="profile_bio">
                            <div class="row">
                              <div class="col-4">
                                <p>
                                 <img src="{{ URL::to('/') }}/media/ex.png">
                                </p>
                              </div>
                              <div class="col-8">
                                 <p>
                                 <i class="fa fa-check"></i> Oyun içindeki en temel kural baklavalar yatay ve dikeyde boşluksuz sıralanmalı. Ayrıca 3x3 9'lu gruplar farklı renklendirilmiştir, baklavalar bu grupların üzerine yerleştirilmelidir. Böylelikle baklavalar tepsiden siparişe gidecektir. Aynı anda birden fazla sıra ve 9'lu grup yerleştirilirse fazladan puan kazanılacaktır.
                                <hr>
                                <i class="fa fa-star"></i> İlerde devreye alacağımız Gaziantep Büyükşehir Belediyesine ait Türkiye'nin ilk yerel uygulaması olan "Benim Şehrim" uygulaması ile giriş yapılırsa sıralamanızıda görebileceksiniz.
                                <hr>
                                <i class="fa fa-star"></i> Bu oyunla aktif düşünme gücünüzün artacağını ve hafıza gelişiminize olumlu katkı sağlayacağınızı düşünüyoruz.
                                </p>
                              </div>                              
                            </div>

                            <hr>

                          </div>

                        </div><!-- /.profile_content -->
                      </div>



            </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about -->



@endsection
