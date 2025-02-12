<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="about-us-inner">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <img src="<?php echo $first_section['image'];?>" class="abt-img w-100" alt="" />
            </div>
            <div class="col-lg-6 wow fadeInUp wow fadeInUp" data-wow-delay="0.2s">
                <div class="content">
                    <img class="top-img" src="<?php echo $first_section['i_2'];?>" alt="">
                    <h2><?php echo $first_section['h_1'];?></h2>
                    <?php $box_list = $first_section['box_list'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>

                    <p class="para wow fadeInUp wow fadeInUp <?php if ($x==1) {echo 'mt-4';}else{echo '';}?>"
                        data-wow-delay="0.2s"><?php echo $boxlist['content']; ?></p>
                    <?php $x++; }?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="sub-content">
                    <?php $box_list = $first_section['box_list_2'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>

                    <p class="wow fadeInUp wow fadeInUp <?php if ($x!=1) {echo 'mt-3';}else{echo '';}?>"
                        data-wow-delay="0.2s"><?php echo $boxlist['content']; ?></p>
                    <?php $x++; }?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="plescia-construction-inner secpad">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 wow fadeInUp wow fadeInUp" data-wow-delay="0.2s">
                <div class="content">
                    <img class="top-img" src="<?php echo $first_section['i_3'];?>" alt="">
                    <h2><?php echo $first_section['h_2'];?></h2>
                    <p class="para"><?php echo $first_section['c_1'];?></p>
                    <a class="btn btn-primary"
                        href="<?php echo $first_section['b_l'];?>"><?php echo $first_section['b_t'];?></a>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <img src="<?php echo $first_section['i_4'];?>" class="w-100" alt="" />
            </div>
        </div>
    </div>
    </div>
</section>


<?php get_template_part("includes/counter"); ?>

<?php get_template_part("includes/gallery"); ?>
<?php get_footer(); ?>