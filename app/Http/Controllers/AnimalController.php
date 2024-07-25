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

    public function show(Animals $animal){

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
    public function edit(Animals $animal){;


        return view('pages.animals.edit', compact('animal'));



    }
    public function update(Request $request, Animals $animal ){;

        $data = $request->all();

        $animal->update($data);
        return redirect(route('pages.animals.show', $animal));


    }
    public function destroy( Animals $animal ){;
        $animal->delete();
        return redirect(route('pages.animals.index'));


    }
}
