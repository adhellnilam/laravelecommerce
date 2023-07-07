@extends('layout/web')

@section('title','User')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
       @if ($message = Session::get('success'))
            <div class="alert alert-success">
                 <p>{{ $message }}</p>
            </div>
        @endif
        <a href="/user/add_user"><button type="button" class="btnadd">+ Add</button></a><br><br>
       <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                 <div class="card-body">
                      <h4 class="card-title">User Table</h4>
                      </p>
                      <div class="table-responsive">
                           <table class="table table-dark">
                                <thead>
                                     <tr>
                                          <th> Id </th>
                                          <th> Username </th>
                                          <th> Email </th>
                                          <th> Password </th>
                                          <th> Address </th>
                                          <th> Phone Number </th>
                                          <th> Action </th>
                                     </tr>
                                </thead>
                                <tbody>
                                     @foreach ($datauser as $item)
                                     <tr>
                                          <td>{{ $item->id }}</td>
                                          <td>{{ $item->username }}</td>
                                          <td>{{ $item->email }}</td>
                                          <td>{{ $item->password }}</td>
                                          <td>{{ $item->address }}</td>
                                          <td>{{ $item->phone_number }}</td>
                                          <td>
                                               <a href="/user/detail/{{ $item->id }}"> <button type="submit" class="btn btn-info"><i class="mdi mdi-note-text"></i></button></a> <br><br>
                                               
                                               <form action="/user/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                                               </form><br>
                                               
                                               <a href="/user/update_data/{{ $item->id }}"><button type="submit" class="btn btn-warning"><i class="mdi mdi-pencil"></i></button></a>
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