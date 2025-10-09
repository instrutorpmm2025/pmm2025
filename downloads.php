<?php /* Downloads com includes PHP do header/footer e item ativo */ ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Downloads – Instituto Educacional Sargento Lima</title>
    <meta name="description" content="Outros arquivos úteis e complementares." />
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="preload" href="assets/css/style.min.css" as="style" />
    <link rel="stylesheet" href="assets/css/style.min.css" />
  </head>
  <body>
    <?php $active='downloads'; include __DIR__.'/partials/header.php'; ?>
    <main class="pt-5">
      <section class="section-spacer">
        <div class="container">
          <div class="d-flex align-items-center gap-2 mb-1">
            <i class="fa-solid fa-folder-open text-primary fs-4"></i>
            <h1 class="h3 fw-bold mb-0">Downloads</h1>
          </div>
          <p class="text-secondary mb-4">Outros arquivos úteis e complementares.</p>

          <div class="row g-3 g-md-4">
            <div class="col-12 col-lg-6">
              <div class="card download-card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <i class="fa-solid fa-keyboard text-primary me-2"></i>
                    <h2 class="h6 fw-semibold mb-0">Atalhos do Teclado</h2>
                  </div>
                  <p class="text-secondary small mb-3">Lista de atalhos úteis para Windows e Office.</p>
                  <a class="btn btn-outline-download w-100" href="#" download><i class="fa-solid fa-arrow-down-long me-2"></i>Baixar</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="card download-card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <i class="fa-solid fa-file-lines text-primary me-2"></i>
                    <h2 class="h6 fw-semibold mb-0">Modelos de Documentos</h2>
                  </div>
                  <p class="text-secondary small mb-3">Templates prontos para cartas, currículos e relatórios.</p>
                  <a class="btn btn-outline-download w-100" href="#" download><i class="fa-solid fa-arrow-down-long me-2"></i>Baixar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include __DIR__.'/partials/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
  </body>
  </html>


