<!DOCTYPE html>

<html>
    <head>
        <?php include('partials/doctype.php'); ?>
    </head>
    <body>
        <main class="wrapper">
            <header>
                <?php 
                    $args = array(
                        'container'       => 'false',
                        'echo'            => false,
                        'items_wrap'      => '<nav>%3$s</nav>',
                        'depth'           => 0,
                    );

                    echo strip_tags( wp_nav_menu( $args ), '<nav><a>' );
                ?>
            </header>