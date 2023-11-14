@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">Customer</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>Customer</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>   
</thead>

 @foreach ($customers as $customer )
 <tr>
    <td>{{ $customer->customerId }}</td>
    <td>{{ $customer->FirstName }}</td>
    <td>{{ $customer->LastName }}</td>
    <td>{{ $customer->Email }}</td>
    <td>{{ $customer->Phone }}</td>
</tr> 
    @endforeach
</div>

    <div class="row">
        <form>
            
            <label class="span 2" ><h6>Costumer</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            <label class="span 2" ><h6>First Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">

            <label class="span 2" ><h6>Last Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">

            <label class="span 2" ><h6>Email</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">

            <label class="span 2" ><h6>Phone</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">

           
            <div class="span 1">
                <select name="type" id="type">
                    <option value="Add" pattern="ADD" >ADD</option>
                    <option value="Remove" pattern="Remove" >REMOVE</option>
                </select>
            </div>
            <div class="span 2" >
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        <br>
</div>  
@endsection

@section('title')
    Category
@endsection