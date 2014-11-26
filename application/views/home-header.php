<!DOCTYPE HTML>
<!--
        Prologue by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Prologue by HTML5 UP</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>"/>
        -->
<!--[if lte IE 8]><script src="<?php echo base_url('assets/css/ie/html5shiv.js'); ?>"></script><![endif]-->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrolly.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollzer.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/skel.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/skel-layers.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/init.js'); ?>"></script>
        <noscript>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/skel.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style-wide.css'); ?>" />
        </noscript>
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/ie/v9.css'); ?>" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url('assets/css/ie/v8.css'); ?>" /><![endif]-->
    </head>
    <body>
        <script>
            function erroLogin()
            {
        alert('oi');
            }
        </script>
        <style>

            .divTop{width:100%; height: 62px; background-color: #212528; position: fixed; z-index: 0;}

            .txt{float: right; margin-right: 10px; font-weight: bold; margin-top: 10px; width: 115px; border-radius: 0.35em; }

            .btn{float: right; margin-right: 10px; font-weight: bold; margin-top: 10px; width: 75px; 
                 border-radius: 0.35em;
                 color: #fff !important;
                 text-decoration: none;
                 background-color: #8ebebc;
                 border: 0;
                 cursor: pointer;
                 background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url('images/overlay.png');
                 background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url('images/overlay.png');
                 background-image: -o-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url('images/overlay.png');
                 background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url('images/overlay.png');
                 background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url('images/overlay.png');			
                 -moz-transition: background-color 0.35s ease-in-out;
                 -webkit-transition: background-color 0.35s ease-in-out;
                 -o-transition: background-color 0.35s ease-in-out;
                 -ms-transition: background-color 0.35s ease-in-out;
                 transition: background-color 0.35s ease-in-out;}

        </style>

        <div class="divTop">

            <?php
            echo form_open('login');
            echo form_submit('submit', 'Entrar', "class='btn'");
            echo form_password('senha', '', "class='txt' placeholder='Senha'");
            echo form_input('usuario', '', "class='txt' placeholder='Usuário'");
            ?>
            <?php form_close(); ?>



        </div>
        <!-- Header -->
        <div id="header" class="skel-layers-fixed">

            <div class="top">

                <!-- Logo -->
                <div id="logo">
                   
                    <h1 id="title">Olá visitante</h1>
                    <p>Faça login para publicar</p>
                </div>



                <!-- Nav -->
                <nav id="nav">
                    <!--
                    
                            Prologue's nav expects links in one of two formats:
                            
                            1. Hash link (scrolls to a different section within the page)
                            
                               <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                            2. Standard link (sends the user to another page/site)

                               <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
                    
                    -->
                    <ul>
                        <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Início</span></a></li>
                        <li><a href="#topm" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Notícias públicas</span></a></li>
                        <li><a href="#cadastro" id="cadastro-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Cadastro</span></a></li>
                    </ul>
                </nav>

            </div>

            <div class="bottom">

                <!-- Social Icons -->
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>

            </div>

        </div>
