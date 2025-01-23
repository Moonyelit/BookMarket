<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKMARKER || Inscription</title>

  <!-- CSS -->
  <link rel="stylesheet" href="./components/CSS/output.css">

  <!-- JAVASCRIPT -->
  <script defer src=""></script>

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
          <?php if (isset($_GET['error'])): ?>
            <p class="text-red-500"><?php echo htmlspecialchars($_GET['error']); ?></p>
          <?php endif; ?>
          <form action="../../BACK-END/process/userLogin.php" method="POST" class="space-y-4">
        <div>
          <label for="email" class="block text-yellow mb-1">Email</label>
          <input type="email" id="email" name="email" class="w-full p-2 rounded bg-white text-black" required>
        </div>
        <div>
          <label for="password" class="block text-yellow mb-1">Mot de passe</label>
          <input type="password" id="password" name="password" class="w-full p-2 rounded bg-white text-black" required>
        </div>
        <button type="submit" class="w-full bg-yellow text-brown py-2 rounded-full font-bold hover:bg-yellow-600">Se connecter</button>
      </form>
      <p class="text-yellow mt-4 text-center">
        Pas encore de compte ? <a href="../PHP/register.php" class="underline">Inscrivez-vous</a>
      </p>
    </div>
  </main>
</body>

</html>