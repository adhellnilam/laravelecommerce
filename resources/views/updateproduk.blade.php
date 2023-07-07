@extends('layout/web')

@section('title','Add Form')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title">Edit Data Product</h4>
                         <form class="forms-sample" action="{{ url('produk/update_data',$produk->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="exampleInputEmail3">Product Name</label>
                                   <input type="text" name="product_name" value="{{ $produk->product_name }}" class="form-control" id="exampleInputEmail3" placeholder="input product name">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword4">Description</label>
                                   <input type="text" name="description" value="{{ $produk->description }}"  class="form-control" id="exampleInputPassword4" placeholder="input description">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword4">Price</label>
                                   <input type="text" name="price" value="{{ $produk->price }}"  class="form-control" id="exampleInputPassword4" placeholder="input price">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputCity1">Stock</label>
                                   <input type="text" name="stock" value="{{ $produk->stock }}"  class="form-control" id="exampleInputCity1" placeholder="input stock">
                              </div>
                              <div class="form-group">
                                   <label for="exampleSelectGender">Category</label>
                                   <select class="form-control" name="categorie_id" id="exampleSelectGender">
                                        @foreach ($kategori as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                   </select>
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