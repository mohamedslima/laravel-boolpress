@extends('layouts.app')

@section('content')
    <div class="edit_post_section">
        <h1>
            Modifica post
        </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                  <option value="">Nessuna</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category &&  old('category_id', $post->category->id) == $category->id ? 'selected' : ''}}> {{ $category->name }} </option>
                  @endforeach
                </select>
              </div>
              <div class="form-check">
                <h4>Tags</h4>
    
                @foreach ($tags as $tag)
                    <div class="form-check">
                        {{-- Per ogni tag, dobbiamo controllare se questo tag è incluso nei tags collegati al post. Se sì, metto checked, se non niente --}}
                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            id="tag-{{ $tag->id }}"
                            {{ ($post->tags->contains($tag) || in_array($tag->id, old('tags', []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tag-{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
    
            </div>
    
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea type="text" class="form-control" id="content" name="content" rows="8">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
