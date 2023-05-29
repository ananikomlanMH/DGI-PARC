@extends('layout')

@section('title', 'Fournisseurs')

@php
$form_action = route('fournisseur.add');
if(!empty($fournisseur->id)){
    $form_action = route('fournisseur.edit', $fournisseur);
}
@endphp
@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('fournisseur.index') }}">Fournisseurs</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(empty($fournisseur->id))
                    Nouveau fournisseur
                @else
                    Edition fournisseur
                @endif
            </li>
        </ol>
    </nav>

    <div class="card mt-9">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"> @if(empty($fournisseur->id))
                    Nouveau fournisseur
                @else
                    Edition fournisseur
                @endif</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{ $form_action }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Raison Sociale', 'name' => 'raison' , 'value' => $fournisseur->raison])
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Téléphone', 'name' => 'telephone' , 'value' => $fournisseur->telephone])
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Adresse', 'name' => 'adresse' , 'value' => $fournisseur->adresse])
                        <button type="submit" class="btn btn-primary">Enregister</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
