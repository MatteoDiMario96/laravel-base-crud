<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $animals = Animals::all();

        return view('pages.animals.index', compact('animals'));
    }

    public function show($id){
        $animal = Animals::findOrFail($id);

        return view('pages.animals.show', compact('animal'));

    }

    public function create(){;

        return view('pages.animals.create');

    }

    public function store(Request $request){;

        $data = $request->all();

        $newAnimal = new Animals($data);
        $newAnimal->save();
        return redirect(route('pages.animals.show', $newAnimal));



    }
}
