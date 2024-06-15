<?php
include_once "../model/Produto.php";
include_once "../factory/conexao.php";

$dados = new Produto;

$dados->setNomeDoProduto($_POST["cxnome"]);
$dados->setDescricao($_POST["cxdescricao"]);
$dados->setPreco($_POST["cxpreco"]);
$dados->setQuantidade($_POST["cxquantidade"]);
$dados->setFotos($_POST["cxfotos"]);


$nomeProduto = $dados->getNomeDoProduto();
$descricao = $dados->getDescricao();
$quantidade = $dados->getQuantidade();
$preco = $dados->getPreco();
$fotoproduto = $dados->getFotos();


$categoria = $dados->getCategoria();
$clienteId = $dados->getCliente();



if($dados->getNomeDoProduto() != "")
{
       $conn = new Caminho;
       $query = "insert into tbcliente
       (nomeProduto, descricao, quantidade, preco, fotoProduto, categoria, clienteId)
       values
       (:nomeProduto,:descricao,:quantidade,:preco,:fotoProduto, :categoria, :clienteId)";
       $cadastrar = $conn->getConn()->prepare($query);
       $cadastrar->bindParam(':nomeProduto',$nome,PDO::PARAM_STR);
       $cadastrar->bindParam(':descricao',$email,PDO::PARAM_STR);
       $cadastrar->bindParam(':quantidade',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':preco',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':fotoProduto',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':categoria',$telefone,PDO::PARAM_STR);
       $cadastrar->bindParam(':clienteID',$telefone,PDO::PARAM_STR);
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
