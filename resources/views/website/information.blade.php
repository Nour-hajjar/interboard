@extends('website.template.master')

@section('content')
    <!-- Page Header -->
      <body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"> 
  
        <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>{{trans('app.verify')}}</h1>
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

        <form action="/search" method="get">
    <div class="input-group dd" style=" width: 400px;padding: 40px 40px 40px 40px;">
        <input type="search" name="search" class="form-control" style="background-color: #ddd;">
        <br>
        <br>
        <br>
        <span class="input-group-prepend">
            <button type="submit" class="btn"  style="background-color: #0f75bd;
            color: white;">{{trans('app.Search')}}</button>
        </span>
    </div>
</form>
<br>
<br>
<br>

          <div itemprop="articleBody">
        <center>
<div class="table-responsive">
<p style="text-align: center;">&nbsp;</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="text-align: center;">{{trans('app.nname')}}</th>
            <th style="text-align: center;">{{trans('app.namme')}}</th>
            <th style="text-align: center;">{{trans('app.course')}}</th>
            <th style="text-align: center;">{{trans('app.code')}}</th>
            <th style="text-align: center;">{{trans('app.date')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($master_infos as $info)
        <tr>
            <td style="text-align: center;">{{App::isLocale('ar') ? $info->ar_name: $info->en_name}}</td>
            <td style="text-align: center;">{{App::isLocale('ar') ? $info->name_a: $info->name}}</td>
            <td style="text-align: center;">{{App::isLocale('ar') ? $info->ar_course: $info->en_course}}</td>
            <td style="text-align: center;">{{$info->code}}</td>
            <td style="text-align: center;">{{$info->date}}</td>
        </tr>
       @endforeach
    </tbody>
</table>
</div>
</center>
    </div>

    </main>
    <!-- /#main -->
    <!-- /#main -->

@endsection