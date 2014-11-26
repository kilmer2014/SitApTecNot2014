<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2 class="alt">Hi! I'm <strong>Prologue</strong>, a <a href="http://html5up.net/license">free</a> responsive<br />
                    site template designed by <a href="http://html5up.net">HTML5 UP</a>.</h2>
                <p>Ligula scelerisque justo sem accumsan diam quis<br />
                    vitae natoque dictum sollicitudin elementum.</p>
            </header>

            <footer>
                <a href="#portfolio" class="button scrolly">Magna Aliquam</a>
            </footer>

        </div>
    </section>

    <!-- Portfolio -->
     <section id="topm" class="dark" style="background-color: #212528;">
                   <?php
                        foreach ($noticiasPublicas as $key):
                            
                         
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
                            echo "</div>";
                            echo "<line></line>";
                            echo "</article>";
                           
                        endforeach;
                        ?>
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
                    <div class="6u"><input type="text" class="formInput" name="name" placeholder="Name" /></div>
                    <div class="6u"><input type="text"  class="formInput" name="email" placeholder="Email" /></div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="message" class="formInput" placeholder="Message"></textarea>
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
    <!-- Cadastro -->
    <section id="cadastro" class="four">
        <div class="container">

            <header>
                <h2>Cadastro</h2>
            </header>
            <style>
               
            </style>
            <?php echo form_open('usuarios/inserir', 'id="form-usuarios" enctype="multipart/form-data"'); ?>

            <div class="row half">
                <div class="6u"><input type="text" class="formInput" name="nome" placeholder="Nome"/>
                    <div class="error"><?php echo form_error('nome'); ?></div></div>

                <div class="6u"><input type="text" class="formInput" name="sobreNome" placeholder="Sobre nome"/>
                    <div class="error"><?php echo form_error('sobreNome'); ?></div></div>
            </div>
            
             <div class="row half">
                <div class="6u"><input type="text" class="formInput" name="email" placeholder="E-mail"/>
                    <div class="error"><?php echo form_error('email'); ?></div></div>
                 <div class="6u"><input type="date" class="formInput" name="dataNascimento" placeholder="Data de Nascimento"/>
                    <div class="error"><?php echo form_error('dataNascimento'); ?></div></div>
                    
            </div>


            <div class="row half">
                <div class="6u"><input type="text" class="formInput" name="login" placeholder="Usuário"/>
                    <div class="error"><?php echo form_error('login'); ?></div></div>
                    
                <div class="6u"><input type="password" class="formInput" name="senha" placeholder="Senha"/>
                    <div class="error"><?php echo form_error('senha'); ?></div></div>

                
            </div>


            <div class="row half">
                <div class="12u">
                    <input type="file" name="foto" class="formInput" placeholder="Foto"/>
                    <div class="error"><?php echo form_error('foto'); ?></div>
                </div>
            </div>

            <div class="row">
                    <div class="12u">
                        <input type="submit" name="cadastrar" value="Cadastrar"/>
                    </div>
                </div>


            <?php echo form_close(); ?>

            <!-- Lista as Pessoas Cadastradas -->
            <br />
          
           
            <!-- Fim Lista -->



        </div>
    </section>

</div>