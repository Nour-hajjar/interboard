@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.Category')}}</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'categories.store']) !!}
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            {!! Form::label(trans('app.Thumbnail')) !!}
                            {!! Form::text('thumbnail', null, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            {!! Form::label(trans('app.name')) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
                        </div>
                                  <div class="form-group @if($errors->has('name_a')) has-error @endif">
                            {!! Form::label(trans('app.name_a')) !!}
                            {!! Form::text('name_a', null, ['class' => 'form-control', 'placeholder' => 'name_a']) !!}
                            @if ($errors->has('name_a'))
                                <span class="help-block">{!! $errors->first('name_a') !!}</span>@endif
                        </div>

                        <div class="form-group">
                            {!! Form::label(trans('app.Publish')) !!}
                            {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit(trans('app.cs'),['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
