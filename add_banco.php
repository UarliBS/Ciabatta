<?php
include "cod/conecta.php";
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$nome = $_POST['nome'];
$uploaddir = '_img/';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);//PEGAR NOME DO ARQUIVO
$extensao = pathinfo($uploadfile,PATHINFO_EXTENSION);


if($extensao=="gif"){
    echo "seu arquivo não pode ser adicionado.";
}else{

    move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile);
    $sql = "INSERT INTO menu (tipo, valor, nome, imagem) VALUES ('$tipo','$valor','$nome','$uploadfile')";
    $query = $mysqli->query($sql);
    echo "Seu arquivo foi adicionado";

}

?>