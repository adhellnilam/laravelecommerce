<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\transaction;
use App\Models\categorie;
use App\Models\product;
use App\Models\user;
use Illuminate\Http\Request;

class transactioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaction::all();
        return view('transaction',['datatransaksi' => $transaksi,"title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = categorie::all();
        $produk = product::all();
        $user = user::all();
        $admin = admin::all();
        return view('formtransaksi', ['kategori' => $category,'produk' => $produk,'user' => $user,'admin' => $admin,"title"=>"table"]);
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
            'product_id' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'admin_id' => 'required',
            'quantity' => 'required',
            'payment' => 'required'
        ]);

        $input = $request->all();
        transaction::create($input);

        return redirect('transaksi')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id, transaction $transaction)
    {
        $transaksi = transaction::findOrFail($id);
        return view('showtransaksi', ['transaksi' => $transaksi,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id, transaction $transaction)
    {
        $transaksi = transaction::findOrFail($id);
        $produk = product::all();
        $kategori = categorie::all();
        $user = user::all();
        $admin = user::all();
        return view('updatetransaksi',compact(['transaksi','admin','user','produk','kategori']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, transaction $transaction)
    {
        $transaksi = transaction::findOrFail($id);
        $transaksi->update($request->all());

        return redirect('transaksi')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, transaction $transaction)
    {
        $transaksi = transaction::findOrFail($id);
        $transaksi -> delete();

        return redirect('transaksi')->with('success', 'Data Delete successfully');
    }
}
