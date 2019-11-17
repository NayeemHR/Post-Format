
<?php 
$prelaunch_price        = get_post_meta(8,'prelaunch_price', true);
$launch_price           = get_post_meta(8,'launch_price', true);
$final_price            = get_post_meta(8,'final_price', true);
$course_url             = get_post_meta(8,'course_url', true);
$btn_text               = get_post_meta(8,'btn_text', true);

?>


    <!--    HERO     -->

    <section id="hero" data-type="background" data-speed="5" >
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                    </div>
                    <div class="col-sm-7 hero-text">
                        <h1><?php bloginfo('name'); ?></h1>
                        <p class="lead"><?php bloginfo('description'); ?></p>
                        <div class="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends Soon!</small></h4>
                                <span><?php echo $prelaunch_price; ?></span>
                            </div>
                            <div class="price">
                                <h4>Launch Price <small>Coming Soon!</small></h4>
                                <span><?php echo $launch_price; ?></span>
                            </div>
                            <div class="price">
                                <h4>Final Price <small>Coming Soon!</small></h4>
                                <span><?php echo $final_price; ?></span>
                            </div>
                        </div>
                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $btn_text; ?></a></p>
                    </div>
                </div>
            </div>
        </article>
    </section>