<footer>
    <?php wp_footer(); ?>

    <div class="footer-contact">
        <p><i class="fa fa-phone"></i> (24)3333-3333</p>
        <p><i class="fa fa-envelope"></i> contato@mail.com</p>
    </div>

    <img class="logo-footer" src="<?php bloginfo(template_url); ?>/img/marcos_fonseca.svg" alt="Marcos Fonseca">
    <p class="footer-msg">lorem ipsum dolor sit amet</p>
    <div class="footer-social">
        <ul>
            <a href="#">
                <li><i class="fa fa-facebook"></i></li>
            </a>
            <a href="#">
                <li><i class="fa fa-twitter"></i></li>
            </a>
            <a href="#">
                <li><i class="fa fa-instagram"></i></li>
            </a>
        </ul>
    </div>

</footer>

        <!-- lista de scripts -->
        <script src="<?php bloginfo(template_url); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <?php if(is_front_page()) : ?>
        <script src="<?php bloginfo(template_url); ?>/js/script.js"></script>
        <script src="<?php bloginfo(template_url); ?>/bower_components/OwlCarousel/owl-carousel/owl.carousel.js"></script>
        <script src="<?php bloginfo(template_url); ?>/bower_components/wow/dist/wow.js"></script>
        <script type="text/javascript">

            // $('.home-menu').find('li:first-child').addClass('link-hover');
            $('.home-menu').find('a').append('<span class="span-top">');
            $('.home-menu').find('a').prepend('<span class="span-bottom">');
            $('.home-menu').find('a').on('click',function(){
                $(this).closest('li').addClass('link-hover').siblings().removeClass('link-hover');
            });


            $(document).ready(function() {

                $("#carousel").owlCarousel({
                    navigation : false,
                    slideSpeed : 500,
                    paginationSpeed : 400,
                    singleItem:true,
                    responsive : true,
                    pagination : true,
                    autoPlay : 10000,
                    stopOnHover : true,
                    theme : 'owl-theme'
                    // "singleItem:true" is a shortcut for:
                    // items : 1,
                    // itemsDesktop : false,
                    // itemsDesktopSmall : false,
                    // itemsTablet: false,
                    // itemsMobile : false
                });


                var w = $(window).width();
                if(w < 767) {
                    $('.nav-menu').hide();
                    $('.nav-mobile').on('click', function(){
                        $('.nav-menu').slideToggle();
                    })
                    $('.nav-menu').find('a').on('click', function(){
                        $('.nav-menu').delay(200).slideToggle();
                    })
                }
        });
        </script>
    <?php else : ?>
        <script type="text/javascript">
            $('.fa-long-arrow-left').on('click', function(){
                parent.history.back();
                return false;
            })

            $('.portfolio-menu > ul').find('li:first-child').addClass('link-selected');
            $('.portfolio-menu').find('a').on('click',function(){
                $(this).closest('li').addClass('link-selected').siblings().removeClass('link-selected');
            });

        </script>
    <?php endif; ?>
    </body>
</html>
