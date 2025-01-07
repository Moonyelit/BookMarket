// ROLE CHANGE - ENTREPRISE
document.getElementById('role').addEventListener('change', function () {
    const additionalFields = document.getElementById('additional-fields');
    additionalFields.innerHTML = '';

    if (this.value === 'vendeur' || this.value === 'les-deux') {
      additionalFields.innerHTML = `
        <div>
          <label for="entreprise" class="block text-yellow mb-1">Nom de l'entreprise</label>
          <input type="text" id="entreprise" name="entreprise" class="w-full p-2 rounded bg-white text-black" required>
        </div>
        <div>
          <label for="telephone" class="block text-yellow mb-1">Numéro de téléphone</label>
          <input type="tel" id="telephone" name="telephone" class="w-full p-2 rounded bg-white text-black" required>
        </div>
        <div>
          <label for="adresse" class="block text-yellow mb-1">Adresse</label>
          <input type="text" id="adresse" name="adresse" class="w-full p-2 rounded bg-white text-black" required>
        </div>
        <div>
          <label for="code-postal" class="block text-yellow mb-1">Code postal</label>
          <input type="text" id="code-postal" name="code-postal" class="w-full p-2 rounded bg-white text-black" required>
        </div>
        <div>
          <label for="pays" class="block text-yellow mb-1">Pays</label>
          <input type="text" id="pays" name="pays" class="w-full p-2 rounded bg-white text-black" required>
        </div>
      `;
    }
  });