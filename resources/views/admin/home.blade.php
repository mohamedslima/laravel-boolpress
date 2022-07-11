@extends('layouts.app')

@section('content')
    <div class="home_container">
        <h1>
            Ciao {{ $user->name }} sei nel backoffice
        </h1>
        @if ($userInfo)
            <p>
                Indirizzo: {{ $userInfo->address }}
            </p>
            <p>
                Telefono: {{ $userInfo->phone }}
            </p>
        @endif
    </div>
@endsection
