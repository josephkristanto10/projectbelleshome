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
  /* font-family: "Roboto", sans-serif; */
  font-size: 0.925rem;
  font-family: Inter !important;
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
  z-index: 100000;
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

/* #tulisan_section_2{
   font-size:10px !important;
  } */


/* Start */
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
height: 4px;
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


.overlay {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
/* height: 100%; */
width: 100%;
opacity: 0;
transition: .5s ease;
background-color: #131312;
}

.overlay:hover {
opacity: 0.5;
}
.bg-info {
background-color: #131312 !important;
}


.product {
padding-top: 0px;
padding-bottom: 10px;
}
.product__item {
margin-bottom: 35px;
}

.product__item:hover .product__hover li {
opacity: 1;
top: 0;
}


.product__item.sale .product__item__pic .label {
background: #ca1515;
}

.product__item.sale .product__item__text .product__price {
color: #ca1515;
}

.product__item__pic {
height: 360px;
position: relative;
overflow: hidden;
}

.product__item__pic .label {
font-size: 12px;
color: #ffffff;
font-weight: 500;
display: inline-block;
padding: 2px 8px;
text-transform: uppercase;
position: absolute;
left: 10px;
top: 10px;
}

.product__item__pic .label.new {
background: #36a300;
}

.product__item__pic .label.stockout {
background: #111111;
}

.product__item__pic .label.stockblue {
background: #0066bd !important;
}

.product__item__pic .label.sale {
background: #ca1515;
}
.product__hover {
position: absolute;
left: 0;
width: 100%;
bottom: 30px;
text-align: center;
}

.product__hover li {
list-style: none;
display: inline-block;
margin-right: 10px;
position: relative;
top: 100px;
opacity: 0;
}

.product__hover li:nth-child(1) {
-webkit-transition: all 0.4s ease 0.1s;
-o-transition: all 0.4s ease 0.1s;
transition: all 0.4s ease 0.1s;
}

.product__hover li:nth-child(2) {
-webkit-transition: all 0.4s ease 0.15s;
-o-transition: all 0.4s ease 0.15s;
transition: all 0.4s ease 0.15s;
}

.product__hover li:nth-child(3) {
-webkit-transition: all 0.4s ease 0.2s;
-o-transition: all 0.4s ease 0.2s;
transition: all 0.4s ease 0.2s;
}

.product__hover li:last-child {
margin-right: 0;
}

.product__hover li:hover a {
background: #ca1515;
margin-top:30px;
}

.product__hover li:hover a span {
color: #ffffff;
-webkit-transform: rotate(360deg);
-ms-transform: rotate(360deg);
transform: rotate(360deg);
}

.product__hover li a {
font-size: 18px;
color: #111111;
display: block;
height: 45px;
width: 45px;
background: #ffffff;
line-height: 48px;
text-align: center;
border-radius: 50%;
-webkit-transition: all, 0.5s;
-o-transition: all, 0.5s;
transition: all, 0.5s;
}

.product__hover li a span {
position: relative;
-webkit-transform: rotate(0);
-ms-transform: rotate(0);
transform: rotate(0);
-webkit-transition: all, 0.3s;
-o-transition: all, 0.3s;
transition: all, 0.3s;
display: inline-block;
}

.product__item__text {
text-align: center;
padding-top: 22px;
}

.product__item__text h6 a {
font-size: 14px;
color: #111111;
}

.product__item__text .rating {
line-height: 18px;
margin-bottom: 5px;
}

.product__item__text .rating i {
font-size: 10px;
color: #e3c01c;
margin-right: -4px;
}

.product__item__text .rating i:last-child {
margin-right: 0;
}

.product__item__text .product__price {
color: #111111;
font-weight: 600;
}

.product__item__text .product__price span {
font-size: 14px;
color: #b1b0b0;
text-decoration: line-through;
margin-left: 4px;
}




/* End */







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
  #tulisan_section_2{
   font-size:15px !important;
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
  #tulisan_section_2{
   font-size:15px !important;
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
  /* display: flex; */
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
   font-size:15px;
  color: white;
  text-decoration: none;
  display: inline-block;
  padding: 0.5rem 1rem;
}


.navbar .navbar-menu .navbar-nav > li > a:hover {
   color: white;
   font-size:15px;
   font-weight: bold;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav > li > a {
    border-bottom: 1px solid #eceef3;
  }

}
.navbar .navbar-menu .navbar-nav > li.active a {
   font-size:15px;
  color: white;
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
  #navbar2{top: 100px;}
}

@font-face {
  font-family: 'ZenAntique';
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("{{asset('main/font/ZenAntique_regular_v12.woff')}}") format('woff')
}       
body{
   font-family:ZenAntique !important;font-weight:200 !important;
}             

.navbar_items{
   cursor:pointer;
}

u{
   color:black !important;
}
/* #mycategories .owl-stage{
    
    width: 100% !important;
    margin-bottom:15px;
} */



   </style>

   

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
   /* @media (max-width: 1400px){
      #tulisan_section_2{
         font-size:15px !important;
      }
   } */
   #mycategories .owl-stage{
    
    width: 1000px !important;
    /* margin-bottom:15px; */
}

@media (min-width: 0px) {

   #tulisan_section_2,#tulisan_section_3{
         font-size:25px !important;
      }
      #tulisan_section_1{
         font-size:25px !important;
      }
}
@media (min-width: 768px) {

   #tulisan_section_2,#tulisan_section_3{
         font-size:30px !important;
      }
      #tulisan_section_1{
         font-size:25px !important;
      }
}
@media (min-width: 992px) {

   #tulisan_section_2,#tulisan_section_3{
         font-size:30px !important;
      }
      #tulisan_section_1{
         font-size:25px !important;
      }
}
@media (min-width: 1200px) {

   #tulisan_section_2,#tulisan_section_3{
         font-size:45px !important;
      }
      #tulisan_section_1{
         font-size:25px !important;
      }
}

