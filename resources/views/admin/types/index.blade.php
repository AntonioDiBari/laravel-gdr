@extends('layouts.app')

@section('title', 'Tipi')

@section('main-content')
    <section>
        <div class="container py-4">
            <a href="{{ route('admin.types.create') }}" class="btn btn-primary">Aggiungi Personaggio</a>
            <table class="table">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->slug }}</td>
                            <td>
                                <div class="gif">
                                    <img src="{{ asset($type->image) }}" width="100%">
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.types.edit', $type) }}">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.types.show', $type) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link text-danger p-0" data-bs-toggle="modal"
                                    data-bs-target="#delete-{{ $type->id }}-type">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>no type</td>
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
    @foreach ($types as $type)
        <div class="modal fade" id="delete-{{ $type->id }}-type" tabindex="-1"
            aria-labelledby="delete-{{ $type->id }}-type" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-{{ $type->id }}-type">
                            Eliminare {{ $type->name }} ?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Se elimini il tipo eliminerai i personaggi di questo tipo. Confermi ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
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
