<?php
include "./include/header.php";
?>

<div class="main-container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <p class="lead">
                        Watch live changing messages and be blessed by God's word
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