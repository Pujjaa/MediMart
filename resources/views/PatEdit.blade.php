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
                <a class="dropdown-item" href="{{url('/patAccount')}}">My account</a>
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
            <a href="{{url('/patHome')}}">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Accounts</strong>
          </div>
        </div>
      </div>
    </div>
    @if(isset($info))
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">User Account:</h2>
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

          <form action="{{url('/patEditSub')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label class="form-label" for="form3Example1m">Name</label>
                      <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" value="{{$info->name}}"/>
                </div>

                <div class="form-group row">
                    <label class="form-label" for="form3Example97">Email ID</label>
                    <input type="email" name="email" id="form3Example97" class="form-control form-control-lg" value="{{$info->email}}"/>
                    
                  </div>

                  <div class="form-group row">
                  <label class="form-label" for="form3Example97">Phone</label>
                    <input type="number" name="phone" id="form3Example97" class="form-control form-control-lg" value="{{$info->phone}}"/>
                  </div>

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                    <h6 class="mb-0 me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="femaleGender">Female</label>
                      <input class="form-check-input" type="radio" name="gender" value="Female" id="femaleGender" @if($info->gender=='Female') checked @endif/>
                    </div>
                    <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="maleGender">Male</label>
                      <input class="form-check-input" type="radio" name="gender" value="Male" id="maleGender"@if($info->gender=='Male') checked @endif/>
                    </div>
                  </div>

                <div class="form-group row">
                <label class="form-label" for="form3Example8">Address</label>
                  <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" value="{{$info->address}}"/>
                  
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example8">State</label>
                    <select data-mdb-select-init name="state">
                      <option value="" @if($info->state=='') selected @endif >State</option>
                      <option value="West Bengal" @if($info->state=='West Bengal') selected @endif >West Bengal</option>
                      <option value="Bihar" @if($info->state=='Bihar') selected @endif >Bihar</option>
                      <option value="Jharkhand" @if($info->state=='Jharkhand') selected @endif >Jharkhand</option>
                      <option value="Karnataka" @if($info->state=='Karnataka') selected @endif >Karnataka</option>
                      <option value="Uttar Pradesh" @if($info->state=='Uttar Pradesh') selected @endif >Uttar Pradesh</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example8">City</label>
                    <select data-mdb-select-init name="city">
                      <option value="" @if($info->city=='') selected @endif >City</option>
                      <option value="Kolkata" @if($info->city=='Kolkata') selected @endif>Kolkata</option>
                      <option value="Howrah" @if($info->city=='Howrah') selected @endif>Howrah</option>
                      <option value="Durgapur" @if($info->city=='Durgapur') selected @endif >Durgapur</option>
                      <option value="Purulia" @if($info->city=='Purulia') selected @endif >Purulia</option>
                    </select>

                  </div>
                </div>

                <div class="form-group row">
                <label class="form-label" for="form3Example90" >Pincode</label>
                  <input type="number" id="form3Example90" name="pincode" class="form-control form-control-lg" value="{{$info->pincode}}"/>
                  
                </div>

                <div class="form-group">
                  <button  type="reset" class="btn btn-outline-danger">Reset all</button>
                
          <button type="submit" class="btn btn-outline-primary">Submit form</button>
       
          </div>
          
        </div>
      </div>
    </div>
    @endif

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