<header class="bg-brown px-2 py-2 w-full fixed top-0 z-50 shadow-headering">
    <div class="container mx-auto flex justify-between w-full">
      <div class="flex items-center">
        <div><img src="./assets/Images/Mobile/Logo.png" alt="Logo une main tenant un livre formant un coeur"></div>
        <div><img src="./assets/Images/Mobile/Brand Logo.png" alt="BookMarket"></div>
      </div>

      <div class="flex space-x-3 items-center">
        <!-- Icône de recherche -->
        <span class="p-1 bg-yellow rounded-full inline-flex items-center justify-center w-6 h-6 shadow-3xl">
          <i class='bx bx-search text-brown text-xl'></i>
        </span>

        <!-- Icône utilisateur -->
        <span class="inline-flex items-center justify-center cursor-pointer" id="user-icon">
          <i class='bx bx-user-circle text-yellow text-2xl'></i>
        </span>

        <!-- Icône panier -->
        <span class="inline-flex items-center justify-center">
          <i class='bx bxs-basket text-yellow text-2xl'></i>
        </span>

        <!-- Icône menu -->
        <span class="inline-flex items-center justify-center cursor-pointer">
          <i class='bx bx-menu text-yellow text-2xl transition-transform duration-300' id="menu-icon"></i>
        </span>

      </div>
    </div>

    <!-- Formulaire de connexion -->
    <div id="login-form"
      class="fixed top-16 right-0 w-full max-w p-4 bg-brown text-yellow shadow-2xl hidden transition-transform transition-opacity duration-500">
      <button id="close-login-form" class="absolute top-2 right-2 text-yellow">X</button>
      <h2 class="text-xl mb-4">Connexion</h2>
      <form>
        <div class="mb-4">
          <label for="username" class="block mb-2">Nom d'utilisateur</label>
          <input type="text" id="username" class="w-full p-2 rounded" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block mb-2">Mot de passe</label>
          <input type="password" id="password" class="w-full p-2 rounded" required>
        </div>
        <button type="submit" class="bg-yellow text-brown px-4 py-2 rounded">Se connecter</button>
      </form>
      <a href="#" class="block text-yellow underline mt-2">Pas encore inscrit ? Inscrivez-vous</a>
    </div>

    <!-- Option de déconnexion -->
    <div id="logout-option"
      class="fixed top-16 right-0 w-full max-w-sm p-4 bg-brown text-yellow shadow-lg hidden transition-transform transition-opacity duration-500">
      <h2 class="text-xl mb-4">Déconnexion</h2>
      <button id="logout-button" class="bg-yellow text-brown px-4 py-2 rounded">Se déconnecter</button>
    </div>

    <!-- Menu latéral -->
    <nav id="menu"
      class="fixed top-0 left-0 w-64 h-full bg-brown text-yellow font-bold p-4 transition-transform duration-500 transform -translate-x-full shadow">
      <div class="flex items-center justify-center">
        <div><img src="./assets/Images/Mobile/Logo.png" alt="Logo une main tenant un livre formant un coeur"></div>
        <div><img src="./assets/Images/Mobile/Brand Logo.png" alt="BookMarket"></div>
      </div>

      <hr class="border-t-2 border-yellow my-4">

      <ul class="space-y-4">
        <li><a href="#" class="block hover:underline">Accueil</a></li>
        <li><a href="#" class="block hover:underline">À propos</a></li>
        <li><a href="#" class="block hover:underline">Contact</a></li>
        <li><a href="#" class="block hover:underline">Services</a></li>
      </ul>
    </nav>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>
  </header>