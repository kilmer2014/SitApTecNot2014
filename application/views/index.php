<!DOCTYPE HTML>
<html>
    <head>
        <title>Prologue by HTML5 UP</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link rel="stylesheet" href="<?php echo base_url();?>Resources/css/skel.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>Resources/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>Resources/css/style-wide.css" />

<!--[if lte IE 8]><script src="<?php echo base_url();?>Resources/css/ie/html5shiv.js"></script><![endif]-->
        <script src="<?php echo base_url();?>Resources/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>Resources/js/jquery.scrolly.min.js"></script>
        <script src="<?php echo base_url();?>Resources/js/jquery.scrollzer.min.js"></script>
        <script src="<?php echo base_url();?>Resources/js/skel.min.js"></script>
        <script src="<?php echo base_url();?>Resources/js/skel-layers.min.js"></script>
        <script src="<?php echo base_url();?>Resources/js/init.js"></script>
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url();?>Resources/css/ie/v9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url();?>Resources/css/ie/v8.css" /><![endif]-->
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
                    <span class="image avatar48"><img src="<?php echo base_url();?>Resources/images/avatar.jpg" alt="" /></span>
                    <h1 id="title">Contêxtil Ltda</h1>
                    <p>Situação de aprendizagem</p>
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
                        <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
                        <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Categorias</span></a></li>
                        <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
                        <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
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

            <!-- Intro -->
            <section id="top" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt">Bem vindo ao <strong>BUMP IDEAS</strong>, uma plataforma <a href="http://html5up.net/license">gratuita</a> para o compartilhamento de conhecimento sobre informática.<br />
                        </h2>
                        <p></p>
                    </header>

                    <footer>
                        <a href="#portfolio" class="button scrolly">Colabore</a>
                    </footer>

                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="two">
                <div class="container">

                    <header>
                        <h2>Categorias...</h2>
                    </header>

                </div>

            </section>

            <!-- About Me -->
            <section id="about" class="three">
                <div class="container">

                    <header>
                        <h2>About Me</h2>
                    </header>

                    <a href="#" class="image featured"><img src="<?php echo base_url();?>Resources/images/pic08.jpg" alt="" /></a>

                    <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus 
                        ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae 
                        laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem 
                        parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper 
                        dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec 
                        ornare iaculis.</p>

                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="four">
                <div class="container">

                    <header>
                        <h2>Contact</h2>
                    </header>

                    <p>Elementum sem parturient nulla quam placerat viverra 
                        mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
                        donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
                        orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

                    <form method="post" action="#">
                        <div class="row half">
                            <div class="6u"><input type="text" name="name" placeholder="Name" /></div>
                            <div class="6u"><input type="text" name="email" placeholder="Email" /></div>
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