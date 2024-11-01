<!DOCTYPE html>
<html lang="en">

<head>
  <title>MediMart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
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
                      
                    
                    <li><a href="{{url('/shop')}}">Diet &amp; Nutrition</a></li>
                    <li><a href="{{url('/shop')}}">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
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
          <div class="col-md-12 mb-0"><a href="{{url('/home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
        </div>
      </div>
    </div>
    
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
            <div id="slider-range" class="border-primary"></div>
            <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
          </div>
          <div class="col-lg-6 text-lg-right">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter</h3>
            <button type="button" class="btn btn-primary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Reference</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="{{url('/shop')}}">Relevance</a>
              <a class="dropdown-item" href="{{url('/shop')}}">Name, A to Z</a>
              <a class="dropdown-item" href="{{url('/shop')}}">Name, Z to A</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/shop')}}">Price, low to high</a>
              <a class="dropdown-item" href="{{url('/shop')}}">Price, high to low</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">Sale</span>
            <img src="images/product_01.png" alt="Image">
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Bioderma</a></h3>
            <p class="price"><del>₹95.00</del> &mdash; ₹55.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>

          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <a href="{{url('/loginView')}}"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Chanca Piedra</a></h3>
            <p class="price">₹70.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <a href="{{url('/loginView')}}"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Umcka Cold Care</a></h3>
            <p class="price">₹120.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
    
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
    
            <a href="{{url('/loginView')}}"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Cetyl Pure</a></h3>
            <p class="price"><del>₹45.00</del> &mdash; ₹20.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <a href="{{url('/loginView')}}"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">CLA Core</a></h3>
            <p class="price">₹38.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">Sale</span>
            <a href="{{url('/loginView')}}"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Poo Pourri</a></h3>
            <p class="price"><del>₹89</del> &mdash; ₹38.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">Sale</span>
            <a href="{{url('/loginView')}}"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Bioderma</a></h3>
            <p class="price"><del>₹95.00</del> &mdash; ₹55.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <a href="{{url('/loginView')}}"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Chanca Piedra</a></h3>
            <p class="price">₹70.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <a href="{{url('/loginView')}}"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Umcka Cold Care</a></h3>
            <p class="price">₹120.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
          
            <a href="{{url('/loginView')}}"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Cetyl Pure</a></h3>
            <p class="price"><del>₹45.00</del> &mdash;₹20.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <a href="{{url('/loginView')}}"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">CLA Core</a></h3>
            <p class="price">₹38.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">Sale</span>
            <a href="{{url('/loginView')}}"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('/loginView')}}">Poo Pourri</a></h3>
            <p class="price"><del>₹89</del> &mdash; ₹38.00</p>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
            <a href="{{url('/loginView')}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="{{url('/shop')}}">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="{{url('/shop')}}">2</a></li>
                <li><a href="{{url('/shop')}}">3</a></li>
                <li><a href="{{url('/shop')}}">4</a></li>
                <li><a href="{{url('/shop')}}">5</a></li>
                <li><a href="{{url('/shop')}}">&gt;</a></li>
              </ul>
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
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
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