@extends('layout/web')

@section('title','Form Edit')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title">Edit Data User</h4>
                         <form class="forms-sample" action="{{ url('user/update_data',$pengguna->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="exampleInputEmail3">Username</label>
                                   <input type="text" name="username" value="{{ $pengguna->username }}" class="form-control" id="exampleInputEmail3" placeholder="input username">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword4">Email</label>
                                   <input type="email" name="email" value="{{ $pengguna->email }}" class="form-control" id="exampleInputPassword4" placeholder="input email">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword4">Password</label>
                                   <input type="password" name="password" value="{{ $pengguna->password }}" class="form-control" id="exampleInputPassword4" placeholder="input password">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputCity1">Addres</label>
                                   <input type="text" name="address" value="{{ $pengguna->address }}" class="form-control" id="exampleInputCity1" placeholder="input address">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputCity1">Phone Number</label>
                                   <input type="text" name="phone_number" value="{{ $pengguna->phone_number }}" class="form-control" id="exampleInputCity1" placeholder="input phone number">
                              </div>
                              <button type="submit" class="btn btn-primary me-2">Submit</button>
                              <a href="/user"><button type="button" class="btn btn-light">Back</button></a>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection