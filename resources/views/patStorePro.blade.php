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
              <a href="{{url('/patHome')}}" class="js-logo-clone"><strong class="text-primary">Medi</strong>Mart</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="{{url('/patHome')}}">Home</a></li>
                <li><a href="{{url('/patMedView')}}">Store</a></li>
                <li class="has-children">
                  <a>Products</a>
                  <ul class="dropdown">
                    <li><a class="bg-dark text-light" href="{{url('/patMedView')}}" >Supplements</a></li>
                    
                    <li><a href="{{url('/patMedVit')}}">Vitamins</a></li>
                      
                    
                    <li><a href="{{url('/patMedMin')}}">Minerals</a></li>
                    <li><a href="{{url('/patMedHer')}}">Herbal</a></li>
                    <li><a href="{{url('/patMedPro')}}">Protein and Fitness</a></li>
                    <li><a href="{{url('/patMedProbio')}}">Probiotics and Digestive</a></li>
                    <li><a href="{{url('/patMedImu')}}">Imune System</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('/patAbout')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <li><a href="{{url('/order')}}">Order</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{url('/cart')}}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
            </a>
            
          </div>
          <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Patient
                </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="">My account</a>
                <a class="dropdown-item" href="/logout">Log out</a>
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
            <a href="{{url('/patHome')}}">Home</a> <span class="mx-2 mb-0">/</span>
            <a href="{{url('/patMedView')}}">Supplements</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Proteins</strong>
          </div>
        </div>
      </div>
    </div>
    
<!-- section -->

@if(isset($all))

<div class="container-fluid pt-5">
  <div class="card-columns">
    @foreach($all->all() as $pro)
  <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100">
      <img src="{{$pro->image}}" class="card-img-top" alt="...">
      <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>({{$pro->rate}})</small>
        </div>
      <div class="card-body text-dark">
        <h5 class="card-title">{{$pro->name}}</h5>
        <p class="card-text">₹{{$pro->price}}</p>
        <p class="card-text">{{$pro->description}}</p>
        <a href="{{url('/patMedSingle')}}{{$pro->id}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
        <a href="{{url('/patMedSingle')}}{{$pro->id}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
      </div>
      
    </div>
  </div>
</div>
@endforeach
  

  </div>       
</div>
@endif
    <!-- end section -->


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