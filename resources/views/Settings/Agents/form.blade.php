@extends('layout')

@section('title', 'Agent')

@php
$form_action = route('agent.add');
if(!empty($agent->id)){
    $form_action = route('agent.edit', $agent);
}
@endphp
@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('agent.index') }}">Agents</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(empty($agent->id))
                    Nouveau agent
                @else
                    Edition agent
                @endif
            </li>
        </ol>
    </nav>

    <div class="card mt-9">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"> @if(empty($agent->id))
                    Nouveau agent
                @else
                    Edition agent
                @endif</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{ $form_action }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Nom', 'name' => 'nom' , 'value' => $agent->nom])
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Prénom', 'name' => 'prenom' , 'value' => $agent->prenom])
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Téléphone', 'name' => 'telephone' , 'value' => $agent->telephone])
                        @include('Form_Elements.select', ['label' => 'Service', 'name' => 'services_id' , 'value' => $agent->services_id, 'data' => \App\Models\Service::all() ])
                        <button type="submit" class="btn btn-primary">Enregister</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
