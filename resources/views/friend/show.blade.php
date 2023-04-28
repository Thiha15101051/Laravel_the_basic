@extends("layouts.master");

@section('title')
    Detail Page
@endsection

@section('content')
    <h1>Friend's Detail</h1>
    <table class=" table table-bordered">
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{$friend->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$friend->email}}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{$friend->phoneNumber}}</td>
            </tr>
            <tr>
                <td>Created_at</td>
                <td>{{$friend->created_at}}</td>
            </tr>
            <tr>
                <td>Updated_at</td>
                <td>{{$friend->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
