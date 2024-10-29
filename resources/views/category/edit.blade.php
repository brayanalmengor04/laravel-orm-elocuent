@extends("template.template")
@section("title","Laravel ORM | Elocuent Edit")
@section("sectionTitle","Edit Category") 
@section("content")
<form action="{{route('category.update',$category->id)}}" method="post"> 
    @csrf 
    @method("PUT")
    <div class="mb-3"> 
        <label for="" class="form-label">Description</label>
        <input
            type="text"
            class="form-control" 
            name="description"
            id=""
            aria-describedby="helpId" 
            value="{{ old('description' ,$category->description) }}"
            require 
            placeholder="Write the category description *"/>
            <small id="helpId" class="form-text text-danger">{{ $errors->first("description") }}</small>
    </div> 

    <input
        name=""
        id=""
        class="btn btn-primary"
        type="submit"
        value="EDIT category BD"
    />
</form>
@stop