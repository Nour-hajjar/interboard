@extends('website.template.master')

@section('content')
    <!-- Page Header -->

           

    
 <div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>{{trans('app.Contact')}}</h1>
                <ol class="breadcrumb">
              <!--     <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active"></li> -->
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->
    
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                   
                </div>
                </article>
  
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session('message')}}
                    </div>
                @endif

    <main id="main" class="site-main dd">

        <section class="site-section subpage-site-section section-contact-us dd">

            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>{{trans('app.Contact form')}}</h2>
                     {!! Form::open(['route' => 'contact.submit']) !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="name">{{trans('app.Name')}}</label>
                                      <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="email">{{trans('app.email')}}</label>
                                      <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="phone">{{trans('app.Phone')}}</label>
                              <input class="form-control" id="subject"></input>
                            </div>
                            <div class="form-group">
                              <label for="message">{{trans('app.message')}}</label>
                              <textarea class="form-control form-control-comment" id="message"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-green">{{trans('app.Contact')}}</button>
                            </div>
                     
                {!! Form::close() !!}
                    </div>
                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h2>{{trans('app.Contact information')}}</h2>
                            <div class="row">
                                <div class="col-sm-12">
                             
                                    </ul>
                                    <h3>{{trans('app.email')}}</h3>
                                    <a href="internationalboardof@gmail.com" target="_blank">internationalboardof@gmail.com</a>
                                    <h3>{{trans('app.Phone')}}</h3>
                                    <a href="https://wa.me/message/JMK3GTEVO62UO1" target="_blank">whatsapp</a>
                              
                                </div>
                            </div>
                        </div><!-- /.contact-info -->
                    </div>
                </div>
            </div>
            
        </section><!-- /.section-contact-us -->


@endsection()

