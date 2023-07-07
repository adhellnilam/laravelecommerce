<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = admin::all();
        return view('admin',['dataadmin' => $admin,"title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = admin::all();
        return view('formadmin', ['admins' => $admin,"title"=>"table"]);
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
            'phone_number' => 'required'
        ]);

        $input = $request->all();
        admin::create($input);

        return redirect('admin')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id, admin $admin)
    {
        $admin = admin::findOrFail($id);
        return view('showadmin', ['admins' => $admin,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id, admin $admin)
    {
        $admin = admin::findOrFail($id);
        return view('updateadmin',compact('admin'),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, admin $admin)
    {
        $admin = admin::findOrFail($id);
        $admin->update($request->all());
        return redirect('admin')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, admin $admin)
    {
        $admin = admin::findOrFail($id);
        $admin -> delete();

        return redirect('admin')->with('success', 'Data Delete successfully');
    }
}
