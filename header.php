<html>
    <head>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

        <?php wp_head(); ?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="logo">
            <a href="./"><img alt="Logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png"></a>
        </div>
        <header>
            <div class="container menu">
                <nav class="row">
                    <?php wp_nav_menu(
                            array(
                                'menu' => 'menu_left'
                            )); 
                          wp_nav_menu(
                            array(
                                'menu' => 'menu_right'
                            )); 
                    ?>
<!--                     <ul class="col-md-6 list-inline"> -->
<!--                         <li><a href="#" class="current">DECORAÇÃO</a></li> -->
<!--                         <li><a href="#">LOCAÇÃO DE MATERIAIS</a></li> -->
<!--                     </ul> -->
<!--                     <ul class="col-md-6 list-inline text-right"> -->
<!--                         <li><a href="#">SALÃO DE FESTAS</a></li> -->
<!--                         <li><a href="#">BUFFET</a></li> -->
<!--                         <li><a href="#">CONTATO</a></li> -->
<!--                     </ul> -->
                </nav>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">