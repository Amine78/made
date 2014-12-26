<!-- <div id="linefoot"></div>

<img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid"> -->

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