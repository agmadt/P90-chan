@extends('layouts.frontend')

@section('title', 'Galeri')

@section('content')
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Galeri</h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="{{ route('index') }}">Beranda</a></li>
                              <li>Galeri</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="gallery-area pt2">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title-wrapper">
                      <div class="section-title">
                          <h3>Galeri Foto</h3>
                      </div>
                  </div> 
              </div>
          </div>
          <div class="row gallery-row">
              @foreach ($photos as $photo)
                <div class="filter-items">
                  <div class="mix single-items col-md-3 col-sm-6 col-xs-12 overlay-hover">
                    <div class="overlay-effect">
                      @if ($photo->hasImage)
                        <img src="img/gallery/{{ $photo->mediumImage }}" alt="">
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="img/gallery/{{ $photo->image }}"><i class="fa fa-image"></i></a>
                            <span class="gallery-text">{{ $photo->title }}</span>
                        </div> 
                      @endif
                    </div>
                  </div> 
                </div> 
              @endforeach
          </div>
      </div>
  </div>
@stop