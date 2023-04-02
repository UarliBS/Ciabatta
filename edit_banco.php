<?php
$id = $_POST['id'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$nome = $_POST['nome'];
include "cod/conecta.php";
$uploaddir = '_img/';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);//PEGAR NOME DO ARQUIVO
$extensao = pathinfo($uploadfile,PATHINFO_EXTENSION);


if($extensao=="gif"){
    echo "seu arquivo não pode ser Editado.";
}else{

    move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile);
    $sql = "UPDATE menu SET 
        tipo = '$tipo',
        valor = '$valor',
        nome = '$nome',
	imagem = '$uploadfile'
        WHERE id = '$id'";
    $query = $mysqli->query($sql);
    echo "Seu arquivo foi Editado";


}


?>