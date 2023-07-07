@extends('layout/web')

@section('title','Detail')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
               <div class="card" style="padding-left: 30px;">
                    <h3 style="margin-top: 30px; padding-bottom: 15px;">Detail User {{ $user->username }}</h3>
                    <div class="semua" style="margin-bottom: 10px;">
                         <p>Username : {{ $user->username }}</p>
                         <p>Email : {{ $user->email }}</p>
                         <p>Password : {{ $user->password }}</p>
                         <p>Address : {{ $user->address }}</p>
                         <p>Phone Number : {{ $user->phone_number }}</p>
                    </div>
                    <a href="/user"><button type="button" class="btn btn-light">Back</button></a><br>
               </div>
          </div>
     </div>
</div>
@endsection