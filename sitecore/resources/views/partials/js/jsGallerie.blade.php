<!-- FancyBox -->
<script src="public/assets/Librerias/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="public/assets/Librerias/fancybox/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
<script src="public/assets/Librerias/fancybox/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
<script src="public/assets/Librerias/fancybox/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
<script>
    $(".fancybox-thumb").fancybox({

        openEffect	: 'elastic',
        closeEffect	: 'fade',
        helpers	: {

            title	: {
                type: 'outside'

            },
            thumbs	: {
                width	: 25,
                height	: 25
            }
        }
    });
</script>
<!-- gridLoading -->
<script src="public/assets/Librerias/gridLoading/js/modernizr.custom.js" type="text/javascript"></script>
<script src="public/assets/Librerias/gridLoading/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="public/assets/Librerias/gridLoading/js/imagesloaded.js" type="text/javascript"></script>
<script src="public/assets/Librerias/gridLoading/js/classie.js" type="text/javascript"></script>
<script src="public/assets/Librerias/gridLoading/js/AnimOnScroll.js" type="text/javascript"></script>
<script>
    new AnimOnScroll(document.getElementById('grid'), {
        minDuration: 0.4,
        maxDuration: 0.7,
        viewportFactor: 0.2
    });
</script>