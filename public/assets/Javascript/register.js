document.addEventListener('DOMContentLoaded', function () {
  const roleSelect = document.getElementById('role');
  const additionalFields = document.getElementById('additional-fields');

  if (!roleSelect || !additionalFields) {
      console.error("Les éléments n'ont pas été trouvés dans le DOM !");
      return;
  }

  function toggleAdditionalFields() {
      console.log('Valeur sélectionnée:', roleSelect.value);

      if (roleSelect.value === 'les-deux') {
          additionalFields.classList.remove('hidden');
          additionalFields.classList.add('active');
          console.log('Classe "hidden" supprimée et "active" ajoutée');
      } else {
          additionalFields.classList.add('hidden');
          additionalFields.classList.remove('active');
          console.log('Classe "hidden" ajoutée et "active" supprimée');
      }

      console.log('Classes actuelles:', additionalFields.classList);
      console.log('État de display:', getComputedStyle(additionalFields).display);
  }

  // Appliquer la logique au chargement de la page
  toggleAdditionalFields();

  // Ajouter un écouteur d'événements pour le changement de sélection
  roleSelect.addEventListener('change', toggleAdditionalFields);
});
