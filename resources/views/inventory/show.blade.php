@extends("layouts.master");

@section('title')
    Detail Page
@endsection

@section('content')
    <h1>Detail page</h1>
    <table class=" table table-bordered">
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{$item->price}}</td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>{{$item->stock}}</td>
            </tr>
            <tr>
                <td>Created_at</td>
                <td>{{$item->created_at}}</td>
            </tr>
            <tr>
                <td>Updated_at</td>
                <td>{{$item->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
