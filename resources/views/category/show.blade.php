@extends("layouts.master");

@section('title')
    Detail Page
@endsection

@section('content')
    <h1>Detail page</h1>
    <table class=" table table-bordered">
        <tbody>
            <tr>
                <td>Title</td>
                <td>{{$category->title}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$category->description}}</td>
            </tr>
            <tr>
                <td>Created_at</td>
                <td>{{$category->created_at}}</td>
            </tr>
            <tr>
                <td>Updated_at</td>
                <td>{{$category->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
