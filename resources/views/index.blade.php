@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Item</h2>
    @if (count($items) > 0)
        <div class="list-group">
          @foreach ($items as $item)
     
        <a href="/request/{{$item->id}}/edit" class="list-group-item list-group-item-action">
          <form action="/request/{{$item->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" name="button" class="btn btn-danger float-right">Delete</button>
            </form>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{$item->text}} </h5>
            <small>{{$item->created_at}} </small>
          </div>
        <h5 class="mb-1">{{$item->body}} </h5>
      </a>
  
         @endforeach
      </div>

    
    @else
    <h2>No item yet</h2>
        
    @endif
  </div>
@endsection