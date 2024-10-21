<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'components/head.php' ?>
    </head>
    <body>
        <?php require_once 'components/header.php' ?>
        <main id="product" class="product">
            <?php require_once 'components/breadcrumb.php' ?>
            <div class="product-container mb20">
                <div class="uk-container uk-container-1440">
                    <div class="uk-grid">
                        <div class="uk-width-1-2@m">
                            <div class="popup-gallery">
                                <?php
                                    $gallery = [
                                        0 => 'https://wpbingosite.com/wordpress/digic/wp-content/uploads/2021/04/feature-1-480x480.jpg',
                                        1 => 'https://wpbingosite.com/wordpress/digic/wp-content/uploads/2021/04/1-480x480.jpg',
                                        2 => 'https://wpbingosite.com/wordpress/digic/wp-content/uploads/2021/04/1-480x480.jpg',
                                        3 => 'https://wpbingosite.com/wordpress/digic/wp-content/uploads/2018/05/Smartphone-X-seri-02-480x480.jpg'
                                    ] 
                                ?>
                                <div class="swiper-container ">
                                    <div class="swiper-wrapper sp mb20">
                                        <?php foreach($gallery as $key => $val){  ?>
                                            <div class="swiper-slide">
                                                <a href="<?php echo $val ?>" class="image img-scaledown">
                                                    <img src="<?php echo $val ?>" alt="">
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-container-thumbs">
                                        <div class="swiper-wrapper">
                                            <?php foreach($gallery as $key => $val){  ?>
                                            <div class="swiper-slide">
                                                <span class="image img-scaledown">
                                                    <img src="<?php echo $val ?>" alt="<?php echo $val ?>">
                                                </span>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="product-detail">
                                <div class="panel-head">
                                    <h1 class="product-title"><span>3mm Lens Portable Quick Charging</span></h1>
                                    <div class="product-brand">
                                        Brand: <span>Samsung</span>
                                    </div>
                                    <div class="price-wrapper">
                                        <?php require_once 'components/price.php' ?>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="sold-by">Sold By: <span>WPBINGO</span></div>
                                    <div class="description">
                                        <ul class="uk-list uk-clearfix">
                                            <li>5.0 inch HD Screen</li>
                                            <li>Android 4.4 KitKat OS</li>
                                            <li>1.4 GHz Quad Core™ Processor</li>
                                            <li>20 MP front Camera</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-foot">
                                    <div class="product-action">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="quantity-wrapper">
                                                <span class="change-quantity minus"><i class='bx bx-minus' ></i></span>
                                                <span class="change-quantity plus"><i class='bx bx-plus'></i></span>
                                                <input type="text" class="uk-text-center input-quantity" value="1">
                                            </div>  
                                            <div class="button-group">
                                                <div class="uk-flex uk-flex-middle">
                                                    <button class="product-button-item" value="" name=""><i class='bx bx-cart-download mr5'></i>Add To Cart</button>
                                                    <button class="product-button-item active" value="" name="">Buy Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="compare-wishlish">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="compare-item wishlish">Add To Wishlist</div>
                                            <div class="compare-item compare">Compare</div>
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="meta-item">
                                            <strong>SKU: </strong> D2300-3-2
                                        </div>
                                        <div class="meta-item">
                                            <strong>Categories: </strong> <a class="category">Accessories</a>, <a class="category">Audio & Video</a>
                                        </div>
                                        <div class="meta-item tag">
                                            <strong>Tags: </strong> <a class="tg">Hot</a>, <a class="tg">Trend</a>
                                        </div>
                                    </div>
                                    <div class="product-social">
                                        <div class="uk-flex uk-flex-middle">
                                            <a href="" class="product-social-item"><i class='bx bxl-facebook-circle'></i></a>
                                            <a href="" class="product-social-item"><i class='bx bxl-twitter'></i></a>
                                            <a href="" class="product-social-item"><i class='bx bxl-tiktok' ></i></a>
                                            <a href="" class="product-social-item"><i class='bx bxl-youtube' ></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-relate">
                <div class="uk-container uk-container-1440">
                    <div class="panel-head">
                        <h2 class="heading-1"><span>Related Products</span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="uk-grid uk-grid-collapse">
                            <?php for($i = 0; $i<=4; $i++){  ?>
                                <div class="uk-width-1-5@s">
                                    <div class="product-item st-2 uk-position-relative">
                                        <div class="badge uk-position-absolite t10 l10 fz14 text-white border-radius-50 uk-display-inline-block">-10%</div>
                                        <div class="thumb uk-position-relative">
                                            <a href="" class="image img-scaledown"><img src="resources/img/special-<?php echo rand(0, 3); ?>.webp" alt=""></a>
                                            <div class="product-overlay">
                                                <?php require 'components/toolbox.php'  ?>
                                            </div>
                                        </div>
                                        <div class="info uk-text-center">
                                            <?php require 'components/review.php'  ?>
                                            <div class="product-name"><a href="" title="">Charger 5v 2a Us Lens</a></div>
                                            <?php require 'components/price.php'  ?>
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once 'components/footer.php' ?>
        <?php require_once 'components/script.php' ?>
    </body>
</html>


