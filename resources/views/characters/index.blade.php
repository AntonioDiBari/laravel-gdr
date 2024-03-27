@extends('layouts.app')

@section('title', 'Personaggi')

@section('main-content')
  <section>
    <div class="container py-4">
      <a href="{{ route('characters.create')}}" class="btn btn-primary">Aggiungi Personaggio</a>
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