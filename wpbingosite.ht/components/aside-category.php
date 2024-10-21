<aside class="aside">
    <?php $categories = ['Accesories', 'Audio & Video', 'Computer & Laptop', 'Digital Cameras', 'Game & Video', 'Headphone', 'Mobile & Tablet', 'Speakers', 'Televison']  ?>
    <div class="aside-panel aside-category mb30">
        <div class="aside-head">Categories</div>
        <div class="aside-body">
            <ul uk-accordion>
                <?php for($i = 0; $i < count($categories); $i++){  ?>
                <li>
                    <a class="uk-accordion-title" href><?php echo $categories[$i] ?></a>
                    <div class="uk-accordion-content">
                        <ul class="uk-list uk-clearfix">
                            <li><a href="" title="">Car Electronics (0)</a></li>
                            <li><a href="" title="">Garden Tools (0)</a></li>
                            <li><a href="" title="">Office Electronics (0)</a></li>
                            <li><a href="" title="">Watch (0)</a></li>
                        </ul>
                    </div>
                </li>
                <?php }  ?>
            </ul>
        </div>
    </div>

    <div class="aside-panel aside-price mb30">
        <div class="aside-head">Price</div>
        <div class="aside-body">
            <div class="price-range-amount">
                <label for="amount">Range:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </div>
            <div id="slider-range"></div>
        </div>
    </div>


    <div class="aside-panel aside-color mb30">
        <div class="aside-head">Colors</div>
        <div class="aside-body p20">
            <div class="uk-flex uk-flex-middle">
                <span class="color-item" style="background:#52b745">
                    <input type="hidden" name="" value="">
                </span>
                <span class="color-item" style="background:#dd9933">
                    <input type="hidden" name="" value="">
                </span>
                <span class="color-item" style="background:#f45a8d">
                    <input type="hidden" name="" value="">
                </span>
                <span class="color-item" style="background:#dd3333">
                    <input type="hidden" name="" value="">
                </span>
            </div>
        </div>
    </div>

    

    <?php   
        $brands = ['Dell', 'Iphone', 'Nokia', 'Realme', 'Samsung', 'Xiaomi'];
    ?>
    <div class="aside-panel aside-color mb30">
        <div class="aside-head">Brands</div>
        <div class="aside-body p20">
            <?php foreach($brands as $key => $val){  ?>
            <div class="aside-brand-item">
                <div class="uk-flex uk-flex-middle">
                    <input type="radio" name="filter-brand" class="input-radio" value="" id="brand_<?php echo $key; ?>">
                    <label for="brand_<?php echo $key ?>"> <?php echo $val; ?> <span>(5)</span></label>
                </div>
            </div>
            <?php }  ?>
        </div>
    </div>

    <div class="aside-panel aside-rating">
        <div class="aside-head">Rating</div>
        <div class="aside-body p20">
            <?php for($i = 0; $i<=4; $i++){ ?>
            <div class="aside-brand-item">
                <div class="uk-flex uk-flex-middle">
                    <input type="radio" name="filter-rate" class="input-radio" value="" id="rate_<?php echo $key; ?>">
                    <label for="rate_<?php echo $key ?>" class="uk-flex uk-flex-middle"> 
                        <?php require 'components/review.php' ?>
                        <span class="ml10">(5)</span>
                    </label>
                </div>
            </div>
            <?php }  ?>
        </div>
    </div>




</aside>