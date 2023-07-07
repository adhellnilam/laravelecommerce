@extends('layout/web')

@section('title','Detail')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
               <div class="card" style="padding-left: 30px;">
                    <h3 style="margin-top: 30px; padding-bottom: 15px;">Detail Transaction {{ $transaksi->product['id'] }}</h3>
                    <div class="semua" style="margin-bottom: 10px;">
                         <p>Product Name : {{ $transaksi->product['product_name'] }}</p>
                         <p>Category : {{ $transaksi->category['name'] }}</p>
                         <p>User : {{ $transaksi->user['username'] }}</p>
                         <p>Admin : {{ $transaksi->admin['username'] }}</p>
                         <p>Quantity : {{ $transaksi->quantity }}</p>
                         <p>Payment : {{ $transaksi->payment }}</p>
                    </div>
                    <a href="/transaksi"><button type="button" class="btn btn-light">Back</button></a><br>
               </div>
          </div>
     </div>
</div>
@endsection