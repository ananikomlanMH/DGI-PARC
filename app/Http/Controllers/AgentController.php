<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::query()->paginate(8);
        return view('Settings.Agents.index', compact('agents'));
    }

    public function addForm()
    {
        $agent = new Agent();
        return view('Settings.Agents.form', compact('agent'));
    }

    public function add(Request $request)
    {
        $query = Agent::create($request->all());
        return redirect()
            ->route('agent.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(Agent $agent)
    {
        return view('Settings.Agents.form', compact('agent'));
    }

    public function edit(Request $request, Agent $agent)
    {
        $query = $agent->update($request->all());
        return redirect()
            ->route('agent.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(Agent $agent)
    {
        $query = $agent->delete();
        return redirect()
            ->route('agent.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }
}
