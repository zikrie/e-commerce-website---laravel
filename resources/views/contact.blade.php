<!DOCTYPE html>
<html>
<head>
    <title>Frequently Asked Question | Zikrie's Online Shop</title>
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

            @include('messages')


            <h1>Contact Us</h1>
            {!! Form::open(['url' => 'faq/submit']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
                </div>
            
                <div class="form-group">
                    {{Form::label('email', 'Email Address')}}
                    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
                </div>
            
                <div class="form-group">
                    {{Form::label('message', 'Message')}}
                    {{Form::text('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
                </div>
            
                <div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                </div>
            
            {!! Form::close() !!}

            </br> </br> </br> </br>
                
           <h1><div style = "font-weight:bold; text-align:center">  Customer Service Hotline </div><h1> </br>


             <h5> <div align ="center">  <p>Contact Numbers:	+6017 - 3699700</p> <br>
              <p>  Operation Hours:	Monday - Friday: 09:00am - 06:00pm</p> <br>
                                  <p>  (excluding Public Holidays)</p></div></h5>
           
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