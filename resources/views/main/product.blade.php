<!DOCTYPE html>
<html lang="en">
   @include('header.header')
   <head>
	<link rel="stylesheet" href="{{asset('main/css/custom/product.css')}}">
   </head>
   <body>
    @include('header.menu')
 
    <div id="about" class="about" style = "padding-top:20px;">
        <div class="container" style = "padding-left:10px;">
            {{-- <h2>Our <span class="green" style = "color:rgba(220, 152, 7, 0.935) !important;">Product</span></h2>
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage" style = "padding-left: 20px;">
                    <h2>Our Product <span class="green" style = "color:rgba(220, 152, 7, 0.935) !important;"></span></h2>
                   
                 </div>
              </div>
      
           </div> --}}
           <div class="row">
            
            <section class="product spad" style = "padding-top:10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4" >
                            <div class="titlepage" style = "margin:0;padding-left:15px;">
                                <h2>Our product</h2>
                             </div>
                         </div>
                         <div class="col-lg-8 col-md-8" >
                             <ul class="filter__controls" style = "padding-top:10px;">
                                 <li class="active" data-filter="*">All</li>
                                 <li data-filter=".women">Women’s</li>
                                 <li data-filter=".men">Men’s</li>
                         <li data-filter=".kid">Kid’s</li>
                         <li data-filter=".accessories">Accessories</li>
                         <li data-filter=".cosmetic">Cosmetics</li>
							</ul>
						</div>
           			 </div>
             <div class="row property__gallery" style = "margin-top:15px;">
                 <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="{{asset('default/images/gallery2.jpg')}}">
                             <div class="label new">New</div>
                             <ul class="product__hover">
                                 {{-- <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li> --}}
                                 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Buttons tweed blazer</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 59.0</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="{{asset('default/images/gallery3.jpg')}}">
                             <ul class="product__hover">
                                 {{-- <li><a href="img/product/product-2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li> --}}
								 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Flowy striped skirt</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 49.0</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="{{asset('default/images/gallery4.jpg')}}">
                             <div class="label stockout">out of stock</div>
                             <ul class="product__hover">
                                 {{-- <li><a href="img/product/product-3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li> --}}
								 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Cotton T-Shirt</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 59.0</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="{{asset('default/images/gallery1.jpg')}}">
                             <ul class="product__hover">
                                 {{-- <li><a href="img/product/product-4.jpg" class="image-popup"><span class="arrow_expand"></span></a></li> --}}
								 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Slim striped pocket shirt</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 59.0</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="{{asset('default/images/gallery5.jpg')}}">
                             <ul class="product__hover">
                                 {{-- <li><a href="img/product/product-5.jpg" class="image-popup"><span class="arrow_expand"></span></a></li> --}}
								 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Fit micro corduroy shirt</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 59.0</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                     <div class="product__item sale">
                         <div class="product__item__pic set-bg" data-setbg="{{asset('default/images/gallery6.jpg')}}">
                             <div class="label sale">Sale</div>
                             <ul class="product__hover">
                                 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Tropical Kimono</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                             <ul class="product__hover">
                                 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Contrasting sunglasses</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 59.0</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                     <div class="product__item sale">
                         <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                             <div class="label">Sale</div>
                             <ul class="product__hover">
								 <li><a href="#"><span class="icon_heart_alt"> <img src= "{{asset('main/images/logo/logo_wa.png')}}"/></span></a></li>
                                 <li><a href="#"><span class="icon_bag_alt"><img style = "width:30px;height:30px;" src= "{{asset('main/images/logo/logo_info.png')}}"/></span></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6><a href="#">Water resistant backpack</a></h6>
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
           </div>
        </div>
     </div>
    
@include("header.footer")
</body>
</html>
<script>
     $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });
</script>