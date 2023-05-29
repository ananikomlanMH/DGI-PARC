<?php

namespace App\Http\Controllers;

use App\Models\EtatMateriel;
use Illuminate\Http\Request;

class EtatMaterielController extends Controller
{
    public function index()
    {
        $etatMateriels = EtatMateriel::query()->paginate(8);
        return view('Settings.Etat Materiel.index', compact('etatMateriels'));
    }

    public function addForm()
    {
        $etatMateriel = new EtatMateriel();
        return view('Settings.Etat Materiel.form', compact('etatMateriel'));
    }

    public function add(Request $request)
    {
        $query = EtatMateriel::create($request->all());
        return redirect()
            ->route('etat_materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(EtatMateriel $etatMateriel)
    {
        return view('Settings.Etat Materiel.form', compact('etatMateriel'));
    }

    public function edit(Request $request, EtatMateriel $etatMateriel)
    {
        $query = $etatMateriel->update($request->all());
        return redirect()
            ->route('etat_materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(EtatMateriel $etatMateriel)
    {
        $query = $etatMateriel->delete();
        return redirect()
            ->route('etat_materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }
}
