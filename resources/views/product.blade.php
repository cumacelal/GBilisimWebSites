@extends('layouts.master')
@section('title' , 'Gaziantep Bilişim / Paket Yazılımlar ')
@section('author' , 'Gaziantep Bilişim')
@section('description' , 'Kamu ve özel kuruluşlara profesyonel yazılım çözümleri vermektedir.')
@section('page_banner','classic')
@section('page_banner_title' , 'Paket Yazılımlar')
@section('sayfa' , 'Paket Yazılımlar')
@section('geri' , 'Anasayfa')
@section('page')

  <!--=========================-->
  <!--=         About         =-->
  <!--=========================-->
  <section class="about">
    <div class="container">
      <div class="row">

            @foreach ($products as $key => $value)

                    @php
                    $slug = trim($value->slug)
                    @endphp
     					<div class="col-lg-4 col-md-6">
     						<article class="post-post-grid">
     							<div class="feature-image"> 
     								<a href="{{ route('product-detail', [$slug] ) }}">
     									<img src="media/products/{{$value->image}}.jpg" alt="{{ $value['title'] }} / Gaziantep Bilişim ve Akıllı Kent Teknolojileri" title="{{ $value['title'] }} / Gaziantep Bilişim ve Akıllı Kent Teknolojileri">
     								</a>
     							</div>
     							<div class="blog-content">
     								<h3 class="entry-title"><a href="{{ route('product-detail', [$slug] ) }}"> {{ $value['title'] }} </a></h3>
     							</div><!-- /.post-content -->
     						</article><!-- /.post -->
     					</div>
     					<!-- /.col-lg-4 -->
            @endforeach


     				</div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about -->



@endsection
