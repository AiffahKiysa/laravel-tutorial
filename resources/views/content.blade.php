@extends('template')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article class="mb-5">
                    <h1 class="mb-3">{{ $article->title }}</h1>

                    <h6>By: <a href="/article?author={{ $article->author->username }}" class="text-decoration-none"> {{ $article->author->name  }} </a>in 
                        <a href="/article?category={{ $article->category->slug }}" class="text-decoration-none"> {{ $article->category->name  }} </a>
                    </h6>

                    <img src="https://source.unsplash.com/1200x400?{{ $article->category->name }}" class="card-img-top" alt="{{ $article->category->name }}" class="img-fluid">

                    <article class="my-3 fs-7">
                        {!! $article->body !!}
                    </article>

                    <a href="/article" class="d-block mt-3">Back</a>
                </article>
            </div>
        </div>
    </div>

@endsection
