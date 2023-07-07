<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Sunrise | @yield('title')</title>

     <!--custom css-->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <div class="background"></div>
     <div class="navbar">
          <p class="judul">SUN<span class="rise">RISE</span></p>
          <ul class="list">
          <li><a href="" style="color: #CE9461; font-weight: bold;">Home</a></li>
          <li class="list1"><a href="#" class="href">Service</a></li>
          <li class="list2"><a href="#" class="href">Product</a></li>
          <li class="list3"><a href="#" class="href">Contact Us</a></li>
          </ul>
          <ul class="aja">
          <li class="aja1"><a href="#" class="href"><i class="fa fa-user"></i></a></li>
          <li class="aja2"><a href="#" class="href"><i class="fa fa-shopping-bag icons"></i></a></li>
          </ul>
     </div>

     <div class="content">
     <p class="isi">Make Your Interior More<br><span>Modern and Minimalist</span></p>
     <p class="isi1">There are several product variants that you can choose,<br><span>both local and foreign brands</span></p>
     <div class="button">
          <div class="btn1"><a href="" class="bttn">Buy Now</a></div>
          <div class="btn2"><a href="" class="bttn1">Learn More</a></div>
     </div>
     <img src="asset/img/jamcontent.png" alt="" class="gambar">
     <img src="asset/img/sofacontent.png" alt="" class="gmbr">
     </div>
     @yield('content')
</body>
</html>