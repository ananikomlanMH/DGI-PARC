<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\EtatMateriel;
use App\Models\Fournisseur;
use App\Models\Materiel;
use App\Models\TypeMateriel;
use Illuminate\Http\Request;

class TypeMaterielController extends Controller
{
    public function index()
    {
        $typeMateriels = TypeMateriel::query()->paginate(8);
        return view('Settings.Types Materiel.index', compact('typeMateriels'));
    }

    public function addForm()
    {
        $typeMateriel = new TypeMateriel();
        return view('Settings.Types Materiel.form', compact('typeMateriel'));
    }

    public function add(Request $request)
    {
        $query = TypeMateriel::create($request->all());
        return redirect()
            ->route('type_materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(TypeMateriel $typeMateriel)
    {
        return view('Settings.Types Materiel.form', compact('typeMateriel'));
    }

    public function edit(Request $request, TypeMateriel $typeMateriel)
    {
        $query = $typeMateriel->update($request->all());
        return redirect()
            ->route('type_materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(TypeMateriel $typeMateriel)
    {
        $query = $typeMateriel->delete();
        return redirect()
            ->route('type_materiel.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }
}
