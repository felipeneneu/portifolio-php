<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projetos</title>
</head>

<body>
  <?php
  $nome = 'Felipe';
  $saudacao = 'Oi';
  $titulo = $saudacao . " Portifolio do " . $nome;
  $subtitulo = "Seja bem vindo ao meu Portifolio";
  $ano = 2020;


  $projeto = "Meu Portifolio";
  $finalizado = 1;
  $dataDoProjeto = "24-10-24";
  $descricao = "Meu primeiro projeto php";


  $projetos = [
    [
      "title" => "Meu Portifolio",
      "finalizado" => false,
      "data" => "24-10-24",
      "descricao" => "Meu primeiro projeto php",
      "techs" => "React, nodejs, sqlite",
    ],
    [
      "title" => "Lista de Tarefas",
      "finalizado" => true,
      "data" => "24-05-24",
      "descricao" => "Listas de Tarefas",
      "techs" => "Javascript, php, Laravel, postgress",
    ],
    [
      "title" => "Controle de Leitura de Livros",
      "finalizado" => false,
      "data" => "24-05-23",
      "descricao" => "Controle de Leitura de Livros",
      "techs" => "Javascript, php, Laravel",
    ],
    [
      "title" => "Mais um Projeto",
      "finalizado" => true,
      "data" => "24-06-24",
      "descricao" => "Mais um Projeto",
      "techs" => "Javascript, php, Laravel",
    ],

    // "Lista de Tarefas",
    // "Controle de Leitura de Livros",
    // "Mais um Projeto",

  ];


  function verificarSeEstaFinalizado($pp)
  {
    if ($pp['finalizado']) {
      return '<span style="color: green;">✅ Finalizado</span>';
    } else {
      return '<span style="color: red;">X Não Finalizado</span>';
    }
  }


  function filtrarProjetos($projetos, $finalizado = null)
  {

    if (is_null($finalizado)) {
      return $projetos;
    }


    $filtrados = [];
    foreach ($projetos as $projeto) {
      if ($projeto['finalizado'] === $finalizado) {
        $filtrados[] = $projeto;
      }
    }
    return $filtrados;
  }


  ?>

  <h1><?= $titulo ?></h1>
  <p><?= $subtitulo ?></p>
  <p><?= $ano ?></p>


  <hr />

  <ul>
    <div
      <?php
      foreach (filtrarProjetos($projetos, false) as $projeto): ?>
      <div
      <?php
        if ((2024 - $ano) > 2): ?>
      style="background-color: burlywood;"
      <?php else: ?>
      style="background-color: green;"
      <?php endif; ?>>
      <h2><?= $projeto['title'] ?></h2>
      <p><?= $projeto['descricao'] ?></p>
      <p>Habilidades usadas: <?= $projeto['techs'] ?></p>
      <div>
        <div><?= $projeto['data'] ?></div>
        <div>Projetos:

          <?= verificarSeEstaFinalizado($projeto); ?>
          <!-- <?php if ($projeto['finalizado']): ?>
            <span style="color: green;">✅ Finalizado</span>
          <?php else: ?>
            <span style="color: red;">X Não Finalizado</span>

          <?php endif; ?> -->
        </div>
      </div>
    </div>



  <?php endforeach; ?>
  </ul>
  </div>

  <!-- If Else -->

</body>

</html>