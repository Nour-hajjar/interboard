@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                                            <div class="card-header">
     {{trans('app.Category') .': '. $category->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('categories.index') }}">{{trans('app.Back')}} </a>

                    <div class="card-body">
                        {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            {!! Form::label(trans('app.Thumbnail')) !!}
                            {!! Form::text('thumbnail', $category->thumbnail, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            {!! Form::label(trans('app.name')) !!}
                            {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('name_a')) has-error @endif">
                            {!! Form::label(trans('app.name_a')) !!}
                            {!! Form::text('name_a', $category->name_a, ['class' => 'form-control', 'placeholder' => 'name_a']) !!}
                            @if ($errors->has('name_a'))
                                <span class="help-block">{!! $errors->first('name_a') !!}</span>@endif
                        </div>

                        <div class="form-group">
                            {!! Form::label(trans('app.Publish')) !!}
                            {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], isset($category->is_published) ? $category->is_published : null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit(trans('app.Update'),['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
