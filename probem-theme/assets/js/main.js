document.addEventListener('DOMContentLoaded', function() {
    console.log('O tema ProbEM Theme foi carregado com sucesso!');

    // Exemplo de interatividade: Botão de doação
    const donateButton = document.querySelector('.cta-button');
    if (donateButton) {
        donateButton.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Obrigado por querer doar! Esta funcionalidade será implementada em breve.');
            // Aqui você pode adicionar lógica para abrir um modal de doação, por exemplo.
        });
    }

    // Exemplo de interatividade: Adicionar classe de "menu aberto" no mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.main-navigation');
    if (menuToggle && menu) {
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('active');
        });
    }
});