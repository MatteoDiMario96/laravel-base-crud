@extends('layouts.app')

@section('title-page', 'Aggiungi animale')

@section('main-content')
    <header class="m-5">
        <h1 class="text-center">
            Aggiungi un animale alla lista!
        </h1>
    </header>
    <main class="m-5">
        <form action="{{route('animals.store')}}" method="POST" class="row g-3">
            @csrf

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Common Name</label>
                <input type="text" class="form-control" id="common-name" name="common_name" placeholder="Es: hedgehog ">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Scientific Name</label>
                <input type="text" class="form-control" id="scientific-name" name="scientific_name" placeholder="Erinaceus europaeus">
              </div>
              <div class="col-6">
                <label for="inputAddress" class="form-label">Class</label>
                <input type="text" class="form-control" id="animal-class" name="class" placeholder="Mammalia">
              </div>
              <div class="col-6">
                <label for="inputAddress2" class="form-label">Habitat</label>
                <input type="text" class="form-control" id="animal-habitat" name="habitat" placeholder="Gardens, woods, and grasslands">
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Geographical Distribuition</label>
                <input type="text" class="form-control" id="geo-distribuition" name="geographical_distribution" >
              </div>
              <div class="col-3">
                <label for="inputAddress2" class="form-label">High Max</label>
                <input type="number" class="form-control" id="high-max" name="high_max">
              </div>
              <div class="col-3">
                <label for="inputAddress2" class="form-label">Weigh Max</label>
                <input type="number" class="form-control" id="weigh-max" name="weigh_max">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Image Url</label>
                <input type="text" class="form-control" id="image-url" name="image_url" placeholder="Incolla qui un link immagine" class="mb-3">
                <p>ESEMPIO: https://images.pexels.com/photos/50577/hedgehog-animal-baby-cute-50577.jpeg?cs=srgb&dl=pexels-pixabay-50577.jpg&fm=jpg</p>
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Note</label>
                <input type="text" class="form-control" id="animal-note" name="note">
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

//CAMBIARE ID NAME DEGLI INPUT.
