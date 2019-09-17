<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1900">
    <div class="header-top">
        <div class="container">
            <!--First top-->
            <div class="row">
                <div class="contact-row">
                    <div class="col-md-6 col-sm-12">
                        <div class="left-contact">
                            <p>
                                <i class="fa fa-phone-square"></i> Call Center Support 24/7: 
                                <span class="span-text">040 3824 668</span> or 
                                <span class="span-text">909 3305 44221</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="top-extra-link">
                            <a href="#"><i class="fa fa-user"></i> My Account</a>
                            <a href="#"><i class="fa fa-heart"></i> Wishlist</a>
                            <a href="#"><i class="fa fa-toggle-on"></i> Compare</a>
                            <a href="#"><i class="fa fa-train"></i> Delivery</a>
                            <a href="#"><i class="fa fa-comment"></i> Help</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <!--Second top-->
            <div class="row">
                <div class="header-second">
                    <div class="col-md-4 col-sm-3">
                        <div class="logo-top">
                            <a class="logo" href="#">
                                <img  src="<?php echo $url_path ?>/images/logo-top.png" class="img-responsive" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="smart-search">
                            <div class="select-category">
                                <button class="btn-collapse" type="button" data-toggle="collapse" data-target="#collap" aria-expanded="false">
                                    <a href="#" class="category-toggle-link">All Categories</a>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button>
                                <ul id="collap" class="list-category-toggle sub-menu-top collapse" style="">
                                    <li class="item"><a class="active clickit" href="#" data-filter="">All Categories</a></li>
                                    <li class="item"><a class="clickit" href="#" data-filter=".accessories">Accessories</a></li>
                                    <li class="item"><a class="clickit" href="#" data-filter=".android">Android</a></li>
                                    <li class="item"><a class="clickit" href="#" data-filter=".bags">Bags</a></li>
                                    <li class="item"><a class="clickit" href="#" data-filter=".basketball">Basketball</a></li>
                                </ul>
                            </div>
                            <form class="smart-search-form" action="#">
                                <input type="text" name="s" placeholder="I am shopping for..." onfocus="">
                                <input type="hidden" name="post_type" value="product">
                                <input class="cat-value" type="hidden" name="product_cat" value="">
                                <div id="show-btn" class="icon-search"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="mini-cart">
                            <button class="icon-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <a href="#" class="header-mini-cart">
                                <span class="total-mini-cart-item">
                                    <span class="cart-item-count set-cart-number">0</span> Item(s) - 
                                </span>
                                <span class="total-mini-cart-price set-cart-price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>0.00</span>
                                </span>
                            </a>
                            <div class="content-mini-cart">
                                <h2>(<span class="cart-item-count set-cart-number">0</span>) ITEMS IN MY CART</h2>
                                <div class="mini-cart-content mini-cart-main-content"></div>                    
                                <div class="total-default hidden"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-top">
        <div class="content">
            <div class="container">
                <div class="row">

                    <div class="right-menu col-sm-2 col-xs-6">
                        <div class="right-category-dropdown">
                            <span class="menu-right" data-toggle="collapse" data-target="#collape">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </span>
                        </div>

                        <ul id="collape" class="list-category-dropdown collapse">
                            <li class="has-cat-mega">
                                <a href="#">Computers
                                    <img width="20" height="16" src="#" class="attachment-full size-full" alt="">
                                </a>
                            </li>
                            <li class="has-cat-mega">
                                <a href="#">Electronis
                                    <img width="20" height="19" src="#" class="attachment-full size-full" alt="">
                                </a>
                            </li>
                            <li class="">
                                <a href="#">Fashion
                                    <img width="20" height="19" src="#" class="attachment-full size-full" alt="">
                                    <img width="20" height="19" src="" class="attachment-full size-full" alt="">
                                </a>

                            </li>
                            <li class="has-cat-mega">
                                <a href="#">Food
                                    <img width="20" height="21" src="#" class="attachment-full size-full" alt="">
                                    <img width="20" height="21" src="" class="attachment-full size-full" alt="">
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="expand-category-link"></a>
                    </div>

                    <!-- menu nav -->
                    <div class="menunav">
                        <span class="menuiconnav" data-toggle="collapse" data-target="#navbar">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="menumobile">
                            <div class="col-md-12 col-sm-12 col-xs-2 mmcontext">
                                <ul class="" id="collap">
                                    <!--Item Home-->
                                    <li>
                                        <div class="title">
                                            <a href="#">HOME <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="context">
                                            <ul>
                                                <li><a href="#"><p>Home 1</p></a></li>
                                                <li><a href="#"><p>Home 2</p></a></li>
                                                <li><a href="#"><p>Home 3</p></a></li>
                                                <li><a href="#"><p>Home 4</p></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--Item Shop-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Shops <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>

                                        <div class="contextshop">
                                            <div class="col-sm-4">
                                                <h2>Shop Pages</h2>
                                                <div class="contextinformation">
                                                    <ul>
                                                        <li><a href="#"><p>Shop</p></a></li>
                                                        <li><a href="#"><p>Shop list</p></a></li>
                                                        <li><a href="#"><p>Shop list full</p></a></li>
                                                        <li><a href="#"><p>Shop grid – Sidebar</p></a></li>
                                                        <li><a href="#"><p>Shop list – Sidebar</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h2>Product Pages</h2>
                                                <div class="contextinformation">
                                                    <ul>
                                                        <li><a href="#"><p>Product Simple</p></a></li>
                                                        <li><a href="#"><p>Product Variable</p></a></li>
                                                        <li><a href="#"><p>Product Grouped</p></a></li>
                                                        <li><a href="#"><p>Product External</p></a></li>
                                                        <li><a href="#"><p>Product Deals</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h2>MORE PAGES...</h2>
                                                <div class="contextinformation">
                                                    <ul>
                                                        <li><a href="#"><p>Cart</p></a></li>
                                                        <li><a href="#"><p>Checkout</p></a></li>
                                                        <li><a href="#"><p>My account</p></a></li>
                                                        <li><a href="#"><p>Wishlist</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Item Blog-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Blog</a>
                                        </div>
                                    </li>
                                    <!--Item MegaMenu-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Mega Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="contextmega">
                                            <div class="col-sm-4">
                                                <div class="megaone">
                                                    <h2>Categories</h2>
                                                    <div class="megacategory">
                                                        <ul>
                                                            <li><a href="#"><p>Shop</p></a></li>
                                                            <li><a href="#"><p>Shop list</p></a></li>
                                                            <li><a href="#"><p>Shop list full</p></a></li>
                                                            <li><a href="#"><p>Shop grid – Sidebar</p></a></li>
                                                            <li><a href="#"><p>Shop list – Sidebar</p></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="megaone">
                                                    <h2>Deal Of The Day</h2>
                                                    <a href="#" class="image">
                                                        <img src="<?php echo $url_path ?>/images/banner-header.jpg" alt="null">
                                                    </a>
                                                    <h4>Travel shop</h4>
                                                    <h4 class="upto">Upto</h4>
                                                    <h3 class="sale">70% off</h3>
                                                    <a class="shop-button" href="#">shop now</a>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="megaone">
                                                    <h2>Top Sellers</h2>
                                                    <div class="megacategory">
                                                        <ul>
                                                            <li><a href="#"><p>Shop</p></a></li>
                                                            <li><a href="#"><p>Shop list</p></a></li>
                                                            <li><a href="#"><p>Shop list full</p></a></li>
                                                            <li><a href="#"><p>Shop grid – Sidebar</p></a></li>
                                                            <li><a href="#"><p>Shop list – Sidebar</p></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Item About-->
                                    <li>
                                        <div class="title">
                                            <a href="#">About</a>
                                        </div>
                                    </li>
                                    <!--Item Contact-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Contact</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="activemenumobile"></div>
                    </div>

                    <div class="buttonclosemenu">
                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                    </div>
                    <a href="#" class="toggle-mobile-menu"><span>Menu</span></a>

                </div>
            </div>
        </div>
    </div>
</div>