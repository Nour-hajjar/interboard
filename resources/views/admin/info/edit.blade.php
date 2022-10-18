@extends('layouts.app')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.info') .': '. $info->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('infos.index') }}">{{trans('app.Back')}} </a></div>

                    <div class="card-body">
                        {!! Form::open(['route' => ['infos.update', $info->id], 'method' => 'put']) !!}
                        <div class="form-group @if($errors->has('en_name')) has-error @endif">
                            {!! Form::label(trans('app.en_name')) !!}
                            {!! Form::text('en_name', $info->en_name, ['class' => 'form-control', 'placeholder' => 'name']) !!}
                            @if ($errors->has('en_name'))
                                <span class="help-block">{!! $errors->first('en_name') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('ar_name')) has-error @endif">
                            {!! Form::label(trans('app.ar_name')) !!}
                            {!! Form::text('ar_name', $info->ar_name, ['class' => 'form-control', 'placeholder' => 'name']) !!}
                            @if ($errors->has('ar_name'))
                                <span class="help-block">{!! $errors->first('ar_name') !!}</span>@endif
                        </div>
                               <div class="form-group @if($errors->has('name')) has-error @endif">
                            {!! Form::label(trans('app.namee')) !!}
                            {!! Form::text('name', $info->name, ['class' => 'form-control', 'placeholder' => 'name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('name_a')) has-error @endif">
                            {!! Form::label(trans('app.namee_a')) !!}
                            {!! Form::text('name_a', $info->name_a, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('name_a'))
                                <span class="help-block">{!! $errors->first('name_a') !!}</span>@endif
                        </div>
                                  <div class="form-group @if($errors->has('en_course')) has-error @endif">
                            {!! Form::label(trans('app.en_course')) !!}
                            {!! Form::text('en_course', $info->en_course, ['class' => 'form-control', 'placeholder' => 'en_course']) !!}
                            @if ($errors->has('en_course'))
                                <span class="help-block">{!! $errors->first('en_course') !!}</span>@endif
                        </div>
               <div class="form-group @if($errors->has('ar_course')) has-error @endif">
                            {!! Form::label(trans('app.ar_course')) !!}
                            {!! Form::text('ar_course', $info->ar_course, ['class' => 'form-control', 'placeholder' => 'ar_course']) !!}
                            @if ($errors->has('ar_course'))
                                <span class="help-block">{!! $errors->first('ar_course') !!}</span>@endif
                        </div>
                                       <div class="form-group @if($errors->has('code')) has-error @endif">
                            {!! Form::label(trans('app.code')) !!}
                            {!! Form::text('code', $info->code, ['class' => 'form-control', 'placeholder' => 'code']) !!}
                            @if ($errors->has('code'))
                                <span class="help-block">{!! $errors->first('code') !!}</span>@endif
                        </div>
                                       <div class="form-group @if($errors->has('date')) has-error @endif">
                            {!! Form::label(trans('app.date')) !!}
                            {!! Form::text('date', $info->date, ['class' => 'form-control', 'placeholder' => 'date']) !!}
                            @if ($errors->has('date'))
                                <span class="help-block">{!! $errors->first('date') !!}</span>@endif
                        </div>
                       

                        {!! Form::submit(trans('app.Update'),['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

@endsection
