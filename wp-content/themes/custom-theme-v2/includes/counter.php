<?php $second_section = get_field('second_section',9);?>
<section class="counter">
    <div class="container">
        <div class="goto">
            <ul class="counter-wrap" id="counter">
                <li class="count-card">
                    <div class="counter">
                        <div>
                            <div>
                                <?php echo $second_section['heading'];?>
                            </div>
                            <span class="text"><?php echo $second_section['sub_heading'];?></span>
                        </div>
                    </div>
                </li>
                <li class="count-card">
                    <div class="counter">
                        <div>
                            <div>
                                <span class="text-white-small"><?php echo $second_section['heading_2'];?> <br> </span>
                            </div>
                            <span class="text title"><?php echo $second_section['sub_heading_2'];?></span>
                        </div>
                    </div>
                </li>
                <li class="count-card">
                    <div class="counter">
                        <div>
                            <div>
                                <span class="text-white-small"><?php echo $second_section['heading_3'];?><br> </span>
                            </div>
                            <span class="text title"><?php echo $second_section['sub_heading_3'];?></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>