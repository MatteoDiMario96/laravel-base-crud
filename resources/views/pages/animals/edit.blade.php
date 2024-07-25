@extends('layouts.app')

@section('script-js')
    @vite('resources/js/edit.js')
@endsection

@section('title-page', 'Edita' . ' ' . $animal->common_name)

@section('main-content')
    <header class="m-5">
        <h1 class="text-center">
            Edit {{$animal->common_name}}
        </h1>
    </header>
    <main class="m-5 container d-flex justify-content-center align-items-center">
        <form action="{{route('animals.update', $animal)}}" method="POST" class="row g-3 form-edit">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Common Name</label>
                <input type="text" class="form-control" id="common-name" name="common_name" value="{{$animal->common_name}}">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Scientific Name</label>
                <input type="text" class="form-control" id="scientific-name" name="scientific_name"  value="{{$animal->scientific_name}}">
              </div>
              <div class="col-6">
                <label for="inputAddress" class="form-label">Class</label>
                <input type="text" class="form-control" id="animal-class" name="class" value="{{$animal->class}}">
              </div>
              <div class="col-6">
                <label for="inputAddress2" class="form-label">Habitat</label>
                <input type="text" class="form-control" id="animal-habitat" name="habitat" value="{{$animal->habitat}}">
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Geographical Distribuition</label>
                <input type="text" class="form-control" id="geo-distribuition" name="geographical_distribution" value="{{$animal->geographical_distribution}}" >
              </div>
              <div class="col-3">
                <label for="inputAddress2" class="form-label">High Max</label>
                <input type="number" class="form-control" id="high-max" name="high_max" value="{{$animal->high_max}}">
              </div>
              <div class="col-3">
                <label for="inputAddress2" class="form-label">Weigh Max</label>
                <input type="number" class="form-control" id="weigh-max" name="weigh_max" value="{{$animal->weigh_max}}">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Image Url</label>
                <input type="text" class="form-control" id="image-url" name="image_url" value="{{$animal->image_url}}" class="mb-3">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Note</label>
                <input type="text" class="form-control" id="animal-note" name="note" value="{{$animal->note}}">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success">Genera!</button>
              </div>

        </form>
    </main>
    <footer>
        <a href="{{route('pages.home')}}" class="btn btn-info">Torna alla Home</a>
    </footer>
@endsection
