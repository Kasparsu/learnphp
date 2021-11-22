@extends('layout')
@section('title', 'Home Page')
@section('content')
    <h1>Hello Laravel</h1>
    <div class="row row-cols-4">
        @foreach($articles as $article)
            <div class="col mb-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->body}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
