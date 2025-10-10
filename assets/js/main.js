document.addEventListener('DOMContentLoaded', () => {
    
    // =================================================================
    // 1. FUNCIONALIDADE DE PESQUISA (Busca por título/descrição)
    // =================================================================
    const searchInput = document.getElementById('apostilasSearch');
    const allItems = document.querySelectorAll('.apostila-item'); // Seleciona todos os cartões

    if (searchInput) {
        searchInput.addEventListener('keyup', (e) => {
            const searchText = e.target.value.toLowerCase();
            
            allItems.forEach(item => {
                // Pega os dados armazenados pelo PHP (data-title e data-desc)
                const title = item.getAttribute('data-title') || '';
                const desc = item.getAttribute('data-desc') || '';
                
                // Verifica se o texto de busca está no título OU na descrição
                if (title.includes(searchText) || desc.includes(searchText)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    // =================================================================
    // 2. FUNCIONALIDADE DE FILTRO (Filtra por Categoria)
    // =================================================================
    const filterButtons = document.querySelectorAll('.btn-filter');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const selectedCategory = button.getAttribute('data-category');

            // Remove a classe 'active' de todos os botões e adiciona ao clicado
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Filtra os itens
            allItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');

                if (selectedCategory === 'all' || itemCategory === selectedCategory) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // =================================================================
    // 3. ANO DINÂMICO NO RODAPÉ (do seu footer.html)
    // =================================================================
    const yearSpan = document.getElementById('year');
    if (yearSpan) {
        // Como o PHP já está gerando o ano no footer.php, esta parte JS é opcional
        // Mas se houver algum elemento #year em outras páginas, ele será atualizado
        yearSpan.textContent = new Date().getFullYear();
    }
});