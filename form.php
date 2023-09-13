<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulários</title>
  <style>
      body {
          font-family: Arial, sans-serif;
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
          display: flex;
          justify-content: space-between;
      }

      .column-left {
          flex: 1;
          margin-right: 20px; /* Aumentei para 20px */
      }

      .column-right {
          flex: 1;
          margin-left: 20px; /* Aumentei para 20px */
      }

      p {
          margin-bottom: 5px;
      }

      input, select {
          width: 100%;
          padding: 8px;
          margin-bottom: 10px;
          box-sizing: border-box;
      }

      label {
          margin-bottom: 5px;
          display: block;
      }

      input[type="submit"] {
          background-color: #4CAF50;
          color: white;
          padding: 10px 20px;
          border: none;
          cursor: pointer;
      }

      input[type="submit"]:hover {
          background-color: #45a049;
      }
  </style>
</head>

<body>
<div class="column-left">
  <p>Nome:</p>
  <form action="teste.php" method="post">
    <input name="nome" type="text" placeholder="Seu nome..." />
    <input name="enviarNome" type="submit" value="Enviar" />
  </form>

  <p>Email:</p>
  <form action="teste.php" method="post">
    <input name="email" type="email" placeholder="seu@email.com" />
    <input name="enviarEmail" type="submit" value="Enviar" />
  </form>

  <p>Idade:</p>
  <form action="teste.php" method="post">
    <input name="idade" type="number" placeholder="Sua idade" />
    <input name="enviarIdade" type="submit" value="Enviar" />
  </form>

  <p>Estado:</p>
  <form action="teste.php" method="post">
    <label for="estado">Selecione um estado civil:</label>
    <select id="estado" name="estado">
      <option value="S">Solteiro</option>
      <option value="M">Casado</option>
    </select>
    <input name="enviarEstado"type="submit" value="Enviar">
  </form>
</div>

<div class="column-right">
  <p>O que você gostaria de comer hoje?</p>
  <form action="teste.php" method="post">
    <input type="checkbox" id="comida1" name="peito" value="peito">
    <label for="comida1"> Peito de frango</label><br>
    <input type="checkbox" id="comida2" name="bife" value="bife">
    <label for="comida2"> Bife de Alcatra</label><br>
    <input type="checkbox" id="comida3" name="pure" value="pure">
    <label for="comida3"> Pure de batata</label>
    <input type="checkbox" id="comida4" name="arroz" value="arroz">
    <label for="comida4"> Bife de Alcatra</label><br>
    <input type="checkbox" id="comida5" name="feijao" value="feijao">
    <label for="comida5"> Pure de batata</label>
    <input name="enviarComida" type="submit" value="Enviar">
  </form>

  <p>Defina a forma de entrega</p>
  <form action="teste.php" method="post">
    <input type="radio" id="Entrega" name="met_entrega" value="Entrega">
    <label for="Entrega">Entrega</label><br>
    <input type="radio" id="Retirada" name="met_entrega" value="Retirada">
    <label for="Retirada">Retirada</label><br>
    <input type="submit" value="Enviar">
  </form>
</div>


</body>

</html>
