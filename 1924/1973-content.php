<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div  class='type-1973'>
    <header>
        <!---NAVIGATOR-->
        <div class="m1-navi-boder">
            <div class="m1-navi">
                <div class="m1-navi-logo">
                    <a href="#">Varse</a>
                </div>
                <div class="m1-navi-menus">
                    <ul>
                        <li>
                            <a href="#" class="m1-navi-menus-Activity">Homes</a>
                            <ul class="m1-navi-menus-subMenu">
                                <li><a href="#">Gourmet</a></li>
                                <li><a href="#">Coffee</a></li>
                                <li><a href="#">Sushi</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">About</a>
                            <ul class="m1-navi-menus-subMenu">
                                <li><a href="#">People</a></li>
                                <li><a href="#">Guestbook</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Menu</a>
                            <ul class="m1-navi-menus-subMenu">
                                <li><a href="#">Expressive</a></li>
                                <li><a href="#">Handsome</a></li>
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservation</a></li>
                        <li>
                            <a href="#">Gallery</a>
                            <ul class="m1-navi-menus-subMenu">
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Coffee Shop</a></li>
                                <li><a href="#">Sushi Bar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul class="m1-navi-menus-subMenu">
                                <li><a href="#">Healthy Food</a></li>
                                <li><a href="#">Recipes</a></li>
                                <li><a href="#">Cooking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Features</a>
                            <ul class="m1-navi-menus-subMenu">
                                <li><a href="#">Why Buy?</a></li>
                                <li><a href="#">Theme Options</a></li>
                                <li><a href="#">Coming Soon</a></li>
                                <li>
                                    <a>Blog post</a>
                                    <ul class="m1-navi-menus-subMenu-1">
                                        <li><a href="#">No Sidebar</a></li>
                                        <li><a href="#">Left Sidebar</a></li>
                                        <li><a href="#">Right Sidebar</a></li>
                                        <li><a href="#">Left &amp; Right Sidebar</a></li>
                                        <li><a href="#">Top Widgets</a></li> 
                                    </ul>
                                </li>
                                <li><a href="#">Icons</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Contact</a></li>

                    </ul>
                </div>
                <div class="m1-navi-icon">
                    <div class="m1-navi-icon-cart">
                        <a class="m1-navi-cart-icon" href="#">
                         <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span class="products cart-empty">0</span>
                        </a>
                        <div class="m1-widget_shopping_cart">
                            <ul class="m1-cart_list">
                                <li class="empty">No products in the cart.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m1-navi-icon-search" id="search_icon">
                        <i class="fa fa-search"></i> 
                    </div>
                    <div class="m1-navi-icon-mobile-btn">
                        <i class="fa fa-reorder"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--SLIDE SHOW-->
        <div class="banner">
            <div class="limit-wrapper">
                <div class="extended-column-inner">

                    <div class="title">
                        <p><img src="http://<?php echo $url_path ?>/images/logo.png" alt="img-responsive"></p>

                        <h2>Minimalism is a way of living at the maximum of your potential.</h2>
                       
                    </div>
                 

                </div>
            </div>
        </div>
    </header> 
    <div id="vamtam-overlay-search" class="vamtam-animated vamtam-fadein">
        <button id="vamtam-overlay-search-close"  class="vamtam-animated vamtam-zoomin">
            <span class="fa fa-times" style=""></span>
        </button>
        
    </div>
</div>
