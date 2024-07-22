@extends('layouts.app')

@section('title-page', 'Template Creato!')

@section('main-content')
    <header class="m-5">
        <h1>
            Homepage
        </h1>
    </header>
    <main class="m-5">
        <h2 class="mb-5">
            Vieni a vedere la lista degli animali !
        </h2>
        <a href="{{route('pages.animals.index')}}" class="btn btn-info">Vedi la lista completa</a>
    </main>
@endsection