.progress-bar{
   background-color: #131312 !important;
}
</style>

   </head>
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader" style = "text-align:center;width:100%;">
            {{-- <img  src="{{asset('main/images/logo/logo_belles_home.jpg')}}" alt="#"/> --}}
          

            <div class="row" style = "width:30%;">
       
               <div style = "width:100%;">
                  <h3 style = "font-size:30px;"><img src = "{{asset('logo.png')}}"></span><span style = "color:white;font-weight:bold;font-size:35px;">.</span></h3>
               </div>
               <div class="progress" style = "width:100%;margin-top:20px;height:4px;">
                  
                  <div class="progress-bar bg-info" style = "" role="progressbar" style="width: 1%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">.</div>
                </div>

            </div>
            
         </div>
      </div>
      @include('header.menu')
      <section class="banner_main">
         <div  style= "position:relative;;text-align:center !important;">
            <div style = "position: absolute;width:100%;height:100%;"><h1 id = "tulisan_section_1" style =" position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color:white;z-index:1;line-height:50px;">Transform Your Space <br> Elevate Your Life.</h1><h1 style ="position: absolute;top: 65%;left: 50%;transform: translate(-50%, -35%);color:white;font-size:22px;z-index:1;font-family : Roboto;"></h1></div>
            {{-- <div style = "position: absolute;width:100%;height:100%;"></div> --}}

            <div style = "position: absolute;width:100%;height:100%; background-color:black;opacity:0.5;z-index:0;">.</div>
            <img src = "{{asset('all_image/mainhome_from_db/'.$alldata[0]->img_section_1)}}" style = "width:100%;height:600px;object-fit:cover;">
      </div>
         {{-- <div style = "background-color:#131312;opacity:0.3;position:absolute;width:100%;height:100%;z-index:500;">dasdsadsa --}}
            {{-- <div style = "position: absolute;top:75px;right:150px;color:white;font-size:13px;"><span id = "tulisanatas" style = "opacity:0;">Home Decor Terbaik <br> </span> <span id = "tulisanbawah" style = "font-size:19px;opacity:0;margin-left:15px;"> Hanya di <b>BellesHome.</b></span></div>  </div>
         {{-- <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style = "z-index:1000;">
             
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
         </div> --}}
      </section>


      <div  class="latest_news" id = "latest_product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style = "text-align: left;">Look our <span class="green" style = "color:#131312 !important;">Latest Product</span></h2>
                  </div>
               </div>
            </div>
            
            <div class="row" style = "width:100%;" id = "product_grid_container">
               <div id = "myCarou" class="owl-carousel owl-theme">
                        <div class="item">
                           <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                              <div class="product__item">
      
                                 <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                                 <h6><a href="#">test</a></h6>
                                 <div class="rating" style = "color:#f6b14b;">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                 </div>
                                <div class="product__price">IDR 00</div>
                                  
                              </div>
                           </div>
                         
                       </div>
                       <div class="item">
                        <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                           <div class="product__item">
   
                              <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                              <h6><a href="#">test</a></h6>
                              <div class="rating" style = "color:#f6b14b;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                              </div>
                             <div class="product__price">IDR 00</div>
                               
                           </div>
                        </div>
                      
                    </div>
                    <div class="item">
                     <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                        <div class="product__item">

                           <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                           <h6><a href="#">test</a></h6>
                           <div class="rating" style = "color:#f6b14b;">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                           </div>
                          <div class="product__price">IDR 00</div>
                            
                        </div>
                     </div>
                    
                   
                 </div>
                 <div class="item">
                  <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                     <div class="product__item">

                        <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                        <h6><a href="#">test</a></h6>
                        <div class="rating" style = "color:#f6b14b;">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                        </div>
                       <div class="product__price">IDR 00</div>
                         
                     </div>
                  </div>
                  
                
              </div>
                     
              </div>
            </div>
            <div class = "row">
               <div class = "col-12" style = "text-align:center;">
                  <a href="#latest_product" style = "margin:auto;width:20%;height:100%;"><b><u>Produk Lainnya</u></b></a>
               </div>
            </div> 
         </div>
      </div>
      <div  style= "position:relative;;text-align:center !important;">
            <div style = "position: absolute;width:100%;height:100%;"><h1 id = "tulisan_section_2" style =" width:100%;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color:white;z-index:1;font-family:ZenAntique;">BEST SELLER ITEMS</h1><h1 style ="position: absolute;top: 65%;left: 50%;transform: translate(-50%, -35%);color:white;font-size:22px;z-index:1;font-family : Roboto;"></h1></div>
            {{-- <div style = "position: absolute;width:100%;height:100%;"></div> --}}

            <div style = "position: absolute;width:100%;height:100%; background-color:black;opacity:0.5;z-index:0;">.</div>
            <img src = "{{asset('all_image/mainhome_from_db/'.$alldata[0]->img_section_2)}}" style = "width:100%;height:300px;object-fit:cover;">
      </div>
         <div  class="latest_news" id = "latest_productz">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2 style = "font-family:ZenAntique;font-weight:200;text-align: left;">BEST SELLER TO BUY <span class="green" style = "color:#131312 !important;"> </span></h2>
                     </div>
                  </div>
               </div>
               
               <div class="row" style = "width:100%;" id = "product_grid_container">
                  <div id = "myCarous" class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                           <div class="product__item">
   
                              <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                              <h6><a href="#">test</a></h6>
                              <div class="rating" style = "color:#f6b14b;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                              </div>
                             <div class="product__price">IDR 00</div>
                               
                           </div>
                        </div>
                      
                    </div>
                    <div class="item">
                     <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                        <div class="product__item">

                           <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                           <h6><a href="#">test</a></h6>
                           <div class="rating" style = "color:#f6b14b;">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                           </div>
                          <div class="product__price">IDR 00</div>
                            
                        </div>
                     </div>
                   
                 </div>
                 <div class="item">
                  <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                     <div class="product__item">

                        <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                        <h6><a href="#">test</a></h6>
                        <div class="rating" style = "color:#f6b14b;">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                        </div>
                       <div class="product__price">IDR 00</div>
                         
                     </div>
                  </div>
                
              </div>
              <div class="item">
               <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                  <div class="product__item">

                     <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                     <h6><a href="#">test</a></h6>
                     <div class="rating" style = "color:#f6b14b;">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                     </div>
                    <div class="product__price">IDR 00</div>
                      
                  </div>
               </div>
             
           </div>
                 </div>
               </div>

               <div class = "row">
                  <div class = "col-12" style = "text-align:center;">
                     <a href="#latest_product" style = "margin:auto;width:20%;height:100%;"><b><u>Produk Lainnya</u></b></a>
                  </div>
               </div> 
            </div>
         </div>

         <div  style= "position:relative;;text-align:center !important;">
            <div style = "position: absolute;width:100%;height:100%;"><h1 id = "tulisan_section_3"  style =" position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color:white;font-size:55px;z-index:1;">BELLES's PICK ITEMS</h1><h1 style ="position: absolute;top: 65%;left: 50%;transform: translate(-50%, -35%);color:white;font-size:22px;z-index:1;font-family : Roboto;"></h1></div>
            {{-- <div style = "position: absolute;width:100%;height:100%;"></div> --}}

            <div style = "position: absolute;width:100%;height:100%; background-color:black;opacity:0.5;z-index:0;">.</div>
            <img src = "{{asset('all_image/mainhome_from_db/'.$alldata[0]->img_section_3)}}" style = "width:100%;height:300px;object-fit:cover;">
          </div>
       

         <div  class="latest_news" id = "latest_productz">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2 style = "text-align: left;">BELLE's <span class="green" style = "color:#131312 !important;">Choice</span></h2>
                     </div>
                  </div>
               </div>
               
               <div class="row" style = "width:100%;" id = "product_grid_container">
                  <div id = "myCarousel_trending" class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                           <div class="product__item">
   
                              <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                              <h6><a href="#">test</a></h6>
                              <div class="rating" style = "color:#f6b14b;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                              </div>
                             <div class="product__price">IDR 00</div>
                               
                           </div>
                        </div>
                      
                    </div>
                    <div class="item">
                     <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                        <div class="product__item">

                           <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                           <h6><a href="#">test</a></h6>
                           <div class="rating" style = "color:#f6b14b;">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                           </div>
                          <div class="product__price">IDR 00</div>
                            
                        </div>
                     </div>
                   
                 </div>
                 <div class="item">
                  <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3"  style = "max-width:100% !important;">
                     <div class="product__item">

                        <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                        <h6><a href="#">test</a></h6>
                        <div class="rating" style = "color:#f6b14b;">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                        </div>
                       <div class="product__price">IDR 00</div>
                         
                     </div>
                  </div>
                
              </div>
              <div class="item">
               {{-- <div class="row property__gallery" style = "margin-top:0px;"> --}}
                  <div class="col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3" style = "max-width:100% !important;">
                     <div class="product__item">

                        <img class = "gbr" src="{{asset('default/images/gallery2.jpg')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
                        <h6><a href="#">test</a></h6>
                        <div class="rating" style = "color:#f6b14b;">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                        </div>
                       <div class="product__price">IDR 00</div>
                         
                     </div>
                  </div>
              
               {{-- </div> --}}
             
           </div>
                 </div>
               </div>

               <div class = "row">
                  <div class = "col-12" style = "text-align:center;">
                     <a href="#latest_product" style = "margin:auto;width:20%;height:100%;"><b><u>Produk Lainnya</u></b></a>
                  </div>
               </div> 
            </div>
         </div>

      
   
{{-- qwewqewq --}}

      {{-- Modal Detail --}}

      <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
   Launch demo modal
 </button> --}}
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Detail Produk</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="row w-100" style = "text-align: center;margin:auto;color:#131312;">
            <div class="col-12">
               <img src="{{asset('default/images/gallery2.jpg')}}" style = "width:300px;height:300px;" alt="">
               <br>
               <h5 style = "margin-top:15px;padding-bottom:0px;font-weight:650;">Produk : </h5>
               <h5 style = "margin-top:15px;padding-bottom:0px;">Buttons tweed blazer</h5>
               <div class="product__price">$ 59.0</div>
               <div class="rating" style = "font-size: 10px;color: #e3c01c;">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
               </div>
               <h5 style = "margin-top:15px;padding-bottom:0px;font-weight:650;">Kategori : </h5>
               <h5 style = "margin-top:15px;padding-bottom:0px;"> -  </h5>
               <b><h5 style = "margin-top:15px;padding-bottom:0px;font-weight:650;">Pilihan Motif : </h5></b>
               <h5 style = "margin-top:15px;padding-bottom:0px;"> Kuning Merah Hijau  </h5>

            
            </div>
         </div>
       </div>
       <div class="modal-footer">
         {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
         <button type="button" style = "width:100%;" class="btn btn-outline-success"><img style = "width:50px;height:50px;" src= "{{asset('main/images/logo/logo_wa.png')}}"/>Whatsapp for Info</button>
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


  $("#tulisanatas").animate({opacity: 1}, 3350)
  .promise()
  .then(function() {
         // $("#tulisantengah").animate({opacity: 1}, 1250).promise()
         // .then(function() {
            $("#tulisanbawah").animate({opacity: 1}, 1150);
         // });
   
  });
  



});

