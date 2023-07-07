@extends('layout/app')

@section('title','Home')

@section('content')
<div class="content1">
 <center><p class="our">Our Services</p></center>
 <center><p class="we">We provide quality and comfortable interior fittings</p></center>
</div>

<div class="semuafill">
 <div class="fill">
   <p class="konten1">Minimal Design</p>
   <p class="konten2">Classic<br><span>Softchair</span></p>
   <div class="cart"><i class="fa fa-shopping-bag icons"></i> <i class="fa fa-check"></i></div>
   <img src="asset/img/kursihijau.png" alt="" class="pic">
 </div>
 </div>

 <div class="fill1">
     <p class="konten1">Modern Design</p>
     <p class="konten2">Elegant<br><span>Simplechair</span></p>
     <div class="cart1"><i class="fa fa-shopping-bag icons"> Add</i></div>
     <img src="asset/img/kursiabu.png" alt="" class="pi">
 </div>

 <div class="fill2">
   <p class="konten1">Modern Design</p>
   <p class="konten2">Comfort<br><span>chair</span></p>
   <div class="cart1"><i class="fa fa-shopping-bag icons"> Add</i></div>
   <img src="asset/img/abumudakursi.png" alt="" class="pic">
 </div>
</div>

<div class="newfill">
 <p class="one">Pretty Friday</p>
 <p class="two">Sale Up To <span class="three">50%</span> Off</p>
 <div class="shop">Shop Now</div>
 <img src="asset/img/sofadepan.png" alt="" class="pict">
</div>

<div class="another">
 <center><p class="our">Our Product</p></center>
 <center><p class="we">Available for all your needs</p></center>
</div>

<div class="ada">
 <div class="ada1"><img src="asset/img/kursibar.png" alt="" class="kursibar"><a href=""><img src="asset/img/love.png" alt="" class="love"></a></div>
 <p class="tulisan">Chair Bar</p>
 <img src="asset/img/stars.png" alt="" class="stars"><p class="rate">(19k)</p>
 <p class="price">Rp 1.999.000</p>
 <div class="cart2"><a href="#" style="color: #FCFFE7;"><i class="fa fa-shopping-bag icons"></i></a></div>
</div>

<div class="ada2">
 <div class="ada3"><img src="asset/img/lemariputih.png" alt="" class="putih"><a href=""><img src="asset/img/love1.png" alt="" class="lope"></a></div>
 <p class="tulisan">Cupboard Minimalist</p>
 <img src="asset/img/stars.png" alt="" class="stars"><p class="rate">(19k)</p>
 <p class="price">Rp 7.299.000</p>
 <div class="cart3"><a href="#" style="color: #CE9461;"><i class="fa fa-shopping-bag icons"></i></a></div>
</div>

<div class="ada4">
 <div class="ada5"><img src="asset/img/greypillow.png" alt="" class="pillow"><a href=""><img src="asset/img/love1.png" alt="" class="lope"></a></div>
 <p class="tulisan">Gray Pillow</p>
 <img src="asset/img/stars.png" alt="" class="stars"><p class="rate">(19k)</p>
 <p class="price">Rp 44.900</p>
 <div class="cart3"><a href="#" style="color: #CE9461;"><i class="fa fa-shopping-bag icons"></i></a></div>
</div>

<div class="hero">
 <div class="isihero"><img src="asset/img/cloudlamp.png" alt=""><a href=""><img src="asset/img/love1.png" alt="" class="lov"></a></div>
 <p class="tulisan">Cloud Lamp</p>
 <img src="asset/img/stars.png" alt="" class="stars"><p class="rate">(19k)</p>
 <p class="price">Rp 269.000</p>
 <div class="cart4"><a href="#" style="color: #CE9461;"><i class="fa fa-shopping-bag icons"></i></a></div>
</div>

