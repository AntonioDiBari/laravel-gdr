@extends('layouts.app')

@section('title', 'Modifica personaggio')

@section('main-content')
  <section>
    <div class="container">
        
        <h1>Modifica Personaggio</h1>
        <form action="{{ route('admin.characters.update', $character)}}" method="POST" class='row'>
        @csrf
        @method('PATCH')
        <div class="mb-3 col-3">
            <label for="name" class="form-label">Name</label>
            <div class="input-group">
                <input type="text" required class="form-control" value="{{ $character->name }}" id="name" aria-describedby="basic-addon3 basic-addon4" name='name'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="attack" class="form-label">attack</label>
            <div class="input-group">
                <input type="number" required class="form-control" value="{{ $character->attack }}" id="attack" aria-describedby="basic-addon3 basic-addon4" name='attack'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="defence" class="form-label">defence</label>
            <div class="input-group">
                <input type="number" required class="form-control" value="{{ $character->defence }}" id="defence" aria-describedby="basic-addon3 basic-addon4" name='defence'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="speed" class="form-label">speed</label>
            <div class="input-group">
                <input type="number" required class="form-control" value="{{ $character->speed }}" id="speed" aria-describedby="basic-addon3 basic-addon4" name='speed'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="life" class="form-label">life</label>
            <div class="input-group">
                <input type="number" required class="form-control" value="{{ $character->life }}" id="life" aria-describedby="basic-addon3 basic-addon4" name='life'>
            </div>
        </div>
        <div class="mb-3 col-12">
            <label for="description" class="form-label">description</label>
            <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" name='description'>{{ $character->description }}</textarea>
            </div>
        </div>

        <div class="col-3">
            <button class="btn btn-primary">save</button>
        </div>


        </form>
    </div>
  </section>
@endsection