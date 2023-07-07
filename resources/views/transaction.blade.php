@extends('layout/web')

@section('title','Transaction')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          @if ($message = Session::get('success'))
               <div class="alert alert-success">
                    <p>{{ $message }}</p>
               </div>
           @endif
          <a href="/transaksi/add_transaksi"><button type="button" class="btnadd">+ Add</button></a><br><br>
          <div class="col-lg-12 grid-margin stretch-card">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title">Transaction Table</h4>
                         </p>
                         <div class="table-responsive">
                              <table class="table table-dark">
                                   <thead>
                                        <tr>
                                             <th> Id </th>
                                             <th> Product Name </th>
                                             <th> Category </th>
                                             <th> User </th>
                                             <th> Admin </th>
                                             <th> Quantity </th>
                                             <th> Payment </th>
                                             <th> Action </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach ($datatransaksi as $item)
                                        <tr>
                                             <td>{{ $item->id }}</td>
                                             <td>{{ $item->product->product_name }}</td>
                                             <td>{{ $item->category->name }}</td>
                                             <td>{{ $item->user->username }}</td>
                                             <td>{{ $item->admin->username }}</td>
                                             <td>{{ $item->quantity }}</td>
                                             <td>{{ $item->payment }}</td>
                                             <td>
                                                  <a href="/transaksi/detail/{{ $item->id }}"> <button type="submit" class="btn btn-info"><i class="mdi mdi-note-text"></i></button></a> <br><br>
                                                  
                                                  <form action="/transaksi/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                                                  </form><br>
                                                  
                                                  <a href="/transaksi/update_data/{{ $item->id }}"><button type="submit" class="btn btn-warning"><i class="mdi mdi-pencil"></i></button></a>
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