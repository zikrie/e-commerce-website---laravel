<!DOCTYPE html>
<html>
<head>
     <!-- Head part  -->
     @include('inc.head')
     <!-- Head part  -->) 
    
</head>
<body>
    <div class="wrapper">
        <!-- Header part  -->
        @include('inc.header')
        <!-- Header part  -->


<div class="content-area prodcuts">

    <div class="row">
        <div class="container">
           
                    <!-- Start filter -->
                    <div class="col-sm-2 col-md-2 col-lg-2">
                            <div class="sidebar-products-main">
            
                                <div class="sidebar-single">
                                    <div class="sidebar-title">
                                        <a data-toggle="collapse"  class="pointer" aria-expanded="true" data-target="#brandCollapse" aria-controls="#brandCollapse">
                                            <span class="pull-left title-sidebar">Filter By Brand</span>
            
                                            <span class="pull-right"><i class="fa fa-plus"></i></span>
                                            <span class="pull-right"><i class="fa fa-minus"></i></span>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div> <!--End Sidebar title div-->
            
                                    <div id="brandCollapse" class="collapse in">
                                        <form action="products_submit.php" method="get" accept-charset="utf-8">
                                            <input type="search" name="brand_name" class="form-control" value="" placeholder="Type Brand Name" />
            
                                            <input type="checkbox" id="c1" name="prodcut_id[]" />
                                            <label for="c1"><span></span>Shoes</label><br />
            
                                            <input type="checkbox" id="c2" name="prodcut_id[]" />
                                            <label for="c2"><span></span>Clothing</label><br />
            
                                            <input type="checkbox" id="c3" name="prodcut_id[]" />
                                            <label for="c3"><span></span>Accessories</label><br />
            
                                            <input type="checkbox" id="c4" name="prodcut_id[]" />
                                            <label for="c4"><span></span>Bags</label><br />
            
                                            <input type="checkbox" id="c5" name="prodcut_id[]" />
                                            <label for="c5"><span></span>Sports</label><br />
            
                                            <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div> <!--End Single Sidebar-->
            
                                <div class="sidebar-single">
                                    <div class="sidebar-title">
                                        <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#brandPriceCollapse" aria-controls="#brandPriceCollapse">
                                            <span class="pull-left title-sidebar">Filter By Price</span>
            
                                            <span class="pull-right"><i class="fa fa-plus"></i></span>
                                            <span class="pull-right"><i class="fa fa-minus"></i></span>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div> <!--End Sidebar title div-->
            
                                    <div id="brandPriceCollapse" class="collapse in">
            
                                        <form action="products_submit.php" method="get" accept-charset="utf-8">
            
                                            <input type="checkbox" id="price1" name="prodcut_price[]" />
                                            <label for="price1"><span></span>RM0-RM100</label><br />
            
                                            <input type="checkbox" id="price2" name="prodcut_price[]" />
                                            <label for="price2"><span></span>RM100-RM500</label><br />
            
                                            <input type="checkbox" id="price3" name="prodcut_price[]" />
                                            <label for="price3"><span></span>RM500-RM1000</label><br />
            
                                          
            
                                            <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div> <!--End Single Sidebar-->
            
                                <div class="sidebar-single">
                                    <div class="sidebar-title">
                                        <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#productColorCollapse" aria-controls="#productColorCollapse">
                                            <span class="pull-left title-sidebar">Filter By Color</span>
            
                                            <span class="pull-right"><i class="fa fa-plus"></i></span>
                                            <span class="pull-right"><i class="fa fa-minus"></i></span>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div> <!--End Sidebar title div-->
            
                                    <div id="productColorCollapse" class="collapse in">
            
                                        <form action="products_submit.php" method="get" accept-charset="utf-8">
            
                                            <input type="checkbox" id="color0" name="prodcut_color[]" />
                                            <label for="color0" style="color:#9c9"><span></span>White</label><br />
            
                                            <input type="checkbox" id="color1" name="prodcut_color[]" />
                                            <label for="color1" style="color:#f00"><span></span>Red</label><br />
            
                                            <input type="checkbox" id="color2" name="prodcut_color[]" />
                                            <label for="color2" style="color:#00f"><span></span>Blue</label><br />
                                            <input type="name" id="color7" class="form-control" placeholder="Color name" name="prodcut_color[]" /><br />
            
            
                                            <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div> <!--End Single Sidebar-->
            
                                <div class="sidebar-single">
                                    <div class="sidebar-title">
                                        <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#productReviewCollapse" aria-controls="#productReviewCollapse">
                                            <span class="pull-left title-sidebar">Filter By Review</span>
            
                                            <span class="pull-right"><i class="fa fa-plus"></i></span>
                                            <span class="pull-right"><i class="fa fa-minus"></i></span>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div> <!--End Sidebar title div-->
            
                                    <div id="productReviewCollapse" class="collapse in">
            
                                        <form action="products_submit.php" method="get" accept-charset="utf-8">
            
                                            <input type="checkbox" id="review1" name="prodcut_review[]" />
                                            <label for="review1" style="color:#008000"><span></span>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </label><br />
                                            <input type="checkbox" id="review2" name="prodcut_review[]" />
                                            <label for="review2" style="color:#6f6"><span></span>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </label><br />
                                            <input type="checkbox" id="review3" name="prodcut_review[]" />
                                            <label for="review3" style="color:#9c9"><span></span>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </label><br />
                                            <input type="checkbox" id="review4" name="prodcut_review[]" />
                                            <label for="review4" style="color:#f99"><span></span>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </label><br />
                                            <input type="checkbox" id="review5" name="prodcut_review[]" />
                                            <label for="review5" style="color:#fc9"><span></span>
                                                <i class="fa fa-star"></i>
                                            </label><br />
            
            
                                            <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div> <!--End Single Sidebar-->
                                
            
            
                            </div>
                        </div>
            
                    <!-- End filter -->
            
            <div class="col-sm-10 col-md-10 col-lg-10">
                <ol class="breadcrumb breadcrumb1">
                    <li><a href="/index">Home</a></li>
                    <li class="active">Products</li>
                </ol>
                
                <!-- Start SortBy -->
                <div class="product-top">
                        <h4>Kid's Baby</h4>
                        <ul> 
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sort By<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Most Popular</a></li> 
                                    <li><a href="#">New In</a></li> 
                                    <li><a href="#">Lowest price</a></li> 
                                    <li><a href="#">Highest price</a></li>
                                    <li><a href="#">Best Rating</a></li>
                                </ul> 
                            </li>
                        </ul> 
                        <div class="clearfix"> </div>
                    </div>
                <!-- End SortBy -->

                 <!-- Start Latest products -->
                 <div class="all-products">
                        <div class="">
                            <h2 class="title-div wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
                            <div class="products">
                                <div class="row">
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="product-borde-inner">
                                                <a href="women_shoes#">
                                                    <img src="images/women/product68.png" class="img img-responsive"/>
                                                </a> 
                                                <div class="product-price">
                                                    <a href="women_shoes#"> Eunoikids</a><br />
                                                    <span class="prev-price">
                                                        <del>RM 59.00</del>
                                                    </span>
                                                    <span class="current-price">
                                                        RM38.00
                                                    </span>
                                                </div>
                                                <a href="/cart"  class="btn btn-cart text-center add-to-cart pull-right">
                                                    <i class="fa fa-cart-plus"></i>
                                                    Add to cart
                                                </a>
                                                <div class="clear"></div>
                                            </div>
                                        </div> 
                                    </div><!-- End Latest products[single] -->  
                                    
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="product-borde-inner">
                                                <a href="women_shoes#">
                                                    <img src="images/women/product69.png" class="img img-responsive"/>
                                                </a> 
    
                                                <div class="product-price">
                                                    <a href="women_shoes#">Nature colored</a><br />
                                                    <span class="prev-price">
                                                        <del>RM 60.00</del>
                                                    </span>
                                                    <span class="current-price">
                                                        RM 36.50
                                                    </span>
                                                </div>
    
                                                <a href="/cart"  class="btn btn-cart text-center add-to-cart pull-right">
                                                    <i class="fa fa-cart-plus"></i>
                                                    Add to cart
                                                </a>
                                                <div class="clear"></div>
                                            </div>
                                        </div> 
                                    </div><!-- End Latest products[single] -->  
    
    




                                    <div class="col-md-3">
                                            <div class="product-item">
                                                <div class="product-borde-inner">
                                                    <a href="women_shoes#">
                                                        <img src="images/women/product70.png" class="img img-responsive"/>
                                                    </a> 
        
                                                    <div class="product-price">
                                                        <a href="women_shoes#">Bebeganic </a><br />
                                                        <span class="prev-price">
                                                            <del>RM 43.32</del>
                                                        </span>
                                                        <span class="current-price">
                                                                RM 27.50
                                                        </span>
                                                    </div>
        
                                                    <a href="/cart"  class="btn btn-cart text-center add-to-cart pull-right">
                                                        <i class="fa fa-cart-plus"></i>
                                                        Add to cart
                                                    </a>
                                                    <div class="clear"></div>
                                                </div>
                                            </div> 
                                        </div><!-- End Latest products[single] -->  
        
    
    
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="product-borde-inner">
                                                <a href="women_shoes#">
                                                    <img src="images/women/product71.png" class="img img-responsive"/>
                                                </a> 
    
                                                <div class="product-price">
                                                    <a href="women_shoes#"> Baby Bib </a><br />
                                                    <span class="prev-price">
                                                        <del>RM 93.00</del>
                                                    </span>
                                                    <span class="current-price">
                                                        RM 59.00
                                                    </span>
                                                </div>
    
                                                <a href="/cart"  class="btn btn-cart text-center add-to-cart pull-right">
                                                    <i class="fa fa-cart-plus"></i>
                                                    Add to cart
                                                </a>
                                                <div class="clear"></div>
                                            </div>
                                        </div> 
                                    </div><!-- End Latest products[single] -->  
    
    
    
                                
        
    
    
    
                                   
    
     
    
                                                
                                          
                                              
                                  
                                    <div class="clear"></div>
    
    
    
    
    
                                </div> <!-- End Latest products row-->
                                <a href="/all_product" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                                    <span>See More products.. </span>
                                </a>
                                <div class="clear"></div>
                            </div> <!-- End products div-->
                        </div> <!-- End container latest products-->
                    </div> 
                 <!-- End Latest products -->
            </div>
        </div>
    </div>
      
            <!--Start Top Products On Offer Div-->
            @include('inc.top_product_offer')
            <!--End Top Products On Offer Div-->

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