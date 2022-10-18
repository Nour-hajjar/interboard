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



<br>
<br>
<br>

<div class="page-header">
                    <h2 itemprop="headline" style="text-align: center;">
       </h2>
                                    </div>

@if(count($infos) > 0)
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
      
        @foreach ($infos as $info)
              <tbody>
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
</div>
</body>
@else
    <p> You have no entries</p>
@endif
<br>
<br>
<br>
@endsection()