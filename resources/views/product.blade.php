@extends('layout.app')

@section('content')
  <style>
    h1{
      text-align: center;
      font-family: Algerian; 
      font-size: 100px;
    }
  </style>

  <h1>Inventory System</h1>
<div>
  <table class="table table-dark table-striped">

    <thead>
      <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity In Stock</th>
      </tr>   
    </thead>

    <tbody>
      @foreach ($products as $product )
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->ProductName }}</td>
          <td>{{ $product->Description }}</td>
          <td>{{ $product->Price }}</td>
          <td>{{ $product->QuantityInStock }}</td>
          <td><a href="{{route('updateProducts', $product->id)}}"><button>Update</button></a></td>
          <td><a href="{{route('removeProducts', $product->id)}}"><button>Delete</button></a></td>
          
        </tr> 
      @endforeach
    </tbody>

    <div class="row">
      <form action="{{route('saveProducts')}}" method="post">
          @csrf
            
            <label for="ProductName" class="col"><h6>Product Name</h6></label>
            <input class="inputs" type="text" name="ProductName">
            
            
            <label for="Description" class="col"><h6>Description</h6></label>
            <input class="inputs" type="text" name="Description">
            
            
            <label For="Price" class="col"><h6>Price</h6></label>
            <input class="inputs" type="number" name="Price">
            
            <label for="QuantityInStock" class="col"><h6>QuantityInStock</h6></label>
            <input class="inputs" type="number" name="QuantityInStock">
          
            <div class="col">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
    </div>
  </table>
  <br>
</div>

@endsection

@section('title')
    Home Page
@endsection