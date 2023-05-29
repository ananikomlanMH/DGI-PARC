<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    public function index()
    {
        $materiels = Materiel::query()->paginate(8);
        return view('Settings.Materiels.index', compact('materiels'));
    }

    public function addForm()
    {
        $materiel = new Materiel();
        return view('Settings.Materiels.form', compact('materiel'));
    }

    public function add(Request $request)
    {

        $query = Materiel::create($request->all());
        return redirect()
            ->route('materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(Materiel $materiel)
    {
        return view('Settings.Materiels.form', compact('materiel'));
    }

    public function edit(Request $request, Materiel $materiel)
    {
        $query = $materiel->update($request->all());
        return redirect()
            ->route('materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(Materiel $materiel)
    {
        $query = $materiel->delete();
        return redirect()
            ->route('materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }
}
