@extends("layouts.master")

@section('title')
    Create List
@endsection
@section('content')
 <h1>Create Friend list</h1>

 <form action="{{route("friend.store")}}" method="post">
    @csrf
    <div class="my-3">
        <label for="" class=" form-label">Name</label>
        <input value="{{old("name")}}" class=" form-control @error('name') is-invalid @enderror" type="text" name="name" id="">
        @error('name')
            <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Email</label>
        <input value="{{old("email")}}" class=" form-control @error('email')is-invalid @enderror" type="email" name="email" id="">
        @error('email')
            <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="my-3">
        <label for="" class=" form-label">PhoneNumber</label>
        <input value="{{old("phone_number")}}" class=" form-control @error('phone_number')is-invalid @enderror" type="number" name="phone_number" id="">
        @error('phone_number')
            <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <button class=" btn btn-primary">Create</button>
 </form>
@endsection
