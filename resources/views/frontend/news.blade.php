@extends('layouts.frontend')

@section('title', 'Berita')

@section('content')

  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Berita</h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="{{ route('index') }}">Beranda</a></li>
                              <li>Berita</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="class-grid-area section-padding">
      <div class="container">
          <div class="row">
            @foreach ($news as $singleNews)
                <div class="col-md-4 col-sm-6">
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
          <div class="row">
              <div class="col-md-12">
                  <div class="pagination-content">
                      <div class="pagination-button">
                        {{-- {{ $news->links() }} --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop