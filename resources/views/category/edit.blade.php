@extends("layouts.master")

@section('title')
    Edit Category
@endsection
@section('content')
 <h1>Edit Category</h1>

 <form action="{{route("category.update",$category->id)}}" method="post">
    @csrf
    @method('put')
    <div class="my-3">
        <label for="" class=" form-label">Title</label>
        <input class=" form-control" type="text" name="title" value="{{$category->title}}" id="">
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Description</label>
        <textarea class=" form-control" name="description" rows="7">{{$category->description}}</textarea>
    </div>

    <button class=" btn btn-primary">Create</button>
 </form>
@endsection
