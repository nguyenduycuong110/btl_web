<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'components/head.php' ?>
    </head>
    <body>
        <?php require_once 'components/header.php' ?>
        <div class="panel-blog">
            <div class="uk-container uk-container-1440">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-1-4@l product-catalogue-aside">
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
                        </aside>
                    </div>
                    <div class="uk-width-3-4@l blog-page">
                        <div class="site-content">
                            <div class="list-post">
                                <?php for($i = 0; $i < 3 ; $i++){ ?>
                                    <div class="post-item">
                                        <div class="entry-thumb single-thumb"> 
                                            <a class="post-thumbnail" href="https://wpbingosite.com/wordpress/digic/2018/05/30/traveling-solo-is-awesome/" title="Traveling Solo Is Awesome"> <img loading="lazy" width="1410" height="886" src="https://wpbingosite.com/wordpress/digic/wp-content/uploads/2018/05/1-1.jpg" class="attachment-digic-full-width size-digic-full-width wp-post-image" alt="" decoding="async"> </a><div class="cat-links"><ul class="post-categories"><li><a href="https://wpbingosite.com/wordpress/digic/category/backpack/" rel="category tag">Backpack</a></li><li><a href="https://wpbingosite.com/wordpress/digic/category/fashion/" rel="category tag">Fashion</a></li><li><a href="https://wpbingosite.com/wordpress/digic/category/life-style/" rel="category tag">Life Style</a></li></ul></div></div>
                                        <div class="post-content"><div class="entry-meta-head"><div class="entry-date"> <i class="wpb-icon-calendar"></i> <a href="https://wpbingosite.com/wordpress/digic/2018/05/30/traveling-solo-is-awesome/" rel="bookmark"><time class="entry-date published" datetime="2018-05-30T04:42:28+00:00">April 26, 2021</time><time class="updated" datetime="2021-04-26T08:00:28+00:00">April 26, 2021</time></a></div><div class="entry-author"> <span class="entry-meta-link"><i class="wpb-icon-user"></i><a href="https://wpbingosite.com/wordpress/digic/author/wpbingo/" title="Posts by Wpbingo" rel="author">Wpbingo</a></span></div><div class="comments-link"> <i class="wpb-icon-chat"></i> 5  Comments</div></div><h3 class="entry-title"><a href="https://wpbingosite.com/wordpress/digic/2018/05/30/traveling-solo-is-awesome/">Traveling Solo Is Awesome</a></h3><p class="post-excerpt">sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Aenean commodo ligula eget dolor. Nulla facilisi. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. non, velit. Etiam rhoncus. Nunc interdum lacus sit amet orci....</p> <a class="read-more" href="https://wpbingosite.com/wordpress/digic/2018/05/30/traveling-solo-is-awesome/">Read more</a></div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pagination pagination-1">
                                <div class="uk-flex uk-flex-middle uk-flex-center">
                                    <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                                        <li><a href="" class="pagination-item active">1</a></li>
                                        <li><a href="" class="pagination-item">2</a></li>
                                        <li><a href="" class="pagination-item">3</a></li>
                                        <li><a href="" class="pagination-item">4</a></li>
                                        <li><a href="" class="pagination-item">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once 'components/footer.php' ?>
        <?php require_once 'components/script.php' ?>
    </body>
</html>


