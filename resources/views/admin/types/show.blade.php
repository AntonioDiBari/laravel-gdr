@extends('layouts.app')

@section('title', 'Tipi')

@section('main-content')
    <section>
        <div class="container py-4">

            <h1>Dettaglio Personaggio {{ $type->id }}</h1>
            <ul>
                <li>Name: {{ $type->name }}</li>
                <li>Slug: {{ $type->slug }}</li>
                <li>Description: {{ $type->description }}</li>
                <li>
                    <div class="gif">
                        <img src="{{ asset($type->image) }}" width="100%">
                    </div>
                </li>
            </ul>

        </div>
    </section>
@endsection
