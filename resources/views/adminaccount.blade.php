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
                <li><a href="{{url('/adminHome')}}">Home</a></li>
                <li><a href="{{url('/')}}">Company</a></li>
                <li class="has-children">
                  <a>Products</a>
                  <ul class="dropdown">
                    <li><a class="bg-dark text-light" href="{{url('/adminSup')}}" >Supplements</a></li>
                    
                    <li><a href="{{url('/adminSupVit')}}">Vitamins</a></li>
                      
                    
                    <li><a href="{{url('/shop')}}">Minerals</a></li>
                    <li><a href="{{url('/shop')}}">Herbal</a></li>
                    <li><a href="{{url('/shop')}}">Protein and Fitness</a></li>
                    <li><a href="{{url('/shop')}}">Probiotics and Digestive</a></li>
                    <li><a href="{{url('/shop')}}">Imune System</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Message</a></li>
                <li><a href="{{url('/userInfo')}}">User Details</a></li>

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
                <a class="dropdown-item" href="{{url('adminAccount')}}">My account</a>
                <a class="dropdown-item" href="#">Log out</a>
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
            <a href="{{url('/home')}}">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Accounts</strong>
          </div>
        </div>
      </div>
    </div>
    @if(isset($adminInfo))
    <!-- account info -->
    <div class="jumbotron">
        <h1 class="display-4">{{$adminInfo->name}}</h1>
        <hr class="my-4">
        <p class="lead">Email: {{$adminInfo->email}}</p>
        <p>Phone: {{$adminInfo->phone}}</p>
        <p>Gender: {{$adminInfo->gender}}</p>
        <p>Address: {{$adminInfo->address}}</p>
        <a class="btn btn-primary btn-lg" href="{{url('adminEdit')}}" role="button">Edit Profile</a>
    </div>
    @endif
     <!-- end account info -->


<!-- section -->
      <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href="{{url('/userInfo')}}"><h4>Users</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Orders</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Companies</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Medicines</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Messages</h4></a></button>
                </div>
            </div><div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Edit</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Change Password</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Delete Account</h4></a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <a href=""><h4>Logout</h4></a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

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