@extends('website.template.master')

@section('content')
    <!-- Page Header -->
      <body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"> 
  
        <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>{{trans('app.about')}}</h1>
                <ol class="breadcrumb">
                  <!--   <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item active">حول</li> -->
                </ol>
            </div>
            <!-- /.hero-text -->
        </div>
        <!-- /.hero-content -->
    </div>
    <!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-ui-elements">
            <div class="container">

                <div class="typography">
  
                    <h2 class="text-center heading-separator">{{App::isLocale('ar') ? $post->ar_title: $post->en_title}}</h2>
                <p style="font-weight: bold!important;" >{!! App::isLocale('ar') ? $post->ar_sub_title: $post->en_sub_title !!}</p>
                    <p style="font-weight: bold!important;" >{!! App::isLocale('ar') ? $post->ar_details: $post->en_details !!}</p>


                   
                

                </div>
                <!-- /.typography -->

                <!-- /.ui-pagination -->

            </div>
               
        </section>
        <!-- /.section-ui-elements -->

    </main>
    <!-- /#main -->

@endsection