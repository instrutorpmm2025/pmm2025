<?php
// Define o título da página
$page_title = "Instituto Educacional Sargento Lima | Contato"; 

// Inclui o cabeçalho e a Navbar
include 'includes/header.php'; 

// Variáveis para armazenar mensagens de feedback ao usuário
$feedback_message = "";
$feedback_type = ""; // 'success' ou 'danger'

// =========================================================
// PROCESSAMENTO DO FORMULÁRIO (PHP)
// BOA PRÁTICA: Validação e Limpeza de Dados (Segurança Básica)
// =========================================================

// Verifica se o formulário foi enviado (se o botão "Enviar" foi clicado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Limpeza e Validação dos Dados
    // Função trim() remove espaços em branco no início e fim.
    // Função htmlspecialchars() impede injeção de código (segurança).
    $nome = trim(htmlspecialchars($_POST['nome']));
    $email = trim(htmlspecialchars($_POST['email']));
    $assunto = trim(htmlspecialchars($_POST['assunto']));
    $mensagem = trim(htmlspecialchars($_POST['mensagem']));
    
    // 2. Verificação de Campos Obrigatórios
    if (empty($nome) || empty($email) || empty($mensagem)) {
        $feedback_message = "Por favor, preencha todos os campos obrigatórios.";
        $feedback_type = "danger";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Validação de formato de e-mail
        $feedback_message = "O endereço de e-mail fornecido não é válido.";
        $feedback_type = "danger";
    } else {
        // 3. ENVIAR E-MAIL (Simulação)
        // **ATENÇÃO:** Para enviar e-mails de verdade, seu servidor precisa estar configurado para a função mail() do PHP.
        // Se estiver em um servidor local (XAMPP/WAMP), este passo não funcionará de imediato.
        
        $destinatario = "prof.adiltonandre@gmail.com";
        $headers = "From: $nome <$email>" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Neste exemplo, vamos apenas SIMULAR o sucesso para o ambiente local.
        $sucesso_envio = true; // Em um servidor real, seria mail($destinatario, $assunto, $mensagem, $headers);
        
        if ($sucesso_envio) {
            $feedback_message = "Mensagem enviada com sucesso! Em breve, retornaremos o contato.";
            $feedback_type = "success";
            
            // Opcional: Limpar os campos do formulário após o sucesso
            $nome = $email = $assunto = $mensagem = "";
        } else {
            $feedback_message = "Houve um erro ao tentar enviar sua mensagem. Tente novamente mais tarde ou use o e-mail no rodapé.";
            $feedback_type = "danger";
        }
    }
}
?>

<section id="contato" class="section-spacer pt-5 bg-light-subtle">
    <div class="container py-5">
        
        <h1 class="h3 fw-bold mb-1 text-center"><i class="fa-solid fa-envelope me-2"></i> Entre em Contato</h1>
        <p class="text-secondary mb-5 text-center">Use o formulário abaixo para enviar dúvidas, sugestões ou pedidos de informação.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <?php if ($feedback_message) { ?>
                    <div class="alert alert-<?php echo $feedback_type; ?> alert-dismissible fade show" role="alert">
                        <?php echo $feedback_message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>

                <form action="contato.php" method="POST" class="p-4 p-md-5 bg-white rounded-4 shadow-lg">
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-semibold">Nome Completo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nome" name="nome" required 
                               value="<?php echo htmlspecialchars($nome ?? ''); // Mantém o valor se houver erro ?>" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required 
                               value="<?php echo htmlspecialchars($email ?? ''); // Mantém o valor se houver erro ?>" >
                    </div>

                    <div class="mb-3">
                        <label for="assunto" class="form-label fw-semibold">Assunto</label>
                        <input type="text" class="form-control" id="assunto" name="assunto" 
                               value="<?php echo htmlspecialchars($assunto ?? ''); // Mantém o valor se houver erro ?>" >
                    </div>
                    
                    <div class="mb-4">
                        <label for="mensagem" class="form-label fw-semibold">Mensagem <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required><?php echo htmlspecialchars($mensagem ?? ''); // Mantém o valor se houver erro ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100"><i class="fa-solid fa-paper-plane me-2"></i> Enviar Mensagem</button>
                    
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
// Inclui o rodapé e os scripts finais
include 'includes/footer.php'; 
?>