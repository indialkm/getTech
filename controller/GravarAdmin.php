<?php
include_once "../model/Administrador.php";
include_once "../factory/conexao.php";

$dados = new Administrador;

$dados->setUsuario($_POST["cxUsuario"]);
$dados->setSenha($_POST["cxSenha"]);
$dados->setNome($_POST["cxnome"]);
$dados->setEmail($_POST["cxemail"]);


$usuario = $dados->getUsuario();
$senha = $dados -> getSenha();
$nome = $dados->getNome();
$email = $dados->getEmail();
$categoria = $categoria->getCategoria();


if($dados->getUsuario() != "")
{
       $conn = new Caminho;
       $query = "insert into tbcliente
       (usuario, senha, nome, email)
       values
       (:usuario,:senha,:nome,:email)";
       $cadastrar = $conn->getConn()->prepare($query);
       $cadastrar->bindParam(':usuario',$nome,PDO::PARAM_STR);
       $cadastrar->bindParam(':senha',$email,PDO::PARAM_STR);
       $cadastrar->bindParam(':nome',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':email',$telefone,PDO::PARAM_STR);
       $cadastrar->execute();
       if($cadastrar->rowCount())
       {
            echo "Dados cadastrado com sucesso!"; 
       }
       else{
            echo "Dados não cadastrado";
       }
}
else
{
    "Campos em brancos";
}
