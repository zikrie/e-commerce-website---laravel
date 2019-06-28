<!DOCTYPE html>
<html>
<head>
    <title>Cart | Zikrie's Online Shop</title>
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

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
</head>
<body>
    <div class="wrapper">
        <!-- Header part  -->
        @include('inc.header')
        <!-- Header part  -->


<div class="content-area">
    <div class="container">
        <div class="cart-page">
            <h2>Cart</h2>
            <form action="/checkout">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50%">Item</th>
                            <th width="10%">Quantity</th>
                            <th width="20%">Unit Price</th>
                            <th width="20%">Total Price</th>
                        </tr>
                    </thead>

                    <tbody>



                        <tr>
                            <td>
                                <img src="images/women/product2.png" width="50" alt="" class="img img-thumbnail pull-left">
                                <span class="pull-left cart-product-option">

                                    <strong>Herstyle Flat Sandals</strong><br />
                                    <form action="/cart#" method="get" accept-charset="utf-8">
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="submit" class="btn btn-red btn-sm" name="" value="Remove Item">
                                    </form>

                                </span>
                                <div class="clearfix"></div>
                            </td>
                            <td><input type="number" min="1" name="product_quantity_p1" value="2" class="form-control product_quantity_p1" /></td>
                            <td>RM 44.00</td>
                            <td><p class="total_ammount_p1">RM 88.00</p></td>
                        </tr>  
                        
                        


                        <tr>
                            <td>
                                <img src="images/women/product1.png" width="50" alt="" class="img img-thumbnail pull-left">
                                <span class="pull-left cart-product-option">

                                    <strong>Herstyle Flat Sandal</strong><br />
                                    <form action="/cart#" method="get" accept-charset="utf-8">
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="submit" class="btn btn-red btn-sm" name="" value="Remove Item">
                                    </form>

                                </span>
                                <div class="clearfix"></div>
                            </td>
                            <td><input type="number" min="1" name="product_quantity_p2" value="4" class="form-control product_quantity_p2" /></td>
                            <td>RM 38.00</td>
                            <td><p class="total_ammount_p2">RM 152.00</p></td>
                        </tr>



                        
                        <tr>
                            <td></td>
                            <td colspan="1"><strong>Total:</strong></td>
                            <td></td>
                            <td>
                                <p><span class="total_product_sum">RM 240.00</span></p>
                            </td>
                            <div class="clearfix"></div>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <a href="/checkout" class="btn btn-yellow btn-lg pull-right margin-bottom-20" > Continue to Check Out </a>
                                <a href="/products" class="btn btn-success btn-lg pull-right margin-right-20">
                                    <i class="fa fa-plus"></i> Add More Products</a>

                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </form>
            </div> <!--End Cart page-->

            
            <script type="text/javascript">
                $(document).ready(function(){

                    var product_price_p1 = 44;
                    var product_price_p2 = 38;
                    var total_product_sum = 0;

                    $('.product_quantity_p1, .product_quantity_p2').bind('keyup mouseup change click keydown focus', (function(){

                        var quantity_p1 = $('.product_quantity_p1').val();
                        var quantity_p2 = $('.product_quantity_p2').val();

                        total_ammount_p1 = quantity_p1 * product_price_p1;
                        total_ammount_p2 = quantity_p2 * product_price_p2;

                        $('.total_product_sum').html("RM "+total_product_sum+".00");
                        $('.total_ammount_p1').html("RM "+total_ammount_p1+".00");
                        $('.total_ammount_p2').html("RM "+total_ammount_p2+".00");
                        total_product_sum = total_ammount_p1 + total_ammount_p2;
                        $('.total_product_sum').html("RM "+total_product_sum+".00");
                    }));
                });

            </script>
        </div> <!-- End Container inside Content Area -->
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
