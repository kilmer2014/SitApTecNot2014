<!-- Main -->
<div id="main">

   
    <section id="cadastro" class="four">
        <div class="container">

            <header>
                <h2>Suas informações...</h2>
            </header>
            <script>
            
            function photoPadrao()
            {
                var foto = document.getElementById('hdn_fotopadrao').value = '1';
                var fotostc = document.getElementById('photo').src = 'assets/images/avatar.jpg';
               
            }
            </script>
            <?php echo form_open('usuarios/atualizar', 'id="form-usuarios" enctype="multipart/form-data"'); ?>
            
            <div class="row half">
                <input type="hidden" id="hdn_fotopadrao" value="0" name="fotoPadrao" />
                <div class="6u"><input type="text" class="formInput" name="nome" placeholder="Nome" value="<?php foreach($dadosPerfil as $key){echo $key->Nome;}?>"/>
                    <div class="error"><?php echo form_error('nome'); ?></div></div>

                <div class="6u"><input type="text" class="formInput" name="sobreNome" placeholder="Sobre nome" value="<?php foreach($dadosPerfil as $key){echo $key->SobreNome;}?>"/>
                    <div class="error"><?php echo form_error('sobreNome'); ?></div></div>
            </div>
            
             <div class="row half">
                <div class="6u"><input type="text" class="formInput" name="email" placeholder="E-mail" value="<?php foreach($dadosPerfil as $key){echo $key->Email;}?>"/>
                    <div class="error"><?php echo form_error('email'); ?></div></div>
                 <div class="6u"><input type="date" class="formInput" name="dataNascimento" placeholder="Data de Nascimento" value="<?php foreach($dadosPerfil as $key){echo substr($key->DataNascimento, 0, -9);}?>"/>
                    <div class="error"><?php echo form_error('dataNascimento'); ?></div></div>
                    
            </div>


            <div class="row half">
                  <div class="12u"><input type="button" class="formInput" name="senha" value="Alterar senha"/>
                 

                
            </div>


            <div class="row half">
                <div class="6u">
                    <?php
                    if ($this->session->userdata('Foto') != "") {
                        echo "<span class=\"image avatar48\"><img id='photo' src=\"assets/fotos/" . $this->session->userdata('Foto') . "\" onclick='photoPadrao()' alt=\"\" /></span>";
                    } else {
                        echo "<span class=\"image avatar48\"><img id='photo' src=\"" . base_url('assets/images/avatar.jpg') . "\" alt=\"\" /></span>";
                    }
                    ?>
                </div>
               
                
            </div>
                
                <div class="row half">
                    
                     <div class="12u">
                    <input type="file" name="foto" class="formInput" placeholder="Foto"/>
                    <div class="error"><?php echo form_error('foto'); ?></div>
                </div>
                </div>

            <div class="row">
                    <div class="12u">
                        <input type="submit" name="editar" value="Salvar"/>
                    </div>
                </div>


            <?php echo form_close(); ?>

            <!-- Lista as Pessoas Cadastradas -->
            <br />
          
           
            <!-- Fim Lista -->



        </div>
    </section>

</div>