<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Métadonnées et liens CSS -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKMARKET || Livre </title>

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/CSS/output.css">
  <link rel="stylesheet" href="./assets/CSS/AutreCSS/footer.css">
  <!-- JAVASCRIPT -->
  <script defer src="./assets/Javascript/header.js"></script>
  <script defer src="./assets/Javascript/footer.js"></script>

  <!-- Lien de la police d'icônes -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body class="bg-violet">

  <!-- Inclusion de l'en-tête -->
  <?php include_once './reusable/header.php'; ?>

  <main class="mt-24">

    <!-- Détails du livre -->
    <section>
      <h1 class="font-rosarivo text-yellow text-[1.25rem] ml-[2rem] mb-[1rem]">
        Détails du livre
      </h1>

      <!-- Premier fond blanc -->
      <article class="mx-2 px-6 py-6 bg-white bg-opacity-25 rounded-lg">

        <!-- Deuxième fond blanc -->
        <div class="px-6 py-6 bg-white bg-opacity-10 rounded-lg flex flex-col sm:flex-row gap-6 items-center">

          <!-- Image du livre -->
          <img src="./assets/Images/Livres/Palais-de-roses.jpg" alt="Un palais de roses et d'épines"
            class="rounded-2xl w-[150px] sm:w-[200px]">

          <!-- Détails du livre -->
          <div class="text-white flex-1">
            <div class="flex items-center gap-2">
              <h2 class="font-rosarivo text-[1.5rem] font-bold">
                Un palais de roses et d'épines
              </h2>
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="Drapeau français"
                class="w-[1.5rem] h-[1.5rem]">
            </div>
            <p class="text-sm text-gray-300">
              Broché – Grand livre, 9 février 2017
            </p>
            <p class="font-semibold mt-1">Sarah J. Maas</p>

            <!-- Étoiles -->
            <div class="flex items-center gap-1 mt-1">
              <img src="./assets/Images/Cards-Livres/Icons/star-filled.png" class="w-[1rem] h-[1rem]" alt="star">
              <img src="./assets/Images/Cards-Livres/Icons/star-filled.png" class="w-[1rem] h-[1rem]" alt="star">
              <img src="./assets/Images/Cards-Livres/Icons/star-filled.png" class="w-[1rem] h-[1rem]" alt="star">
              <img src="./assets/Images/Cards-Livres/Icons/star-filled.png" class="w-[1rem] h-[1rem]" alt="star">
              <img src="./assets/Images/Cards-Livres/Icons/star-empty.png" class="w-[1rem] h-[1rem]" alt="star">
            </div>

            <!-- Résumé -->
            <p class="text-[0.9rem] text-gray-300 mt-4">
              <span class="font-bold text-white">Résumé</span><br>
              En chassant dans les bois enneigés, Feyre voulait seulement nourrir sa famille. Mais elle a
              commis l'irréparable en tuant un Fae...
            </p>

            <!-- Bouton Lire plus -->
            <button
              class="mt-4 bg-gray-500 bg-opacity-50 text-white py-2 px-6 rounded-lg shadow-md hover:bg-opacity-70 transition">
              Lire plus
            </button>
          </div>

        </div>
      </article>

    </section>

    <main class="mt-24 px-4">

      <!-- États du livre -->
      <section class="flex justify-center gap-6 mb-8">
        <div class="bg-brown text-white text-center p-4 rounded-lg shadow-lg w-48">
          <h3 class="text-xl font-bold">Très bon</h3>
          <p class="text-sm">Idéal pour offrir</p>
          <p class="text-2xl font-semibold mt-2">12,99€</p>
          <a href="#" class="underline text-yellow mt-1 block">Voir l'annonce</a>
          <p class="text-xs mt-2">C'est le dernier !</p>
        </div>

        <div class="bg-brown text-white text-center p-4 rounded-lg shadow-lg w-48">
          <h3 class="text-xl font-bold">Bon</h3>
          <p class="text-sm">Idéal pour offrir</p>
          <p class="text-2xl font-semibold mt-2">9,99€</p>
          <a href="#" class="underline text-yellow mt-1 block">Voir les annonces</a>
          <p class="text-xs mt-2">Deux exemplaires !</p>
        </div>

        <div class="bg-brown text-white text-center p-4 rounded-lg shadow-lg w-48 opacity-50">
          <h3 class="text-xl font-bold">Acceptable</h3>
          <p class="text-sm">Pour l'emmener partout</p>
          <p class="text-2xl font-semibold mt-2">7,99€</p>
          <a href="#" class="underline text-yellow mt-1 block">Demander une alerte</a>
          <p class="text-xs mt-2">Rupture de stock !</p>
        </div>
      </section>

      <!-- Livraison et panier -->
      <section class="bg-yellow-transparent p-4 rounded-lg shadow-lg mb-8 max-w-2xl mx-auto">
        <div class="flex items-center gap-4">
          <img src="./assets/Images/Icons/delivery-truck.png" alt="Livraison" class="w-8 h-8">
          <div>
            <p class="text-black-gray">Livraison offerte en point relais</p>
            <p class="text-black-gray text-sm">Livré à partir du 13 novembre</p>
            <a href="#" class="text-sm underline">Voir nos options de livraison</a>
          </div>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <button class="bg-brown text-white py-2 px-4 rounded-lg shadow-lg flex items-center gap-2">
            <img src="./assets/Images/Icons/cart.png" alt="Panier" class="w-5 h-5">
            Ajouter au panier
          </button>
          <div class="text-center">
            <p class="text-black-gray text-lg font-bold">12,99€</p>
            <p class="text-sm">Choix état : <span class="font-semibold">"Très bon"</span></p>
          </div>
        </div>
      </section>

      <!-- Caractéristiques -->
      <section class="bg-black-gray p-6 rounded-lg shadow-lg max-w-3xl mx-auto text-white">
        <h2 class="text-yellow text-xl font-bold mb-4">Caractéristiques</h2>
        <div class="grid grid-cols-2 gap-4">
          <p><span class="font-bold">Édition :</span> MARTINIERE</p>
          <p><span class="font-bold">ISBN :</span> 2732472301</p>
          <p><span class="font-bold">Dimension :</span> 14.5 x 3.5 x 21.5 cm</p>
          <p><span class="font-bold">Date de publication :</span> 2017</p>
          <p><span class="font-bold">Auteur :</span> <a href="#" class="underline text-yellow">Sarah J. Maas</a></p>
          <p><span class="font-bold">Langue :</span> Français</p>
          <p><span class="font-bold">Nombre de pages :</span> 528 pages</p>
          <p><span class="font-bold">Reliure :</span> Broché</p>
        </div>
      </section>

      <!-- Vous pourriez aimer aussi -->
      <section>

        <!-- Contenu superposé -->
        <!-- Titre de la section -->
        <h1 class=" text-white text-[1.2rem] font-rosarivo ml-4 text-shadow-xl sm:text-[1.8rem]">Top des ventes</h1>

        <!-- Conteneur avec scroll horizontal -->
        <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

          <!-- Livre 1 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-auto flex flex-col justify-between hover:scale-110 ease-in-out duration-300"
            style="border-radius: 12.6px;">


            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.5
            </div>

            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Palais-de-roses.jpg" alt="Un palais d'épines et de roses"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">Un palais d'épines</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">Sarah J. Maas</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">12,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-heart text-black hover:text-yellow text-lg'></i>
                </button>
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-cart text-black hover:text-yellow text- text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 2 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-auto flex flex-col justify-between hover:scale-110 ease-in-out duration-300"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.8
            </div>
            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Berserk.jpg" alt="Berserk Deluxe"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">Berserk Deluxe</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">Kentaro Miura</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-anglais.png" alt="France"
                class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">29,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-heart text-black hover:text-yellow text-lg'></i>
                </button>
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-cart text-black hover:text-yellow text- text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 3 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-auto flex flex-col justify-between hover:scale-110 ease-in-out duration-300"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.2
            </div>
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/la femme de ménage.jpg" alt="La Femme de ménage"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>




            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">La femme de ménage</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">Freida McFadden</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">4,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-heart text-black hover:text-yellow text-lg'></i>
                </button>
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-cart text-black hover:text-yellow text- text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 4 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-auto flex flex-col justify-between hover:scale-110 ease-in-out duration-300"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.5
            </div>
            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Piliers de la Terre.jpg" alt="Les piliers de la terre"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">Les piliers de la terre</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">Ken Follet</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">Livre poche</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">7,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-heart text-black hover:text-yellow text-lg'></i>
                </button>
                <button
                  class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center hover:bg-violet transition-colors duration-300">
                  <i class='bx bx-cart text-black hover:text-yellow text- text-lg'></i>
                </button>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Avis -->
      <section class="mb-12 px-4">

        <!-- Titre de la section -->
        <h2 class="font-rosarivo text-yellow text-[1.5rem] mb-4">Avis :</h2>

        <!-- Filtre -->
        <div class="bg-black-gray text-white rounded-lg px-4 py-2 inline-block cursor-pointer">
          Meilleures évaluta...
        </div>

        <!-- Conteneur des avis -->
        <div class="mt-6 space-y-6">

          <!-- Avis 1 -->
          <article class="bg-yellow-transparent p-6 rounded-lg shadow-lg">
            <div class="flex items-center gap-4">
              <img src="./assets/Images/Icons/user-icon.png" alt="Avatar" class="w-10 h-10 rounded-full">
              <div>
                <p class="font-bold text-black-gray">PseudoRandom :</p>
                <div class="flex items-center">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-empty.png" class="w-5 h-5" alt="star">
                  <span class="ml-2 text-black-gray font-semibold">Sympa</span>
                </div>
                <p class="text-sm text-gray-600">Le 01/01/2024</p>
              </div>
            </div>

            <p class="mt-4 text-black-gray text-sm leading-relaxed">
              C'est l'une des plus belles histoires qu'il m'ait été donné de lire. Tout était parfait dans ce livre.
              La plume de l'auteur est vraiment belle, les personnages principaux attachants. J'ai même pleuré au
              milieu de l'intrigue tellement j'étais portée par les émotions des personnages.
            </p>

            <button
              class="mt-4 bg-gray-500 bg-opacity-50 text-black-gray py-2 px-6 rounded-lg shadow-md hover:bg-opacity-70 transition block mx-auto">
              Lire plus
            </button>
          </article>

          <!-- Avis 2 (copie du premier avis) -->
          <article class="bg-yellow-transparent p-6 rounded-lg shadow-lg">
            <div class="flex items-center gap-4">
              <img src="./assets/Images/Icons/user-icon.png" alt="Avatar" class="w-10 h-10 rounded-full">
              <div>
                <p class="font-bold text-black-gray">PseudoRandom :</p>
                <div class="flex items-center">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-filled.png" class="w-5 h-5" alt="star">
                  <img src="./assets/Images/Icons/star-empty.png" class="w-5 h-5" alt="star">
                  <span class="ml-2 text-black-gray font-semibold">Sympa</span>
                </div>
                <p class="text-sm text-gray-600">Le 01/01/2024</p>
              </div>
            </div>

            <p class="mt-4 text-black-gray text-sm leading-relaxed">
              C'est l'une des plus belles histoires qu'il m'ait été donné de lire. Tout était parfait dans ce livre.
              La plume de l'auteur est vraiment belle, les personnages principaux attachants. J'ai même pleuré au
              milieu de l'intrigue tellement j'étais portée par les émotions des personnages.
            </p>

            <button
              class="mt-4 bg-gray-500 bg-opacity-50 text-black-gray py-2 px-6 rounded-lg shadow-md hover:bg-opacity-70 transition block mx-auto">
              Lire plus
            </button>
          </article>

        </div>

      </section>



    </main>


  </main>


  <!-- Inclusion du footer-->
  <?php include_once './reusable/footer.php'; ?>

</body>

</html>