
    <h1 id="titlefoot">Retrouvez nous sur : </h1>

    <a href="https://www.facebook.com/Institut.Internet.Multimedia?fref=ts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="logo" id="margleft" class="logorsfoot"/></a>

    <a href="https://twitter.com/iimparis"  classtarget="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="logo" class="logorsfoot"/></a>

    

    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-iim.png" alt="logo" id="logoiimfoot"/>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
<script>
    $(document).ready(function () {
        $('html, body, *').mousewheel(function (e, delta) {
            this.scrollLeft -= (delta * 40);
            e.preventDefault();
        });
    });
    $(document).ready(function () {
        $("[rel='tooltip']").tooltip();

        $('.caption').hover(
            function () {
                $(this).find('.caption').slideDown(250); //.fadeIn(250)
            },
            function () {
                $(this).find('.caption').slideUp(250); //.fadeOut(205)
            }
        );
    });
</script>
    
  </body>
</html>