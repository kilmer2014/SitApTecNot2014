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
                   
                  
                   if(count($record) == 0)
                   {
                       echo "<p> Você ainda não tem publicações, clique <a href='#publicar'>aqui</a> para publicar.</p>";
                   }
                   
                        foreach ($record as $key):
                            
                            
                            
                            
                            if($this->session->userdata('ID') == $key->UsuarioID)
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
                            echo" <a href='publicacao/editar/".$key->ID."'>Editar | <a/>";
                            echo" <a href='publicacao/excluir/".$key->ID."'>Excluir<a/>";
                            echo "</div>";
                            echo "<line></line>";
                            echo "</article>";
                            }
                            else
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
                            echo "<input type=\"button\" class=\"button\" value=\"Like  :)\" />";
                             echo" <input type=\"button\" class=\"button\" value=\"Or not  :(\" />";
                            echo "</div>";
                            echo "<line></line>";
                            echo "</article>";
                            }
                        endforeach;
                        ?>
            </section>
    
    <!-- Contact -->
    
    <section id="publicar" class="four">
        <div class="container">

            <header>
                <h2>Nova publicação</h2>
            </header>

            <p>Escreva abaixo sua publicação, compartilhe seu conhecimento!</p>

            <form method="post" action="publicacao/nova">
                 <input type="hidden" name="id" value="<?php echo $this->session->userdata('ID'); ?>" />
                <div class="row half">
                    <div class="6u"><input type="text" class="formInput" name="titulo" placeholder="Titulo" /></div>
                    <div class="6u">  <select class="6u" name="categoria">
                            <?php
                            foreach ($categorias as $key):
                                echo $key->NomeCategoria;
                                echo"<option value='" . $key->ID . "'>" . $key->NomeCategoria . "</option>";
                            endforeach;
                            ?>
                        </select></div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="conteudo" class="formInput" placeholder="Conteúdo"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="6u">
                        <input type="submit" value="Publicar" />
                    </div>
                    <div class="6u">
                        <select name="TipoPrivacidade">
                            <option selected value="0">Público</option>
                            <option value="1">Apenas usuários</option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- Cadastro -->
   


            <!-- Fim Lista -->



        </div>
    </section>

</div>