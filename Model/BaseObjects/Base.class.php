<?php

abstract class Base
{
    /**
     * Método base de todas as classes persistentes.
     * Este método verifica o tipo do objeto, e salva um novo registro no banco.
     */
   protected function SalvaObjeto($Objeto)
   {
       $QueryMysql = "";
       
       if($Objeto->getClassName() == "Usuario")
       {
            $Login = $Objeto->getLogin();
            $Senha = $Objeto->getSenha();
            $Email = $Objeto->getEmail();
            $Nome = $Objeto->getNome();
            $SobreNome = $Objeto->getSobreNome();
            $Sexo = $Objeto->getSexo();
            $Relacionamento = $Objeto->getRelacionamento();
            $SeAtivo = $Objeto->getSeAtivo();
            
            $QueryMysql = "INSERT INTO Usuario (Login,Senha,Email,Nome,SobreNome,Status,Sexo,Relacionamento,SeAtivo)Values('$Login','$Senha','$Email','$Nome','$SobreNome','',$Sexo,$Relacionamento,$SeAtivo);";
       }
       elseif($Objeto->getClassName() == "Localizacao")
       {
            $UsuarioID = $Objeto->getUsuarioID()->getID();
            $Latitude = $Objeto->getLatitude();
            $Longitude = $Objeto->getLongitude();
            $Data = $Objeto->getData();
            
            $QueryMysql = "INSERT INTO Localizacao(UsuarioID,Latitude,Longitude,Data) Values ($UsuarioID,$Latitude,$Longitude,'$Data')";
       }
       elseif($Objeto->getClassName() == "Publicacao")
       {
            $Titulo = $Objeto->getTitulo();
            $Conteudo = $Objeto->getConteudo();
            $TipoPublicacao = $Objeto->getTipoPublicacao();
            $TipoPrivacidade = $Objeto->getTipoPrivacidade();
            $DataCriacao = $Objeto->DataCriacao();
            $DataUltimaEdicao = $Objeto->DataUltimaEdicao();
            $UsuarioID = $Objeto->getUsuarioID()->getID();
            
            
            $QueryMysql = "INSERT INTO Publicacao (Titulo,Conteudo,TipoPublicacao,TipoPrivacidade,DataCriacao,DataUltimaEdicao,UsuarioID,LocalizacaoID) VALUES ('$Titulo','$Conteudo',$TipoPublicacao,$TipoPrivacidade,'$DataCriacao','$DataUltimaEdicao',$UsuarioID,$LocalizacaoId);";
       }
       elseif($Objeto->getClassName() == "Amigo")
       {
             $UsuarioID = $Objeto->getUsuarioID()->getID();
             $UsuarioAmigoID = $Objeto->getUsuarioAmigoID()->getID();
             
             $QueryMysql = "INSERT INTO Amigo (UsuarioID,UsuarioAmigoID) VALUES ($UsuarioID,$UsuarioAmigoID);";
       }
       elseif($Objeto->getClassName() == "PublicacaoLike")
       {
            $PublicacaoID = $Objeto->getPublicacaoID()->getId();
            $UsuarioID = $Objeto->getUsuarioID()->getId();
            $SePositivo = $Objeto->getSePositivo();
            
            $QueryMysql = "INSERT INTO PublicacaoLike (PublicacaoID,UsuarioID,SePositivo) VALUES ($PublicacaoID,$UsuarioID,$SePositivo);";
       }
       elseif($Objeto->getClassName() == "PublicacaoComentario")
       {
            $PublicacaoID = $Objeto->getPublicacaoID()->getID();
            $UsuarioID = $Objeto->getUsuarioID()->getID();
            $Comentario = $Objeto->getComentario();
            $Data = $Objeto->getData();
            
            $QueryMysql = "INSERT INTO PublicacaoComentario (PublicacaoID,UsuarioID,Comentario,Data) VALUES ($PublicacaoID,$UsuarioID,'$Comentario','$Data');";
       }
       elseif($Objeto->getClassName() == "Categoria")
       {
           $NomeCategoria = $Objeto->getNomeCategoria();
           $DescCategoria = $Objeto->getDescCategoria();
           
           $QueryMysql = "INSERT INTO Categoria (NomeCategoria, DescCategoria) VALUES ('$NomeCategoria' , '$DescCategoria'); ";
       }
       else
       {
           return false;
       }
          
       //TODO: Colocar as informações do config.php aqui
        $mysqlConnection = new MySqlConnection("localhost", "root", "kilmer", "SitApren",1);
        $mysqlConnection->query($QueryMysql);
        $mysqlConnection->close();
        
        return true;
   }
   
