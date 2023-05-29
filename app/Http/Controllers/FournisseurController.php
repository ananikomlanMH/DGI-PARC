<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseurs = Fournisseur::query()->paginate(8);
        return view('Settings.Fournisseurs.index', compact('fournisseurs'));
    }

    public function addForm()
    {
        $fournisseur = new Fournisseur();
        return view('Settings.Fournisseurs.form', compact('fournisseur'));
    }

    public function add(Request $request)
    {
        $query = Fournisseur::create($request->all());
        return redirect()
            ->route('fournisseur.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(Fournisseur $fournisseur)
    {
        return view('Settings.Fournisseurs.form', compact('fournisseur'));
    }

    public function edit(Request $request, Fournisseur $fournisseur)
    {
        $query = $fournisseur->update($request->all());
        return redirect()
            ->route('fournisseur.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(Fournisseur $fournisseur)
    {
        $query = $fournisseur->delete();
        return redirect()
            ->route('fournisseur.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }
}
