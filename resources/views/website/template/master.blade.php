<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>International Board</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/img/favicon.png')}}">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
     @if(App::isLocale('ar'))
     <link href="{{ asset('website/css/s.css') }}" rel="stylesheet">
       @else
        <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    @endif
    <link href="{{ asset('website/css/responsive.css')}}" rel="stylesheet">


</head>


<!-- Navigation -->
<!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">My WebSite</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{  url('/') }}">Home</a>
                </li>
                @php($pages = getPages())
                @foreach($pages as $page)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('page/' . $page->slug) }}">{{ $page->title }}</a>
                    </li>
                @endforeach
               
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.show') }}">Contact</a>
                </li>

                
            </ul>
        </div>
    </div>
</nav> -->


    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
<!-- 
                    <a class="site-title"><span>International Board  of professional training and Qualification</span></a> -->

                </div>
                <!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                     

                        <li><a href="{{  url('/') }}">{{trans('app.Home')}}</a></li>
                        <li><a href="{{url('about')}}">{{trans('app.About')}}</a></li>
                         @foreach($master_categories as $category)
                                    <li><a href="{{ url('category/' . $category->slug) }}">{{App::isLocale('ar') ? $category->name_a: $category->name}}</a></li>
                                       @endforeach
                        <li><a href="{{url('information')}}">{{trans('app.information')}}</a></li>
                        <li><a href="{{url('contact')}}">{{trans('app.Contact')}}</a></li>
<li><a class="menu-item" href="{{url('/lang/en')}}">{{trans('app.En')}}</a></li>
              <li><a class="menu-item" href="{{url('/lang/ar')}}">{{trans('app.Ar')}}</a></li>

                    </ul>

                </div>

            </div>
        </nav>
        <!-- /.site-navigation -->
    </header>          
<body>
@yield('content')



<!-- Footer -->
         <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6 dd">
                    <a class="site-title ">{{trans('app.About')}}</a>
                    <p>{{trans('app.solutions')}}</p>
                    
                </div>
                <div class="col-lg-offset-2 col-md-3 col-sm-2 col-md-offset-2 col-sm-offset-0 col-xs-3 ">
                    <h3 class="dd">{{trans('app.Keep in touch')}}</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="internationalboardof@gmail.com">internationalboardof@gmail.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="https://wa.me/message/JMK3GTEVO62UO1">Whatsapp </a></li>
                    
                      
                        </li>
                    </ul>
                </div>
                <div class="clearfix visible-xs dd"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-3">
                    <h3 class="">{{trans('app.Featured links')}}</h3>
                    <ul class="list-unstyled">
                       <li><a href="{{  url('/') }}">{{trans('app.Home')}}</a></li>
                        <li><a href="{{url('about')}}">{{trans('app.About')}}</a></li>
                        <li><a href="">{{trans('app.information')}}</a></li>
                        <li><a href="{{url('contact')}}">{{trans('app.Contact')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="social-links">
                            <a class="youtube-bg" href="https://youtube.com/channel/UCzu89lPUSAkl4Gz1JUcniZA"><i class="fa fa-youtube"></i></a>
                            <a class="facebook-bg" href="https://www.facebook.com/Ahmadalkood/"><i class="fa fa-facebook"></i></a>
                       
                    
                        </div>
                        <!-- /.social-links -->
                    </div>
                    <div class="col-xs-3">
                        <div class="text-right">
                            <p>&copy;2022</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.copyright -->
    </footer>
<!-- Bootstrap core JavaScript -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('website/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('website/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('website/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('website/js/jquery.countTo.min.js')}}"></script>
    <script src="{{ asset('website/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{ asset('website/js/script.js')}}"></script>

</body>

</html>
