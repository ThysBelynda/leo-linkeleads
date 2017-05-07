<?php if ( isset($_GET['valid']) ) {

    $_GET['valid'] = (int)$_GET['valid'];

    if ($_GET['valid'] >= 0 AND $_GET['valid'] <= 3) {

        if ($_GET['valid'] == 3) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    $('#wrong').show();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#wrong-m').show();
                }
            </script>
            <?php

        } else if ($_GET['valid'] == 2) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    $('#existing').show();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#existing-m').show();
                }

            </script>
            <?php

        } else if ($_GET['valid'] == 1) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    $('.input-lg').css("opacity", "0.3");
                    $('#form label').css("opacity", "0.3");
                    $('#valid').show();
                    $('#leopouce').show();
                    $('#submit').hide();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('.input-lg').css("opacity", "0.3");
                    $('#valid-m').show();
                    $('#submit-m').hide();
                }
            </script>
            <?php

        } else if ($_GET['valid'] == 0) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    //$('#empty-m').hide();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#empty-m').show();
                }
            </script>
            <?php
        } else {

        }
    }
}