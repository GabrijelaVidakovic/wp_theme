<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Starter theme</title>
    <?php wp_head(); ?>
</head>

    <?php
        if( is_front_page() ):
            $starter_classes = array ( 'starter-class', 'my-class' );

        else:
            $starter_classes = array ( 'no-starter-class' );

        endif;
     ?>

<body <?php body_class( $starter_classes ); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary'));

        var_dump(get_custom_header())
    ?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo getu_custom_header()->width; ?>" alt="" />
