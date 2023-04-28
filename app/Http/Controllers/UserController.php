<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Http\Requests\StoreFriendRequest;
use App\Http\Requests\UpdateFriendRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("friend.index",['friends'=>Friend::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("friend.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFriendRequest $request)
    {
        $friend=new Friend();
        $friend->name=$request->name;
        $friend->email=$request->email;
        $friend->phoneNumber=$request->phone_number;
        $friend->save();
        return redirect()->route('friend.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Friend $friend)
    {
        return view('friend.show',compact('friend'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Friend $friend)
    {
        return view('friend.edit',compact('friend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFriendRequest $request, Friend $friend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Friend $friend)
    {
        $friend->delete();
        return redirect()->back();
    }
}
