<?php /** * Template Name: Contact Template */ ?>
<?php get_header(); ?>

<section class="get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="wow fadeInUp" data-wow-delay="0.2s">Get in touch with us</h3>
                <p class="para wow fadeInUp" data-wow-delay="0.2s">Contact us 24 hours a day, 7 days a week</p>
                <?php echo do_shortcode('[contact-form-7 id="c1b8ee2" title="Contact form 1"]');?>
            </div>
        </div>
    </div>
    </div>
</section>

<?php get_template_part("includes/counter"); ?>
<?php get_template_part("includes/gallery"); ?>
<?php get_footer(); ?>