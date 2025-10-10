<?php 
// Define o título específico para esta página
$page_title = "Instituto Educacional Sargento Lima | Início"; 

include 'includes/header.php'; 
?>

    <header id="inicio" class="pt-5">
      <div class="container">
        <div class="hero-surface rounded-4 p-4 p-md-5">
          <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
              <img src="assets/img/logo-sgtolima.jpg" alt="Logo Instituto SGTO Lima" class="hero-brand-logo mb-3" onerror="this.style.display='none'" />
              <span class="badge rounded-pill bg-primary-subtle text-primary fw-semibold mb-3">Educação em Informática</span>
              <h1 class="display-5 fw-bold mb-3 hero-title">
                Aprenda Informática de Forma <span class="gradient-text">Simples e Prática</span>
              </h1>
              <p class="lead text-secondary mb-4">
                Curso básico de informática com foco prático: Windows, Word, Excel e Internet,
                além de noções de hardware e redes. Encontre apostilas, materiais de apoio,
                links úteis e vídeos tutoriais para estudar no seu ritmo.
              </p>
              <div class="d-flex gap-2 flex-wrap">
                <a href="apostilas.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-book me-2"></i>Explorar Materiais</a>
                <a href="#contato" class="btn btn-outline-secondary btn-lg">Entre em Contato</a>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="hero-image ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
              <img loading="lazy" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop" alt="Aula de informática" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="section-spacer">
      <div class="container">
        <div class="text-center mb-2">
          <h2 class="h3 fw-bold mb-1">Recursos Disponíveis</h2>
          <p class="text-secondary mb-0">Material completo e organizado para facilitar seu aprendizado</p>
        </div>
        <div class="row g-3 g-md-4 mt-1">
          <div class="col-12 col-md-4">
            <div class="resource-card p-4 rounded-4 bg-white shadow-sm h-100">
              <div class="icon-pill bg-primary-subtle text-primary"><i class="fa-regular fa-file-lines"></i></div>
              <h3 class="h6 fw-semibold mt-3 mb-1">Apostilas Completas</h3>
              <p class="text-secondary small mb-0">Material didático detalhado para cada módulo de ensino</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="resource-card p-4 rounded-4 bg-white shadow-sm h-100">
              <div class="icon-pill bg-purple-subtle text-purple"><i class="fa-regular fa-circle-play"></i></div>
              <h3 class="h6 fw-semibold mt-3 mb-1">Vídeos Tutoriais</h3>
              <p class="text-secondary small mb-0">Aulas em vídeo para complementar o aprendizado</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="resource-card p-4 rounded-4 bg-white shadow-sm h-100">
              <div class="icon-pill bg-success-subtle text-success"><i class="fa-solid fa-download"></i></div>
              <h3 class="h6 fw-semibold mt-3 mb-1">Downloads Gratuitos</h3>
              <p class="text-secondary small mb-0">Materiais de apoio disponíveis para todos os alunos</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band">
      <div class="container text-center py-5">
        <h3 class="h4 fw-bold mb-1">Pronto para Começar?</h3>
        <p class="text-secondary mb-3">Explore os materiais disponíveis e comece sua jornada no mundo da informática</p>
        <a href="apostilas.php" class="btn btn-primary btn-lg">Acessar Apostilas <i class="fa-solid fa-arrow-right ms-2"></i></a>
      </div>
    </section>

    <section id="videos" class="section-spacer bg-light-subtle border-top">
      <div class="container">
        <h2 class="h3 fw-bold mb-3"><i class="fa-brands fa-youtube text-danger me-2"></i>Vídeos</h2>
        <div class="row g-3 g-md-4">
          <div class="col-12 col-lg-6">
            <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/mFdUqqwzbVs?si=ONT1Yf1A-SE1JzeE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <p class="small text-secondary mt-2 mb-0">História: A Evolução dos computadores</p>
          </div>
          <div class="col-12 col-lg-6">
            <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/beupOadeM6c?si=eWrhYOpe2TxUmHZV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
            <p class="small text-secondary mt-2 mb-0">10 Dicas de busca no GOOGLE que todo mundo precisa conhecer!</p>
          </div>
        </div>
      </div>
    </section>

<?php 
// 4. INCLUSÃO DO RODAPÉ E SCRIPTS FINAIS
include 'includes/footer.php'; 
?>