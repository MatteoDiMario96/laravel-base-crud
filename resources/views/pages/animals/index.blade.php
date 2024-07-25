@extends('layouts.app')

@section('title-page', 'Lista Animali')

@section('script-js')
    @vite('resources/js/delete.js')
@endsection

@section('main-content')
<h1 class="text-center">
    Lista Animali
</h1>
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
    @foreach ($animals as $singleAnimal)
    <tr>
        <th scope="row">{{$singleAnimal->id}}</th>
        <td>{{$singleAnimal->common_name}}</td>
        <td>{{$singleAnimal->scientific_name}}</td>
        <td>{{$singleAnimal->class}}</td>
        <td>{{$singleAnimal->habitat}}</td>
        <td class="text-center">
            <a href="{{route('pages.animals.show', $singleAnimal)}}" class="btn btn-info btn-sm m-2">Details</a>
            <a href="{{route('pages.animals.edit', $singleAnimal)}}" class="btn btn-success btn-sm m-2">Edit</a>
            <form action="{{route('animals.destroy', $singleAnimal)}}" method="POST" class="d-inline-block forms-destroy">
                @csrf
                @method('DELETE')
                <button class="btn btn-warning btn-sm m-2">
                    Delete
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
