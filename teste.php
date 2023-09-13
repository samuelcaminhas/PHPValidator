<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$estado = $_POST["estado"];
$peito = $_POST["peito"];
$bife = $_POST["bife"];
$pure = $_POST["pure"];
$met_entrega = $_POST["met_entrega"];
$erro  = 0;



if(isset($_POST['enviar'])) {
    if(empty($nome)) {
        echo "<script>alert('O campo de nome não pode estar vazio.');</script>";
    } elseif (strlen($nome) < 4 || strlen($nome) > 10) {
        echo "<script>alert('O nome deve ter de 4 a 10 caracteres.');</script>";
    } else {
        echo "Ok!";
    }
}

?>
