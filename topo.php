<!DOCTYPE html>
<html lang="pt-br">
  <head>
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark  cor" style="border-bottom:3px solid #d50000;">
  <a class="navbar-brand" href="index.php">Nome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
        <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Customize seu PC</a>
          <a class="dropdown-item" href="#">Processadores</a>
          <a class="dropdown-item" href="#">Placas de vídeo</a>
          <a class="dropdown-item" href="#">Armazenamento</a>
          <a class="dropdown-item" href="#">Memória Ram</a>
          <a class="dropdown-item" href="#">Placas mãe</a>
          <a class="dropdown-item" href="#">Teclados</a>
          <a class="dropdown-item" href="#">Headsets</a>
          <a class="dropdown-item" href="#">Mouses</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 mr-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">⌕</button>
    </form>
  </div>
</nav>


