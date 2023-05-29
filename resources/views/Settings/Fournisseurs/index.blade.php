@extends('layout')


@section('title', 'Fournisseurs')

@section('content')
    <div class="d-flex justify-content-between">
        <h3 class="mb-9">Fournisseurs</h3>
        <p>
            <a href="{{ route('fournisseur.addForm') }}" class="btn btn-primary">Nouveau <i class="ti ti-plus"></i></a>
        </p>
    </div>


    <div class="text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Raison</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @forelse($fournisseurs as $item)
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>
                        {{ $item->raison }}
                    </td>
                    <td>
                        {{ $item->telephone }}
                    </td>
                    <td>
                        {{ $item->adresse }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" href="{{ route("fournisseur.editForm", $item) }}"><i
                                        class="ti ti-edit me-1"></i> Modifier</a>

                                <form class="delete_form" action="{{ route('fournisseur.delete', $item) }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i class="ti ti-trash me-1"></i>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" style="text-align:center;"> Aucun enregistrement trouvé.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{ $fournisseurs->links() }}
@endsection
