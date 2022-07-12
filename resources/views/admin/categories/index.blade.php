@extends('layouts.app')

@section('content')
    <div class="categories_main">
        <h2>
            Lista delle Categorie
        </h2>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('admin.categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
