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
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <!-- section start -->
   
    <div class="site-section">
      <div class="container">
      <form action="{{url('/checkoutDone')}}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                <select id="c_country" name="country" class="form-control">
                  <option value="">Select a country</option>
                  <option value="India">India</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Colombia">Colombia</option>
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="state_country" class="text-black">State <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="state">
                </div>
                <div class="col-md-6">
                  <label for="postal_zip" class="text-black">Postal / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="postal">
                </div>
              </div>
    
              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email_address" name="email">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="phone" placeholder="Phone Number">
                </div>
              </div>
  
              <div class="form-group">
                <label for="c_order_notes" class="text-black">Order Notes</label>
                <textarea name="notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                  placeholder="Write your notes here..."></textarea>
              </div>
    
            </div>
          </div>
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
    
                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code"
                      aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Apply</button>
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                @if(isset($cart))
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      @php 
                        $i=0;
                        $total=0;
                      @endphp
                      @foreach($cart->all() as $crt)
                      <tr>
                        <td>{{$crt->name}}<strong class="mx-2">x</strong> 1</td>
                        <td>{{$crt->price}}</td>
                      </tr>
                      @php
                        $i=$i+1;
                        $price=$crt->price;
                        $total=$total+$price;
                      @endphp
                      @endforeach
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">{{$total}}</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>{{$total}}</strong></td>
                      </tr>
                    </tbody>
                  </table>
                 
                  @endif
                  <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                        aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
    
                    <div class="collapse" id="collapsebank">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                        aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
    
                    <div class="collapse" id="collapsecheque">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="border mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                        aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
    
                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="mid" value="{{$cart[0]->med_id}}">

                  <div class="form-group">
                    @if($i==1)
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Order Placed">
                    @else
                    <input type="submit" class="btn btn-primary btn-lg btn-block disabled" value="Order Placed">
                    <p class="text-danger">You can order only 1 product at a time.</p>
                    @endif
                  </div>
    
                </div>
              </div>
            </div>
     
    
          </div>
        </div>
        </form>
        <!-- </form> -->

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