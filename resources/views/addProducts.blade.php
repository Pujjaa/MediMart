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
                    
                    <li><a href="{{url('/shop')}}">Vitamins</a></li>
                      
                    
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
            <a href="{{url('/loginView')}}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
            </a>
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
            <strong class="text-black">Add products</strong>
          </div>
        </div>
      </div>
    </div>
    
<!-- form section start -->
@if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
@endif 
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Add Products:</h2>
          </div>
          <div class="col-md-12">
          @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $er)
                <li>{{$er}}</li>
                @endforeach
            </ul>
        </div>
        @endif

          <form action="{{url('/addProSub')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label class="form-label" for="form3Example1m">Name</label>
                      <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" />
                </div>
                <div class="form-group row">
                    <label class="form-label" for="form3Example1m">Image</label>
                      <input type="file" name="image" id="form3Example1m" class="form-control" />
                </div>

                <div class="form-group row">
                <label class="form-label" for="form3Example90">Price</label>
                  <input type="number" id="form3Example90" name="price" class="form-control form-control-lg" />  
                </div>
  
                <div class="form-group row">
                  <label class="form-label" for="form3Example8">Category</label>
                    <select data-mdb-select-init name="category">
                      <option value="">Category</option>
                      <option value="Vitamins">Vitamins</option>
                      <option value="Minerals">Minerals</option>
                      <option value="Herbals">Herbals</option>
                      <option value="Proteins">Proteins</option>
                      <option value="Probiotics">Probiotics</option>
                      <option value="Imune">Imune</option>
                    </select>

                  </div>

                  <div class="form-group row">
                <label class="form-label" for="form3Example90">Description</label>
                    <textarea name="description" id="message" cols="30" rows="7" class="form-control"></textarea>  
                </div>
                  

                <div class="form-group">
                  <button  type="reset" class="btn btn-outline-danger">Reset all</button>
                
          <button type="submit" class="btn btn-outline-primary">Submit form</button>
       
          </div>
          
        </div>
      </div>
    </div>

    <!-- form section end -->


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