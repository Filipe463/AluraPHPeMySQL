<?php
      require "src/conexao-bd.php";
      require "src/Modelo/Produto.php";
      require "src/Modelo/Repositorio/ProdutoRepositorio.php";
      
      $ProdutoRepositorio = new ProdutoRepositorio($pdo);
      $ProdutoRepositorio->deletar($_POST['id']);

      
      header("Location: admin.php");

?>