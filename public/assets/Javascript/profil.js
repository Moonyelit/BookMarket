document.addEventListener('DOMContentLoaded', () => {
  // Sélectionner tous les boutons de bascule et les contenus à afficher/masquer
  const toggleButtons = document.querySelectorAll('.toggle-chevron');
  const contents = document.querySelectorAll('.toggle-content');
  const vendeurSection = document.getElementById('vendeur-section');

  toggleButtons.forEach((toggleButton, index) => {
    toggleButton.addEventListener('click', () => {
      // Vérifier si le contenu est actuellement masqué
      if (contents[index].classList.contains('hidden')) {
        // Afficher le contenu avec l'animation fade-in
        contents[index].classList.remove('hidden', 'fade-out');
        contents[index].classList.add('fade-in');
        if (index === 0) { // Assuming the first toggle button is for the vendeur section
          vendeurSection.style.marginBottom = '10rem';
        }
      } else {
        // Masquer le contenu avec l'animation fade-out
        contents[index].classList.remove('fade-in');
        contents[index].classList.add('fade-out');
        // Attendre la fin de l'animation avant de masquer complètement le contenu
        contents[index].addEventListener('animationend', () => {
          contents[index].classList.add('hidden');
        }, { once: true });
        if (index === 0) { // Assuming the first toggle button is for the vendeur section
          vendeurSection.style.marginBottom = '';
        }
      }
      // Basculer la classe 'rotate-180' pour faire pivoter l'icône
      toggleButton.classList.toggle('rotate-180');
      // Basculer entre les classes 'bx-chevron-up' et 'bx-chevron-down' pour changer l'icône
      toggleButton.classList.toggle('bx-chevron-up');
      toggleButton.classList.toggle('bx-chevron-down');
    });
  });
});