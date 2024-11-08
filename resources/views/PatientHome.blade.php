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
                <li class="active"><a href="{{url('/patHome')}}">Home</a></li>
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
                <a class="dropdown-item" href="{{url('/patAccount')}}">My account</a>
                <a class="dropdown-item" href="/logout">Log out</a>
              </div>
            </div>
        </div>
      </div>
    </div>


    <!-- nav bar close -->
  

    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">MediMart</strong> Opens 24 Hours</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Your Online Healthcare Solution</p>
                   
                  </div>
                </div>
                
                <p><a href="{{url('/patMedView')}}" class="btn btn-primary px-5 py-3">Shop Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">New Medicine <strong class="text-primary">Everyday</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    
                    <p>Country's Largest Medicine Shop</p>
                  </div>
                </div>
                <p><a href="{{url('/patMedVit')}}" class="btn btn-primary px-5 py-3">Shop Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Free Delivery</a></h3>
              <p>Medimart was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">New Medicine Everyday</a></h3>
              <p>MediMart was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Medicines Guaranteed</a></h3>
              <p>MediMart was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Pharmacy <strong class="text-primary">Products</strong></h2>
          </div>
        </div>
        @if(isset($allMed))
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
            @foreach($allMed->all() as $med)
              <div class="text-center item mb-4 item-v2">
                <a href="shop-single.html"> <img src="{{$med->image}}" alt="Image"></a>
                <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>({{$med->rate}})</small>
                </div>
                <h3 class="text-dark"><a href="shop-single.html">{{$med->name}}</a></h3>
                <p class="price">₹{{$med->price}}</p>
                <a href="{{url('/patMedSingle')}}{{$med->id}}" class="btn btn-md btn-outline-primary" style="color:green;">Add to cart</a>
                <a href="{{url('/patMedSingle')}}{{$med->id}}" class="btn btn-md btn-primary" style="color:white;">Buy Now</a>
              </div>
            @endforeach
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>

   

    <div class="site-section">
      <div class="container">
        
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="title-section">
              <h2>Happy <strong class="text-primary">Customers</strong></h2>
            </div>
            <div class="block-3 products-wrap">
            <div class="owl-single no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;MediMart is the digital pharmacy shop.
                  We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products.&rdquo;</p>
                </blockquote>

                <p class="author">&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;MediMart is the digital pharmacy shop.
                  We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Rebecca Morando</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;MediMart is the digital pharmacy shop.
                  We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;MediMart is the digital pharmacy shop.
                  We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Andrew Neel</p>
              </div>
        
            </div>
          </div>
          </div>
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>MediMart was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>MediMart was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>MediMart was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
              </div>
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
              <li><a href="{{url('/patMedView')}}">Supplements</a></li>
              <li><a href="{{url('/patMedVit')}}">Vitamins</a></li>
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