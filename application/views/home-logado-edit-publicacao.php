<!-- Main -->
<div id="main">

    <!-- Intro -->
   
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Editando a publicação</h2>
            </header>

            <p>Faça suas alterações!</p>

            <form method="post" action="<?php echo base_url()."publicacao/atualizar";?>">
                <div class="row half">
                    <input type="hidden" value="<?php foreach($record as $key){echo substr($key->DataCriacao, 0, -9);}?>" name="dataCriacao" />
                    <input type="hidden" value="<?php foreach($record as $key){echo $key->ID;}?>" name="ID" />
                    <div class="6u"><input type="text" class="formInput" name="titulo" placeholder="Titulo" value="<?php foreach($record as $key){echo $key->Titulo;}?>" /></div>
                    <div class="6u">  <select class="6u" name="categoria">
                            <?php
                             $categoriaId = 0;
                                 foreach($record as $key){ $categoriaId = $key->CategoriaID;}
                                 
                            foreach ($categorias as $key):
                               
                                if ($categoriaId == $key->ID) {
                                     echo $key->NomeCategoria;
                                echo"<option value='" . $key->ID . "' selected>" . $key->NomeCategoria . "</option>";
                                }
                                else
                                {
                                echo $key->NomeCategoria;
                                echo"<option value='" . $key->ID . "'>" . $key->NomeCategoria . "</option>";
                                }
                            endforeach;
                            ?>
                        </select></div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="conteudo" class="formInput" placeholder="Conteúdo"><?php foreach($record as $key){echo $key->Conteudo;}?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="6u">
                        <input type="submit" value="Editar" />
                    </div>
                    <div class="6u">
                        <select name="TipoPrivacidade">
                            
                            <?php 
                           // foreach($record as $key):
                                if($record[0]->TipoPrivacidade == 0)
                                {
                                    echo "<option selected value='0'>Público</option>";
                                    echo "<option value='1'>Apenas usuários</option>";
                                }
                                else
                                {
                                    echo "<option value='0'>Público</option>";
                                    echo "<option selected value='1'>Apenas usuários</option>";
                                }
                                
                          //  endforeach;
?>
                            
                           
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