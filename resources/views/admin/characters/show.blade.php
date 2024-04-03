@extends('layouts.app')

@section('title', 'Personaggi')

@section('main-content')
  <section>
    <div class="container py-4">
   
        <h1>Dettaglio Personaggio</h1>
        <ul>
            <li>Id: {{ $character->id }}</li>
            <li>Name: {{ $character->name }}</li>
            <li>Description: {{ $character->description }}</li>
            <li>Attack: {{ $character->attack }}</li>
            <li>Defence: {{ $character->defence }}</li>
            <li>Life: {{ $character->life }}</li>
            <li>Speed: {{ $character->speed }}</li>
        </ul>
 
    </div>
  </section>
@endsection