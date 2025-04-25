<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a Movie, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Kyle Matthew" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./images/favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./images/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Watch a Movie, in PHP</title>
</head>

<body>
  <div class="container-2">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Watch a Movie, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
        </div>
        <br><br>
        <?php

        // Setting the varibles
        $age = $_GET["user-number"];
        echo "If age is" . " " . ($age) . " ";
        "<br>";
        "<br>";
        // Calculatoin
        if ($age >= 17) {
          echo ("You can watch R-rated movie alone");
        } elseif ($age >= 13) {
          echo ("You can watch PG-13 movie alone");
        } elseif ($age >= 5) {
          echo ("You can watch G or PG movie alone.");
        } else {
          echo (" Uh, you're too young for most things.");
        }
