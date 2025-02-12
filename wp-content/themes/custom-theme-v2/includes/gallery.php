<?php $third_section = get_field('third_section',9);?>

<section class="our-gallery">
    <div class="container-fluid p-0">
        <div class="row g-0" data-wow-delay="0.4s">
            <div class="col-lg-4">
                <div class="row g-0 gy-2 gx-3">                    
                    <?php $box_list = $third_section['box_list'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>
                    <div class="col-lg-<?php if ($x==3) {echo 12;}else{echo 6;}?>">
                        <div class="img-box small-img wow zoomIn" data-wow-delay="0.2s">
                            <a href="<?php echo $boxlist['image']; ?>" data-fancybox="media">
                                <img class="w-100" src="<?php echo $boxlist['image']; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php $x++; }?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-box big wow zoomIn mx-3" data-wow-delay="0.2s">
                    <a href="<?php echo $third_section['image'];?>" data-fancybox="media">
                        <img class="w-100 mid-img" src="<?php echo $third_section['image'];?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-0 gy-2 gx-3">                    
                    <?php $box_list = $third_section['box_list_2'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>
                    <div class="col-lg-<?php if ($x==1) {echo 12;}else{echo 6;}?>">
                        <div class="img-box small-img2 wow zoomIn" data-wow-delay="0.2s">
                            <a href="<?php echo $boxlist['image']; ?>" data-fancybox="media">
                                <img class="w-100" src="<?php echo $boxlist['image']; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php $x++; }?>
                </div>
            </div>


        </div>
    </div>
</section>