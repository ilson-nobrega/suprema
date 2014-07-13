<html>
    <head>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
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
                    <ul class="col-md-6 list-inline">
                        <li><a href="#" class="current">DECORAÇÃO</a></li>
                        <li><a href="#">LOCAÇÃO DE MATERIAIS</a></li>
                    </ul>
                    <ul class="col-md-6 list-inline text-right">
                        <li><a href="#">SALÃO DE FESTAS</a></li>
                        <li><a href="#">BUFFET</a></li>
                        <li><a href="#">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-justify">
                        <p>A empresa Suprema Requinte, possui excelência em serviços de buffet, decoração, locação de materiais, além de um salão de festas com ótima estrutura.<br>
                           Tudo para seu evento ficar ainda mais emocionante.
                        </p>
                        <h2>Seja bem vindo!</h2>
                        <img alt="Seja bem vindo!" src="<?php echo get_stylesheet_directory_uri() ?>/img/apresentacao.jpg">
                    </div>
                    <div class="col-md-7">
                        <img class="img-responsive" alt="Banner" src="<?php echo get_stylesheet_directory_uri() ?>/img/banner.png">
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="redessociais">
                F, T, Y
            </div>
            <div class="copy">
                <p>Copyright <?php echo date('Y'); ?> | Suprema Requinte</p>
            </div>
        </footer>
    </body>
</html>