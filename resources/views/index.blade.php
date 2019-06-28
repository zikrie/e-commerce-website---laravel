<!DOCTYPE html>
<html>
<head>
    <!-- Head part  -->
    @include('inc.head')
    <!-- Head part  --> 
</head>
<body>
    <!-- Start wrapper -->
    <div class="wrapper">
                <!-- Header part  -->
                    @include('inc.header')
                <!-- Header part  -->

                <!-- Start content Area class -->
                <div class="content-area">


                       
                            <!-- Start Main slider class -->
                                @include('inc.mainslider')
                            <!-- End Main slider class -->

                            <!--Start Top Products On Offer Div-->
                                @include('inc.top_product_offer')
                            <!--End Top Products On Offer Div-->

                            <!--Start Latest products -->
                                @include('inc.latest_product')
                            <!-- End Latest products -->

                            <!--Start Service -->
                            @include('inc.service_area')
                            <!-- End Service -->
                </div>
                <!-- End content Area class -->

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