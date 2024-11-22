<!DOCTYPE html>
<html lang="en">
   @include('header.header')
   <head>
	<link rel="stylesheet" href="{{asset('main/css/custom/product.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
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
.navbar .navbar-menu .navbar-nav > li.active a {
  font-size: 15px;
  color: white;
  font-weight: bold;
}
.navbar .navbar-menu .navbar-nav > li > a:hover {
  color: white;
  font-size: 15px;
  font-weight: bold;
}
.navbar .navbar-menu .navbar-nav > li  a {
  font-size: 15px;
  color: white;
}
.owl-stage{
    
    width: 100%;
}
.gbr:hover{
    transition:all 1s;
    transform: scale(1.1);
}
.gbr{
    transition:all 1s;
	opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 0.5s;
}


@keyframes fadeInOpacity {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}
.navbar_items{
   cursor:pointer;
}
    </style>


   </head>
   <body>
    @include('header.menu')
 
   
    

     <section class="" style = "padding-top:10px;margin-top:20px;">
        <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4" >
                        <div class="titlepage" style = "margin:0;padding-left:0px;">
                            <h2 style = "text-align:left;">Our product</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8" >
                        <ul class="filter__controls" style = "padding-top:10px;">
                    
                    <li class="active item" onclick = "change_category(0)" data-click-id = "0">All</li>
                    @foreach($category as $c)
                    <li class="item" onclick = "change_category({{$c->id}})" data-click-id = "{{$c->id}}">{{$c->name}}</li>
                    @endforeach
                        </ul>
                    </div>
                </div>
                <div class = "row" >
                    <div class="col-12">
                        <input id = "keyword_product" type="text" class = "form-control" placeholder="Find your items here..." style = "float:left;border-radius:30px;font-size:15px;color:#131312;padding:10px;width:92%;height:35px;"/>
                        <i class="fa fa-search" aria-hidden="true" onclick = "search_button()" style = "float:left;font-size:20px;margin-top:5px;margin-left:5px;"></i>            
                    </div>
                    
      
                </div>
                <div class="row " style = "margin-top:25px;margin-bottom:50px;padding-right:25px;"  id ="replace_product">
             
                        @include("product_card")
           
                      
                </div>
        </div> 
       
     </section>
     
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
                <div class="rating" style = "font-size: 10px;color: #e3c01c;">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 59.0</div>
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
       $('#mycategories').owlCarousel({
    loop:false,
    margin:80,
    responsiveClass:true,
    autoWidth:true,
    responsive:{
        0:{
            items:10,
            nav:true
        },
        600:{
            items:10,
            nav:true
        },
        1000:{
            items:10,
            nav:true,
            loop:false
        }
    }
})
     $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });


    var data_pilihan_category = 0;
var keywords= "";
var status_search = "ok";
$(document).on('click', '.mylinks a', function(event){
 
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];

 fetch_data(page);
});

function fetch_data(page)
{
 $.ajax({
  url:"/pagination/fetch_data_index?page="+page,
  data:{"category" : data_pilihan_category, "keyword" : keywords},
  complete:function(){
	status_search = "ok";
        },
  success:function(data)
  {
	status_search = "ok";
   $('#replace_product').html(data);

//    $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:1
//         },
//         1000:{
//             items:1
//         }
//     }
// });
  }
 });
 
}



$('#keyword_product').keypress(function(event){
  if(event.keyCode == 13){
	search_button();
  }
});

function search_button(){

	if(status_search = "ok"){
		status_search = "no";
		keywords = $("#keyword_product").val();
		fetch_data(1);
	}
	else{
		Swal.fire({
              title: "Tunggu",
              text: "Silahkan tunggu sampai data selesai dicari",
              icon: "info",
              confirmButtonColor: "#3085d6",
              confirmButtonText: "ok"
            });
		}
}
function change_category(id_category){
	if(status_search = "ok"){
		status_search = "no";
		$("#keyword_product").val("");
		data_pilihan_category = id_category;
		keywords = "";
		fetch_data(1);
	}
	else{
			Swal.fire({
              title: "Tunggu",
              text: "Silahkan tunggu sampai data selesai dicari",
              icon: "info",
              confirmButtonColor: "#3085d6",
              confirmButtonText: "ok"
            });
	}

}

$(".navbar_items").click(function (e) { 
   e.preventDefault();
   var data_category = $(this).attr("data-id-cat");
   window.location.href = "{{url('/collection/')}}/"+data_category;
});

</script>