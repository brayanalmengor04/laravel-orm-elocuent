@extends("template.template")
@section("title","Laravel ORM | Eloquent Index")
@section("sectionTitle","List of Categories")

@section("content")
@if(session("message"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session("message") }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Description</th> 
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($categories as $category)    
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->description }}</td> 
                    <td class="text-center">
                        <a class="btn btn-sm btn-success" href="{{ route('category.show', $category->id) }}" title="View"><i class="bi bi-eye-fill"></i></a>
                        <a class="btn btn-sm btn-warning" href="{{route('category.edit',$category->id) }}" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $category->id }}" title="Delete"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>

                <!-- Modal for deletion confirmation -->
                <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $category->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $category->id }}">Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the category <strong> {{$category->description}} </strong> ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach    
        </tbody>
    </table>
</div>

<div class="mt-4 d-flex justify-content-between">
    <a class="btn btn-primary" href="{{ route('category.create') }}">Add New Category</a>
</div>
@stop
