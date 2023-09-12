<?php
if(isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    if(empty($nome)) {
        echo "<script>alert('O campo de nome não pode estar vazio.');</script>";
    } elseif (strlen($nome) < 4 || strlen($nome) > 10) {
        echo "<script>alert('O nome deve ter de 4 a 10 caracteres.');</script>";
    } else {
        // O nome é válido, você pode prosseguir com o processamento.
    }
}
?>
