@extends('layouts.app')

@section('script-js')
    @vite('resources/js/delete.js')
@endsection

@section('title-page', 'Info' . ' ' . $animal->common_name)

@section('main-content')
<div class="card text-bg-light">
    <div class="card-header">Scientific name: {{$animal->scientific_name}}</div>
        @if (session('edit-animal'))
            <div class="alert alert-success">
                {{session('edit-animal')}}
            </div>
        @endif
        <div class="w-25">
            <img src="{{$animal->image_url}}" class="card-img-top fluid" alt="...">
        </div>
    <div class="card-body">
        <h5 class="card-title">Common name: {{$animal->common_name}}</h5>
        <strong><p class="card-text">Class:{{$animal->class}}</p></strong>
        <strong><p class="card-text">Habitat :{{$animal->habitat}}</p></strong>
        <en><p class="card-text">Geographical distribuition:{{$animal->geographical_distribution}}</p></en>
        <strong><en><p class="card-text">High max:{{$animal->high_max}}</p></en></strong>
        <strong><en><p class="card-text">Weigh Max:{{$animal->weigh_max}}</p></en></strong>
        <p class="card-text">Note:{{$animal->note}}</p>
        <a href="{{route('pages.animals.edit', $animal)}}" class="btn btn-success">Edit {{$animal->common_name}}</a>
        <form action="{{route('animals.destroy', $animal)}}" method="POST" class="d-inline-block forms-destroy">
            @csrf
            @method('DELETE')
            <button class="btn btn-warning">
                Delete  {{$animal->common_name}}
            </button>
        </form>
        <a href="{{route('pages.animals.index')}}" class="btn btn-primary">Go back to the animal list</a>
    </div>

@endsection
