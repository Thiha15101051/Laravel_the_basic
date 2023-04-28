@extends("layouts.master")

@section('title')
    Create Category
@endsection
@section('content')
 <h1>Category Create</h1>

 <form action="{{route("category.store")}}" method="post">
    @csrf
    <div class="my-3">
        <label for="" class=" form-label">Title</label>
        <input class=" form-control" type="text" name="title" id="">
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Description</label>
        <textarea class=" form-control" name="description"  rows="7"></textarea>
    </div>

    <button class=" btn btn-primary">Create</button>
 </form>
@endsection
