<!DOCTYPE html>
<html>
<head>
    <title>Account Page | Zikrie's Online Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Maniruzzaman Akash">

    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="css/animate.css" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/logo.png" />
    
</head>
<body>
    <div class="wrapper">
        <!-- Header part  -->
        @include('inc.header')
        <!-- Header part  -->


<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
                <h2>My Account</h2>
                <ul>
                    <li  class="active"><a href="#">Account Control Panel</a></li>
                    <li><a href="#">Personal Information</a></li>
                    <li><a href="/cart">My All Orders</a></li>
                    <li><a href="/cart">My Carts Products</a></li>
                    <li><a href="#">My Reviews and Ratings</a></li>
                    <li><a href="#">Account Newsletter and Other</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <h2>Account Control Panel</h2>
                <strong>Hello Muhammad Zikrie</strong><br />
                <p>From your account control panel, you can access all of your recent activites, orders, save products and you can edit your personal information and other details.</p>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>Contact Information</h3>
                            <p>Name : Muhammad Zikrie</p>
                            <p>Email : muhdzikrie5@gmail.com</p>
                            <p><a href="#">Change Email</a> | <a href="#">Change Password</a></p>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>News Letters</h3>
                            <p>Do you want to get the latest product news and promotion offers then make it on otherwise off it.</p>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>Default Billing Address</h3>
                            <address class="address">
                                <strong>Name:</strong> Muhammad Zikrie <br />
                                <strong>Email:</strong> muhdzikrie5@gmail.com <br />
                                <strong>Contact No:</strong> +6017-3699700<br />
                            </address>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                        <h3>Default Delivery Address Address</h3>
                            <address class="address">
                                <strong>Name:</strong> Muhammad Zikrie <br />
                                <strong>Address:</strong> Klang, Selangor<br />
                                <strong>Contact No:</strong>  +6017-3699700<br />
                            </address>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div> <!--End Row-->

    </div>
</div> <!--End Account page div-->

</div> <!-- End content Area class -->


  <!-- Start Footer top -->
  @include('inc.footer_top')
  <!-- End Footer top -->

  <!--Start Footer bottom -->
      @include('inc.footer_bottom')
  <!--End Footer bottom -->


  <div class="scroll">
      <a href="#top" class="scroll-to-top hidden">
          <i class="fa fa-chevron-up"></i>
      </a>
  </div>
</div> 
<!-- End wrapper -->

<!--Start Scripts -->
@include('inc.script')
<!--End Scripts -->

</body>
</html>