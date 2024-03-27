@extends('layouts.app')

@section('title', 'Personaggi')

@section('main-content')
    <section>
        <div class="container py-4">
            <a href="{{ route('characters.create') }}" class="btn btn-primary">Aggiungi Personaggio</a>
            <table class="table">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Attack</th>
                        <th>Defence</th>
                        <th>Life</th>
                        <th>Speed</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    @forelse ($characters as $character)
                        <tr>
                            <td>{{ $character->id }}</td>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->description }}</td>
                            <td>{{ $character->attack }}</td>
                            <td>{{ $character->defence }}</td>
                            <td>{{ $character->life }}</td>
                            <td>{{ $character->speed }}</td>
                            <td class="d-flex align-items-center gap-2">
                                <a href="{{ route('characters.edit', $character) }}">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <a href="{{ route('characters.show', $character) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <button type="button" class="btn btn-link text-danger p-0" data-bs-toggle="modal"
                                    data-bs-target="#delete-{{ $character->id }}-character">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>no items</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('modal')
    @foreach ($characters as $character)
        <div class="modal fade" id="delete-{{ $character->id }}-character" tabindex="-1"
            aria-labelledby="delete-{{ $character->id }}-character" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-{{ $character->id }}-character">
                            Eliminare {{ $character->name }} ?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Se elimini non si potrà tornare indietro.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form action="{{ route('characters.destroy', $character) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
