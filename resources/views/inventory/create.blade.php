@extends("layouts.master")

@section('title')
    Create List
@endsection
@section('content')
 <h1>List Create</h1>

 <form action="{{route("item.store")}}" method="post">
    @csrf
    <div class="my-3">
        <label for="" class=" form-label">Item Name</label>
        <input value="{{old("item_name")}}" class=" form-control @error('item_name') is-invalid @enderror" type="text" name="item_name" id="">
        @error('item_name')
            <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Price</label>
        <input value="{{old("item_price")}}" class=" form-control @error('item_price')is-invalid @enderror" type="text" name="item_price" id="">
        @error('item_price')
            <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Stock</label>
        <input value="{{old("item_stock")}}" class=" form-control @error('item_stock')is-invalid @enderror" type="text" name="item_stock" id="">
        @error('item_stock')
            <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <button class=" btn btn-primary">Create</button>
 </form>
@endsection
