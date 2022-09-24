<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php if (isset($datas['title'])) echo $datas['title']." | "; ?>exo-blog-004 - Materialize</title>

  <!-- CSS  -->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="../public/assets/css/materialize.min.css">
  <style>
  .section {min-height: 390px;}
  </style>
</head>
<body>
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="./" class="brand-logo">exo-blog-004</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./">Navbar Link</a></li>
        <li><a href="./article">Article</a></li>
        <li><a href="./author">Author</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

      <!-- Page Layout here -->
      <div class="row">