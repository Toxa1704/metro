@extends('layout')

@section('title', 'Blue line')

@section('content')
<a  class="btn btn-primary"  role="button" href="{{route('blue_1.create')}}">Creat station</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Transfer</th>
      <th scope="col">Number of in out</th>
      <th score="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    @foreach($blue_1 as $blue)
    <tr>
      <th scope="row">{{$blue -> id}}</th>
      <td>{{$blue -> name}}</td>
      <td>{{$blue -> transfer}}</td>
      <td>{{$blue -> number_of_in_out}}</td>
      <td>{{$blue -> comment}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection