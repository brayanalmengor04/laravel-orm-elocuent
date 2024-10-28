@extends("template.template")
@section("title","Laravel ORM | Elocuent Index")
@section("sectionTitle","List of Category")
@section("content")   

@if(session("message"))
    <div
        class="alert alert-success alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    
        <strong>Excellent!</strong> {{session("message")}}
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
                <th scope="col">Description</th> 
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($categories as $category)    
            <tr class="">
                <td scope="row">{{$category->id}}</td>
                <td>{{$category->description}}</td> 
                <td></td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>

<a
    name=""
    id=""
    class="btn btn-success mt-5 mb-2"
    href="{{route('category.create')}}"
    role="button"
    >Redirect to Category List</a
>
@stop