<?php

namespace App\Http\Controllers;

use App\Models\Marche;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class MarchesController extends Controller
{
    public function index(): View
    {
        return view('marche.index', [
            'marches' => Marche::paginate(3),
        ]);
    }

    public function create(): View
    {
        return view('marche.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomMarche' => ['required', 'min:2', 'max:50'],
            'description' => ['required', 'min:2', 'max:150'],
            'capacite' => ['required', 'integer', 'min:0'],
            'adresse' => ['required', 'min:2'],
            'telephone' => ['required', 'min:8', 'max:8'],
            'image' => ['image', 'max:2500', 'required'],
        ]);

        // dd($request->all());

        /** @var UploadedFile  $image */
        $marche = new Marche;

        $marche->nomMarche = $request->input('nomMarche');
        $marche->description = $request->input('description');
        $marche->capacite = $request->input('capacite');
        $marche->adresse = $request->input('adresse');
        $marche->telephone = $request->input('telephone');
        $marche->image = $request->file('image')->store('marche', 'public');
        $marche->idVille = '1';
        $marche->idEmplacement = '2';

        $marche->save();

        return redirect()->route('marche.create')->with('success', "Le marché a été ajouté avec succès");
    }
}
