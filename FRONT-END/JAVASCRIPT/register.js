// ROLE CHANGE - ENTREPRISE
document.getElementById('role').addEventListener('change', function () {
    const additionalFields = document.getElementById('additional-fields');
    additionalFields.innerHTML = '';

    if (this.value === 'vendeur' || this.value === 'les-deux') {
      additionalFields.innerHTML = `
        <div>
          <label for="entreprise" class="block text-yellow mb-1">Nom de l'entreprise</label>
          <input type="text" id="entreprise" name="entreprise" class="w-full p-2 rounded bg-white text-black" required maxlength="30" value="<?php echo isset($_POST['entreprise']) ? htmlspecialchars($_POST['entreprise']) : ''; ?>">
        </div>
        <div>
          <label for="telephone-vendeur" class="block text-yellow mb-1">Numéro de téléphone</label>
          <input type="tel" id="telephone-vendeur" name="telephone-vendeur" class="w-full p-2 rounded bg-white text-black" maxlength="30" value="<?php echo isset($_POST['telephone-vendeur']) ? htmlspecialchars($_POST['telephone-vendeur']) : ''; ?>">
        </div>
        <div>
          <label for="adresse-vendeur" class="block text-yellow mb-1">Adresse</label>
          <input type="text" id="adresse-vendeur" name="adresse-vendeur" class="w-full p-2 rounded bg-white text-black" maxlength="30" value="<?php echo isset($_POST['adresse-vendeur']) ? htmlspecialchars($_POST['adresse-vendeur']) : ''; ?>">
        </div>
        <div>
          <label for="code-postal-vendeur" class="block text-yellow mb-1">Code postal</label>
          <input type="text" id="code-postal-vendeur" name="code-postal-vendeur" class="w-full p-2 rounded bg-white text-black" maxlength="30" value="<?php echo isset($_POST['code-postal-vendeur']) ? htmlspecialchars($_POST['code-postal-vendeur']) : ''; ?>">
        </div>
        <div>
          <label for="pays-vendeur" class="block text-yellow mb-1">Pays</label>
          <input type="text" id="pays-vendeur" name="pays-vendeur" class="w-full p-2 rounded bg-white text-black" maxlength="30" value="<?php echo isset($_POST['pays-vendeur']) ? htmlspecialchars($_POST['pays-vendeur']) : ''; ?>">
        </div>
      `;
    }
});