@extends("template.template")
@section("title","Laravel ORM | Eloquent Show")
@section("sectionTitle","Show Category")

@section("content")
<div class="mb-3">
    <label for="category-id" class="form-label">ID</label>
    <input type="text" class="form-control" id="category-id" value="{{ $category->id }}" disabled>

    <label for="category-description" class="form-label mt-3">Description</label>
    <input type="text" class="form-control" id="category-description" value="{{ $category->description }}" disabled>
</div>

<a class="btn btn-secondary" href="{{ route('category.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
@stop
