@extends('layout')


@section('title', 'Inventaires')

@section('content')
    <div class="d-flex justify-content-between">
        <h3 class="mb-9">Inventaires</h3>
        <p>
            <a href="{{ route('inventaire.addForm') }}" class="btn btn-primary">Nouveau <i class="ti ti-plus"></i></a>
        </p>
    </div>


    <div class="text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Materiels</th>
                <th>Obersvation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @forelse($inventaires as $item)
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>
                        {{ $item->date_inventaire }}
                    </td>
                    <td>
                        {{ count($item->materielsInventores) }}  Matériels
                    </td>
                    <td>
                        {{ \App\Helpers\TextHelpers\Text::Excerpt($item->observations ?: 'Aucune') }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" target="_blank" href="{{ route("inventaire.print", $item) }}"><i
                                        class="ti ti-printer me-1"></i> Imprimer</a>
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

    {{ $inventaires->links() }}
@endsection
