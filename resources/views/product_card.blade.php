@foreach($products as $p)
<div class= "col col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3" style = "max-width:100%;;" > 

    <div class="product__item" style = "margin-bottom:0px;">
        <img class = "gbr" src="{{asset('all_image/product_from_db/'.$p->img.'')}}" style ="width:250px;height:250px;margin-bottom:20px;" alt="new-arrivals imagesasdsa">
        <h6><a href="#">{{$p->name}}</a></h6>
        <div class="rating" style = "color:#f6b14b;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="product__price">IDR {{number_format($p->price,0)}}</div>
     
    </div>
</div>
@endforeach
<div style = "clear:both;"></div>
<div class = "row  justify-content-center" style = "overflow-x: auto;">
    <div class = "mylinks" style = "margin:auto;" >
		{!! $products->links("pagination::bootstrap-4") !!}
      </div>
</div>