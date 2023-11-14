@extends('layout.app')

@section('content')
<br>
<h1>Category</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>CategoryId</th>
        <th>CategoryName</th>
    </tr>   
</thead>

<thead>
    @foreach ($categories as $category )
        <tr>
            <td>{{ $categorie->SupplierID }}</td>
            <td>{{ $categorie->SupplierName }}</td>
        </tr> 
    @endforeach
</thead>


</div>

    <div class="row">
        <form>
            
            
            <label class="col" ><h6>Category Name</h6></label>
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
    Category
@endsection