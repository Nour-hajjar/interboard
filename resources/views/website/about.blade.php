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
    @foreach($master_abouts as $about)
                    <h2 class="text-center heading-separator">{{App::isLocale('ar') ? $about->ar_title: $about->en_title}}</h2>

                    <p style="font-weight: bold!important;" >{!! App::isLocale('ar') ? $about->ar_details: $about->en_details !!}</p>


                   
                

                </div>
                <!-- /.typography -->

                <!-- /.ui-pagination -->

            </div>
                  @endforeach
        </section>
        <!-- /.section-ui-elements -->

    </main>
    <!-- /#main -->

@endsection