<?php
include "./include/header.php";
?>

<div class="main-container">
    <section>
        <div class="container">
            <div class="masonry">
                <!--end masonry filters-->
                <div class="masonry__container row">
                    <div class="masonry__item col-md-12 col-12" data-masonry-filter="Television">
                        <div class="video-cover border--round">
                            <div class="background-image-holder">
                                <img alt="image" src="img/blog-1.jpg" />
                            </div>
                            <div class="video-play-icon"></div>
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2Freconciliationbible.ch%2Fvideos%2F689501062805274%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                    </div> 
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