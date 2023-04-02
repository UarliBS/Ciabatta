<?php

function retornaDados(){
include "conecta.php";
$sql = "SELECT * FROM menu";
$query = $mysqli->query($sql);

   
return $query;

}

function dadosEditarProduto($id){
    include "conecta.php";
     $sql = "SELECT * FROM menu WHERE id = '$id'";
     $query = $mysqli->query($sql);
     $dados = $query->fetch_array();
    
     return $dados;
}


?>