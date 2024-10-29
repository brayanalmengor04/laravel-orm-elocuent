@extends("template.template") 
@section("title","Laravel ORM | Eloquent Index")
@section("sectionTitle","List of  Products")
@section("content")
@if(session("message"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session("message") }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div
    class="table-responsive"
>
    <table
        class="table table-dark"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Code</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
                <th scope="col">Price</th> 
                <th scope="col">Category</th> 
                <th scope="col">Name Category</th> 
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody> 

        @foreach($products as $product)
            <tr class="">
                <td scope="row">{{$product->id}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->price}}</td> 
                <td>{{$product->id_category}}</td>  
                <td>{{$product->name_category }}</td>
                <td>
                <a class="btn btn-sm btn-success" href="{{ route('product.show', $product->id) }}" title="View"><i class="bi bi-eye-fill"></i></a>
                <a class="btn btn-sm btn-warning" href="{{ route('product.edit',$product->id) }}" title="Edit"><i class="bi bi-pencil-fill"></i></a>  
                </td>
            </tr>
            <tr class="">
        @endforeach        
        </tbody>
    </table>
</div>
<div class="mt-4 d-flex justify-content-between">
    <a class="btn btn-primary" href="{{ route('product.create') }}">Add New Product</a>
</div>
@stop