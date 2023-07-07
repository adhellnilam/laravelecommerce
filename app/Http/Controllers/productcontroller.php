<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\categorie;
use App\Models\product;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = product::with('category')->get();
        return view('product',['dataproduk'=>$produk,"title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = categorie::all();
        return view('formproduk', ['kategori' => $category,"title"=>"table"]);
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
            'product_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'categorie_id' => 'required'
        ]);

        $input = $request->all();
        product::create($input);

        return redirect('produk')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id, product $product)
    {
        $produk = product::findOrFail($id);
        return view('showproduk', ['product' => $produk,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id, product $product)
    {
        $produk = product::findOrFail($id);
        $kategori = categorie::all();
        return view('updateproduk',compact(['produk','kategori']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, product $product)
    {
        $produk = product::findOrFail($id);
        $produk->update($request->all());

        return redirect('produk')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, product $product)
    {
        $produk = product::findOrFail($id);
        $produk -> delete();

        return redirect('produk')->with('success', 'Data Delete successfully');
    }
}
