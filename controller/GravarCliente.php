<?php
include_once "../model/Cliente.php";
include_once "../factory/conexao.php";

$dados = new Cliente;

$dados->setUsuario($_POST["cxUsuario"]);
$dados->setSenha($_POST["cxSenha"]);
$dados->setNome($_POST["cxnome"]);
$dados->setEmail($_POST["cxemail"]);
$dados->setTelefone($_POST["cxtelefone"]);
$dados->setInstagram($_POST["cxInstagram"]);
$dados->setFacebook($_POST["cxFacebook"]);

$usuario = $dados->getUsuario();
$senha = $dados -> getSenha();
$nome = $dados->getNome();
$email = $dados->getEmail();
$telefone = $dados->getTelefone();
$instagram = $dados->getInstagram();
$facebook = $dados-> getFacebook();


if($dados->getUsuario() != "")
{
       $conn = new Caminho;
       $query = "insert into tbcliente
       (usuario, senha, nome, email,telefone, instagram, facebook)
       values
       (:usuario,:senha,:nome,:email,:telefone,:instagram,:facebook)";
       $cadastrar = $conn->getConn()->prepare($query);
       $cadastrar->bindParam(':usuario',$nome,PDO::PARAM_STR);
       $cadastrar->bindParam(':senha',$email,PDO::PARAM_STR);
       $cadastrar->bindParam(':nome',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':email',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':telefone',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':instagram',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':facebook',$telefone,PDO::PARAM_STR);
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