$(".navbar_items").click(function (e) { 
   e.preventDefault();
   var data_category = $(this).attr("data-id-cat");
   window.location.href = "{{url('/collection/')}}/"+data_category;
});


const scrollline = document.querySelector('.scroll-line');
var status_navbar = "";
var status_counter = "";
function fillscrollline(){
  const windowHeight = window.innerHeight;
  const fullHeight = document.body.clientHeight;
  const scrolled = window.scrollY;
  const percentScrolled = (scrolled / (fullHeight - windowHeight)) * 100;

  scrollline.style.width = percentScrolled + '%';
  if(percentScrolled > 12){
      if(status_navbar == ""){
         status_navbar = "fixed";
         // $(".navbar").css("position","fixed");
         $(".navbar").css("position","fixed")
         .promise()
         .then(function() {
                  // $("#tulisantengah").animate({opacity: 1}, 1250).promise()
                  // .then(function() {
                   
                  // });
      
                  $(".navbar").animate({opacity: 1}, 5550);
                  $("#navbar2").css("position","fixed");
                  $("#navbar2").css("top","100px");
                 
         });;
         var timer_produk_terjual = 0;
         var timer_jumlah_produk = 0;
         var timer_jumlah_client = 0;
         if(status_counter == ""){
            setInterval(() => {
            if(timer_produk_terjual< 400){
                  timer_produk_terjual+=10;
                  $("#produk_terjual").text(timer_produk_terjual);
               }
               
            }, 1);
            setInterval(() => {
               if(timer_jumlah_produk < 1000){
                  timer_jumlah_produk+=20;
                  $("#jumlah_produk").text(timer_jumlah_produk);
               }
            },1);
            setInterval(() => {
               if(timer_jumlah_client < 10000){
                  timer_jumlah_client+=100;
                  $("#jumlah_client").text(timer_jumlah_client);
               }
            },1);
            
            

            status_counter = "done";
         }
       
         
         // $(".navbar").animate({opacity: 0}, 100)
         
      }
  }
  else if(percentScrolled == 11){

   
         $(".navbar").animate({opacity: 0}, 6200)
         $("#navbar2").animate({opacity: 0}, 6200)
         $("#navbar2").css("top","100px");
         // $(".navbar").css("position","relative");

      
  }
  else{
   if(status_navbar == "fixed"){
         status_navbar = "";
         $(".navbar").css("position","relative");
         $("#navbar2").css("position","relative");
         $(".navbar").animate({opacity: 1}, 550);
         $("#navbar2").animate({opacity: 1}, 550)
         $("#navbar2").css("top","0px");
      }
   
  }

};

window.addEventListener('scroll', fillscrollline);


      $(".banner_main h1").fadeIn(3000);
    
      
      $('#mycategories').owlCarousel({
    loop:false,
    margin:10,
    responsiveClass:true,
    autoWidth:true,
    responsive:{
        0:{
            items:2,
            // nav:true
        },
        600:{
            items:2,
            // nav:true
        },
        1000:{
            items:2,
            // nav:true,
            loop:false
        }
    }
})
      $('#myCarous').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    margin: 20,
    responsive:{
        0:{
            items:2,
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

$('#myCarousel_trending').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    margin: 20,
    responsive:{
        0:{
            items:2,
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


      $('#myCarou').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    margin: 20,
    responsive:{
        0:{
            items:2,
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
<script>
   $('.set-bg').each(function () {
      var bg = $(this).data('setbg');
      $(this).css('background-image', 'url(' + bg + ')');
  });
</script>