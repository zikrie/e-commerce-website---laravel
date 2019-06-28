<!DOCTYPE html>
<html>
<head>
    <title>Registration | Zikrie's Online Shop</title>
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

    <div class="registration-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Create Your Account</h2>
                    <form method="post" class="cmxform" action="" id="signUpForm">

                        <div class="form-group row">
                            <label for="firstname" class="col-sm-2 form-control-label">First Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Muhammad" name="name" minlength="2" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-sm-2 form-control-label">Last Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Zikrie">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 form-control-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control email" id="email" placeholder="test@example.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 form-control-label">Username:</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="form-control" id="username" placeholder="zikrie_97">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 form-control-label">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm_password" class="col-sm-2 form-control-label">Confirm Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Same password previously entered">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-sm-2 form-control-label">BirthDate:</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Enter Birthdate" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <input type="submit" class="btn btn-success btn-lg btn-block" id="submitForm" value="Sign Up Now" />
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!--End Row-->

        </div>
    </div> <!--End Registration page div-->

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