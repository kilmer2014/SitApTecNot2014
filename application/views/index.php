<!DOCTYPE HTML>
<html>
    <head>
        <title>Prologue by HTML5 UP</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/skel.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/style-wide.css" />

<!--[if lte IE 8]><script src="<?php echo base_url(); ?>Resources/css/ie/html5shiv.js"></script><![endif]-->
        <script src="<?php echo base_url(); ?>Resources/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>Resources/js/jquery.scrolly.min.js"></script>
        <script src="<?php echo base_url(); ?>Resources/js/jquery.scrollzer.min.js"></script>
        <script src="<?php echo base_url(); ?>Resources/js/skel.min.js"></script>
        <script src="<?php echo base_url(); ?>Resources/js/skel-layers.min.js"></script>
        <script src="<?php echo base_url(); ?>Resources/js/init.js"></script>
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/ie/v9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/ie/v8.css" /><![endif]-->
    </head>

    <body>
        <!-- Header -->

        <style>

            .divTop{width:100%; height: 62px; background-color: #212528; position: fixed; z-index: 4;}

            .links{float: right; margin-right: 10px; font-weight: bold; margin-top: 10px; }

        </style>

        <div class="divTop">

            <a class="links" href="<?php echo base_url() ?>index.php/login"> | Login</a>

            <a class="links" href="<?php echo base_url() ?>index.php/cadastro">Cadastro</a>

        </div>

        <div id="header" class="skel-layers-fixed" style="margin-top: 62px !important;">

            <div class="top">
                <!-- Logo -->

                <div id="logo">
                    <span class="image avatar48"><img src="<?php echo base_url(); ?>Resources/images/avatar.jpg" alt="" /></span>
                    <h1 id="title">Contêxtil Ltda</h1>
                    <p>Situação de aprendizagem</p>
                </div>

                <nav id="nav">
                    <ul>
                        <?php
                        if (true) //Usuario logado
                        { 
                            
                        } 
                        else 
                        {
                            echo "<li><a href=\"#top\" id=\"top-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-home\">Publicações públicas</span></a></li>";
                            echo "<li><a href=\"#portfolio\" id=\"portfolio-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-th\">Categorias</span></a></li>";
                            echo "<li><a href=\"#about\" id=\"about-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user\">About Me</span></a></li>";
                            echo "<li><a href=\"#contact\" id=\"contact-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-envelope\"></span></a></li>";
                        }
                        ?>
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

        <!-- Main -->
        <div id="main">
            <style>
                .divConteudo{}
                .divFooter{}
                .pDatas{ float:left; font-size: 12px;}
                .button
                {
                    float:right; 
                }
            </style>
            <section id="top" class="one dark cover">
                    <?php
                    if (true) { // Usuario logado
                        foreach ($record as $key):
                            echo "<article class=\"container\">";
                            echo " <header><h1>";
                            echo $key->Titulo;
                            echo "</h1></header>";
                            echo "<div class=\"divConteudo\">";
                            echo"  <p style=\"font-size: 12px; text-align: left;\">";
                            echo $key->Conteudo;
                            echo "</p>";
                            echo"</div>";
                            echo "<div class=\"divFooter\">";
                            echo "<p class=\"pDatas\">Publicado:";
                            echo $key->DataCriacao;
                            echo "&nbsp;</p>";
                            if ($key->DataUltimaEdicao != null) {
                                echo "<p class='pDatas'>Editado: " . $key->DataUltimaEdicao . "</p>";
                            }
                            echo" <input type=\"button\" class=\"button\" value=\"Or not  :(\" />";
                            echo "<input type=\"button\" class=\"button\" value=\"Like  :)\" />";
                            echo "</div>";
                            echo "</article>";
                        endforeach;
                    }
                    else 
                    {
                        echo "<header style=\"background-color: #212528; position:fixed; z-index:0; \">Faça login para visualizar todas as publicações</header>";
                        
                         foreach ($record as $key):
                            if($key->TipoPrivacidade == 1)
                            {
                                echo "<article class=\"container\">";
                                echo " <header><h1>";
                                echo $key->Titulo;
                                echo "</h1></header>";
                                echo "<div class=\"divConteudo\">";
                                echo"  <p style=\"font-size: 12px; text-align: left;\">";
                                echo $key->Conteudo;
                                echo "</p>";
                                echo"</div>";
                                echo "<div class=\"divFooter\">";
                                echo "<p class=\"pDatas\">Publicado:";
                                echo $key->DataCriacao;
                                echo "&nbsp;</p>";
                                if ($key->DataUltimaEdicao != null) {
                                    echo "<p class='pDatas'>Editado: " . $key->DataUltimaEdicao . "</p>";
                                }
                                echo" <input type=\"button\" class=\"button\" value=\"Or not  :(\" />";
                                echo "<input type=\"button\" class=\"button\" value=\"Like  :)\" />";
                                echo "</div>";
                                echo "</article>";
                             }
                        endforeach;
                        
                        
                    }
                    ?>
            </section>

            <section id="contact" class="four">
                <div class="container">
                    <header>
                        <h2>Nova postagem</h2>
                    </header>

                    <form method="post" action="#">
                        <div class="row half">
                            <div class="6u"><input type="text" name="Titulo" placeholder="Título" /></div>
                            <select class="6u">
                                <option>oi</option>
                            </select>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <input type="submit" value="Send Message" />
                            </div>
                        </div>
                    </form>

                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>

        </div>

    </body>
</html>