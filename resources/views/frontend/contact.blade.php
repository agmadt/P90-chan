@extends('layouts.frontend')

@section('title', 'Kontak Kami')

@section('content')
  <div class="google-map-area">
      <div id="contacts" class="map-area">
          <div id="googleMap" style="width:100%;height:451px;"></div>
      </div>
      <div class="breadcrumb-bar">
          <ul class="breadcrumb">
            <li><a href="{{ route('index') }}">Beranda</a></li>
            <li>Kontak Kami</li>
          </ul>
      </div>
  </div>
  <div class="contact-area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="contact-area-container">
                      <div class="single-title">
                        <h3>Kontak Kami</h3>
                      </div>
                      <div class="contact-address-container">
                          <div class="contact-address-info">
                              <div class="contact-icon">
                                  <i class="fa fa-map-marker"></i>
                              </div>
                              <div class="contact-text">
                                  <h4>Alamat</h4>
                                  <span>11st Floor New World Tower Miami</span>
                              </div>
                          </div>
                          <div class="contact-address-info">
                              <div class="contact-icon">
                                  <i class="fa fa-phone"></i>
                              </div>
                              <div class="contact-text">
                                  <h4>Telepon</h4>
                                  <span>(801) 2345 - 6789</span>
                              </div>
                          </div>
                          <div class="contact-address-info">
                              <div class="contact-icon">
                                  <i class="fa fa-envelope"></i>
                              </div>
                              <div class="contact-text">
                                  <h4>Email</h4>
                                  <span>admin@power-boosts.com</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="contact-form">
                      <div class="single-title">
                          <h3>Kirimi Kami Pesan</h3>
                      </div>
                      <div class="contact-form-container">
                          <form method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 mb2">
                                    <input type="text" name="name" placeholder="Nama *" class="mb0">
                                    @if ($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb2">
                                    <input type="email" name="email" placeholder="Email *" class="mb0">
                                    @if ($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <textarea name="message" class="yourmessage" placeholder="Pesan"></textarea>
                            <button type="submit" class="button-default button-yellow"><i class="fa fa-send"></i>Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop

@section('extrascripts')
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script>
    function initialize() {
      var mapOptions = {
      zoom: 15,
      scrollwheel: false,
      center: new google.maps.LatLng(23.763494, 90.432226)
      };

      var map = new google.maps.Map(document.getElementById('googleMap'),
        mapOptions);


      var marker = new google.maps.Marker({
      position: map.getCenter(),
      animation:google.maps.Animation.BOUNCE,
      icon: 'img/map-marker.png',
      map: map
      });
              
    }
              
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@stop