@extends('layouts.app')

@section('content')
    <h1>
        Lista dei tuoi post
    </h1>

    <div class="post_section">
        @foreach ($posts as $post)
            <div class="post_card">
                <h4>{{ $post->title }}</h4>
                <a class="btn btn-primary" href="{{ route('admin.posts.show', ['post' => $post->id]) }}">LEGGI POST</a>
            </div>
        @endforeach
    </div>
    <div class="paginate_container">
        {{ $posts->links() }}
    </div>
    
@endsection
