@extends('layouts.app')

@section('title', 'Aggiungi personaggio')

@section('main-content')
  <section>
    <div class="container">
        
        <h1>Aggiungi Personaggio</h1>
        <form action="{{ route('characters.store')}}" method="POST" class='row'>
        @csrf
        <div class="mb-3 col-3">
            <label for="name" class="form-label">Name</label>
            <div class="input-group">
                <input type="text" required class="form-control" id="name" aria-describedby="basic-addon3 basic-addon4" name='name'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="attack" class="form-label">attack</label>
            <div class="input-group">
                <input type="number" required class="form-control" id="attack" aria-describedby="basic-addon3 basic-addon4" name='attack'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="defence" class="form-label">defence</label>
            <div class="input-group">
                <input type="number" required class="form-control" id="defence" aria-describedby="basic-addon3 basic-addon4" name='defence'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="speed" class="form-label">speed</label>
            <div class="input-group">
                <input type="number" required class="form-control" id="speed" aria-describedby="basic-addon3 basic-addon4" name='speed'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="life" class="form-label">life</label>
            <div class="input-group">
                <input type="number" required class="form-control" id="life" aria-describedby="basic-addon3 basic-addon4" name='life'>
            </div>
        </div>
        <div class="mb-3 col-12">
            <label for="description" class="form-label">description</label>
            <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" name='description'></textarea>
            </div>
        </div>

        <div class="col-3">
            <button class="btn btn-primary">save</button>
        </div>


        </form>
    </div>
  </section>
@endsection