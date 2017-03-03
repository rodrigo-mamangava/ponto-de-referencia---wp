<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_custom_footer() {
    ?>
    <footer>

        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-3">
                    <ul class="social">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/social/twitter.png"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/social/facebook.png"></a></li>                    
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <ul class="links-menu">
                        <li><a href="#implementar-1">Quero implementar</a></li>
                        <li><a href="#navegar">Quero Navegar</a></li>
                        <li><a href="#conhecer">Quero Conhecer</a></li>
                    </ul>


                </div>

            </div>


        </div>

    </footer>

    <?php
}

add_shortcode('footer', 'get_custom_footer');

function get_custom_footer_interno() {
    ?>
    <footer>

        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-3">
                    <ul class="social">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/social/twitter.png"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/social/facebook.png"></a></li>                    
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <ul class="links-menu">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>">Voltar para o site</a>
                        </li>
                    </ul>


                </div>

            </div>


        </div>

    </footer>

    <?php
}

add_shortcode('footer_interno', 'get_custom_footer_interno');

function get_capa() {
    ?>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="capa">
                    <img src="<?php echo get_template_directory_uri() ?>/image/capa.png">                                        
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="capa-titulo">
                        <h1>MRA, Movimento Rio Atende.</h1>
                        <p>Qual a verdadeira medalha que o Brasil deve ganhar nas Olimpíadas?</p>
                    </div><!-- .capa-titulo -->
                </div>
            </div>
        </div>
    </div>


    <?php
}

add_shortcode('capa', 'get_capa');

function get_header_transparente() {
    ?>
    <header>

        <nav class="navbar navbar-default menu-home">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img alt="Ponto de Referência" src="<?php echo get_template_directory_uri() ?>/image/ponto-de-referencia-logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#implementar-1">Quero implementar</a></li>
                        <li><a href="#navegar">Quero Navegar</a></li>
                        <li><a href="#conhecer">Quero Conhecer</a></li>
                        <li><a id="btn-buscar" href="#"><img src='<?php echo get_template_directory_uri() ?>/image/search.png'></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->

            <?php get_search_form_pr(); ?>

        </nav>

    </header>



    <?php
}

add_shortcode('menu_home', 'get_header_transparente');

function get_header_transparente_int() {
    ?>
    <header>

        <nav class="navbar navbar-default menu-interno">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img alt="Ponto de Referência" src="<?php echo get_template_directory_uri() ?>/image/ponto-de-referencia-logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Voltar para o site</a></li>
<!--                        <li><a href="#implementar-1">Inscrever-se</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



    </header>
    <?php
}

add_shortcode('menu_interno', 'get_header_transparente_int');

function get_header_branco() {
    ?>
    <header class="branco">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Ponto de Referência" src="<?php echo get_template_directory_uri() ?>/image/ponto-de-referencia-logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#implementar-1">Quero implementar</a></li>
                        <li><a href="#navegar">Quero Navegar</a></li>
                        <li><a href="#conhecer">Quero Conhecer</a></li>
                        <li><a href="#"><img src='<?php echo get_template_directory_uri() ?>/image/search.png'></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



    </header>
    <?php
}

add_shortcode('header_branco', 'get_header_branco');



