@extends('layouts.master')
@section('title' , 'Gaziantep Bilişim / ' .  $product->title   )
@section('author' , 'Gaziantep Bilişim')
@section('description' , $product->title )
@section('page_banner','classic')
@section('page_banner_title' , $product->title)
@section('sayfa' ,  $product->title)
@section('geri' , 'Anasayfa')

@section('page')

  <!--=========================-->
  <!--=         About         =-->
  <!--=========================-->
  <section class="about" style="padding-top:0px;">
    <div class="container">
      <div class="row">

              <div class="pixsass_post_author_box " style="margin-bottom:50px;">
                @if(file_exists(  public_path() ."/media/products/big". $product->image.".png" ))
                  <img src="{{ URL::to('/') }}/media/products/big{{ $product->image }}.png" alt="{{ $product->title }}" title="{{ $product->title }}">
                @else
                  <img src="{{ URL::to('/') }}/media/products/no-image.png" alt="{{ $product->title }}" title="{{ $product->title }}">
                @endif

                <hr>
        								<div class="profile_image">
        									<!--<img alt="author" src="{{ URL::to('/') }}/assets/img/fav/apple-touch-icon.png">-->
                          <a href="{{ route('product') }} "  title="Ürünler">   <i class="fa fa-arrow-left"></i> Geri </a>
        								</div><!-- /.profile_image -->

        								<div class="profile_content" style="margin-top: 30px;">
        									<h4 class="profile_name">{{ $product->title }}</h4>
        									<span class="author-job">Gaziantep Bilişim ve Akıllı Kent Teknolojileri A.Ş.</span>

        									<div class="profile_bio">
        										<p>
        										{{ $product->context }}
        										</p>
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
