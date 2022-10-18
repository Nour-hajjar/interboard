@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    
                <div class="card mt-4">
                    <div class="card-header">{{trans('app.Posts')}}</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="200">{{trans('app.Title')}}</th>
                                <th scope="col" width="200">{{trans('app.creat')}}</th>
                                <th scope="col" width="200">{{trans('app.Action')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                           @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{App::isLocale('ar') ? $post->ar_title: $post->en_title}}</td>
                                    <td>{{ $post->user->name }}</td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

              
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
