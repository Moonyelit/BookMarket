// ROLE CHANGE - ENTREPRISE
document.getElementById('role').addEventListener('change', function () {
    const additionalFields = document.getElementById('additional-fields');
    console.log('Role changed to:', this.value); // Debugging message
    if (this.value === 'vendeur' || this.value === 'les-deux') {
        additionalFields.classList.remove('hidden');
        console.log('Showing additional fields'); // Debugging message
    } else {
        additionalFields.classList.add('hidden');
        console.log('Hiding additional fields'); // Debugging message
    }
});

// MENU - ENTREPRISE
document.addEventListener('DOMContentLoaded', function () {
  const roleSelect = document.getElementById('role');
  const additionalFields = document.getElementById('additional-fields');
  console.log('Page loaded with role:', roleSelect.value); // Debugging message
  if (roleSelect.value === 'les-deux') {
    additionalFields.classList.remove('hidden');
    console.log('Showing additional fields on load'); // Debugging message
  } else {
    additionalFields.classList.add('hidden');
    console.log('Hiding additional fields on load'); // Debugging message
  }
});