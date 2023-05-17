<?php 
  require_once('./entities/Rota.php');
  require_once('./entities/Tripulacao.php');
  require_once('./entities/Aeronave.php');
  require_once('./entities/Checkin.php');
  require_once('./entities/Voo.php');
  require_once('./repositories/Voo-DAO.php');
  require_once('./repositories/RotasDao.php');
  require_once('./repositories/TripulacaoDAO.php');
  require_once('./repositories/AeronaveDAO.php');
  require_once('./repositories/Checkin-DAO.php');
  require_once('./Conexao.php');


  $distancia = $_POST['distancia'];
  $partida = $_POST['partida'];
  $destino = $_POST['destino'];

  if($distancia) {
    $rota = new Rotas($distancia, $partida, $destino);
    var_dump($rota);
  
    $rotasDao = new RotasDao();
    $rotasDao->create($rota);
  }

  
  $nome = $_POST['name'];
  $funcao = $_POST['funcao'];
  $horario = $_POST['horario'];
  
  if($nome) {
    $tripulacao = new Tripulacao($nome, $funcao, $horario);
    var_dump($tripulacao);
  
    $tripulacaoDao = new TripulacaoDAO();
    $tripulacaoDao->create($tripulacao);
  }

  $modelo = $_POST['modelo'];
  $assentos = $_POST['assentos'];
  $ano_de_fabricacao = $_POST['ano_de_fabricacao'];

  if($modelo) {
    $aeronave = new Aeronave($modelo, $ano_de_fabricacao, intval($assentos), '');

    $aeronaveDao = new AeronaveDAO();
    $aeronaveDao->create($aeronave);
  }

  $saida = $_POST['saida'];
  $chegada = $_POST['chegada'];

  if($saida) {
    $voo = new Voo($saida, $chegada, 4, 3, 3);

    $vooDao =  new VooDAO();
    $vooDao->create($voo);
  }

  $malas = $_POST['malas'];
  $peso_das_malas = $_POST['peso_das_malas'];
  $peso_bagagem_de_mao = $_POST['$peso_bagagem_de_mao'];

  

  if($malas) {
    $checkin = new Checkin(intval($malas),doubleval($peso_das_malas), doubleval($peso_bagagem_de_mao), 5);

    $checkinDao = new CheckinDAO();
    $checkinDao->create($checkin);
  }

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
        <label for="name">Modelo:</label>
        <input type="text" id="modelo" name="modelo" />

        <label for="assentos">Assentos:</label>
        <input type="text" id="assentos" name="assentos" />

        <label for="ano_de_fabricacao">Ano de fabricação:</label>
        <input type="text" id="ano_de_fabricacao" name="ano_de_fabricacao" />

      </fieldset>

      <fieldset>
        <legend><span class="number">4</span>Voo</legend>
        <label for="saida">Saida:</label>
        <input type="text" id="saida" name="saida" />

        <label for="chegada">Chegada:</label>
        <input type="text" id="chegada" name="chegada" />

      </fieldset>

      <fieldset>
        <legend><span class="number">5</span>Check-In</legend>
        <label for="malas">malas:</label>
        <input type="text" id="malas" name="malas" />

        <label for="peso_das_malas">Peso médio das malas:</label>
        <input type="text" id="peso_das_malas" name="peso_das_malas" />

        <label for="peso_bagagem_de_mao">Peso bagagem de mão:</label>
        <input type="text" id="peso_bagagem_de_mao" name="peso_bagagem_de_mao" />
      </fieldset>
      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
