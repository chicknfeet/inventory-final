@extends('layout.app')

@section('content')
<br>
<h1>Order Detail</h1> 
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>OrderDetailID</th>
        <th>OrderID</th>
        <th>ProductID</th>
        <th>Quantity</th>
        <th>Subtotlal</th>
    </tr>   
</thead>

 @foreach ($order_details as $orderdetail )
 <tr>
    <td>{{ $order_detail->OrderDetailID }}</td>
    <td>{{ $order_detail->OrderID }}</td>
    <td>{{ $order_detail->ProductID }}</td>
    <td>{{ $order_detail->Quantity }}</td>
    <td>{{ $order_detail->Subtotal }}</td>
</tr> 
    @endforeach
</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Order Date</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col" ><h6>Quantity</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
            
            <label class="col" ><h6>Status</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
           
            <div class="col">
                <select name="type" id="type">
                    <option value="Add" pattern="ADD" >ADD</option>
                    <option value="Remove" pattern="Remove" >REMOVE</option>
                </select>
            </div>
            <div class="col" >
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        <br>
</div>  


@endsection

@section('title')
    Order
@endsection