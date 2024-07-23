@extends('layouts.app')

@section('title-page', 'Info {{$animal->common_name}}')

@section('main-content')
<div class="card text-bg-light">
    <div class="card-header">Scientific name: {{$animal->scientific_name}}</div>
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
        <a href="{{route('pages.animals.index')}}" class="btn btn-primary">Torna alla lista degli animali!</a>
        <a href="{{route('pages.home')}}" class="btn btn-warning">Torna alla Home!</a>
    </div>

@endsection
