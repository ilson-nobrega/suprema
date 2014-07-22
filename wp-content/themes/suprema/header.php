<html>
    <head>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

        <?php wp_head(); ?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class($class); ?>>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        <div class="logo">
            <a href="./"><img alt="Logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png"></a>
        </div>
        <header>
            <div class="container">
                <nav class="row">
                    <?php wp_nav_menu(
                            array(
                                'theme_location'    => 'menu_left',
                            )); 
                          wp_nav_menu(
                            array(
                                'theme_location'    => 'menu_right'
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