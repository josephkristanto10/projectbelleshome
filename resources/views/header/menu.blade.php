<nav class="navbar" style = "background-color:#131312;border:0px;transition:all .2s ease;">
  <div class="container">

    <div class="navbar-header">
      {{-- <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button> --}}
      <a href="#">
        <h3 style = "font-size:30px;color:white;"><img src = "{{asset('main/images/logo/logo_putih.png')}}" style = "width:125px;height:100px;margin-top:20px;"></h3>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1" style = "font-family: sans-serif !important;" >
      <ul class="navbar-nav" >
        <li class="active"><a href="{{url('/')}}"> 
          {{-- <i class="fa fa-home" aria-hidden="true"></i> --}}
          Home</a></li>
        <li class="navbar-dropdown">
          <a href="{{url('/collection')}}" class="dropdown-toggler" data-dropdown="my-dropdown-id">
            {{-- <i class="fa fa-tag" aria-hidden="true"></i> --}}
            Product <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="my-dropdown-id">
            <li><a href="#">Category 1</a></li>
            <li class="separator"></li>
            <li><a href="#">Category 2</a></li>
            <li class="separator"></li>
            <li><a href="#">Category 3</a></li>
          </ul>
        </li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div>
  </div>
<div style = "clear:both;margin-top:40px;"></div>
{{-- <nav class="navbar" id = "navbar2" style = "background-color:#131312;border:0px;transition:all .2s ease;"> --}}
  <div class="container" style = "background-color: #131312;margin-top:30px;">
    <div style = "background-color:#131312;border:0px;transition:all .2s ease;color:white; width:100%;" id = "mycategories" class="owl-carousel owl-theme" >
     
      <div class="item navbar_menu_page" > <a href = "{{url("/")}}" style = "color:white !important;">Home</a></div>
      <div class="item navbar_menu_page" > <a href = "{{url("/collection")}}" style = "color:white !important;">All Product</a></div>
      @foreach($category as $c)
      <div class="item navbar_items" data-id-cat = "{{$c->id}}" >{{$c->name}}</div>
      @endforeach
    </div>
  </div>
</div>
{{-- </nav> --}}
</nav>


<div class="container">

<div class="scroll-line" style = "z-index:2000000;"></div>

    <div class="conatainer">
   
    </div>
</div>

