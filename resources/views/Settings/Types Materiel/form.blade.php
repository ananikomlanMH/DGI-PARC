@extends('layout')

@section('title', 'Types Materiel')

@php
$form_action = route('type_materiel.add');
if(!empty($typeMateriel->id)){
    $form_action = route('type_materiel.edit', $typeMateriel);
}
@endphp
@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('type_materiel.index') }}">Types matériel</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(empty($typeMateriel->id))
                    Nouveau type
                @else
                    Edition type
                @endif
            </li>
        </ol>
    </nav>

    <div class="card mt-9">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"> @if(empty($typeMateriel->id))
                    Nouveau type
                @else
                    Edition type
                @endif</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{ $form_action }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        @include('Form_Elements.input', ['type' => 'text', 'label' => 'Type matériel', 'name' => 'designation' , 'value' => $typeMateriel->designation])
                        <button type="submit" class="btn btn-primary">Enregister</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