<div class="hero1">
 <div class="isihero1"><img src="asset/img/kasuritem.png" alt="" class="item"><a href=""><img src="asset/img/love1.png" alt="" class="lol"></a></div>
 <p class="tulisan">Black Bed</p>
 <img src="asset/img/stars.png" alt="" class="stars"><p class="rate">(19k)</p>
 <p class="price">Rp 10.499.000</p>
 <div class="cart5"><a href="#" style="color: #CE9461;"><i class="fa fa-shopping-bag icons"></i></a></div>
</div>

<div class="hero2">
 <div class="isihero2"><img src="asset/img/crib.png" alt="" class="crib"><a href=""><img src="asset/img/love1.png" alt="" class="ve"></a></div>
 <p class="tulisan">Blue Crib</p>
 <img src="asset/img/stars.png" alt="" class="stars"><p class="rate">(19k)</p>
 <p class="price">Rp 7.699.000</p>
 <div class="cart6"><a href="#" style="color: #CE9461;"><i class="fa fa-shopping-bag icons"></i></a></div>
</div>

<div class="bbtn"><p>Go Shop For View More</p></div>

<div class="all">
 <div class="deal">
   <p class="tema">Hot Deal</p>
   <p class="tema1">Premium Chair<br><span>Comfort</span></p>
   <div class="isisemua">
     <p class="tema2">Rp 9.195.000</p><span class="span">Rp 5.995.000</span>
   </div>
   <img src="asset/img/sofaputih.png" alt="" class="sofa">
 </div>
</div>

 <div class="hot">
   <p class="tema">Hot Deal</p>
   <p class="tema1">Premium Sofa <br><span>Comfort</span></p>
   <div class="isisemua">
     <p class="tema2">Rp 1.799.000</p><span class="span">Rp 1.500.000</span>
   </div>
   <img src="asset/img/greychair.png" alt="" class="sofa1">
</div>

<div class="contactus">
 <center>
   <p class="our">Contact Us</p>
   <p class="we">we serve you all the time</p>
 </center>

 <img src="asset/img/gambarsamping.png" alt="" class="gam">
 <form>
   <div class="isiform">
     <label for="" class="form">Full Name</label><br>
     <input type="text" placeholder="Input Your Full Name" class="input"><br><br>

     <label for="" class="form">Email Address</label><br>
     <input type="email" placeholder="Input Your Email" class="input"><br><br>

     <label for="" class="form">Message</label><br>
     <input type="text" placeholder="Input Your Message" class="input1"><br><br>
   </div>

   <div class="send">Send Mail</div>
 </form>
</div>

<div class="footer">
 <div class="onediv">
   <p class="bawah">SUN<span class="under">RISE</span></p>
   <p class="ourmail">help@sunrise.com</p>
   <p class="number">+62 858-1366-5382</p>
   <img src="asset/img/socialmedia.png" alt="" class="media">
 </div>

 <div class="twodiv">
   <p class="bawah1">Services</p>
   <p class="isilagi">House Plant</p>
   <p class="isilagi">Garden Plant</p>
   <p class="isilagi">Vase</p>
   <p class="isilagi">Fertilizer</p>
 </div>

 <div class="threediv">
   <p class="bawah1">Information</p>
   <p class="isilagi">Office Hours</p>
   <p class="isilagi">Requirements</p>
   <p class="isilagi">About us</p>
 </div>

 <div class="fourdiv">
   <p class="bawah1">Helpfull Link</p>
   <p class="isilagi">Service</p>
   <p class="isilagi">Support</p>
   <p class="isilagi">Terms & Condition</p>
   <p class="isilagi">Privacy Policy</p>
 </div>

 <div class="fivediv">
   <p class="bawah1">Address</p>
   <p class="isilagi">Jl Al Firdausyah <br><span>No. 123 Blok. A23</span><br><span>Malang, Jawa Timur</span></p>
   <p class="isiaja">Google Maps</p>
 </div>
</div>
@endsection