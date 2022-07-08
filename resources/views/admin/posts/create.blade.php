@extends('layouts.app')

@section('content')
    <div class="create_post_section">
        <h1>
            Crea il tuo post
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

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="title" class="form-control" name="title" id="create_title" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea type="email" class="form-control" name="content" id="create_content" placeholder="Inserisci il contenuto"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
