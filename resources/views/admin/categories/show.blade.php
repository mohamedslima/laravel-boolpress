@extends('layouts.app')

@section('content')
    <div class="categories_main">
        <h2>
            <strong> Categoria: </strong> {{ $category->name }}
        </h2>
        <p><strong>Slug:</strong> {{ $category->slug }}</p>
        <ul>
            @forelse ($category->posts as $post)
                <li>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                </li>
            @empty
                <li>
                    Nessun post
                </li>
            @endforelse
        </ul>
    </div>
@endsection
