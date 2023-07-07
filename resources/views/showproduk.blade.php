@extends('layout/web')

@section('title','Detail')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
               <div class="card" style="padding-left: 30px;">
                    <h3 style="margin-top: 30px; padding-bottom: 15px;">Detail Product {{ $product->product_name }}</h3>
                    <div class="semua" style="margin-bottom: 10px;">
                         <p>Product Name : {{ $product->product_name }}</p>
                         <p>Description : {{ $product->description }}</p>
                         <p>Price : {{ $product->price }}</p>
                         <p>Stock : {{ $product->stock }}</p>
                         <p>Category : {{ $product->category['name'] }}</p>
                    </div>
                    <a href="/produk"><button type="button" class="btn btn-light">Back</button></a><br>
               </div>
          </div>
     </div>
</div>
@endsection