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
        return redirect(route('pages.animals.show', $animal))->with('edit-animal', $animal->common_name . ' '. 'has been edited with success');


    }
    public function destroy( Animals $animal ){;
        $animal->delete();
        return redirect()->route('pages.animals.index')->with('deleted-message', $animal->common_name . ' '. 'has been moved on the trash backet');

    }

    public function deletedIndex(){
        $animals = Animals::onlyTrashed()->get();
        return view('pages.animals.trash-index', compact('animals'));
    }
    public function restore(string $id){
        $animal = Animals::onlyTrashed()->findOrFail($id);
        $animal->restore();
        return redirect()->route('pages.animals.trash-index')->with('deleted-message', $animal->common_name . ' '. 'has been restored');
    }
    public function permanentDelete(string $id){
        $animal = Animals::onlyTrashed()->findOrFail($id);
        $animal->forceDelete();
        return redirect()->route('pages.animals.trash-index')->with('deleted-message', $animal->common_name . 'has been deleted by your trash backet.');;
    }
}
