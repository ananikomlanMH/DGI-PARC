@extends('layout')

@section('title', 'Etat Materiel')

@php
$form_action = route('etat_materiel.add');
if(!empty($etatMateriel->id)){
    $form_action = route('etat_materiel.edit', $etatMateriel);
}
@endphp
@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('etat_materiel.index') }}">Etat matériel</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(empty($etatMateriel->id))
                    Nouvelle état
                @else
                    Edition état
                @endif
            </li>
        </ol>
    </nav>

    <div class="card mt-9">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"> @if(empty($etatMateriel->id))
                    Nouvelle état
                @else
                    Edition état
                @endif</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{ $form_action }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Etat matériel', 'name' => 'designation' , 'value' => $etatMateriel->designation])
                        <button type="submit" class="btn btn-primary">Enregister</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
