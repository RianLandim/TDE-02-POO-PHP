<?php 
    require_once('./entities/Rota.php');
    require_once('./repositories/Voo-DAO.php');
    require_once('./repositories/RotasDao.php');
    require_once('./repositories/Conexao.php');


    $distancia = $_POST['distancia'];
    $partida = $_POST['partida'];
    $destino = $_POST['destino'];

    $rota = new Rota($distancia, $partida, $destino);
    $rotaDao = new RotaDao();
    $rotaDao->create($rota);

    // $vooDao = new VooDAO();
    // $vooDao->create();

?>
<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:400,300"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="./public/main.css" />
  </head>
  <body>
    <form method="post">
      <h1>Cadastro</h1>
      <fieldset>
        <legend><span class="number">1</span>Rota</legend>
        <label for="name">Distancia:</label>
        <input type="text" id="distancia" name="distancia" />

        <label for="mail">Partida:</label>
        <input type="email" id="partida" name="partida" />

        <label for="password">Destino:</label>
        <input type="password" id="destino" name="destino" />
      </fieldset>
      <fieldset>
        <legend><span class="number">1</span>Tripulação</legend>
        <label for="name">Saida:</label>
        <input type="text" id="name" name="saida" />

        <label for="mail">Chegada:</label>
        <input type="email" id="mail" name="chegada" />

        <label for="password">Rota:</label>
        <input type="password" id="password" name="rota" />
      </fieldset>

      <fieldset>
        <legend><span class="number">2</span>Aeronave</legend>
        <label for="name">Saida:</label>
        <input type="text" id="name" name="saida" />

        <label for="mail">Chegada:</label>
        <input type="email" id="mail" name="chegada" />

        <label for="password">Rota:</label>
        <input type="password" id="password" name="rota" />
      </fieldset>

      <fieldset>
        <legend><span class="number">3</span>Voo</legend>
        <label for="name">Saida:</label>
        <input type="text" id="name" name="saida" />

        <label for="mail">Chegada:</label>
        <input type="email" id="mail" name="chegada" />

        <label for="password">Rota:</label>
        <input type="password" id="password" name="rota" />
      </fieldset>

      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
