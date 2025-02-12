<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>
<div class="mainBanner" style="background-image: url(<?php echo $banner_section['image'];?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-content">
                    <h1 class=" wow fadeInUp" data-wow-delay="0.2s"><?php echo $banner_section['heading'];?></h1>
                    <p class="para wow fadeInUp" data-wow-delay="0.4s"><?php echo $banner_section['content'];?></p>
                    <a class="btn btn-primary wow fadeInUp" data-wow-delay="0.2s"
                        href="<?php echo $banner_section['button_link'];?>"><?php echo $banner_section['button_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="about-us secpad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="index-slider-abt">
                    <?php $box_list = $first_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div>
                        <img src="<?php echo $boxlist['image']; ?>" class="w-100" alt="" />
                    </div>
                    <?php }?>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp wow fadeInUp" data-wow-delay="0.2s">
                <div class="content">
                    <img class="top-img" src="<?php echo $first_section['i_1'];?>" alt="">
                    <h2><?php echo $first_section['h_1'];?></h2>
                    <p class="para mt-4"><?php echo $first_section['c_1'];?></p>

                    <div class="sub-content">
                        <p class="para"><?php echo $first_section['c_2'];?></p>
                        <p class="para"><?php echo $first_section['c_3'];?></p>

                        <a href="<?php echo $first_section['b_l'];?>"
                            class="btn btn-primary"><?php echo $first_section['b_t'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>



<section class="projects secpad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $box_list = $first_section['box_list_2'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <div class="box-<?php if ($x==1) {echo '1 showfirst port-content';}else{echo $x;}?>">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="sec3-image1">
                                <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                                <div class="overlay-txt">
                                    <p><?php echo $boxlist['content']; ?></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-7 mt-md-5">

                            <div class="content">
                                <!-- <h2 class="text-white text-uppercase"> Projects </h2> -->
                                <h4 class="text-white"><?php echo $boxlist['heading']; ?> </h4>
                                <p class="para text-white"><?php echo $boxlist['content']; ?></p>
                                <a href="<?php echo $boxlist['button_link']; ?>"
                                    class="btn btn-primary"><?php echo $boxlist['button_text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $x++; }?>
            </div>
            <div class="col-lg-9 offset-lg-5 marg">
                <ul class="projects-the-plescia">
                    <?php $box_list = $first_section['box_list_3'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>
                    <li data-targetit="box-<?php echo $x;?>"
                        class="<?php if ($x!=2 && $x!=3) {echo 'active';}else{echo '';}?>">
                        <div class="slide">
                            <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                            <h2 class="projects-title"><?php echo $boxlist['heading']; ?></h2>
                        </div>
                    </li>
                    <?php $x++; }?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="construction-solutions secpad pb-0">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="top-sec">
                    <h2><?php echo $first_section['h_2'];?></h2>
                    <p class="para"><?php echo $first_section['c_4'];?> </p>
                    <a href="<?php echo $first_section['b_l_2'];?>"
                        class="btn btn-primary"><?php echo $first_section['b_t_2'];?></a>
                    <img class="top-sec-img w-100" src="<?php echo $first_section['i_2'];?>" alt="" />
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <img class="construction-solutions-img" src="<?php echo $first_section['i_3'];?>" alt="" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <img class="top-sec-img w-100" src="<?php echo $first_section['i_4'];?>" alt="" />
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="botton-content">
                    <h3 class="construction-solutions"><?php echo $first_section['h_3'];?></h3>
                    <p class="para"><?php echo $first_section['c_5'];?> </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/counter"); ?>

<?php get_template_part("includes/gallery"); ?>
<?php get_footer(); ?>