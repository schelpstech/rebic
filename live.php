<?php
include "./include/header.php";
?>

<div class="main-container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <p class="lead">
                        Stack works with leading brands and nonprofits to deliver bold and affecting video advertising campaigns. See recently completed works below.
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="masonry">
                <div class="masonry-filter-container row align-items-center">
                    <span>Category:</span>
                    <div class="masonry-filter-holder">
                        <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                    </div>
                </div>
                <!--end masonry filters-->
                <div class="masonry__container row">
                    <?php
                    if (!empty($sermon_list)) {
                        foreach ($sermon_list as $data) {
                    ?>
                            <div class="masonry__item col-md-4 col-12" data-masonry-filter="Television">
                                <div class="video-cover border--round">
                                    <div class="background-image-holder">
                                        <img alt="image" src="./asset/img/app/watch.jpg" />
                                    </div>
                                    <div class="video-play-icon"></div>
                                    <?php echo ucwords($data['link']) ?>
                                </div>
                                <!--end video cover-->
                                <span class="h4 inline-block"><?php echo ucwords($data['title'])  ?></span><br>
                                <strong><span><?php echo ucwords($data['preacher'])  ?></span></strong><br>
                                <span><?php echo ucwords($data['sermon_date'])  ?></span>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>
                <!--end masonry container-->
            </div>
            <!--end masonry-->
        </div>
        <!--end of container-->
    </section>
    <?php
    include "./include/giving.php";
    ?>
    <?php
    include "./include/footer.php";
    ?>