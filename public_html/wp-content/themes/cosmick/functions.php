<?php
    //Show Menu
    function cosmick_menu () {
        register_nav_menu('cosmick-menu',__( 'Cosmick Menu' ));
    }

    add_action( 'init', 'cosmick_menu' );

?>