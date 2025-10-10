<?php 
// Define o título específico para esta página
$page_title = "Instituto Educacional Sargento Lima | Apostilas"; 

// =========================================================
// ARRAY DE DADOS PARA APOSTILAS (Gerenciamento Dinâmico)
// =========================================================
$apostilas = [
    [
        'nome' => 'Introdução ao Microsoft Word',
        'descricao' => 'Conceitos básicos de edição e formatação de documentos. Essencial para iniciantes.',
        'categoria' => 'word',
        'tipo' => 'Apostila',
        'cor_badge' => 'bg-primary-subtle text-primary',
        'link_download' => '#', // Link real de download aqui, ex: 'assets/docs/word_intro.pdf'
        'status' => 'Em breve' 
    ],
    [
        'nome' => 'Excel Básico: Fórmulas',
        'descricao' => 'Planilhas, fórmulas básicas e gráficos fundamentais. Comece a dominar o Excel.',
        'categoria' => 'excel',
        'tipo' => 'Apostila',
        'cor_badge' => 'bg-success-subtle text-success',
        'link_download' => '#',
        'status' => 'Em breve' 
    ],
    [
        'nome' => 'Internet Segura e E-mail',
        'descricao' => 'Navegação consciente, e-mail e redes sociais com segurança. Evite golpes e vírus.',
        'categoria' => 'internet',
        'tipo' => 'Apostila',
        'cor_badge' => 'bg-info-subtle text-info',
        'link_download' => '#',
        'status' => 'Em breve' 
    ],
    // Adicione outros materiais aqui!
    [
        'nome' => 'Hardware: Componentes',
        'descricao' => 'Conheça as peças do seu computador: CPU, memória e placa-mãe.',
        'categoria' => 'hardware',
        'tipo' => 'Apostila',
        'cor_badge' => 'bg-secondary-subtle text-secondary',
        'link_download' => '#',
        'status' => 'Em breve' 
    ],
];

include 'includes/header.php'; 
?>
    <main class="pt-5">
      <section class="section-spacer downloads-hero">
        <div class="container">
          <div class="mb-4">
            <h1 class="h3 fw-bold mb-1">Apostilas</h1>
            <p class="text-secondary mb-0">Pesquise por título/descrição e filtre por categoria.</p>
          </div>
          
          <div class="search-bar-wrapper mb-4">
            <div class="input-group input-lg rounded-3 shadow-sm overflow-hidden">
              <span class="input-group-text bg-white"><i class="fa-solid fa-magnifying-glass text-secondary"></i></span>
              <input id="apostilasSearch" type="search" class="form-control form-control-lg" placeholder="Buscar por título ou descrição..." />
            </div>
          </div>
          
          <div class="mb-2 d-flex align-items-center gap-2">
            <i class="fa-solid fa-filter text-secondary"></i>
            <span class="small text-secondary">Filtrar por Categoria</span>
          </div>
          <div class="downloads-filters d-flex flex-wrap gap-2 mb-4" id="apostilasFilters">
            <button class="btn btn-filter active" data-category="all">Todos</button>
            <button class="btn btn-filter" data-category="word">Word</button>
            <button class="btn btn-filter" data-category="excel">Excel</button>
            <button class="btn btn-filter" data-category="internet">Internet</button>
            <button class="btn btn-filter" data-category="hardware">Hardware</button>
            <button class="btn btn-filter" data-category="redes">Redes</button>
            <button class="btn btn-filter" data-category="windows">Windows</button>
            <button class="btn btn-filter" data-category="outros">Outros</button>
          </div>
        </div>
      </section>

      <section class="pb-5">
        <div class="container">
          <div id="apostilasGrid" class="row g-3 g-md-4">
            
            <?php 
            // INÍCIO DO LOOP PHP: GERA OS CARTÕES AUTOMATICAMENTE
            foreach ($apostilas as $item) {
                // Prepara os dados para o JS (boa prática)
                $data_attrs = 'data-category="' . htmlspecialchars($item['categoria']) . '" ';
                $data_attrs .= 'data-title="' . strtolower(htmlspecialchars($item['nome'])) . '" ';
                $data_attrs .= 'data-desc="' . strtolower(htmlspecialchars($item['descricao'])) . '"';
            ?>
            
            <div class="col-12 col-md-6 col-lg-4 apostila-item" <?php echo $data_attrs; ?>>
              <div class="card download-card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="badge rounded-pill <?php echo $item['cor_badge']; ?>"><?php echo $item['categoria']; ?></span>
                    <span class="badge rounded-pill bg-secondary-subtle text-secondary"><?php echo $item['tipo']; ?></span>
                  </div>
                  <h2 class="h6 fw-semibold mb-2"><?php echo $item['nome']; ?></h2>
                  <p class="text-secondary small mb-3"><?php echo $item['descricao']; ?></p>
                  <div class="d-flex">
                    <a class="btn btn-soft w-100" href="<?php echo $item['link_download']; ?>" <?php echo ($item['link_download'] != '#') ? 'download' : ''; ?>>
                        <?php echo $item['status']; ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <?php } // Fim do loop foreach ?>

          </div>
        </div>
      </section>
    </main>

<?php 
include 'includes/footer.php'; 
?>