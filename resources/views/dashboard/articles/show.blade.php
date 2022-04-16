@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article class="mb-5">
                <h1 class="mb-3">{{ $article->title }}</h1>

                <a href="/dashboard/articles" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $article->category->name }}" alt="{{ $article->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-7">
                    {!! $article->body !!}
                </article>

                <a href="/article" class="d-block mt-3">Back</a>
            </article>
        </div>
    </div>
</div>
@endsection