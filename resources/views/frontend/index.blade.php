@extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')

  <div class="slider-area slider-three-area">
    <div class="preview-2">
      <div id="nivoslider" class="slides">    
        <img src="img/slider/5.jpg" alt="" title="#slider-1-caption1"/>
        <img src="img/slider/6.jpg" alt="" title="#slider-1-caption2"/>
      </div> 
      <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
        <div class="banner-content slider-1">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="text-content hidden-xs">
                  <p class="sub-title">Your Child can be a genius</p>
                  <h1 class="title1">best Education for <br> Kids perfectly</h1>
                  <div class="banner-readmore">
                    <a title="Read more" href="#">Enroll your child</a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
        <div class="banner-content slider-2">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="text-content hidden-xs">
                  <p class="sub-title">Learn computer with fun</p>
                  <h1 class="title1">best Education for<br> Kids perfectly</h1>
                  <div class="banner-readmore">
                  <a title="Read more" href="#">Enroll your child</a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
  <div class="activity-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 activity">
                <div class="single-activity">
                    @if (!empty($siteSetting['setting_home_block_one_icon']))
                        <div class="single-activity-icon">
                            <i class="fa {{ $siteSetting['setting_home_block_one_icon'] }}"></i>
                        </div>
                    @else
                        <div class="single-activity-icon">
                            <i class="fa fa-male"></i>
                        </div>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_one_title']))
                        <h4>{{ $siteSetting['setting_home_block_one_title'] }}</h4>
                    @else
                        <h4>Mandiri</h4>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_one_text']))
                        <p>{{ $siteSetting['setting_home_block_one_text'] }}</p>
                    @else
                        <p>Biaya operasional dipenuhi dari hasil unit usaha.</p>
                    @endif
                </div>
            </div>
            <div class="col-md-3 col-sm-4 activity">
                <div class="single-activity">
                    @if (!empty($siteSetting['setting_home_block_two_icon']))
                        <div class="single-activity-icon">
                            <i class="fa {{ $siteSetting['setting_home_block_two_icon'] }}"></i>
                        </div>
                    @else
                        <div class="single-activity-icon">
                            <i class="fa fa-handshake"></i>
                        </div>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_two_title']))
                        <h4>{{ $siteSetting['setting_home_block_two_title'] }}</h4>
                    @else
                        <h4>Amanah</h4>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_two_text']))
                        <p>{{ $siteSetting['setting_home_block_two_text'] }}</p>
                    @else
                        <p>Kami mengunggah pemasukan dan pengeluaran bulanan yang dapat anda cek.</p>
                    @endif
                </div>
            </div>
            <div class="col-md-3 col-sm-4 activity">
                <div class="single-activity">
                    @if (!empty($siteSetting['setting_home_block_three_icon']))
                        <div class="single-activity-icon">
                            <i class="fa {{ $siteSetting['setting_home_block_three_icon'] }}"></i>
                        </div>
                    @else
                        <div class="single-activity-icon">
                            <i class="fa fa-user-graduate"></i>
                        </div>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_three_title']))
                        <h4>{{ $siteSetting['setting_home_block_three_title'] }}</h4>
                    @else
                        <h4>Profesional</h4>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_three_text']))
                        <p>{{ $siteSetting['setting_home_block_three_text'] }}</p>
                    @else
                        <p>Dikelola oleh orang yang ahli dibidang nya.</p>
                    @endif
                </div>
            </div>
            <div class="col-md-3 hidden-sm activity">
                <div class="single-activity">
                    @if (!empty($siteSetting['setting_home_block_four_icon']))
                        <div class="single-activity-icon">
                            <i class="fa {{ $siteSetting['setting_home_block_four_icon'] }}"></i>
                        </div>
                    @else
                        <div class="single-activity-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_four_title']))
                        <h4>{{ $siteSetting['setting_home_block_four_title'] }}</h4>
                    @else
                        <h4>Blok 4</h4>
                    @endif
                    @if (!empty($siteSetting['setting_home_block_four_text']))
                        <p>{{ $siteSetting['setting_home_block_four_text'] }}</p>
                    @else
                        <p>Yang ini bisa diisi</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
  </div>
  @if ($news)
  <div class="class-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper title-yellow">
                    <div class="section-title">
                        <h3>Berita</h3>
                    </div>
                </div> 
            </div>       
        </div>
        <div class="row">
            <div class="class-carousel carousel-style-one">
                @foreach ($news as $singleNews)
                    <div class="col-md-4">
                        <div class="single-class">
                            <div class="single-class-image">
                                <a href="{{ route('news-detail', $singleNews->id) }}">
                                    <span class="class-date">{{ $singleNews->created_at->format('d M') }} <span>{{ $singleNews->created_at->format('Y') }}</span></span>
                                </a>
                            </div>
                            <div class="single-class-text">
                                <div class="class-des">
                                    <h4><a href="{{ route('news-detail', $singleNews->id) }}">{{ $singleNews->title }}</a></h4>
                                    <p>{{ $singleNews->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>    
        </div>
    </div>
  </div>
  @endif
  @if ($photos)
  <div class="gallery-area gallery-fullwidth section-gray section-padding pb3">
    <div class="section-title-wrapper title-yellow">
        <div class="section-title">
            <h3>Galeri Foto</h3>
        </div>
    </div> 
    <div class="gallery-wrapper">
        @foreach ($photos as $photo)
        <div class="single-items col-md-3 col-sm-4 col-xs-12 overlay-hover">
            <div class="overlay-effect sea-green-overlay">
                @if ($photo->hasImage)
                    <a href="{{ route('gallery-detail', $photo->id) }}"><img src="img/gallery/{{ $photo->image }}" alt=""></a>
                @endif
                <div class="gallery-hover-effect">
                    <a class="gallery-icon venobox" href="img/gallery/13.jpg"><i class="fa fa-search-plus"></i></a>
                    <span class="gallery-text">{{ $photo->title }}</span>
                </div> 
            </div>
        </div> 
        @endforeach
    </div>
    <div class="view-gallery text-center">
        <h4>Galeri Foto</h4>
        <a href="{{ route('galleries') }}" class="button-default">Lihat</a>
    </div>
  </div>
  @endif
  <div class="google-map-area">
    <div id="contacts" class="map-area">
      <div id="googleMap" style="width:100%;height:451px;"></div>
    </div>
  </div>
@stop

@section('extrascripts')
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ $siteSetting['setting_map_api_key'] }}"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script>
    function initialize() {
      var mapOptions = {
          zoom: 15,
          scrollwheel: false,
          center: new google.maps.LatLng({{ $siteSetting['setting_map_lat'] }}, {{ $siteSetting['setting_map_lng'] }})
      };

      var map = new google.maps.Map(document.getElementById('googleMap'),
        mapOptions);


      var marker = new google.maps.Marker({
          position: map.getCenter(),
          animation:google.maps.Animation.BOUNCE,
          icon: 'image/map-marker.png',
          map: map
      });
              
    }
              
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@stop