@extends('layouts.frontend')

@section('title', 'Donasi')

@section('content')
  <div class="breadcrumb-banner-area blog">
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
  <div class="blog-details-area section-padding blog-two">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-md-8">
                  <div class="blog-post-wrapper">
                      <div class="blog-post-details">
                          <h1>New Friends Everyday at Kiddie</h1>
                          <span><i class="fa fa-calendar"></i>May 9, 2016/ By: Admin</span>
                      </div>
                      <div class="blog-post-details-img">
                          <img src="img/blog/7.jpg" alt="">
                      </div>
                      <div class="blog-post-details-text">
                          <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                          <h4>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h4>
                          <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                          <h4>1914 translation by H. Rackham</h4>
                          <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                      </div>   
                      <div class="single-title">
                          <h3>Related Posts</h3>
                      </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                              <div class="single-blog-item overlay-hover">
                                  <div class="single-blog-image">
                                      <div class="overlay-effect">
                                          <a href="#">
                                              <img src="img/blog/1.jpg" alt="">
                                              <span class="class-date">Dec 21 <span>2015</span></span>
                                          </a>
                                      </div>    
                                  </div>
                                  <div class="single-blog-text">
                                      <h4><a href="blog-details.html">New Friends Everyday at Kiddie</a></h4>
                                      <div class="blog-date">
                                          <span><i class="fa fa-calendar"></i>08 Apr, 2016</span>
                                      </div>
                                      <p>The concept of the activity room is about 'Learning', through play, in a totally different environment.</p>
                                      <a href="blog-details.html">Read more.</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                              <div class="single-blog-item overlay-hover">
                                  <div class="single-blog-image">
                                      <div class="overlay-effect">
                                          <a href="#">
                                              <img src="img/blog/2.jpg" alt="">
                                              <span class="class-date">Jan 24 <span>2016</span></span>
                                          </a>
                                      </div>    
                                  </div>
                                  <div class="single-blog-text">
                                      <h4><a href="blog-details.html">Swimming Lessons at the New</a></h4>
                                      <div class="blog-date">
                                          <span><i class="fa fa-calendar"></i>27 Jan, 2014</span>
                                      </div>
                                      <p>The concept of the activity room is about 'Learning', through play, in a totally different environment.</p>
                                      <a href="blog-details.html">Read more.</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 hidden-md hidden-sm col-xs-12">
                              <div class="single-blog-item overlay-hover">
                                  <div class="single-blog-image">
                                      <div class="overlay-effect">
                                          <a href="#">
                                              <img src="img/blog/3.jpg" alt="">
                                              <span class="class-date">May 18 <span>2016</span></span>
                                          </a>
                                      </div>    
                                  </div>
                                  <div class="single-blog-text">
                                      <h4><a href="blog-details.html">New Friends Everyday at Kiddie</a></h4>
                                      <div class="blog-date">
                                          <span><i class="fa fa-calendar"></i>30 Feb, 2015</span>
                                      </div>
                                      <p>The concept of the activity room is about 'Learning', through play, in a totally different environment.</p>
                                      <a href="blog-details.html">Read more.</a>
                                  </div>
                              </div>
                          </div>
                      </div> 
                  </div>
              </div>
              <div class="col-lg-3 col-md-4">
                  <div class="single-widget-item">
                      <div class="single-title">
                        <h3>Berita Lainnya</h3>
                      </div>
                      <div class="single-widget-container">
                        @foreach ($otherNews as $singleNews)
                          <div class="recent-post-item">
                              @if ($singleNews->hasImage)
                              <div class="recent-post-image">
                                  <a href="{{ route('news-detail', $singleNews->id) }}"><img src="img/news/{{ $singleNews->thumbnail }}"></a>
                              </div>
                              @endif
                              <div class="recent-post-text">
                                  <h4><a href="{{ route('news-detail', $singleNews->id) }}">{{ $singleNews->title }}</a></h4>
                                  <span><i class="fa fa-calendar"></i>{{ $singleNews->created_date->format('d M Y') }}</span>
                              </div>
                          </div>
                        @endforeach
                      </div>
                  </div>    
              </div>
          </div>
      </div>
  </div>
@stop