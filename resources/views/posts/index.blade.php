@extends('layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-end">
            <a href="{{route('posts.create')}}" class="btn btn-primary">Создать новый пост</a>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}} <span
                                class="badge text-bg-success">{{$post->category->title}}</span></h5>
                        <p class="card-text">{{$post->description}}</p>
                        <a href="#" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
