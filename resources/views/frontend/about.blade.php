@extends('layouts.frontend')

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
                          <p>Fable daycare, preschool, and kindergarten</p>
                      </div>
                  </div> 
              </div>       
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="about-text-container">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <div class="about-us">
                          <span>Nam gravida magna vitae ante dignissim</span>
                          <span>Duis rhoncus lectus at velit hendrerit quis</span>
                          <span>Sed fringilla tempor arcu feugiat risus</span>
                          <span>Vivamus semper odio in nibh ultricies</span>
                      </div>    
                      <p>Snos trud exerci tation ullorper suscipit lobo maeisrn roester maeoirqs iserrtis nisl ut aliq poerwse thesr oper balinp asein hoinws mawsoib equat. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more tolerance and develop obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through makin of the word in classical literature.</p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="skill-image">
                      <img src="{{ asset('img/banner/7.jpg') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop