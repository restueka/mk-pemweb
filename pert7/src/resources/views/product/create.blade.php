@extends('layouts.main')
@section('content')
<form action="{{ route('product.store') }}" method="POST">
    
  @csrf
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   <button type="submit" class="btn btn-primary">add</button>
</form>

@endsection