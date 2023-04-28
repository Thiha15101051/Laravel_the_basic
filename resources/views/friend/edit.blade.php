@extends("layouts.master")

@section('title')
    Edit List
@endsection
@section('content')
 <h1>List Edit</h1>

 <form action="{{route('item.update',$item->id)}}" method="post">
    @csrf
    @method('put')
    <div class="my-3">
        <label for="" class=" form-label">Item Name</label>
        <input class=" form-control" type="text" name="item_name" value="{{$item->name}}" id="">
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Price</label>
        <input class=" form-control" type="text" name="item_price" value="{{$item->price}}" id="">
    </div>
    <div class="my-3">
        <label for="" class=" form-label">Stock</label>
        <input class=" form-control" type="text" name="item_stock" value="{{$item->stock}}" id="">
    </div>
    <button class=" btn btn-primary">Create</button>
 </form>
@endsection
