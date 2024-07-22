@extends('layouts.app')

@section('title-page', 'Info {{$animal->common_name}}')

@section('main-content')
<div class="card text-bg-light">
    <div class="card-header">{{$animal->common_name}}</div>
    <div class="card-body">
        <h5 class="card-title">{{$animal->scientific_name}}</h5>
        <strong><p class="card-text">{{$animal->class}}</p></strong>
        <strong><p class="card-text">{{$animal->habitat}}</p></strong>
        <en><p class="card-text">{{$animal->geographical_distribution}}</p></en>
        <strong><en><p class="card-text">{{$animal->high_max}}</p></en></strong>
        <strong><en><p class="card-text">{{$animal->high_max}}</p></en></strong>
        <p class="card-text">{{$animal->note}}</p>
        <a href="{{route('pages.animals.index')}}" class="btn btn-primary">Torna alla lista degli animali!</a>
        <a href="{{route('pages.home')}}" class="btn btn-warning">Torna alla Home!</a>
    </div>

@endsection
