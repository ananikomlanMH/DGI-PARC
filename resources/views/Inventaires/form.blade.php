@extends('layout')

@section('title', 'Maintenanaces')

@php
$form_action = route('inventaire.add');
if(!empty($inventaire->id)){
    $form_action = route('inventaire.edit', $inventaire);
}
@endphp
@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('inventaire.index') }}">Maintenances</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(empty($inventaire->id))
                    Nouvelle inventaire
                @else
                    Edition inventaire
                @endif
            </li>
        </ol>
    </nav>

    <div class="card mt-9">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"> @if(empty($inventaire->id))
                    Nouvelle inventaire
                @else
                    Edition inventaire
                @endif</h5>
            <div>
                <form action="{{ $form_action }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @include('Form_Elements.input', ['type' => 'text', 'label' => 'Observations', 'name' => 'observations' , 'value' => ''])

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>N° Serie</th>
                            <th>Designation</th>
                            <th>Type</th>
                            <th>Service</th>
                            <th style="width: 170px;">Qte</th>
                            <th style="width: 170px;">Etat</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @forelse(\App\Models\Materiel::all() as $item)
                            <tr>
                                <input type="hidden" name="id[]" value="{{ $item->id }}">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->num_serie }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->typeMateriel->designation }}</td>
                                <td>{{ $item->service->designation }}</td>
                                <td>
                                    @include('Form_Elements.input', ['type' => 'number', 'label' => null, 'name' => 'qte[]' , 'value' => 0])
                                </td>
                                <td>
                                    @include('Form_Elements.select', ['label' => null, 'name' => 'etat[]' , 'value' => null, 'data' => \App\Models\EtatMateriel::all() ])
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" style="text-align:center;"> Aucun enregistrement trouvé.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Enregister</button>
                </form>
            </div>
        </div>
    </div>
@endsection
