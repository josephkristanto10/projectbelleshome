<nav class="navbar" style = "background-color:#131312;border:0px;transition:all .2s ease;">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="#">
        <h3 style = "font-size:30px;color:white;">Belles&nbsp;<span style = "color:white;font-weight:bold;">Home</span><span style = "color:white;font-weight:bold;font-size:50px;">.</span></h3>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1" style = "font-family: sans-serif !important;" >
      <ul class="navbar-nav" >
        <li class="active"><a href="{{url('/')}}"> 
          {{-- <i class="fa fa-home" aria-hidden="true"></i> --}}
          Home</a></li>
        <li class="navbar-dropdown">
          <a href="{{url('/product')}}" class="dropdown-toggler" data-dropdown="my-dropdown-id">
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
</nav>


<div class="scroll-line" style = "z-index:2000000;"></div>

    <div class="conatainer">
   
    </div>
</div>

