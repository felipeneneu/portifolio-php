<?php
$projetos = [
  [
    "title" => "Meu Portifolio",
    "finalizado" => false,
    "ano" => 2025,
    "descricao" => "Meu primeiro projeto php",
    "techs" => ["React", "Html", "PHP"],
    "img" => "/img/template1.png",
    "alt" => 'Meu portifolio',
  ],
  [
    "title" => "Lista de Tarefas",
    "finalizado" => true,
    "ano" => 2024,
    "descricao" => "Meu primeiro projeto php",
    "techs" => ["React", "Html", "PHP", "PHP"],
    "img" => "/img/template2.png",
    "alt" => 'Meu portifolio',
  ],

];

?>

<?php foreach ($projetos as $projeto): ?>
  <div class="flex bg-slate-800 rounded-lg p-3 gap-3 items-start">
    <div class="w-1/5 py-2">
      <img src="<?= $projeto['img'] ?>" alt="<?= $projeto['alt'] ?>" class="hover:scale-105 rounded-lg items-center justify-center">
    </div>
    <div class="w-4/5 space-y-3 py-4">
      <div class="flex gap-3 justify-between">
        <h3 class="text-xl font-semibold">
          <?php if ($projeto['finalizado']): ?> ✅ <?php endif; ?>
          <?= $projeto['title'] ?>
          <?php if ($projeto['finalizado']): ?> <span class="text-xs text-gray-400">Finalizado em <?= $projeto['ano'] ?></span>
          <?php else: ?>
            <span class="text-xs text-gray-400">em progresso</span>
          <?php endif; ?>


        </h3>

        <div class="font-semibold  space-x-3 text-xs py-2">
          <?php

          $colors = ['indigo', 'emerald', 'gray', 'yellow'];
          foreach ($projeto['techs'] as $posicao => $tech):

          ?>


            <span class="bg-<?= $colors[$posicao] ?>-500 text-<?= $colors[$posicao] ?>-900 rounded-md px-2 py-2">

              <?= $tech ?>
            </span>
          <?php endforeach; ?>

        </div>
      </div>
      <p class="leading-6">
        <?= $projeto['descricao'] ?>
      </p>

    </div>

  </div>
<?php endforeach; ?>