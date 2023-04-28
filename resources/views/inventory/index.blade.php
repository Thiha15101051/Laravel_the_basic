@extends('layouts.master')

@section('title')
    Item Lists
@endsection
@section('content')
    <h1>Lists</h1>
    @if (session('status'))
        <div class=" alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table class=" table table-bordered">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $key=>$item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ route('item.show', $item->id) }}" class=" btn btn-primary">Detail</a>
                        <a href="{{ route('item.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form class=" d-inline-block" action="{{ route('item.destroy', $item->id) }}" method="post">
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
                            <a href="{{ route('item.create') }}" class="my-3 btn btn-primary">Create Item</a>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $items->links() }}
@endsection
