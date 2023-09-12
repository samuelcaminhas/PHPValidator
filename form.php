<html>
<head>
    <meta charset="utf-8" />
    <title>POST</title>
</head>

<body>

    <p>Nome:</p>
    <form action="teste.php" method="post">
        <input name="nome" type="text" placeholder="Seu nome..." />
        <input name="enviar" type="submit" value="Enviar" />
    </form>
    <p>Idade:</p>
    <form action="teste.php" method="post">
        <input name="idade" type="number" placeholder="Sua idade" />
        <input name="enviar" type="submit" value="Enviar" />
    </form>
    <p>Email:</p>
    <form action="teste.php" method="post">
        <input name="Email" type="email" placeholder="seu@email.com" />
        <input name="enviar" type="submit" value="Enviar" />
    </form>
    <p>Estado:</p>
    <form action="teste.php" method="post">
        <label for="estado">Selecione um estado:</label>
        <select id="estado" name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <p>O que você gostaria de comer hoje?</p>
    <form action="teste.php" method="post">
        <input type="checkbox" id="comida1" name="peito" value="peito">
        <label for="comida1"> Peito de frango</label><br>
        <input type="checkbox" id="comida2" name="bife" value="bife">
        <label for="comida2"> Bife de Alcatra</label><br>
        <input type="checkbox" id="comida3" name="pure" value="pure">
        <label for="comida3"> Pure de batata</label>
    </form>

    <p>Defina a forma de entrega</p>
    
    <form>
    <input type="radio" id="Entrega" name="met_entrega" value="Entrega">
    <label for="Entrega">Entrega</label><br>
    <input type="radio" id="Retirada" name="met_entrega" value="Retirada">
    <label for="Retirada">Retirada</label><br>  
    </form>
</body>
</html>

