@extends('layouts.app')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.Latest_Post') .': '. $post->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('posts.index') }}">{{trans('app.Back')}} </a></div>

                    <div class="card-body">
                        {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            {!! Form::label(trans('app.Thumbnail')) !!}
                            {!! Form::text('thumbnail', $post->thumbnail, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('en_title')) has-error @endif">
                            {!! Form::label(trans('app.en_title')) !!}
                            {!! Form::text('en_title', $post->en_title, ['class' => 'form-control', 'placeholder' => 'en_title']) !!}
                            @if ($errors->has('en_title'))
                                <span class="help-block">{!! $errors->first('en_title') !!}</span>@endif
                        </div>
                               <div class="form-group @if($errors->has('ar_title')) has-error @endif">
                            {!! Form::label(trans('app.ar_title')) !!}
                            {!! Form::text('ar_title', $post->ar_title, ['class' => 'form-control', 'placeholder' => 'ar_title']) !!}
                            @if ($errors->has('ar_title'))
                                <span class="help-block">{!! $errors->first('ar_title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('en_sub_title')) has-error @endif">
                            {!! Form::label(trans('app.en_sub_title')) !!}
                            {!! Form::text('en_sub_title', $post->en_sub_title, ['class' => 'form-control', 'placeholder' => 'en_sub_title']) !!}
                            @if ($errors->has('en_sub_title'))
                                <span class="help-block">{!! $errors->first('en_sub_title') !!}</span>@endif
                        </div>
                                  <div class="form-group @if($errors->has('ar_sub_title')) has-error @endif">
                            {!! Form::label(trans('app.ar_sub_title')) !!}
                            {!! Form::text('ar_sub_title', $post->ar_sub_title, ['class' => 'form-control', 'placeholder' => 'ar_sub_title']) !!}
                            @if ($errors->has('ar_sub_title'))
                                <span class="help-block">{!! $errors->first('ar_sub_title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('en_details')) has-error @endif">
                            {!! Form::label(trans('app.en_details')) !!}
                            {!! Form::textarea('en_details', $post->en_details, ['class' => 'form-control', 'placeholder' => 'en_details']) !!}
                            @if ($errors->has('en_details'))
                                <span class="help-block">{!! $errors->first('en_details') !!}</span>@endif
                        </div>
                                  <div class="form-group @if($errors->has('ar_details')) has-error @endif">
                            {!! Form::label(trans('app.ar_details')) !!}
                            {!! Form::textarea('ar_details', $post->ar_details, ['class' => 'form-control', 'placeholder' => 'ar_details']) !!}
                            @if ($errors->has('ar_details'))
                                <span class="help-block">{!! $errors->first('ar_details') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('category_id')) has-error @endif">
                            {!! Form::label(trans('app.Category')) !!}
                            {!! Form::select('category_id[]', $categories, null, ['class' => 'form-control', 'id' => 'category_id', 'multiple' => 'multiple']) !!}
                            @if ($errors->has('category_id'))
                                <span class="help-block">{!! $errors->first('category_id') !!}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label(trans('app.Publish')) !!}
                            {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
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

    <script>
 
        $(document).ready(function () {
            CKEDITOR.replace('en_details', {
            removePlugins: 'sourcearea'
        });
            CKEDITOR.replace('ar_details', {
            removePlugins: 'sourcearea'
        });


            $('#category_id').select2({
                placeholder: "Select categories"
            }).val({!! json_encode($post->categories()->allRelatedIds()) !!}).trigger('change');
        });
    </script>
@endsection
