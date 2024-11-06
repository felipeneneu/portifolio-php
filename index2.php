<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Portifolio</title>
</head>

<body class="bg-slate-900 text-white">

  <?php include('./components/header.php'); ?>


  <main class="mx-auto max-w-screen-lg px-3 py-6">
    <!-- hero -->
    <?php include('./components/hero.php'); ?>

    <!-- Projetos -->
    <section class="space-y-3 py-6">
      <h2 class="text-2xl font-bold">Projetos Recentes</h2>
      <!-- Projetos -->
      <?php
      include('./components/projetos.php');
      ?>

    </section>

  </main>

  <footer class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="border-t border-gray-600 pt-6 text-gray-400 px-3 text-sm">
      Copyright © <?= date('Y') ?>. Feito com carinho por <span class="text-purple-600">Felipe Neneu</span>
    </div>

  </footer>

</body>

</html>