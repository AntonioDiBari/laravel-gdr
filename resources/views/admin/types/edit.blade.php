@extends('layouts.app')

@section('title', 'Modifica tipo')

@section('main-content')
    <section>
        <div class="container">

            <h1>Modifica Personaggio</h1>
            <form action="{{ route('admin.types.update', $type) }}" method="POST" class='row'>
                @csrf
                @method('PATCH')
                <div class="mb-3 col-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" value="{{ $type->name }}" id="name"
                            aria-describedby="basic-addon3 basic-addon4" name='name'>
                    </div>
                </div>
                <div class="mb-3 col-3">
                    <label for="slug" class="form-label">Slug</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" value="{{ $type->slug }}" id="slug"
                            aria-describedby="basic-addon3 basic-addon4" name='slug'>
                    </div>
                </div>
                <div class="mb-3 col-3">
                    <label for="image" class="form-label">Image</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" value="{{ $type->image }}" id="image"
                            aria-describedby="basic-addon3 basic-addon4" name='image'>
                    </div>
                </div>
                <div class="mb-3 col-12">
                    <label for="description" class="form-label">Description</label>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" name='description'>{{ $type->description }}</textarea>
                    </div>
                </div>

                <div class="col-3">
                    <button class="btn btn-primary">save</button>
                </div>


            </form>
        </div>
    </section>
@endsection
