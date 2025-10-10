<?php
// Título padrão, pode ser sobrescrito em cada página
$page_title = "Instituto Educacional Sargento Lima";
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $page_title; ?> </title>
    <meta name="description" content="Busca e filtros de materiais: apostilas, tutoriais e arquivos de apoio." />
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="preload" href="assets/css/style.min.css" as="style" /> 
    <link rel="stylesheet" href="assets/css/style.min.css" />
  </head>

  <body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80" tabindex="0">

    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="index.php#inicio">
          <img src="assets/img/logo-sgtolima.jpg" alt="Logo Instituto SGTO Lima" class="brand-logo" />
          <span>
            Instituto Educacional
            <span class="d-none d-md-inline">Sargento Lima</span>
        </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="index.php#inicio"><i class="fa-solid fa-house-chimney me-1"></i> Início</a></li>
            <li class="nav-item"><a class="nav-link" href="apostilas.php"><i class="fa-solid fa-book me-1"></i> Apostilas</a></li>
            <li class="nav-item"><a class="nav-link" href="downloads.php"><i class="fa-solid fa-download me-1"></i> Downloads</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#videos"><i class="fa-brands fa-youtube me-1"></i> Vídeos</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php"><i class="fa-solid fa-envelope me-1"></i> Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>