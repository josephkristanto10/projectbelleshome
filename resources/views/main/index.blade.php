<!DOCTYPE html>
<html lang="en">
   @include('header.header')
   <!-- body -->
   <head>
   <style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap");
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: "Roboto", sans-serif;
  font-size: 0.925rem;
}

a {
  text-decoration: none;
}

.container {
  width: 1170px;
  position: relative;
  margin-left: auto;
  margin-right: auto;
  padding-left: 15px;
  padding-right: 15px;
}

.navbar,
.navbar > .container {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 768px) {
  .navbar,
.navbar > .container {
    display: block;
  }
}

.navbar {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  background-color: #fff;
  padding: 1rem 1.15rem;
  border-bottom: 1px solid #eceef3;
  /*
  |-----------------------------------
  | Start navbar logo or brand etc..
  |-----------------------------------
  */
  /*
  |-----------------------------------
  | Start navbar menu
  |-----------------------------------
  */
}
@media (min-width: 576px) {
  .navbar .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .navbar .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .navbar .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .navbar .container {
    max-width: 1140px;
  }
}
.navbar .navbar-header {
  display: flex;
  align-items: center;
}
@media (max-width: 768px) {
  .navbar .navbar-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row-reverse;
  }
}
.navbar .navbar-header .navbar-toggler {
  cursor: pointer;
  border: none;
  display: none;
  outline: none;
}
@media (max-width: 768px) {
  .navbar .navbar-header .navbar-toggler {
    display: block;
  }
}
.navbar .navbar-header .navbar-toggler span {
  height: 2px;
  width: 22px;
  background-color: #929aad;
  display: block;
}
.navbar .navbar-header .navbar-toggler span:not(:last-child) {
  margin-bottom: 0.2rem;
}
.navbar .navbar-header > a {
  font-weight: 500;
  color: #3c4250;
}
.navbar .navbar-menu {
  display: flex;
  align-items: center;
  flex-basis: auto;
  flex-grow: 1;
}
@media (max-width: 768px) {
  .navbar .navbar-menu {
    display: none;
    text-align: center;
  }
}
.navbar .navbar-menu.active {
  display: flex !important;
}
.navbar .navbar-menu .navbar-nav {
  margin-left: auto;
  flex-direction: row;
  display: flex;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav {
    width: 100%;
    display: block;
    border-top: 1px solid #EEE;
    margin-top: 1rem;
  }
}
.navbar .navbar-menu .navbar-nav > li > a {
  color: #3c4250;
  text-decoration: none;
  display: inline-block;
  padding: 0.5rem 1rem;
}
.navbar .navbar-menu .navbar-nav > li > a:hover {
   color: rgba(220, 152, 7, 0.935);
   font-weight: bold;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav > li > a {
    border-bottom: 1px solid #eceef3;
  }
}
.navbar .navbar-menu .navbar-nav > li.active a {
  color: rgba(220, 152, 7, 0.935);
  font-weight: bold;
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
  list-style: none;
  position: absolute;
  top: 150%;
  left: 0;
  background-color: #fff;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  min-width: 160px;
  width: auto;
  white-space: nowrap;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  z-index: 99999;
  border-radius: 0.75rem;
  display: none;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
    position: relative;
    box-shadow: none;
  }
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown li a {
  color: #3c4250;
  padding: 0.25rem 1rem;
  display: block;
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown.show {
  display: block !important;
}
.navbar .navbar-menu .navbar-nav .dropdown > .separator {
  height: 1px;
  width: 100%;
  margin-top: 9px;
  margin-bottom: 9px;
  background-color: #eceef3;
}
.navbar .navbar-dropdown {
  position: relative;
}

.navbar .navbar-header > a span {
  color: #66f;
}

.navbar .navbar-header h4 {
  font-weight: 500;
  font-size: 1.25rem;
}
@media (max-width: 768px) {
  .navbar .navbar-header h4 {
    font-size: 1.05rem;
  }
}                                         
            
      #product_grid_container .product_list_image{

      }
      #product_grid_container .product_list_caption p{
         font-weight:400 !important;
         font-size:16px !important;
         color:#343a40;
         margin-top:5px;
      }
      #product_grid_container .product_list_price p{
         margin-top:18px;
         font-size:14px !important;
         font-weight:bold;
         color:#343a40;
         float:left;
      }
      #product_grid_container .product_list_action{
         padding-top:15px;
         float:right;
      }
      #product_grid_container .action_button{
         padding:9px;
         border-radius: 7px;
         font-size:12px;
         color:#343a40;
         border-color:#ff9336;
         margin-top:23px;
         font-weight:bold; color:#131312;
    
      }
      #product_grid_container .action_button:hover{
         animation: mymove 1s;
         cursor: pointer;
         border-radius: 7px;
         color:white;
         padding:9px;
         background-color:#ff9336;
      }
      #product_grid_container .product_list_idr{
            font-size:18px;
      }

      .jumbotron{
      background: rgb(235, 226, 226);
         padding: 100px;
      }
    .content{
      background: #fff;
      padding: 50px;
      font-size: 19px;
      line-height: 30px;
      min-height: 3000px;   
    }

    .scroll-line{
    background: linear-gradient(217deg, rgba(136, 94, 4, 0.935), rgba(244, 127, 38, 0.787) 70.71%),
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
      top: 0;
      left: 0;
      height: 10px;
      position: fixed;
      transition: 0.5s cubic-bezier(0.075, 0.82, 0.165, 1);
      z-index: 1000;
    }      
    
      
      @keyframes mymove {
      from {background-color: #ffffff;}
      to {background-color: #ff9336;}
      }

      @keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}


   </style>
   </head>
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img  src="{{asset('default/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      
      {{-- <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{asset('main/images/logo/logo_belles_home.jpg')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="service.html">Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.html">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="testimonial.html"> Testimonial </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header> --}}

      @include('header.menu')
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div style = "background-color:#131312;opacity:0.3;position:absolute;width:100%;height:100%;z-index:500;">
            <div style = "position: absolute;top:75px;right:150px;color:white;font-size:14px;"><span id = "tulisanatas" style = "opacity:0;">Home Decor Terbaik</span> <br> <span id = "tulisanbawah" style = "font-size:18px;opacity:0;"> Hanya di <b>BellesHome.</b></span></div></div>
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style = "z-index:1000;">
               {{-- <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-12 ">
                              <div class="text-bg">
                                 <h1 style = "color:#ffa95e;font-size:70px;"> Best <br><span style = "font-size:50px;">Home Decor</span></h1>
                                 <span>There are many variations of passages of Lorem Ipsum available</span>
                                 <a class="read_more" href="Javascript:void(0)">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-12">
                              <div class="text-bg">
                                 <h1 style = "color:#ffa95e;font-size:70px;"> Best  <br><span style = "font-size:50px;">Quality Item</span></h1>
                                 <span>There are many variations of passages of Lorem Ipsum available</span>
                                 <a class="read_more" href="Javascript:void(0)">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-12 ">
                              <div class="text-bg">
                                 <h1 style = "color:#ffa95e;font-size:70px;"> Best <br> <span style = "font-size:50px;">Items Ever</span></h1>
                                 <span>There are many variations of passages of Lorem Ipsum available</span>
                                 <a class="read_more" href="Javascript:void(0)">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About <span class="green" style = "color:rgba(220, 152, 7, 0.935) !important;">Us</span></h2>
                     <p>Kami adalah perusahaan yang menyediakan barang home decor terbaik agar ruangan-mu terasa elegan dan nyaman bersama <b style = "font-size:20px;">Belles Home</b></p>
                     <a class="read_more" href="Javascript:void(0)">Lihat Produk</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="{{asset('main/images/about_us.jpg')}}" style = "height:100%;" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--  service -->
      {{-- <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our <span class="green">Services</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <div class="col-md-4 col-sm-6">
                        <div class="service_box">
                           <i><img src="{{asset('default/images/service1.png')}}" alt="#"/></i>
                           <h3>Retina Ready</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-1 col-sm-6">
                        <div class="service_box">
                           <i><img src="{{asset('default/images/service2.png')}}" alt="#"/></i>
                           <h3>Creative Elements</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                        <div class="service_box">
                           <i><img src="{{asset('default/images/service3.png')}}" alt="#"/></i>
                           <h3>Easy-to-Use</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                        <div class="service_box">
                           <i><img src="{{asset('default/images/service4.png')}}" alt="#"/></i>
                           <h3>Easy Import</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end service -->
      <!-- gallery -->
      <div id="gallery"  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our <span class="green" style = "color:rgba(220, 152, 7, 0.935) !important;">Category</span></h2>
                     <p>here are many variations of our category, come and see.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Interior Design</h3>
                        <p>of passages of Lorem <br>
                           Ipsum available <br>
                           , but the majority <br>
                           have suffer
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="{{asset('default/images/gallery1.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="{{asset('default/images/gallery2.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="{{asset('default/images/gallery3.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="{{asset('default/images/gallery4.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Interior Design</h3>
                        <p>of passages of Lorem <br>
                           Ipsum available <br>
                           , but the majority <br>
                           have suffer
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Interior Design</h3>
                        <p>of passages of Lorem <br>
                           Ipsum available <br>
                           , but the majority <br>
                           have suffer
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="{{asset('default/images/gallery5.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="{{asset('default/images/gallery6.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!-- design -->
      {{-- <div class="design">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div id="design" class="carousel slide banner_design" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#design" data-slide-to="0" class="active"></li>
                        <li data-target="#design" data-slide-to="1"></li>
                        <li data-target="#design" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>New Ideas <span class="green">Design</span></h2>
                                          </div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but theThere are many variations of passages of Lorem Ipsum available, but the</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>New Ideas <span class="green">Design</span></h2>
                                          </div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but theThere are many variations of passages of Lorem Ipsum available, but the</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>New Ideas <span class="green">Design</span></h2>
                                          </div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but theThere are many variations of passages of Lorem Ipsum available, but the</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#design" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#design" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-7 pad_roght0">
                  <div class="design_img">
                     <figure><img src="images/desi.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end design -->
      <!-- latest news -->
      <div  class="latest_news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Look our <span class="green" style = "color:#ff9336 !important;">Latest Product</span></h2>
                  </div>
               </div>
            </div>
            
            <div class="row" style = "width:100%;" id = "product_grid_container">
               <div id = "myCarou" class="owl-carousel owl-theme">
                        <div class="item">
                           <div class = "col-6" style = "max-width:1000px;">
                              <div class = "product_list_image">
                                 <img src = "{{asset('default/images/gallery5.jpg')}}">
                              </div>
                              <div class="product_list_caption">
                                 <p>Patung Beruang Gold Float emas</p>
                              </div>
                              <div class="product_list_price">
                              <p> 
                                 {{-- <i class="fa fa-money" aria-hidden="true"></i> --}}

                                    <span class = "product_list_idr"> IDR</span> 10.000</p>
                              </div>
                              <div class="product_list_action" >
                                 {{-- <button class = "btn btn-outline-info" style = ""> --}}
                                    <span  class = "action_button" >Lihat Detail <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                 {{-- </button> --}}
                              </div>
                         </div>
                       </div>
                       <div class="item">
                              <div class = "col-6" style = "max-width:1000px;">
                                 <div class = "product_list_image">
                                    <img src = "{{asset('default/images/gallery5.jpg')}}">
                                 </div>
                                 <div class="product_list_caption">
                                    <p>Patung Beruang Gold Float emas</p>
                                 </div>
                                 <div class="product_list_price">
                                 <p> 
                                    {{-- <i class="fa fa-money" aria-hidden="true"></i> --}}

                                       <span class = "product_list_idr"> IDR</span> 10.000</p>
                                 </div>
                                 <div class="product_list_action" >
                                    {{-- <button class = "btn btn-outline-info" style = ""> --}}
                                       <span  class = "action_button" >Lihat Detail <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                    {{-- </button> --}}
                                 </div>
                            </div>
                        </div>
                        <div class="item">
                           <div class = "col-6" style = "max-width:1000px;">
                              <div class = "product_list_image">
                                 <img src = "{{asset('default/images/gallery5.jpg')}}">
                              </div>
                              <div class="product_list_caption">
                                 <p>Patung Beruang Gold Float emas</p>
                              </div>
                              <div class="product_list_price">
                              <p> 
                                 {{-- <i class="fa fa-money" aria-hidden="true"></i> --}}

                                    <span class = "product_list_idr"> IDR</span> 10.000</p>
                              </div>
                              <div class="product_list_action" >
                                 {{-- <button class = "btn btn-outline-info" style = ""> --}}
                                    <span  class = "action_button" >Lihat Detail <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                 {{-- </button> --}}
                              </div>
                         </div>
                       </div>
                       <div class="item">
                              <div class = "col-6" style = "max-width:1000px;">
                                 <div class = "product_list_image">
                                    <img src = "{{asset('default/images/gallery5.jpg')}}">
                                 </div>
                                 <div class="product_list_caption">
                                    <p>Patung Beruang Gold Float emas</p>
                                 </div>
                                 <div class="product_list_price">
                                 <p> 
                                    {{-- <i class="fa fa-money" aria-hidden="true"></i> --}}

                                       <span class = "product_list_idr"> IDR</span> 10.000</p>
                                 </div>
                                 <div class="product_list_action" >
                                    {{-- <button class = "btn btn-outline-info" style = ""> --}}
                                       <span  class = "action_button" >Lihat Detail <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                    {{-- </button> --}}
                                 </div>
                            </div>
                        </div>
              </div>
            </div>
         </div>
      </div>
   
      @include("header.footer")
   </body>
</html>
<script>

$(document).ready(function () {
//   $("#tulisanatas").animate({ opacity: 1 });
//   $("#tulisanbawah").animate({ opacity: 1 });

  $("#tulisanatas").animate({opacity: 1}, 2350)
  .promise()
  .then(function() {
       $("#tulisanbawah").animate({opacity: 1}, 950);
  });
  



});

const scrollline = document.querySelector('.scroll-line');

function fillscrollline(){
  const windowHeight = window.innerHeight;
  const fullHeight = document.body.clientHeight;
  const scrolled = window.scrollY;
  const percentScrolled = (scrolled / (fullHeight - windowHeight)) * 100;

  scrollline.style.width = percentScrolled + '%';
};

window.addEventListener('scroll', fillscrollline);


      $(".banner_main h1").fadeIn(3000);
    
      $('#myCarou').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})
</script>