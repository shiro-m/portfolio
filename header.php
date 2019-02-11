<?php
header("Content-Type:text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous" />
  <title>Portfolio</title>
  <?php wp_head(); ?>
</head>

<body>
<div class="wrap">
  <header>
    <nav>
      <ul>
        <li><a href="#top">Home</a></li>
        <li><a href="#aboutMe">About</a></li>
        <li><a href="#works">Works</a></li>
        <!-- <li><a href="#blog">Blog</a></li> -->
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>