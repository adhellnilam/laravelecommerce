@extends('layout/web')

@section('title','Add Form')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title">Add Data Product</h4>
                         <form class="forms-sample" action="/transaksi/add_transaksi" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="exampleSelectGender">Product</label>
                                   <select class="form-control" name="product_id" id="exampleSelectGender">
                                        @foreach ($produk as $item)
                                             <option value="{{ $item->id }}">{{ $item->product_name }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="exampleSelectGender">Category</label>
                                   <select class="form-control" name="category_id" id="exampleSelectGender">
                                        @foreach ($kategori as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="exampleSelectGender">User</label>
                                   <select class="form-control" name="user_id" id="exampleSelectGender">
                                        @foreach ($user as $item)
                                             <option value="{{ $item->id }}">{{ $item->username }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="exampleSelectGender">Admin</label>
                                   <select class="form-control" name="admin_id" id="exampleSelectGender">
                                        @foreach ($admin as $item)
                                             <option value="{{ $item->id }}">{{ $item->username }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputCity1">Quantity</label>
                                   <input type="text" name="quantity" class="form-control" id="exampleInputCity1" placeholder="input quantity">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputCity1">Payment</label>
                                   <input type="text" name="payment" class="form-control" id="exampleInputCity1" placeholder="input payment">
                              </div>
                              <div class="mt-3"><img src="" id="output" alt=""></div>
                              <button type="submit" class="btn btn-primary me-2">Submit</button>
                              <a href="/produk"><button type="button" class="btn btn-light">Back</button></a>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection