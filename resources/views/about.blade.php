<!DOCTYPE html>
<html>
<head>
    <title>About Us | Zikrie's Online Shop</title>
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
    <div class="container">

          
            <h1>About Us</h1>
           

            <div id="about-us" class="clear">
                   
                    <section id="about-intro" class="clear">
                           <div class="three_fifth first"><img class="imgholder" src="images/slider/slider5.jpg" alt=""></div>
                      <div class="two_fifth">
                        <h2>Zikrie's Online Shopping Website</h2>
                        <p>Zikrie's Online Shopping Website founded in 2010 by a group of aspiring entrepreneurs having a single mindset to bring quality products in a convenient way to the locals via our platform. 

                                As of today, ezbuy has more than 3 million customers from Singapore, Malaysia, Indonesia and Thailand. We have also brought millions of quality products from China, USA, Taiwan, Korea and Local for our customers. 
                                
                                We strive towards service excellence while keeping our focus on local demands so as to develop new services that better suit our customers. That is why we have our ezbuy/Prime service and expanded our marketplace from China to USA, Taiwan, Korea and Local.
                                
                                More than an international shopping platform, We are engineers of Easy. Always in tune with what customers need, Creating simple yet complete solutions From sourcing to shipping. </p>
                    
                      </div>
                    </section>
            </div>
    </div>


</div> <!-- End content Area class -->

    <!--Start Service -->
    @include('inc.service_area')
     <!-- End Service -->


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