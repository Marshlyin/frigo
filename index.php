<?php
echo('<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Mon Frigo</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <section class="hero is-dark">
        <div class="container">
              <h1 class="title">
                Mon frigo
              </h1 >
              <p class="subtitle is-3">
                What\'s cooking good looking ?
              </p>
        </div>
    </section>
    <br>');

include "form.php";
include "tableau_full.php";




echo('</body></html>');