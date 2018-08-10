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
                      <p>{{ $siteSetting['setting_donation_heading_title'] }}</p>
                      <div class="table-responsive pt2">
                        <table class="table">
                          <tr>
                            <td>Bank</td>
                            <td>Nomor Rekening</td>
                          </tr>
                          @foreach ($donations as $donation)
                            <tr>
                              <td>{{ $donation->account_number }}</td>
                              <td>{{ $donation->bank_name }}</td>
                            </tr>
                          @endforeach
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop