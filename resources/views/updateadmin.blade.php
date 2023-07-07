@extends('layout/web')

@section('title','Form Edit')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title">Edit Data Admin</h4>
                         <form class="forms-sample" action="{{ url('admin/update_data',$admin->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="exampleInputEmail3">Username</label>
                                   <input type="text" name="username" value="{{ $admin->username }}" class="form-control" id="exampleInputEmail3" placeholder="input username">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword4">Email</label>
                                   <input type="email" name="email" value="{{ $admin->email }}" class="form-control" id="exampleInputPassword4" placeholder="input email">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword4">Password</label>
                                   <input type="password" name="password" value="{{ $admin->password }}" class="form-control" id="exampleInputPassword4" placeholder="input password">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputCity1">Phone Number</label>
                                   <input type="text" name="phone_number" value="{{ $admin->phone_number }}" class="form-control" id="exampleInputCity1" placeholder="input phone number">
                              </div>
                              <button type="submit" class="btn btn-primary me-2">Submit</button>
                              <a href="/admin"><button type="button" class="btn btn-light">Back</button></a>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection