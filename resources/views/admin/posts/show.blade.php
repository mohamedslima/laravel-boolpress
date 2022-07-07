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
            {{ $post->content }}
        </p>
    </div>
</div>

@endsection