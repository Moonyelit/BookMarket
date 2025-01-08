<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKMARKER || Inscription</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../CSS/output.css">
  <link rel="stylesheet" href="../CSS/style.css">

  <!-- JAVASCRIPT -->
  <script defer src="../JAVASCRIPT/register.js"></script>

  <!-- Lien de la police d'icônes -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body>
    <main class="bg-violet p-6 min-h-screen flex items-center justify-center flex-col">

        <div class="text-center mb-4">
            <div><img src="../Images/Logo-marron.png" alt="Logo une main tenant un livre formant un coeur" class="mx-auto"></div>
            <div><img src="../Images/Mobile/Brand Logo.png" alt="BookMarket" class="mx-auto"></div>
             <hr class="border-yellow my-4">
          </div>


  <div class="bg-brown p-8 rounded-3xl shadow-xl w-full max-w-lg">
    <h2 class="text-yellow text-3xl font-rosarivo mb-4 text-center">Inscription</h2>
    <?php if (isset($_GET['error'])): ?>
      <div class="bg-red-500 text-white p-4 rounded mb-4">
        <?php echo htmlspecialchars($_GET['error']); ?>
      </div>
    <?php endif; ?>
    <form action="../../BACK-END/process/userInscription.php" method="POST" class="space-y-4" enctype="multipart/form-data">
      <div>
        <label for="nom" class="block text-yellow mb-1">Nom</label>
        <input type="text" id="nom" name="nom" class="w-full p-2 rounded bg-white text-black" required pattern="[A-Za-zÀ-ÿ '-]+" maxlength="30" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
      </div>
      <div>
        <label for="prenom" class="block text-yellow mb-1">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="w-full p-2 rounded bg-white text-black" required pattern="[A-Za-zÀ-ÿ '-]+" maxlength="30" value="<?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : ''; ?>">
      </div>
      <div>
        <label for="pseudo" class="block text-yellow mb-1">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" class="w-full p-2 rounded bg-white text-black" required pattern="[A-Za-zÀ-ÿ0-9 '-]+" maxlength="30" value="<?php echo isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : ''; ?>">
      </div>      
      <div>
        <label for="telephone" class="block text-yellow mb-1">Numéro de téléphone</label>
        <input type="tel" id="telephone" name="telephone" class="w-full p-2 rounded bg-white text-black" required pattern="[0-9+ -]+" maxlength="30" value="<?php echo isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : ''; ?>">
      </div>
      <div>
        <label for="email" class="block text-yellow mb-1">Email</label>
        <input type="email" id="email" name="email" class="w-full p-2 rounded bg-white text-black" required maxlength="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
      </div>
      <div>
        <label for="confirm-email" class="block text-yellow mb-1">Confirmation de l'email</label>
        <input type="email" id="confirm-email" name="confirm-email" class="w-full p-2 rounded bg-white text-black" required maxlength="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo isset($_POST['confirm-email']) ? htmlspecialchars($_POST['confirm-email']) : ''; ?>">
      </div>
      <div>
        <label for="adresse" class="block text-yellow mb-1">Adresse</label>
        <input type="text" id="adresse" name="adresse" class="w-full p-2 rounded bg-white text-black" required maxlength="30" value="<?php echo isset($_POST['adresse']) ? htmlspecialchars($_POST['adresse']) : ''; ?>">
      </div>
      <div>
        <label for="code-postal" class="block text-yellow mb-1">Code postal</label>
        <input type="text" id="code-postal" name="code-postal" class="w-full p-2 rounded bg-white text-black" required maxlength="30" value="<?php echo isset($_POST['code-postal']) ? htmlspecialchars($_POST['code-postal']) : ''; ?>">
      </div>
      <div>
        <label for="pays" class="block text-yellow mb-1">Pays</label>
        <input type="text" id="pays" name="pays" class="w-full p-2 rounded bg-white text-black" required maxlength="30" value="<?php echo isset($_POST['pays']) ? htmlspecialchars($_POST['pays']) : ''; ?>">
      </div>
      <div>
        <label for="password" class="block text-yellow mb-1">Mot de passe</label>
        <input type="password" id="password" name="password" class="w-full p-2 rounded bg-white text-black" required maxlength="30">
      </div>
      <div>
        <label for="confirm-password" class="block text-yellow mb-1">Confirmation du mot de passe</label>
        <input type="password" id="confirm-password" name="confirm-password" class="w-full p-2 rounded bg-white text-black" required maxlength="30">
      </div>
      <div>
        <label for="profile-image" class="block text-yellow mb-1">Image de profil (optionnel)</label>
        <input type="file" id="profile-image" name="profile-image" class="w-full p-2 rounded bg-white text-black" accept=".jpg, .jpeg, .png">
      </div>

      <hr class="border-yellow my-4">
      <div>

        <label for="role" class="block text-yellow mb-1">Je suis</label>
        <select id="role" name="role" class="w-full p-2 rounded bg-white text-black" required>
          <option value="acheteur" <?php echo isset($_POST['role']) && $_POST['role'] === 'acheteur' ? 'selected' : ''; ?>>Acheteur</option>
          <option value="vendeur" <?php echo isset($_POST['role']) && $_POST['role'] === 'vendeur' ? 'selected' : ''; ?>>Vendeur</option>
          <option value="les-deux" <?php echo isset($_POST['role']) && $_POST['role'] === 'les-deux' ? 'selected' : ''; ?>>Acheteur et Vendeur</option>
        </select>
      </div>
      <div id="additional-fields" class="space-y-4 hidden">
        <?php if (isset($_POST['role']) && ($_POST['role'] === 'vendeur' || $_POST['role'] === 'les-deux')): ?>
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
            <input type="text" id="pays-vendeur" name="pays-vendeur" class="w-full p-2 rounded bg-white text-black" maxlength="30" value="<?php echo !isset($_POST['pays-vendeur']) ?:  htmlspecialchars($_POST['pays-vendeur']) ; ?>">
          </div>
        <?php endif; ?>
      </div>
      <button type="submit" class="w-full bg-yellow text-brown py-2 rounded-full font-bold hover:bg-yellow-600">S'inscrire</button>
    </form>
    <p class="text-yellow mt-4 text-center">
      Déjà un compte ? <a href="../PHP/login.php" class="underline">Connectez-vous</a>
    </p>
  </div>
  
</main>
</body>

</html>
