@extends('website.template.master')

@section('content')
    <!-- Page Header -->
     <body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"> 
  
        <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>{{App::isLocale('ar') ? $category->name_a: $category->name}}</h1>
                <ol class="breadcrumb">
                  <!--   <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item active">حول</li> -->
                </ol>
            </div>
            <!-- /.hero-text -->
        </div>
        <!-- /.hero-content -->
    </div>

         <main id="main" class="site-main">

        <section class="site-section section-ui-elements">
            <div class="container">

                <div class="typography">
                      <h2 class="text-center heading-separator">{{App::isLocale('ar') ? $category->name_a: $category->name}}</h2>
                   
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
        <!-- /.section-ui-elements -->

    </main>
@endsection()
<style >
    .post-image{
      /*  width: 300px;
        height: 250px;*/
       
    }
    .post-preview {
    left: 100px;
    right: 100px;

 }
 .d-inline-block {
    display: inline-block!important;
    margin-right: 80px;
}
.post-title{
    width: 420px;
    height: 140px;
}
</style>