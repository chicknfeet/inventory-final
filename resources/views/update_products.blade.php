@extends('layout.app')

@section('content')
<div class="card my-4">
    <form action="{{route('saveUpdatedProducts')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="ProductName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="update_product_name" value="{{$products->ProductName}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="update_description" value="{{$products->Description}}">
                </div>
                <div class="col mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="update_price"  value="{{$products->Price}}">
                </div>
                <div class="col mb-3">
                    <label for="QuantityInStock" class="form-label">Quantity Stock</label>
                    <input type="text" class="form-control" name="update_quantityinstock"  value="{{$products->QuantityInStock}}">
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <input type="hidden" name="id" value="{{$products->id}}">
                    <button type="submit">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection