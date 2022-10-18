@extends('website.template.master')

@section('content')
    <!-- Page Header -->

   
      <body > 
  
    
      
    <!-- /#mastheaed -->

    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <h1 style="font-size:40px!important;">{{trans('app.International Board  of professional training and Qualification')}}</h1>
                <p></p>
                <a href="#" class="btn btn-border">{{trans('app.about')}}</a>
            </div>
            <!-- /.hero-text -->
        </div>
        <!-- /.hero-content -->
    </div>
    <!-- /.hero -->

    <main id="main" class="site-main dd">

        <section class="site-section section-features dd">

            <div class="container dd">

                <div class="row dd">
          <h2 class="heading-separator dd" style="text-align: center;"> {{trans('app.About')}}</h2>
          <br>
                    <div class="col-sm-6">

                        <h2 style="font-size: 20px!important;">{{trans('app.International')}}</h2>

                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <img style="height: 300px;" src="{{ asset('website/img/portfolio-12.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- /.section-features -->
  <section class="site-section section-ui-elements">
            <div class="container">

                <div class="typography">
                      <h2 class="text-center heading-separator">{{trans('app.course')}}</h2>
                   
                        <div class="row news-list">
                            @foreach($posts as $post)
                            <div class="col-md-4">
                                <div class="news">
                                    <figure><img style="height: 200px; width: 300px;" src="{{route('getImage',$post->thumbnail)}}" alt=""></figure>
                                    <br>
                                    <div class="date ltr nn">{{App::isLocale('ar') ? $post->ar_title: $post->en_title}}</div>
                                    <h2 class="entry-title ltr nn"><a href="{{ url('post/' . $post->slug) }}">{{App::isLocale('ar') ? $post->ar_sub_title: $post->en_sub_title}}</a></h2>
                                </div>
                            </div>
                            @endforeach
                          
                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </div> <!-- .latest-news-section -->
            <!-- Pager -->
                <div class="clearfix mt-4" style="padding: 10px!important; margin: 10px!important;">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
       
        <!-- /.section-services -->

        <section class="site-section section-map-feature text-center">

            <div class="container">
                <h2>{{trans('app.International Board  of professional training and Qualification')}} </h2>
                <p></p>
                <!-- <a href="#" class="btn btn-fill">Learn More</a> -->
                <div class="row">
                  
                        <!-- /.counter-item -->
                    </div>
                    <div class="col-sm-4 col-xs-8">
                        <div class="counter-item">
                            <p class="counter" data-to="1204" data-speed="2000">0</p>
                            <h3>{{trans('app.Projects completed')}}</h3>
                        </div>
                        <!-- /.counter-item -->
                    </div>
                    <div class="col-sm-4 col-xs-8">
                        <div class="counter-item">
                            <p class="counter" data-to="459" data-speed="1000">0</p>
                            <h3>{{trans('app.Happy Clients')}}</h3>
                        </div>
                        <!-- /.counter-item -->
                    </div>
                    <div class="col-sm-4 col-xs-8">
                        <div class="counter-item">
                            <p class="counter" data-to="675" data-speed="1000">0</p>
                            <h3>{{trans('app.Average Deal')}}</h3>
                        </div>
                        <!-- /.counter-item -->
                    </div>
                </div>
            </div>

        </section>
        <!-- /.section-map-feature -->

        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="heading-separator">{{trans('app.Success Partners in the International Board of Training and Rehabilitation')}}</h2>
                    <!-- <p class="subheading-text">This is some of our best work</p> -->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/a1.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"> </h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/a2.jpg" class="img-res" alt="" height="10" width="10">
                            <h4 class="portfolio-item-title"></h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/a3.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"> </h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/a4.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"> </h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/a5.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"> </h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/1.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"></h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/2.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"></h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/3.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"></h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/4.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title"> </h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/5.png" class="img-res" alt="">
                            <h4 class="portfolio-item-title"></h4>
                            <!-- <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.section-portfolio -->

    
        <!-- /.section-newsletter -->

    </main>
     @endsection()




     
        
