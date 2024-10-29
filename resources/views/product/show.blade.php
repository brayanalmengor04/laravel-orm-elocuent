@extends("template.template") 
@section("title","Laravel ORM | Eloquent show")
@section("sectionTitle","Show Products")
@section("content")
<div class="mb-3">
    <label for="category-id" class="form-label">ID</label>
    <input type="text" class="form-control" id="" value="{{ $product->id }}" disabled>

    <label for="" class="form-label mt-3">Description</label>
    <input type="text" class="form-control" id="" value="{{ $product->description }}" disabled> 
    <label for="" class="form-label">Amount</label>
    <input type="text" class="form-control" id="" value="{{ $product->amount }}" disabled>

    <label for=" class="form-label mt-3">Price</label>
    <input type="text" class="form-control" id="" value="{{ $product->price }}" disabled>

    <label for="" class="form-label mt-3">Category</label>
    <input type="text" class="form-control" id="" value="{{ $product->id_category }}" disabled>
</div>

<a class="btn btn-secondary" href="{{ route('product.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
@stop