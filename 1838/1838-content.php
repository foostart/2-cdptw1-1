<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1838">
    <div class="container">
        <div class="tieude">Related Products</div>
        <div class="content-product">
                   <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-5.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                  </form>
                                </div>
                               <h4><a href="#">Artistic Wood Hanger</a></h4>
                                <div class="price-item">
                                    $180.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/2.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="stars">
                                  <form action="">
                                    <input class="star star-10" id="star-10" type="radio" name="star"/>
                                    <label class="star star-10" for="star-10"></label>
                                    <input class="star star-9" id="star-9" type="radio" name="star"/>
                                    <label class="star star-9" for="star-9"></label>
                                    <input class="star star-8" id="star-8" type="radio" name="star"/>
                                    <label class="star star-8" for="star-8"></label>
                                    <input class="star star-7" id="star-7" type="radio" name="star"/>
                                    <label class="star star-7" for="star-7"></label>
                                    <input class="star star-6" id="star-6" type="radio" name="star"/>
                                    <label class="star star-6" for="star-6"></label>
                                  </form>
                                </div>
                               <h4><a href="#">Classic Circular Table</a></h4>
                                <div class="price-item">
                                    $150.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-7.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-11" type="radio" name="star"/>
                                    <label class="star star-5" for="star-11"></label>
                                    <input class="star star-4" id="star-12" type="radio" name="star"/>
                                    <label class="star star-4" for="star-12"></label>
                                    <input class="star star-3" id="star-13" type="radio" name="star"/>
                                    <label class="star star-3" for="star-13"></label>
                                    <input class="star star-2" id="star-14" type="radio" name="star"/>
                                    <label class="star star-2" for="star-14"></label>
                                    <input class="star star-1" id="star-15" type="radio" name="star"/>
                                    <label class="star star-1" for="star-15"></label>
                                  </form>
                                </div>
                               <h4><a href="#">Classic Colorful Chair</a></h4>
                                <div class="price-item">
                                    $190.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-8.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-16" type="radio" name="star"/>
                                    <label class="star star-5" for="star-16"></label>
                                    <input class="star star-4" id="star-17" type="radio" name="star"/>
                                    <label class="star star-4" for="star-17"></label>
                                    <input class="star star-3" id="star-18" type="radio" name="star"/>
                                    <label class="star star-3" for="star-18"></label>
                                    <input class="star star-2" id="star-19" type="radio" name="star"/>
                                    <label class="star star-2" for="star-19"></label>
                                    <input class="star star-1" id="star-20" type="radio" name="star"/>
                                    <label class="star star-1" for="star-20"></label>
                                  </form>
                                </div>
                               <h4><a href="#">Minimalist Corner Desk</a></h4>
                                <div class="price-item">
                                    $250.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>   
                        <div class="swiper-pagination"></div>  
                   </div>
                <div class="text-center">
                        <div class="item-list">
                            <ul class="pagination">
                                <li class="active first"><a href="#">1</a></li>
                                <li><a title="Go to page 2" href="#">2</a></li>
                                <li class="next"><a title="Go to next page" href="#">next ›</a></li>
                                <li class="pager-last last"><a title="Go to last page" href="#">last »</a></li>
                            </ul>
                        </div>
                </div>
                </div>
    </div>   
</div>
