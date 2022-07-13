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
                <strong>Tags:</strong>
                @forelse ($post->tags as $tag)
                    {{ $tag->name }}{{ $loop->last ? '' : ', ' }}.
                @empty
                    nessun tag
                @endforelse
            </p>
            <p>
                {{ $post->content }}
            </p>
            <div class="d-flex">
                <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>
                <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ml-2">Cancella</button>
                </form>
            </div>
        </div>
    </div>
@endsection