   /**
    * 
    * Método base para todas as classes persistentes.
    * Este método deleta um objeto do banco de dados, com base no ID.
    * Este método não deleta os filhos do registro, o método encarregado disto é o DeletaObjetos
    */
   protected function DeletaObjeto($Objeto)
   {
       $QueryMysql = "";
       
       if($Objeto->getClassName() == "Usuario")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM Usuario WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "Localizacao")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM Localizacao WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "Publicacao")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM Publicacao WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "Amigo")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM Amigo WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "PublicacaoLike")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM PublicacaoLike WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "PublicacaoComentario")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM PublicacaoComentario WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "Categoria")
       {
            $ID = $Objeto->getID();
            
            $QueryMysql = "DELETE FROM Categoria WHERE ID = $ID";
       }
       else
       {
           return false;
       }
          
       //TODO: Colocar as informações do config.php aqui
        $mysqlConnection = new MySqlConnection("localhost", "root", "kilmer", "SitApren",1);
        $mysqlConnection->query($QueryMysql);
        $mysqlConnection->close();
        
        return true;
   }
   
   protected function EditaObjeto($Objeto)
   {
       $QueryMysql = "";
       
       if($Objeto->getClassName() == "Usuario")
       {
            $ID = $Objeto->getID();
            $Login = $Objeto->getLogin();
            $Senha = $Objeto->getSenha();
            $Email = $Objeto->getEmail();
            $Nome = $Objeto->getNome();
            $SobreNome = $Objeto->getSobreNome();
            $Sexo = $Objeto->getSexo();
            $Relacionamento = $Objeto->getRelacionamento();
            $SeAtivo = $Objeto->getSeAtivo();
            
            $QueryMysql = "UPDATE Usuario SET Login='$Login', Senha='$Senha', Email='$Email', Nome='$Nome', SobreNome='$SobreNome',Sexo=$Sexo, Relacionamento=$Relacionamento, SeAtivo=$SeAtivo WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "Publicacao")
       {
            $ID = $Objeto->getID();
            $Titulo = $Objeto->getTitulo();
            $Conteudo = $Objeto->getConteudo();
            $TipoPublicacao = $Objeto->getTipoPublicacao();
            $TipoPrivacidade = $Objeto->getTipoPrivacidade();
            $DataCriacao = $Objeto->DataCriacao();
            $DataUltimaEdicao = $Objeto->DataUltimaEdicao();
            
            $QueryMysql = "UPDATE Publicacao SET Titulo='$Titulo', Conteudo='$Conteudo', TipoPublicacao=$TipoPublicacao,TipoPrivacidade=$TipoPrivacidade, DataCriacao='$DataCriacao', DataUltimaEdicao=$DataUltimaEdicao WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "PublicacaoLike")
       {
            $ID = $Objeto->getID();
            $SePositivo = $Objeto->getSePositivo();
            
            $QueryMysql = "UPDATE PublicacaoLike SET SePositivo=$SePositivo WHERE ID = $ID";
       }
       elseif($Objeto->getClassName() == "PublicacaoComentario")
       {
            $Comentario = $Objeto->getComentario();
            $Data = $Objeto->getData();
            
            $QueryMysql = "INSERT INTO PublicacaoComentario (PublicacaoID,UsuarioID,Comentario,Data) VALUES ($PublicacaoID,$UsuarioID,'$Comentario','$Data');";
       }
       elseif($Objeto->getClassName() == "Categoria")
       {
           $NomeCategoria = $Objeto->getNomeCategoria();
           $DescCategoria = $Objeto->getDescCategoria();
           
           $QueryMysql = "INSERT INTO Categoria (NomeCategoria, DescCategoria) VALUES ('$NomeCategoria' , '$DescCategoria'); ";
       }
       else
       {
           return false;
       }
          
       //TODO: Colocar as informações do config.php aqui
        $mysqlConnection = new MySqlConnection("localhost", "root", "mysql", "SitApren",1);
        $mysqlConnection->query($QueryMysql);
        $mysqlConnection->close();
        
        return true;
   }
   
   }

