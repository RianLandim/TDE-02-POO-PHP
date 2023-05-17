<?php 
  require_once('./entities/Rota.php');
  require_once('./entities/Tripulacao.php');
  require_once('./repositories/Voo-DAO.php');
  require_once('./repositories/RotasDao.php');
  require_once('./Conexao.php');


  $distancia = $_POST['distancia'];
  $partida = $_POST['partida'];
  $destino = $_POST['destino'];

  $rota = new Rotas($distancia, $partida, $destino);
  var_dump($rota);

  $rotasDao = new RotasDao();
  $rotasDao->create($rota);

  $nome = $_POST['name'];
  $funcao = $_POST['funcao'];
  $horario = $_POST['horario'];

  $tripulacao = new Tripulacao($nome, $funcao, $horario);
  var_dump($tripulacao);

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
        <label for="distancia">Distancia:</label>
        <input type="text" id="distancia" name="distancia" />

        <label for="partida">Partida:</label>
        <input type="text" id="partida" name="partida" />

        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" />
      </fieldset>
      <fieldset>
        <legend><span class="number">2</span>Tripulação</legend>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" />

        <label for="horario">Função:</label>
        <input type="text" id="funcao" name="funcao" />
        
        <label for="funcao">Horario:</label>
        <input type="text" id="horario" name="horario" />
      </fieldset>

      <fieldset>
        <legend><span class="number">3</span>Aeronave</legend>
        <label for="name">Saida:</label>
        <input type="text" id="name" name="saida" />

        <label for="mail">Chegada:</label>
        <input type="email" id="mail" name="chegada" />

      </fieldset>

      <fieldset>
        <legend><span class="number">4</span>Voo</legend>
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
