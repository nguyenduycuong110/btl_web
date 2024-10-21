<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'components/head.php' ?>
    </head>
    <body>
        <?php require_once 'components/header.php' ?>
        <main id="product-catalogue">
            <div class="product-catalogue">
                <?php require_once 'components/breadcrumb.php' ?>
                <div class="product-catalogue-wrapper pt30 pb30">
                    <div class="uk-container uk-container-1440">
                        <div class="product-catalogue-banner mb30">
                            <span class="image img-cover"><img src="https://wpbingosite.com/wordpress/digic/wp-content/uploads/2021/05/Untitled-1.jpg" alt=""></span>
                        </div>
                        <div uk-grid class="uk-grid-medium column-sort">
                            <div class="uk-width-1-4@l product-catalogue-aside">
                                <?php require_once 'components/aside-category.php' ?>
                            </div>
                            <div class="uk-width-3-4@l product-catalogue-content">
                                <div class="product-catalogue-container">
                                    <div class="panel-head">
                                        <h1 class="heading-1 mb20"><span>Accesories</span></h1>
                                        <div class="description">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                       <div uk-grid>
                                            <?php for($i = 0; $i<=23; $i++){  ?>
                                            <div class="uk-width-1-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l ">
                                                <?php require 'components/product-item.php' ?>
                                            </div>
                                            <?php }  ?>
                                       </div>
                                    </div>
                                    <div class="panel-foot">
                                        <?php require_once 'components/pagination/pagination-1.php' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once 'components/footer.php' ?>
        <?php require_once 'components/script.php' ?>
    </body>
</html>


