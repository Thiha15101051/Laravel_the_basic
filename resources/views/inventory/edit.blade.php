@extends('layouts.master')

@section('title')
    Edit List
@endsection
@section('content')
    <h1>List Edit</h1>

    <form action="{{ route('item.update', $item->id) }}" method="post">
        @csrf
        @method('put')
        <div class="my-3">
            <label for="" class=" form-label">Item Name</label>
            <input class=" form-control @error('item_name') is-invalid @enderror" type="text" name="item_name" value="{{ old("item_name",$item->name) }}" id="">
            @error('item_name')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-3">
            <label for="" class=" form-label">Price</label>
            <input class=" form-control @error('item_price') is-invalid @enderror" type="text" name="item_price" value="{{ old("item_price",$item->price) }}" id="">
            @error('item_price')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-3">
            <label for="" class=" form-label">Stock</label>
            <input class=" form-control @error('item_stock') is-invalid @enderror" type="text" name="item_stock" value="{{ old("item_stock",$item->stock) }}" id="">
            @error('item_stock')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class=" btn btn-primary">Update</button>
    </form>
@endsection
