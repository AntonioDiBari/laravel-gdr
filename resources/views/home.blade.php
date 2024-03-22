@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>slug</th>
            <th>category</th>
            <th>type</th>
            <th>weight</th>
            <th>cost</th>
          </tr>
        </thead>
        <tbody>
          @forelse($items as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->weight}}</td>
            <td>{{$item->cost}}</td>
          </tr>
          @empty
          <tr>
            <td>no items</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      {{$items->links()}}
    </div>
  </section>
@endsection
