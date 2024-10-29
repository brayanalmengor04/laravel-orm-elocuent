@extends("template.template") 
@section("title","Laravel ORM | Eloquent Edit")
@section("sectionTitle","Edit Product")
@section("content") 
<form action="{{ route('product.update',$product->id) }}" method="post"> 
    @csrf 
    @method("PUT")
    <div class="mb-3"> 
        <label for="" class="form-label">Code</label>
        <input
            type="text"
            class="form-control" 
            name="code"
            id=""
            aria-describedby="helpId" 
            require 
            value="{{ old('code') }}" 
            placeholder="Write the product code *"/>
            <small id="helpId" class="form-text text-danger">{{ $errors->first("code") }}</small>
    </div>  
    <div class="mb-3"> 
        <label for="" class="form-label">Description</label>
        <input
            type="text"
            class="form-control" 
            name="description"
            id=""
            aria-describedby="helpId"
            value="{{ old('description') }}" 
            require
            placeholder="Write the product description *"/>
            <small id="helpId" class="form-text text-danger">{{ $errors->first("description") }}</small>
    </div> 

    <div class="mb-3"> 
        <label for="" class="form-label">Amount</label>
        <input
            type="number"
            class="form-control" 
            name="amount"
            id=""
            aria-describedby="helpId"  
            value="{{ old('amount') }}" 
            require
            placeholder="Write the product amount *"/>
            <small id="helpId" class="form-text text-danger">{{ $errors->first("amount") }}</small>
    </div> 

    <div class="mb-3"> 
        <label for="" class="form-label">Price</label>
        <input
            type="number"
            class="form-control" 
            name="price"
            id=""
            aria-describedby="helpId" 
            require 
            value="{{ old('price') }}" 
            step="0.01"
            placeholder="Write the product price *"/>
            <small id="helpId" class="form-text text-danger">{{ $errors->first("price") }}</small>
    </div> 

    <div class="mb-3"> 
        <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <select
                class="form-select "
                name="id_category"
                id=""
            >
                <option disable>Select one category</option> 
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->description}}</option>
                @endforeach
            </select> 
            <small id="helpId" class="form-text text-danger">{{ $errors->first("id_category") }}</small>
        </div>
        
    </div> 
    <input
        name=""
        id=""
        class="btn btn-primary"
        type="submit"
        value="Create category BD"
    />
<a
    name=""
    id=""
    class="btn btn-success"
    href="{{route('product.index')}}"
    role="button"
    >Redirect Index</a
>
</form>
@stop