@extends('layouts.app')

@section('title-page', 'Lista Animali')

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
            <th scope="col">Info</th>

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
        <td><a href="{{route('pages.animals.show', $singleAnimal->id)}}" class="btn btn-success btn-sm">Dettagli</a></td>
    </tr>
    @endforeach
</table>

<div class="row my-3">
    <a href="{{route('pages.animals.create')}}" class="btn btn-info btn-xl col-12">Aggiungi alla lista un nuovo animale</a>
</div>
@endsection
