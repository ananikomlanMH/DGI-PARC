<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->paginate(8);
        return view('Settings.Services.index', compact('services'));
    }

    public function addForm()
    {
        $service = new Service();
        return view('Settings.Services.form', compact('service'));
    }

    public function add(Request $request)
    {
        $query = Service::create($request->all());
        return redirect()
            ->route('service.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(Service $service)
    {
        return view('Settings.Services.form', compact('service'));
    }

    public function edit(Request $request, Service $service)
    {
        $query = $service->update($request->all());
        return redirect()
            ->route('service.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(Service $service)
    {
        $query = $service->delete();
        return redirect()
            ->route('service.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }
}
