@extends('layout')


@section('title', 'Maintenances')

@section('content')
    <div class="d-flex justify-content-between">
        <h3 class="mb-9">Maintenances</h3>
        <p>
            <a href="{{ route('maintenance.addForm') }}" class="btn btn-primary">Nouveau <i class="ti ti-plus"></i></a>
        </p>
    </div>


    <div class="text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Machine</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @forelse($maintenances as $item)
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>
                        {{ $item->materiel->designation }} (<b>{{ $item->materiel->service->designation }}</b>)
                    </td>
                    <td>
                        {{ $item->date_debut }}
                    </td>
                    <td>
                        {{ $item->date_fin }}
                    </td>
                    <td>
                        {{ \App\Helpers\TextHelpers\Text::Excerpt($item->commentaire)}}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" target="_blank" href="{{ route("maintenance.print", $item) }}"><i
                                        class="ti ti-printer me-1"></i> Imprimer</a>

                                <a class="dropdown-item" href="{{ route("maintenance.editForm", $item) }}"><i
                                        class="ti ti-edit me-1"></i> Modifier</a>

                                <form class="delete_form" action="{{ route('maintenance.delete', $item) }}" method="post">
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

    {{ $maintenances->links() }}
@endsection
