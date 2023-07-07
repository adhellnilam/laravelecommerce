<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = user::all();
        return view('user',['datauser' => $pengguna,"title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = user::all();
        return view('formuser', ['pengguna' => $pengguna,"title"=>"table"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'phone_number' => 'required'
        ]);

        $input = $request->all();
        user::create($input);

        return redirect('user')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id, user $user)
    {
        $pengguna = user::findOrFail($id);
        return view('showuser', ['user' => $pengguna,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id, user $user)
    {
        $pengguna = user::findOrFail($id);
        return view('updateuser',compact('pengguna'),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, user $user)
    {
        $pengguna = user::findOrFail($id);
        $pengguna->update($request->all());
        return redirect('user')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, user $user)
    {
        $pengguna = user::findOrFail($id);
        $pengguna -> delete();

        return redirect('user')->with('success', 'Data Delete successfully');
    }
}
