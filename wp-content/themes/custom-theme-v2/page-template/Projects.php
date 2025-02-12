<?php /** * Template Name: Projects Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>

<section class="projects-construction-inner">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <?php $box_list = $first_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <div class="box-<?php if ($x==1) {echo '1 showfirst port-content';}else{echo $x;}?>">
                    <div class="row gx-5">
                        <div class="col-lg-6 ps-0">
                            <img src="<?php echo $boxlist['image']; ?>" class="w-100" alt="" />
                        </div>

                        <div class="col-lg-6 pe-0">
                            <div class="content">
                                <h2><?php echo $boxlist['heading']; ?></h2>
                                <p class="para1"><?php echo $boxlist['content']; ?></p>
                                <ul class="prj-images">

                                    <?php $box_list2 = $boxlist['box_list'];?>
                                    <?php foreach ($box_list2 as $boxlist) {?>
                                    <li>
                                        <a href="<?php echo $boxlist['image']; ?>" data-fancybox="gallery"><img
                                                src="<?php echo $boxlist['image']; ?>" alt=""></a>
                                    </li>
                                    <?php }?>
                                </ul>
                                <!-- <a class="btn btn-primary" href="contact-us.php">Contact Us</a> -->
                            </div>
                        </div>

                    </div>
                </div>
                <?php $x++; }?>
            </div>
            <div class="col-lg-12">
                <ul class="plescia-projects">
                    <?php $box_list = $first_section['box_list_2'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>
                    <li data-targetit="box-<?php echo $x;?>"
                        class="<?php if ($x!=2 && $x!=3) {echo 'active';}else{echo '';}?>">
                        <div class="img-rel">
                            <a href="#">
                                <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                                <h2 class="projects-title"><?php echo $boxlist['heading']; ?></h2>

                            </a>
                            <div class="txt">
                                <p><?php echo $boxlist['content']; ?></p>
                            </div>
                        </div>
                    </li>
                    <?php $x++; }?>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_template_part("includes/counter"); ?>

<?php get_template_part("includes/gallery"); ?>
<?php get_footer(); ?>