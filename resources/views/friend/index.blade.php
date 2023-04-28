@extends("layouts.master")

@section('title')
    Friends List
@endsection
@section('content')
 <h1>Friends List</h1>
 <table class=" table table-bordered">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Control</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($friends as $key=>$friend )
         <tr>
            <td>{{$friend->id}}</td>
            <td>{{$friend->name}}</td>
            <td>{{$friend->email}}</td>
            <td>{{$friend->phoneNumber}}</td>
            <td>
                <a href="{{route("friend.show",$friend->id)}}" class=" btn btn-primary">Detail</a>
                <a href="{{route('friend.edit',$friend->id)}}" class="btn btn-warning">Edit</a>
                <form class=" d-inline-block" action="{{route("friend.destroy",$friend->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>

            </td>
         </tr>
        @empty
         <tr>
            <td colspan="5">
                <div class="text-center">There is no record.</div>
                <div class="text-center my-3">
                    <a href="{{route("friend.create")}}" class="my-3 btn btn-primary">Create friend</a>
                </div>
            </td>
         </tr>
        @endforelse
    </tbody>
 </table>
 {{-- {{$friends->links()}} --}}
@endsection
