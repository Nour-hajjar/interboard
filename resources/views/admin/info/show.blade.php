@extends('layouts.app')


@section('content')
<div class="card-body">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="text-align: center;">             {{trans('app.info')}}</h2>
        </div>
     
    </div>
</div>


<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:10%">{{trans('app.en_name')}}</th>
      <td>{{ $info->en_name }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.ar_name')}}</th>
      <td>{{ $info->ar_name }}</td>
    </tr>
        <tr>
      <th scope="row">{{trans('app.namee')}}</th>
      <td>{{ $info->name }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.namee_a')}}</th>
      <td>{{ $info->name_a }}</td>
    </tr>    
  <tr>
      <th scope="row">{{trans('app.en_course')}}</th>
      <td>{{ $info->en_course }}</td>
    </tr> 
      <tr>
      <th scope="row">{{trans('app.ar_course')}}</th>
      <td>{{ $info->ar_course }}</td>
    </tr>
      <tr>
      <th scope="row">{{trans('app.code')}}</th>
      <td>{{ $info->code }}</td>
    </tr>
  <tr>
      <th scope="row">{{trans('app.date')}}</th>
      <td>{{ $info->date }}</td>
    </tr>
  </tbody>
</table>

        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('infos.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
@endsection