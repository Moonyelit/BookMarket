<header class="bg-brown px-2 py-2">
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
          <div><img src="../Images/Mobile/Logo.png" alt="Logo une main tenant un livre formant un coeur"></div>
          <div><img src="../Images/Mobile/Brand Logo.png" alt="BookMarket"></div>
        </div>

        <div class="flex space-x-3 items-center">
          <!-- Icône de recherche -->
          <span class="p-1 bg-yellow rounded-full inline-flex items-center justify-center w-6 h-6 shadow-3xl">
            <i class='bx bx-search text-brown text-xl'></i>
          </span>

          <!-- Icône utilisateur -->
          <span class="inline-flex items-center justify-center">
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
      
      <!-- Menu latéral -->
    <nav id="menu" class="fixed top-0 left-0 w-64 h-full bg-brown text-yellow font-bold p-4 transition-transform duration-500 transform -translate-x-full">
      <div class="flex items-center justify-center">
        <div><img src="../Images/Mobile/Logo.png" alt="Logo une main tenant un livre formant un coeur"></div>
        <div><img src="../Images/Mobile/Brand Logo.png" alt="BookMarket"></div>
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