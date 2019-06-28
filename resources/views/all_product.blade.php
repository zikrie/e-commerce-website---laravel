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
                        <h4>All Products</h4>
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
                                                    <img src="images/women/product1.png" class="img img-responsive"/>
                                                </a> 
                                                <div class="product-price">
                                                    <a href="women_shoes#">Herstyle Flat</a><br />
                                                    <span class="prev-price">
                                                        <del>RM60.00</del>
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
                                                    <img src="images/women/product2.png" class="img img-responsive"/>
                                                </a> 
    
                                                <div class="product-price">
                                                    <a href="women_shoes#">Austen Slingback</a><br />
                                                    <span class="prev-price">
                                                        <del>RM 60.00</del>
                                                    </span>
                                                    <span class="current-price">
                                                        RM44.00
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
                                                        <img src="images/women/product3.png" class="img img-responsive"/>
                                                    </a> 
        
                                                    <div class="product-price">
                                                        <a href="women_shoes#">Kenzo Midi Heels </a><br />
                                                        <span class="prev-price">
                                                            <del>RM50.00</del>
                                                        </span>
                                                        <span class="current-price">
                                                                RM19.90
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
                                                    <img src="images/women/product4.png" class="img img-responsive"/>
                                                </a> 
    
                                                <div class="product-price">
                                                    <a href="women_shoes#">Felora Pointed Heels </a><br />
                                                    <span class="prev-price">
                                                        <del>RM70.00</del>
                                                    </span>
                                                    <span class="current-price">
                                                        RM48.00
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
                                                        <img src="images/women/product5.png" class="img img-responsive"/>
                                                    </a> 
        
                                                    <div class="product-price">
                                                        <a href="women_shoes#">Marten Ankle Boots</a><br /><br />
                                                        <span class="prev-price">
                                                            <del>RM56.00</del>
                                                        </span>
                                                        <span class="current-price">
                                                            RM33.00
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
                                                            <img src="images/women/product6.png" class="img img-responsive"/>
                                                        </a> 
            
                                                        <div class="product-price">
                                                            <a href="women_shoes#">Boyfriend Ankle Boots</a><br />
                                                            <span class="prev-price">
                                                                <del>RM69.00</del>
                                                            </span>
                                                            <span class="current-price">
                                                                RM46.00
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
                                                        <img src="images/women/product7.png" class="img img-responsive"/>
                                                    </a> 
        
                                                    <div class="product-price">
                                                        <a href="women_shoes#">Mairana Pop Look Heels </a><br />
                                                        <span class="prev-price">
                                                            <del>RM55.00</del>
                                                        </span>
                                                        <span class="current-price">
                                                            RM32.00
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
                                                            <img src="images/women/product8.png" class="img img-responsive"/>
                                                        </a> 
            
                                                        <div class="product-price">
                                                            <a href="women_shoes#">Mairana Pop Look Heels</a><br />
                                                            <span class="prev-price">
                                                                <del>RM55.00</del>
                                                            </span>
                                                            <span class="current-price">
                                                                RM32.00
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
                                                            <img src="images/women/product9.png" class="img img-responsive"/>
                                                        </a> 
                                                        <div class="product-price">
                                                            <a href="women_shoes#">Fran Mini Dress</a><br />
                                                            <span class="prev-price">
                                                                <del>RM 905.00</del>
                                                            </span>
                                                            <span class="current-price">
                                                                RM 174.00
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
                                                            <img src="images/women/product10.png" class="img img-responsive"/>
                                                        </a> 
            
                                                        <div class="product-price">
                                                            <a href="women_shoes#">V- Neck Cami Dress</a><br />
                                                            <span class="prev-price">
                                                                <del>RM 200.00</del>
                                                            </span>
                                                            <span class="current-price">
                                                                RM 105.00
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
                                                                <img src="images/women/product11.png" class="img img-responsive"/>
                                                            </a> 
                
                                                            <div class="product-price">
                                                                <a href="women_shoes#">Cotton On </a><br />
                                                                <span class="prev-price">
                                                                    <del>RM 104.00</del>
                                                                </span>
                                                                <span class="current-price">
                                                                        RM 56.90
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
                                                            <img src="images/women/product12.png" class="img img-responsive"/>
                                                        </a> 
            
                                                        <div class="product-price">
                                                            <a href="women_shoes#">Trimmed Overlap </a><br />
                                                            <span class="prev-price">
                                                                <del>RM 105.00</del>
                                                            </span>
                                                            <span class="current-price">
                                                                RM 57.90
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
                                                                <img src="images/women/product13.png" class="img img-responsive"/>
                                                            </a> 
                
                                                            <div class="product-price">
                                                                <a href="women_shoes#">Abercrombie & Fitch</a><br />
                                                                <span class="prev-price">
                                                                    <del>RM 491.00</del>
                                                                </span>
                                                                <span class="current-price">
                                                                    RM 317.90
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
                                                                    <img src="images/women/product14.png" class="img img-responsive"/>
                                                                </a> 
                    
                                                                <div class="product-price">
                                                                    <a href="women_shoes#">Harper Ankie Jeans</a><br />
                                                                    <span class="prev-price">
                                                                        <del>RM 491.00</del>
                                                                    </span>
                                                                    <span class="current-price">
                                                                        RM 317.00
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
                                                                <img src="images/women/product15.png" class="img img-responsive"/>
                                                            </a> 
                
                                                            <div class="product-price">
                                                                <a href="women_shoes#">Amelie Skinny Jeans</a><br />
                                                                <span class="prev-price">
                                                                    <del>RM 269.00</del>
                                                                </span>
                                                                <span class="current-price">
                                                                    RM 186.00
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
                                                                    <img src="images/women/product16.png" class="img img-responsive"/>
                                                                </a> 
                    
                                                                <div class="product-price">
                                                                    <a href="women_shoes#">Waist Tie PaperBag</a><br />
                                                                    <span class="prev-price">
                                                                        <del>RM 259.00</del>
                                                                    </span>
                                                                    <span class="current-price">
                                                                        RM 119.00
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
                                                                    <img src="images/women/product33.png" class="img img-responsive"/>
                                                                </a> 
                                                                <div class="product-price">
                                                                    <a href="women_shoes#">SK-II</a><br />
                                                                    <span class="prev-price">
                                                                        <del>RM 360.00</del>
                                                                    </span>
                                                                    <span class="current-price">
                                                                        RM 255.00
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
                                                                    <img src="images/women/product34.png" class="img img-responsive"/>
                                                                </a> 
                    
                                                                <div class="product-price">
                                                                    <a href="women_shoes#">LMK Cosmetics</a><br />
                                                                    <span class="prev-price">
                                                                        <del>RM 99.00</del>
                                                                    </span>
                                                                    <span class="current-price">
                                                                        RM 75.00
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
                                                                        <img src="images/women/product35.png" class="img img-responsive"/>
                                                                    </a> 
                        
                                                                    <div class="product-price">
                                                                        <a href="women_shoes#">Elizabeth Arden</a><br />
                                                                        <span class="prev-price">
                                                                            <del>RM 100.00</del>
                                                                        </span>
                                                                        <span class="current-price">
                                                                                RM 85.90
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
                                                                        <img src="images/women/product25.png" class="img img-responsive"/>
                                                                    </a> 
                                                                    <div class="product-price">
                                                                        <a href="women_shoes#">Guess</a><br />
                                                                        <span class="prev-price">
                                                                            <del>RM 259.00</del>
                                                                        </span>
                                                                        <span class="current-price">
                                                                            RM 180.90
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
                                                                        <img src="images/women/product26.png" class="img img-responsive"/>
                                                                    </a> 
                        
                                                                    <div class="product-price">
                                                                        <a href="women_shoes#">Rip Curl</a><br />
                                                                        <span class="prev-price">
                                                                            <del>RM 139.00</del>
                                                                        </span>
                                                                        <span class="current-price">
                                                                            RM 90.00
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
                                                                            <img src="images/women/product27.png" class="img img-responsive"/>
                                                                        </a> 
                            
                                                                        <div class="product-price">
                                                                            <a href="women_shoes#">Calvin Klein</a><br />
                                                                            <span class="prev-price">
                                                                                <del>RM 399.00</del>
                                                                            </span>
                                                                            <span class="current-price">
                                                                                    RM 318.90
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
                                                                        <img src="images/women/product28.png" class="img img-responsive"/>
                                                                    </a> 
                        
                                                                    <div class="product-price">
                                                                        <a href="women_shoes#">Fiorelli</a><br />
                                                                        <span class="prev-price">
                                                                            <del>RM 179.00</del>
                                                                        </span>
                                                                        <span class="current-price">
                                                                            RM 142.90
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
                                                                            <img src="images/women/product29.png" class="img img-responsive"/>
                                                                        </a> 
                            
                                                                        <div class="product-price">
                                                                            <a href="women_shoes#">Typo</a><br />
                                                                            <span class="prev-price">
                                                                                <del>RM 219.00</del>
                                                                            </span>
                                                                            <span class="current-price">
                                                                                RM 141.90
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
                                                                                <img src="images/women/product30.png" class="img img-responsive"/>
                                                                            </a> 
                                
                                                                            <div class="product-price">
                                                                                <a href="women_shoes#">Cath Kidston</a><br />
                                                                                <span class="prev-price">
                                                                                    <del>RM 299.00</del>
                                                                                </span>
                                                                                <span class="current-price">
                                                                                    RM 199.00
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
                                                                            <img src="images/women/product31.png" class="img img-responsive"/>
                                                                        </a> 
                            
                                                                        <div class="product-price">
                                                                            <a href="women_shoes#"> Under Armour </a><br />
                                                                            <span class="prev-price">
                                                                                <del>RM 299.00</del>
                                                                            </span>
                                                                            <span class="current-price">
                                                                                RM 238.00
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
                                                                                <img src="images/women/product32.png" class="img img-responsive"/>
                                                                            </a> 
                                
                                                                            <div class="product-price">
                                                                                <a href="women_shoes#"> Reebok</a><br />
                                                                                <span class="prev-price">
                                                                                    <del>RM 150.00</del>
                                                                                </span>
                                                                                <span class="current-price">
                                                                                    RM 127.90
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
                                                                                <img src="images/women/product47.png" class="img img-responsive"/>
                                                                            </a> 
                                                                            <div class="product-price">
                                                                                <a href="women_shoes#">Casio</a><br />
                                                                                <span class="prev-price">
                                                                                    <del>RM 2 218.00</del>
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
                                                                                <img src="images/women/product48.png" class="img img-responsive"/>
                                                                            </a> 
                                
                                                                            <div class="product-price">
                                                                                <a href="women_shoes#">SO&CO</a><br />
                                                                                <span class="prev-price">
                                                                                    <del>RM 609.00</del>
                                                                                </span>
                                                                                <span class="current-price">
                                                                                    RM 215.00
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
                                                                                    <img src="images/women/product49.png" class="img img-responsive"/>
                                                                                </a> 
                                    
                                                                                <div class="product-price">
                                                                                    <a href="women_shoes#">Volkswagen</a><br />
                                                                                    <span class="prev-price">
                                                                                        <del>RM 282.00</del>
                                                                                    </span>
                                                                                    <span class="current-price">
                                                                                            RM168.90
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
                                                                                <img src="images/women/product50.png" class="img img-responsive"/>
                                                                            </a> 
                                
                                                                            <div class="product-price">
                                                                                <a href="women_shoes#"> Swiss Polo </a><br />
                                                                                <span class="prev-price">
                                                                                    <del>RM 119.00</del>
                                                                                </span>
                                                                                <span class="current-price">
                                                                                    RM 60.00
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
                                                                                    <img src="images/women/product51.png" class="img img-responsive"/>
                                                                                </a> 
                                    
                                                                                <div class="product-price">
                                                                                    <a href="women_shoes#">Oakley</a><br />
                                                                                    <span class="prev-price">
                                                                                        <del>RM 919.00</del>
                                                                                    </span>
                                                                                    <span class="current-price">
                                                                                        RM 690.00
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
                                                                                        <img src="images/women/product52.png" class="img img-responsive"/>
                                                                                    </a> 
                                        
                                                                                    <div class="product-price">
                                                                                        <a href="women_shoes#"> Ray-Ban</a><br />
                                                                                        <span class="prev-price">
                                                                                            <del>RM 679.00</del>
                                                                                        </span>
                                                                                        <span class="current-price">
                                                                                            RM 549.00
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
                                <a href="/products" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
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