@extends('layouts.frontend')

@section('title', 'Donasi')

@section('content')
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Donasi</h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="{{ route('index') }}">Beranda</a></li>
                              <li>Donasi</li>
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
                  <div class="about-text-container">
                      <p><strong>Zakat</strong> itu mensucikan, kami bantu Anda menunaikannya semakin mudah… Kini Sobat dapat menunaikan zakat dengan mentransfer via ATM terdekat, ke rekening-rekening donasi kami</p>
                      <div class="table-responsive pt2">
                        <table class="table">
                          <tr>
                            <td>Bank</td>
                            <td>Nomor Rekening</td>
                          </tr>
                          <tr>
                            <td>Logo Bank</td>
                            <td>Nama Bank</td>
                          </tr>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop