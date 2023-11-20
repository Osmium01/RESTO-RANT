
@extends('layout')

<style>
  
</style>

@section('content')
<div class="listpage">
<h1 class="display-4 text-center mt-4 mb-4 text-info">List Of Restaurants</h1>

    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!</strong> Your Restorant is added successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif
    @if(Session::get('deletestatus'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!</strong> Your Restorant is deleted successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif
    @if(Session::get('updatestatus'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!</strong> Your Restorant is updated successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif

    <div class="table-responsive">
    <table class="table table-striped table-dark s24">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item) 
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>
        <a href="delete/{{$item->id}}"><i class="fa fa-trash"></i>
        <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i>
      </a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<div>


    



    
</div>
@stop