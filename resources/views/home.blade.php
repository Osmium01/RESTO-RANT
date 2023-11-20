@extends('layout')

@section('content')

<style>
    .featured {
        margin-top: 50px;
        margin-bottom: 50px;
      background-image: url('https://wallpapercave.com/wp/wp1874173.jpg'); /* Add your featured image URL here */
      background-size: cover;
      background-position: center;
      color: white;
      
      text-align: center;
      padding: 100px 0;
    }

    p{
        color: powderblue;
    }
    
    .restaurant-list {
      padding: 20px;
      text-align: center;
    }

    .restaurant {

        color: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin: 10px;
      background-color: rgba(28, 49, 41, 0.767);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
<div>
<div class="featured">
    <h2>Discover the Best Restaurants Near You</h2>
    <p>Explore a variety of cuisines and dining experiences.</p>
  </div>

  @foreach($data as $item)
            <div class="restaurant">
                <h3>{{$item->name}}</h3>
                <p>Address: {{$item->address}}</p>
                <p>Email: {{$item->email}}</p>
                
            </div>
        @endforeach
@stop