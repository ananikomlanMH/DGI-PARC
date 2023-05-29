@extends('layout')

@section('title', 'Materiels')

@php
$form_action = route('materiel.add');
if(!empty($materiel->id)){
    $form_action = route('materiel.edit', $materiel);
}
@endphp
@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('materiel.index') }}">Materiels</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(empty($materiel->id))
                    Nouveau materiel
                @else
                    Edition materiel
                @endif
            </li>
        </ol>
    </nav>

    <div class="card mt-9">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"> @if(empty($materiel->id))
                    Nouveau materiel
                @else
                    Edition materiel
                @endif</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{ $form_action }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Désignation', 'name' => 'designation' , 'value' => $materiel->designation])
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Etat', 'name' => 'etat' , 'value' => $materiel->etat])
                        @include('Form_Elements.input', ['type' => 'date', 'label' => 'Date acquistion', 'name' => 'date_acquisition' , 'value' => $materiel->date_acquisition])
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'N° serie', 'name' => 'num_serie' , 'value' => $materiel->num_serie])
                        @include('Form_Elements.select', ['label' => 'Type matériel', 'name' => 'type_materiel_id' , 'value' => $materiel->type_materiel_id, 'data' => \App\Models\TypeMateriel::all() ])
                        @include('Form_Elements.select', ['label' => 'Service', 'name' => 'services_id' , 'value' => $materiel->services_id, 'data' => \App\Models\Service::all() ])
                        <button type="submit" class="btn btn-primary">Enregister</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
