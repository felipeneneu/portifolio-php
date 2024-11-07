<?php

$itens = [
  ['href' => '/', 'alt' => 'twitter logo', 'src' => '/img/x-logo.svg'],
  ['href' => '/', 'alt' => 'facebook logo', 'src' => '/img/facebook-logo.svg'],
  ['href' => '/', 'alt' => 'instagram logo', 'src' => '/img/instagram-logo.svg'],
];

?>


<section class="flex gap-x-6">
  <!-- titulo e descriçao -->
  <div class="w-2/3">
    <h1 class="font-bold text-3xl">Oi, meu nome é <span class="text-purple-600">Felipe</span>...</h1>
    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou dev web que adora criar coisas novas e aprender novas techs
      Especializado em PhP, React, Nextjs
    </p>

    <p>
    <ul class="flex gap-x-6 mt-6">
      <?php foreach ($itens as $item): ?>
        <li class="hover:text-gray-400">
          <a href="<?= $item['href'] ?>" target="_blank"">
          <img src=" <?= $item['src'] ?>"
            class="w-6 fill-blue-500 hover:animate-bounce" alt="<?= $item['alt'] ?>">
          </a>
        </li>

      <?php endforeach; ?>


    </ul>
    </p>
  </div>
  <!-- imagem -->
  <div class="w-1/3">
    <img class="h-60 -mt-6 hover:animate-pulse" src="https://avatar.iran.liara.run/public" alt="">
  </div>
</section>