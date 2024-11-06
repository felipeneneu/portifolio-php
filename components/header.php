<?php
$itens = [
  ['href' => '#projeto', 'texto' => 'Projetos'],
  ['href' => 'https://github.com/felipeneneu', 'texto' => 'Github'],
  ['href' => '#projeto', 'texto' => 'Sobre'],
  ['href' => 'https://felipeneneu.vercel.app/', 'texto' => 'Contatos'],
];

?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center  justify-between">
  <!-- logo -->
  <div class="font-bold text-xl text-cyan-600">
    Portifolio do <span class="text-purple-600">Felipe Neneu</span>
  </div>

  <!-- links -->
  <div class="">
    <ul class="flex gap-x-6 font-medium text-gray-200 ">

      <?php foreach ($itens as $item): ?>
        <li class="hover:text-gray-400"><a href="<?= $item['href'] ?>" rel="noopener noreferrer">
            <?= $item['texto'] ?>
          </a></li>

      <?php endforeach; ?>




      <!-- <li class="hover:text-gray-400"><a href="/" target="_blank" rel="noopener noreferrer">Github</a></li>
      <li class="hover:text-gray-400"><a href="/" target="_blank" rel="noopener noreferrer">Sobre</a></li>
      <li class="hover:text-gray-400"><a href="/" target="_blank" rel="noopener noreferrer">Contatos</a></li> -->
    </ul>
  </div>

</header>