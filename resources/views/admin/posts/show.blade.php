@extends('layouts.app')

@section('content')
<div class="single_post_section">
    <div class="single_post">
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            Slug: {{ $post->slug }}
        </p>
        <p>
            Categoria: {{ $category ? $category->name : 'nessuna categoria' }}
        </p> 
        <p>
            {{ $post->content }}
        </p>
        <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>
    </div>
</div>

@endsection