@extends('layouts.app')

@section('title-page', 'Lista Animali')

@section('script-js')
    @vite('resources/js/perma-delete.js')
    @vite('resources/js/restore.js')
@endsection

@section('main-content')
<h1 class="text-center">
    Lista Animali
</h1>
<div>
    <div>
        @if (@session('deleted-message'))
            <div class="alert alert-success">
                {{session('deleted-message')}}
                <a href="{{route('pages.animals.index')}}">See the animal list</a>
            </div>


        @endif
    </div>
</div>
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Common Name</th>
            <th scope="col">Scientific Name</th>
            <th scope="col">Class</th>
            <th scope="col">Habitat</th>
            <th scope="col" class="text-center">Info</th>

        </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach ($animals as $animal)
    <tr>
        <th scope="row">{{$animal->id}}</th>
        <td>{{$animal->common_name}}</td>
        <td>{{$animal->scientific_name}}</td>
        <td>{{$animal->class}}</td>
        <td>{{$animal->habitat}}</td>
        <td class="text-center">
            <form action="{{route('animals.restore', $animal)}}" method="POST" class="d-inline-block form-restore" data-animal-name="{{$animal->common_name}}">
                @csrf
                @method('PATCH')
                <button class="btn btn-info btn-sm m-2">
                    Restore
                </button>
            </form>
            <form action="{{route('animals.permanent-delete', $animal)}}" method="POST" class="d-inline-block forms-destroy"  data-animal-name="{{$animal->common_name}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm m-2">
                    Perma Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div class="row my-3">
    <a href="{{route('pages.animals.create')}}" class="btn btn-danger btn-xl col-12">Aggiungi alla lista un nuovo animale</a>
</div>
@endsection
