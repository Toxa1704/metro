@extends('layout')

@section('title', 'Blue line create')

@section('content')
<form method="POST" action="{{route('blue_1.store')}}">
@csrf
<div class="row mt3">
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="Name station" aria-label="name station">
  </div>
</div>
<div class="row mt-3">
    <div class="col-sm">
        <input type="text" class="form-control" placeholder="Transfer" aria-label="transfer">
    </div>
</div>
<div class="row mt-3">
<div class="col-sm">
    <input type="text" class="form-control" placeholder="Number of in-out" aria-label="number of in-out">
  </div>
</div>
<div class="row mt-3">
<div class="col-sm">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment" aria-label="comment"></textarea>
  </div>
</div>

  <div class="row mt-4">
    <div class="col">
        <button type="button" class="btn btn-success">Create</button>
    </div>
  </div>
</div>
</form>

@endsection