@extends('layouts.frontend')

@section('title', 'Tentang Kami')

@section('content')
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Tentang Kami</h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="{{ route('index') }}">Beranda</a></li>
                              <li>Tentang Kami</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="about-area section-padding-bottom pt3">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title-wrapper">
                      <div class="section-title">
                          <h3>Siapa Kami</h3>
                      </div>
                  </div> 
              </div>       
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="about-text-container">
                      {{ $siteSetting['setting_about_us_text'] }}
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="skill-image">
                      <img src="{{ asset('img/banner/' . $siteSetting['setting_about_us_image']) }}" alt="" class="img-responsive">
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop