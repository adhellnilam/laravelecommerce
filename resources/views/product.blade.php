@extends('layout/web')

@section('title','Product')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          @if ($message = Session::get('success'))
               <div class="alert alert-success">
                    <p>{{ $message }}</p>
               </div>
           @endif
          <a href="/produk/add_produk"><button type="button" class="btnadd">+ Add</button></a><br><br>
          <div class="col-lg-12 grid-margin stretch-card">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title">Product Table</h4>
                         </p>
                         <div class="table-responsive">
                              <table class="table table-dark">
                                   <thead>
                                        <tr>
                                             <th> Id </th>
                                             <th> Product Name </th>
                                             <th> Price </th>
                                             <th> Stock </th>
                                             <th> Category </th>
                                             <th> Action </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach ($dataproduk as $item)
                                        <tr>
                                             <td>{{ $item->id }}</td>
                                             <td>{{ $item->product_name }}</td>
                                             <td>{{ $item->price }}</td>
                                             <td>{{ $item->stock }}</td>
                                             <td>{{ $item->category->name }}</td>
                                             <td>
                                                  <a href="/produk/detail/{{ $item->id }}"> <button type="submit" class="btn btn-info"><i class="mdi mdi-note-text"></i></button></a> <br><br>
                                                  
                                                  <form action="/produk/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                                                  </form><br>
                                                  
                                                  <a href="/produk/update_data/{{ $item->id }}"><button type="submit" class="btn btn-warning"><i class="mdi mdi-pencil"></i></button></a>
                                             </td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection