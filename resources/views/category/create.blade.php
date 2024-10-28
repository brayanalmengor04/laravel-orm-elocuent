@extends("template.template")
@section("title","Laravel ORM | Elocuent Create")
@section("sectionTitle","Create Category")
@section("content")
<form action="{{route('category.store')}}" method="post"> 

    @csrf
    <div class="mb-3"> 
        <label for="" class="form-label">Description</label>
        <input
            type="text"
            class="form-control" 
            name="description"
            id=""
            aria-describedby="helpId" 
            require
            placeholder="Write the category description *"/>
        <small id="helpId" class="form-text text-muted"></small>
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
    href="{{route('category.index')}}"
    role="button"
    >Redirect Index</a
>
</form>
@stop
