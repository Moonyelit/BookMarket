// Attendre que le DOM soit complètement chargé
document.addEventListener('DOMContentLoaded', () => {
  // Sélectionner le bouton de bascule et le contenu à afficher/masquer
  const toggleButton = document.querySelector('.toggle-chevron');
  const content = document.querySelector('.toggle-content');

  // Ajouter un écouteur d'événement pour le clic sur le bouton de bascule
  toggleButton.addEventListener('click', () => {
    // Basculer la classe 'hidden' pour afficher/masquer le contenu
    content.classList.toggle('hidden');
    // Basculer la classe 'rotate-180' pour faire pivoter l'icône
    toggleButton.classList.toggle('rotate-180');
    // Basculer entre les classes 'bx-chevron-up' et 'bx-chevron-down' pour changer l'icône
    toggleButton.classList.toggle('bx-chevron-up');
    toggleButton.classList.toggle('bx-chevron-down');
  });
});
