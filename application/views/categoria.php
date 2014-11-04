<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Categorias</title>

        <link href="<?php echo base_url(); ?>Resources/css/signin.css" rel="stylesheet">

        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <script src="<?php echo base_url(); ?>Resources/js/ie-emulation-modes-warning.js"></script>

        <script src="<?php echo base_url(); ?>Resources/js/ie10-viewport-bug-workaround.js"></script>

         <!--  <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/skel.css" /> -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/style-wide.css" />


        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <script src="<?php echo base_url(); ?>Resources/js/ie-emulation-modes-warning.js"></script>

        <script src="<?php echo base_url() ?>Resources/js/ie10-viewport-bug-workaround.js"></script>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            body 
            {
                background-color: #212528 !important;
            }
            h1,h2,h3,h4,h5,h6
            {
                color:white !important;
            }
            .button
            {
                width: 100% !important;
            }
        </style>
        
    </head>

    <body>
        
    <center>
        <div class="container">
              <h2 class="form-signin-heading">Categorias</h2>
              <style>
                  table {border: 23px solid white; border-radius: 10px;}
                  thead {text-align: left;}
              </style>
           <table border="1">
               <thead>
               <tr>
                   <th>ID</th>
                   <th>Nome</th>
                   <th>Descrição</th>
               </tr>
               </thead>
               <?php foreach ($record as $key): ?>
                   <tr>
                       <td><?php echo $key->ID; ?></td>
                       <td><?php echo $key->NomeCategoria; ?></td>
                       <td><?php echo $key->DescCategoria; ?></td>
                       <td><?php echo anchor('categoria/editar/' . $key->ID, 'Editar'); ?>|
                           <?php echo anchor('categoria/deletar/' . $key->ID, 'Deletar'); ?></td>
                   </tr>
               <?php endforeach ?>
           </table>
               <h2 class="form-signin-heading">Cadastrar...</h2>
             
            <form class="form-signin" role="form" method="post" action="create">
                <input type="text" class="form-control" name="NomeCategoria" placeholder="Nome" required autofocus>
                <input type="text" class="form-control" name="DescCategoria" placeholder="Descrição" required>
                <div>
                    <button class="button" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </center>
    
</body>

</html>
