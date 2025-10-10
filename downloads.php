<?php 
// Define o título específico para esta página
$page_title = "Instituto Educacional Sargento Lima | Downloads"; 

// =========================================================
// ARRAY DE DADOS PARA DOWNLOADS GERAIS (Dinâmico)
// =========================================================
$downloads_gerais = [
    [
        'nome' => 'Atividade Prática',
        'icone' => 'fa-keyboard',
        'descricao' => 'Abra o arquivo .docx para a atividade prática da aula de hoje e cole em um novo documento do Word.',
        'link' => 'https://docs.google.com/document/d/1A1dDedfebtZz4R25TTZV3jIg1LXlDedP/edit?usp=drive_link&ouid=106897552400846778912&rtpof=true&sd=true',
        'data' => '09/10/2025' // Você pode usar PHP date() aqui também
    ],
    [
        'nome' => 'Google Drive',
        'icone' => 'fa-file-lines',
        'descricao' => 'Abra a pasta que contém todas as atividades e BAIXE no seu computador os arquivos solicitados pelo instrutor.',
        'link' => 'https://drive.google.com/drive/folders/1rwgQb4P2rcLxx_RNBa9aOsicB6_mpONy?usp=sharing',
        'data' => '' // Sem data específica
    ],
    // Adicione mais downloads aqui
];

include 'includes/header.php'; 
?>
    <main class="pt-5">
      <section class="section-spacer">
        <div class="container">
          <div class="d-flex align-items-center gap-2 mb-1">
            <i class="fa-solid fa-folder-open text-primary fs-4"></i>
            <h1 class="h3 fw-bold mb-0">Downloads</h1>
          </div>
          <p class="text-secondary mb-4">Outros arquivos úteis e complementares.</p>

          <div class="row g-3 g-md-4">
            <?php 
            // INÍCIO DO LOOP PHP: GERA OS CARTÕES AUTOMATICAMENTE
            foreach ($downloads_gerais as $item) { 
            ?>
            
            <div class="col-12 col-lg-6">
              <div class="card download-card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <i class="fa-solid <?php echo $item['icone']; ?> text-primary me-2"></i>
                    <h2 class="h6 fw-semibold mb-0"><?php echo $item['nome']; ?></h2>
                  </div>
                  <p class="text-secondary small mb-3">
                      <?php echo $item['descricao']; ?>
                      <?php if (!empty($item['data'])) { ?>
                          <br>Atividade da aula de hoje **<?php echo $item['data']; ?>**
                      <?php } ?>
                  </p>
                  <a class="btn btn-outline-download w-100" target="_blank" href="<?php echo $item['link']; ?>">
                    <i class="fa-solid fa-arrow-down-long me-2"></i>Acessar / Baixar
                  </a>
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