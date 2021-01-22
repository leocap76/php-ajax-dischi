<?php
// Stampare a schermo una decina di dischi musicali
// (come nello screenshot presente a fine slide 41).
// Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP:
// al caricamento della pagina, ci saranno tutti i dischi.
// Utilizzare:
// Html, Sass, PHP
// Consiglio: come primo step installate
// laravel-mix nella cartella e provate SASS.

  include __DIR__ . "/db.php";
  include_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
  </head>
  <body>
    <?php include __DIR__ . '/partials/header.php'; ?>

    <div class="container">

    </div>

    <?php include __DIR__ . '/partials/footer.php'; ?>
  </body>
</html>
