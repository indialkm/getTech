<?php
include_once "../model/Administrador.php";
include_once "../factory/conexao.php";

try {
     if (
          isset($_POST["cxUsuario"], $_POST["cxSenha"], $_POST["cxNome"], $_POST["cxEmail"])
     ) {

          $dados = new Administrador;

          $dados->setUsuario($_POST["cxUsuario"]);
          $dados->setSenha($_POST["cxSenha"]);
          $dados->setNome($_POST["cxNome"]);
          $dados->setEmail($_POST["cxEmail"]);


          $usuario = $dados->getUsuario();
          $senha = $dados->getSenha();
          $nome = $dados->getNome();
          $email = $dados->getEmail();

          if ($dados->getUsuario() != "") {
               $conn = new Caminho;
               $query = "insert into tb_administrador
       (usuario, senha, nome, email)
       values
       (:usuario,:senha,:nome,:email)";
               $cadastrar = $conn->getConn()->prepare($query);
               $cadastrar->bindParam(':usuario', $usuario, PDO::PARAM_STR);
               $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
               $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
               $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
               $cadastrar->execute();
               if ($cadastrar->rowCount()) {
                    echo "Dados cadastrado com sucesso!";
               } else {
                    echo "Dados não cadastrado";
               }
          } else {
               "Campos em brancos";
          }
     }
} catch (Exception $e) {
     echo "deu erro";
     echo "Erro: " . $e->getMessage();
}
