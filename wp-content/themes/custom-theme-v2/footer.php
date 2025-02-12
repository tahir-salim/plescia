<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<section class="subscribe-newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content">
                    <h4>Subscribe To Our Newsletter</h4>
                    <p><?php echo $options['footer_about'];?></p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="subscription">
                    <form action="#">
                    <?php echo do_shortcode('[email-subscribers-form id="1"]');?>

                    </form>
                </div>
            </div>


        </div>
    </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-lg-3">
                    <a class="f-logo" href="<?php echo site_url();?>"><img src="<?php echo $options['logo'];?>"
                            alt=""></a>
                    <!-- <p class="f-logo-content"> Orci varius nato que penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus.</p> -->
                    <ul class="footer-social-icons">
                        <!-- <li><a href="javascript:;"><i class="fa-brands fa-facebook"></i></a></li> -->
                        <li><a href="<?php echo $options['instagram'];?>" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <!-- <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li> -->
                        <li><a href="<?php echo $options['linkedin'];?>" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-3 ps-5">
                    <h6> Information</h6>
                    <!-- <ul class="f-menu quick-links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about-us.php">About</a>
                        </li>
                        <li>
                            <a href="projects.php">Project</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contact</a>
                        </li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'f-menu quick-links' ) ); ?>

                </div>



                <div class="col-lg-3">
                    <div class="contact-footer">
                        <h6>Business Hours</h6>
                        <ul class="footer-social quick-links">
                            <?php echo $options['timing'];?>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-3">
                    <h6>Contact Info</h6>
                    <div class="contact-icons">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                            <p><?php echo $options['address'];?></p>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-phone"></i>
                            <a
                                href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-12">
                <div class="copyright">
                    <p class="text-white">Copyright @ <script>
                        var CurrentYear = new Date().getFullYear()
                        document.write(CurrentYear)
                        </script><?php echo $options['copyright'];?></p>
                </div>
            </div>

        </div>
    </div>

</footer>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>
<script>
new WOW().init();
</script>
</main>

</body>

</html>