<?php /** * Template Name: Services Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="plescia-location services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading'];?></h2>
            </div>
        </div>
        <?php $box_list = $first_section['box_list'];?>
        <?php $x=1; foreach ($box_list as $boxlist) {?>
        <?php if ($x%2==0) {?>
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <img src="<?php echo $boxlist['image']; ?>" class="wow fadeInLeft w-100" data-wow-delay="0.2s" alt="">
            </div>
            <div class="col-lg-6">
                <div class="services-content wow fadeInRight" data-wow-delay="0.2s">
                    <h3><?php echo $boxlist['heading']; ?> </h3>
                    <?php $box_list2 = $boxlist['box_list']; ?>
                    <?php foreach ($box_list2 as $boxlist2) {?>
                    <p class="mt-3"><?php echo $boxlist2['content']; ?></p>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php }else{ ?>
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="services-content wow fadeInLeft" data-wow-delay="0.2s">
                    <h3><?php echo $boxlist['heading']; ?> </h3>
                    <?php $box_list2 = $boxlist['box_list'];?>
                    <?php foreach ($box_list2 as $boxlist2) {?>
                    <p class="mt-3"><?php echo $boxlist2['content']; ?></p>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo $boxlist['image']; ?>" class="w-100 wow fadeInRight" data-wow-delay="0.2s" alt="">
            </div>
        </div>

        <?php } $x++; }?>
    </div>
</section>

<?php get_template_part("includes/counter"); ?>

<?php get_template_part("includes/gallery"); ?>
<?php get_footer(); ?>