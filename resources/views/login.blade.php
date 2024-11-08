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
              <a href="{{url('/home')}}" class="js-logo-clone"><strong class="text-primary">Medi</strong>Mart</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/shop')}}">Store</a></li>
                <li class="has-children">
                  <a>Products</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/shop')}}">Supplements</a></li>
                    
                    <li><a href="{{url('/shop')}}">Vitamins</a></li>
                      
                    <li><a href="{{url('/shop')}}">Minerals</a></li>
                    <li><a href="{{url('/shop')}}">Herbals</a></li>
                    <li><a href="{{url('/shop')}}">Protein and Fitness</a></li>
                    <li><a href="{{url('/shop')}}">Probiotics and Digestive</a></li>
                    <li><a href="{{url('/shop')}}">Imune System</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/loginView')}}">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{url('/loginView')}}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
            <a class="btn btn-sm btn-outline-primary" href="{{url('/loginView')}}">login</a>
            <a class="btn btn-sm btn-outline-primary" href="{{url('/registerView')}}">Registration </a>
          </div>
        </div>
      </div>
    </div>

    <!-- nav bar close -->
  

    <div class="bg-light py-3">
      <div class="container">
      
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="{{url('/home')}}">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Login</strong>
          </div>
        </div>
      </div>
    </div>
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Login:</h2>
          </div>
          <div class="col-md-12">
    
            <form action="{{url('login')}}" method="post">
                @csrf
              <div class="p-3 p-lg-5 border">
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
    
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

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
              <li><a href="{{url('/shop')}}">Supplements</a></li>
              <li><a href="{{url('/shop')}}">Vitamins</a></li>
              <li><a href="{{url('/shop')}}">Minerals</a></li>
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