<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$estado = $_POST["estado"];
$metodoEntrega = $_POST['met_entrega'];
$opcoesSelecionadas = 0;



if(isset($_POST['enviarNome'])) {
    if(empty($nome)) {
        echo "<script>alert('O campo de nome não pode estar vazio.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } elseif (strlen($nome) < 4 || strlen($nome) > 10) {
        echo "<script>alert('O nome deve ter de 4 a 10 caracteres.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } else {
        echo "<script>alert('Ok!.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    }
}

if(isset($_POST['enviarIdade'])) {
    if(empty($idade)) {
        echo "<script>alert('O campo de idade não pode estar vazio.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } elseif (($idade) < 18 || ($idade) > 60) {
        echo "<script>alert('A idade não pode ser menor que 18 ou maior que 60');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } else {
        echo "<script>alert('Ok!.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    }
}


if(isset($_POST['enviarEmail'])) {
    if(empty($email)) {
        echo "<script>alert('O campo de e-mail não pode estar vazio.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('O e-mail inserido não é válido.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } else {
        echo "<script>alert('Ok!.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    }
}



if(isset($_POST['enviarEstado'])){
    if(empty($estado)) {
        echo "<script>alert('Por favor, selecione um estado.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } else{
        echo "<script>alert('Ok!.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    }
}

if(isset($_POST['enviarComida'])) {
    $opcoes = ['peito', 'bife', 'pure', 'arroz', 'feijao'];
    foreach($opcoes as $opcao) {
        if(isset($_POST[$opcao])) {
            $opcoesSelecionadas++;
        }
    }
    if($opcoesSelecionadas >= 3) {
        echo "<script>alert('Ok!.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    } else {
        echo "<script>alert('Selecione ao menos 3 opçoes.');</script>";
        echo "<script>window.location = 'form.php';</script>";
    }
}


if (isset($_POST['met_entrega'])) {
    if ($metodoEntrega == 'Entrega' || $metodoEntrega == 'Retirada') {
        echo "<script>alert('Método de entrega válido: ".$metodoEntrega."');</script>";
        echo "<script>window.location = 'form.php';</script>";
    }
} else {
    echo "<script>alert('Favor selecionar um metodo de entrega');</script>";
    echo "<script>window.location = 'form.php';</script>";
}


?>


