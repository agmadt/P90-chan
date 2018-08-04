@extends('layouts.frontend')

@section('content')

  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Search</h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="{{ route('index') }}">Home</a></li>
                              <li>Search</li>
                              <li>{{ request('query') }}</li>
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
              <div class="col-md-4 col-sm-6">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/1.jpg" alt="">
                              <span class="class-date">Apr 21 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Letter Match Class</a></h4>
                              <p>Labore sequi impedit expedita alias dolore, nulla consequuntur tempore at voluptatibus fugit quo nihil fugiat!  alias ut delectus cupiditate voluptatum.</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 5 - 6 years</span>
                              <span>CLASS SIZE: 25</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">    
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/5.jpg" alt="">
                              <span class="class-date">OCT 10 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Cool Math Class</a></h4>
                              <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem ipsum dolor sit amet. The perfect class for your child with the best.</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 4 - 5 years</span>
                              <span>CLASS SIZE: 38</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">    
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/12.jpg" alt="">
                              <span class="class-date">Nov 10 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Awsome Drawing Class</a></h4>
                              <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem dolor sit amet. The perfect class for your child with the best.</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 4 - 5 years</span>
                              <span>CLASS SIZE: 38</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/7.jpg" alt="">
                              <span class="class-date">OCT 10 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Cool Activity Class</a></h4>
                              <p>Lorem ipsum dolor sit amet, abconsectetur adipisicing elit. Sunt quasi molestiae ipsa ullam perferendis student est magnam nobis vel laborum.</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 4 - 5 years</span>
                              <span>CLASS SIZE: 38</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/2.jpg" alt="">
                              <span class="class-date">FEB 19 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Alphabet Matching Class</a></h4>
                              <p>Fuga animi vel cumque officiis provident, quam, odit libero perferendis, itaque odio rem culpa ab a maxime quas quos illo quod</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 3 - 4 years</span>
                              <span>CLASS SIZE: 50</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/3.jpg" alt="">
                              <span class="class-date">Mar 22 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Alphabet Matching Class</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum incidunt quo voluptatem id dicta ea similique blanditiis nihi</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 7 - 8 years</span>
                              <span>CLASS SIZE: 20</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/4.jpg" alt="">
                              <span class="class-date">FEB 19 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Drawing Class</a></h4>
                              <p>Minima ipsa possimus voluptatum is consequatur aperiam fuga beatae iusto et quod expedita, numquam sit, accusantium non expedita!</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 5 - 6 years</span>
                              <span>CLASS SIZE: 12</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/13.jpg" alt="">
                              <span class="class-date">May 13 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Science Class</a></h4>
                              <p>Suscipit qui eum non, vel doloremque placeat, consequuntur explicabo tempore eius! Numquam amet exercit accusamus praesentium.</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 10 - 11 years</span>
                              <span>CLASS SIZE: 45</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 hidden-sm">
                  <div class="single-class">
                      <div class="single-class-image">
                          <a href="#">
                              <img src="img/gallery/6.jpg" alt="">
                              <span class="class-date">Feb 10 <span>2016</span></span>
                          </a>
                      </div>
                      <div class="single-class-text">
                          <div class="class-des">
                              <h4><a href="#">Science Class</a></h4>
                              <p>Suscipit qui eum non, vel doloremque placeat, consequuntur explicabo tempore eius! Numquam amet exercit accusamus praesentium.</p>
                          </div>
                          <div class="class-schedule">
                              <span>AGE: 2 - 3 years</span>
                              <span>CLASS SIZE: 15</span>
                              <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="pagination-content">
                      <div class="pagination-button">
                          <ul class="pagination">
                              <li class="current"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                          </ul>
                          <span>Page:</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop