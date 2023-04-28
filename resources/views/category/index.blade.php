@extends("layouts.master")

@section('title')
    Categories
@endsection
@section('content')
 <h1>Categories</h1>
 <table class=" table table-bordered">
    <thead>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Description</td>
            <td>Control</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $key=>$categorie )
         <tr>
            <td>{{$key+1}}</td>
            <td>{{$categorie->title}}</td>
            <td>{{Str::limit($categorie->description,30,'...')}}</td>
            <td>
                <a href="{{route("category.show",$categorie->id)}}" class=" btn btn-primary">Detail</a>
                <a href="{{route('category.edit',$categorie->id)}}" class="btn btn-warning">Edit</a>
                <form class=" d-inline-block" action="{{route("category.destroy",$categorie->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>

            </td>
         </tr>
        @empty
         <tr>
            <td colspan="5">
                <div class="text-center">There is no category.</div>
                <div class="text-center my-3">
                    <a href="{{route("category.create")}}" class="my-3 btn btn-primary">Create Category</a>
                </div>
            </td>
         </tr>
        @endforelse
    </tbody>
 </table>
@endsection
