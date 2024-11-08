<!DOCTYPE html>
<html lang="en">

<head>
  <title>MediMart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>


  <div class="justify-container">

  <!-- nav bar start -->


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="POST">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{url('/adminHome')}}" class="js-logo-clone"><strong class="text-primary">Medi</strong>Mart</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="{{url('/adminHome')}}">Home</a></li>
                
                <li class="has-children">
                  <a>Products</a>
                  <ul class="dropdown">
                    <li><a class="bg-dark text-light" href="{{url('/adminSup')}}" >Supplements</a></li>
                    
                    <li><a href="{{url('/adminSupVit')}}">Vitamins</a></li>
                      
                    
                    <li><a href="{{url('/adminSupMin')}}">Minerals</a></li>
                    <li><a href="{{url('/adminSupHer')}}">Herbal</a></li>
                    <li><a href="{{url('/adminSupPro')}}">Protein and Fitness</a></li>
                    <li><a href="{{url('/adminSupProbio')}}">Probiotics and Digestive</a></li>
                    <li><a href="{{url('/adminSupImu')}}">Imune System</a></li>
            
                  </ul>
                </li>
                <li><a href="{{url('/adminAbout')}}">About</a></li>
                <li><a href="{{url('/adminMsg')}}">Message</a></li>
                <li class="active"><a href="{{url('/userInfo')}}">User Details</a></li>
                <li class="has-children">
                  <a>Orders</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/orderPending')}}">Pending</a></li>
                    <li><a href="{{url('/orderApprove')}}">Approved</a></li>
                    <li><a href="{{url('/orderDeliver')}}">Delivered</a></li>
            
                  </ul>
              </ul>
            </nav>
          </div>
         
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            
            </div>
            <div class="dropdown">
              <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Admin
                </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/adminAccount')}}">My account</a>
                <a class="dropdown-item" href="{{url('/logout')}}">Log out</a>
              </div>
            </div>
         
        </div>
      </div>
    </div>

    <!-- nav bar close -->
  
  

    <div class="bg-light py-3">
      <div class="container">
      
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="{{url('/adminHome')}}">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">User Details</strong>
          </div>
        </div>
      </div>
    </div>

    <!-- alert start -->
    @if(session('message'))
        <div class="alert alert-warning">
            {{session('message')}}
        </div>
    @endif
<!-- alert end -->
    
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Order Price</h3>
            <div id="slider-range" class="border-primary"></div>
            <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
          </div> -->
          <div class="col-lg-6 text-lg-left">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter</h3>
            <button type="button" class="btn btn-primary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Reference</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="{{url('/shop')}}">Recent</a>
              <a class="dropdown-item" href="{{url('/shop')}}">By name, A-Z(a-z)</a>
              <a class="dropdown-item" href="{{url('/shop')}}">Older to Newest</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/shop')}}">Regular Customer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    @if(isset($allInfo))
 
    <div class="site-section bg-light">
      <div class="container">
      @foreach($allInfo->all() as $all)
        <div class="col shadow">
       
          <div class="row-sm-6 row-lg-4 text-center item mb-4 item-v2">
            <h3 class="text-dark"><a href="{{url('/loginView')}}">{{$all->name}}</a></h3>
            <span class="text-dark">Email: </span>{{$all->email}}
            <span class="text-dark">Contact: </span>{{$all->phone}}
            <span class="text-dark">Gender: </span>{{$all->gender}}
            <span class="text-dark">Address: </span>{{$all->address}}
            <p><a href="{{url('/block')}}{{$all->id}}" class="btn btn-sm btn-outline-danger" style="color:red;">Block</a>
            <a href="{{url('/unblock')}}{{$all->id}}" class="btn btn-sm btn-primary" style="color:white;">Unblock</a></p>
            <div><a class="font-weight-bold" href="{{url('/userOrder')}}{{$all->id}}">Order Details</a></div>
          </div>
          
        </div>
        @endforeach
      </div>
    </div>
    
    @endif
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-black mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>

     <!-- footer start -->
     <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About <strong class="text-primary">MediMart</strong></h3>
              <p>is the digital pharmacy shop.
              We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="{{url('/adminSup')}}">Supplements</a></li>
              <li><a href="{{url('/adminSupVit')}}">Vitamins</a></li>
              <li><a href="{{url('/adminSupMin')}}">Minerals</a></li>
              <li><a href="#">Herbals</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">SaltLake, Sector-5, Kolkata, West Bengal</li>
                <li class="phone"><a href="tel://23923929210">+91 3923929210</a></li>
                <li class="email">medicine@medimart.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">MediMart</a>
           
            </p>
          </div>

        </div>
      </div>
    </footer>

    <!-- footer close -->
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>