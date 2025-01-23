<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Métadonnées et liens CSS -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKMARKET || Page accueil</title>

  <!-- CSS -->
  <link rel="stylesheet" href="./components/CSS/output.css">
  <link rel="stylesheet" href="./components/CSS/AutreCSS/hidescroll.css">
  <link rel="stylesheet" href="./components/CSS/AutreCSS/footer.css">

  <!-- JAVASCRIPT -->
  <script defer src="./components/Javascript/header.js"></script>
  <script defer src="./components/Javascript/footer.js"></script>

  <!-- Lien de la police d'icônes -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>


<body class="bg-violet">

  <!-- Inclusion de l'en-tête -->
  <?php include_once './reusable/header.php'; ?>

  <main>
    <!-- SECTION : PRESENTATION SITE -->
    <section class="relative flex justify-end items-end" style="margin-top: 5rem;">

      <!-- Section texte -->
      <div class="flex flex-col w-3/5 z-10 h-full" style="padding-left: 0rem;">
        <div class="p-4 ml-8">
          <h2 class="font-rosarivo text-white text-3xl mb-[-8px]">Bienvenue</h2>
          <h1 class="flex justify-center items-center">
            <img src="./assets/Images/Mobile/Brand Logo.png" alt="">
          </h1>
        </div>

        <div class="bg-yellow p-4 flex flex-col justify-center align-middle w-[100%] "
     style="border-top-right-radius: 63%;">
          <p class="font-rosarivo w-full text-sm leading-[2rem]" style="margin: 1rem 0;">
            <span class="font-bold text-shadow-lg">Achetez </span>et
            <span class="font-bold text-shadow-lg">revendez</span> vos livres d'occasion en toute simplicité !
          </p>
          <div class="flex flex-col justify-center">
            <button
              class="bg-brown text-yellow px-3 py-1 rounded-full w-[80%] hover:bg-violet hover:text-brown transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
              Vends maintenant
            </button>

            <a href="#RAJOUTERLIEN" class="block text-[10px] underline mt-1">Découvrez comment ça marche</a>
          </div>
        </div>
      </div>

      <!-- Image flottante -->
      <img src="./assets/Images/Index/Livres image présentation copie 1.png"
        alt="Livres image présentation avec halos lumineux"
        class="relative bottom-0 right-0 w-[70%] max-w-[600px] h-auto z-0">
    </section>


    <!-- SECTION 2 :  TOP DES VENTES -->
    <section class="mt-5 relative">
      <!-- Image de fond -->
      <img src="./assets/Images/Index/DECO-section2.png" class="w-full h-[28rem]">

      <!-- Contenu superposé -->
      <div class="mt-[3rem] absolute inset-0 flex flex-col py-4">
        <!-- Titre de la section -->
        <h1 class="text-white text-[1.2rem] font-rosarivo ml-4 text-shadow-xl">Top des ventes</h1>

        <!-- Conteneur avec scroll horizontal -->
        <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

          <!-- Livre 1 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
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
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 2 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
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
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 3 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
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
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 4 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
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
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    <!-- SECTION 3 :  NOTRE SELECTION DE LIVRES -->,
    <section class="py-6">
      <!-- Titre de la section -->
      <h1 class="text-yellow text-[1.2rem] font-rosarivo ml-4 text-shadow-xl">Notre sélection de livres</h1>

      <!-- Mes Boutons selections de livres -->
      <div class="relative">
        <div class="flex space-x-3 overflow-x-auto scrollbar-hide px-4 py-2">
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Auteurs
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Romans
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Jeunesse
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Arts et sciences
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Fantastique
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Mangas
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Thriller
          </button>
          <button
            class="px-3 py-0.5 bg-transparent text-yellow border-2 border-yellow rounded-full text-xs font-normal hover:bg-yellow hover:text-brown transition duration-300">
            Science-fiction
          </button>
        </div>
      </div>

      <section class="mt-5 relative">

        <!-- Conteneur avec scroll horizontal 1 -->
        <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

          <!-- Livre 1 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">


            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.0
            </div>

            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Meilleure-monde.jpg" alt="Le Meilleur des Mondes"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              Le Meilleur des Monde</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Adloux Huxley</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">
                Livre poche</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                1,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 2 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 3 .8
            </div>
            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Ikegai.jpg " alt="Ikegai"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              Ikegai</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Tetsugaku Group</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                9,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 3 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.5
            </div>
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/maison-feuilles.jpg" alt="La maison des feuilles"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              La maison des feuilles</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Mark Z. Danielewski</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">
                Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                17,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 4 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.5
            </div>
            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Cours-des-ténèbres.jpg" alt="La Cours des Ténèbres"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              La Cours des Ténèbres</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Victor Dixen
            </p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">
                Livre collector</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                17,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

        </div>

        <!-- Conteneur avec scroll horizontal 1 -->
        <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

          <!-- Livre 1 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">


            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 3.3
            </div>

            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/Accord-tolteque.jpg" alt="Les quatre accords toltèques"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              Les quatre accords toltèques</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Don Miguel Ruiz</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">
                Livre broché</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                3,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 2 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.1
            </div>
            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/1984- anglais.jpg " alt="Ikegai"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              1984</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              George Orwell</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                3,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Livre 3 -->
          <di v
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 4.4
            </div>
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/le chien de pavlov.jpg" alt="Le chien de Pavlov"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              Le chien de Pavlov </h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Adam Hart-Davis</p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">
                Livre relié</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                17,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </di>

          <!-- Livre 4 -->
          <div
            class="relative bg-white bg-opacity-10 rounded-md backdrop-blur-md p-2 w-[100px] flex-shrink-0 h-[230px] flex flex-col justify-between"
            style="border-radius: 12.6px;">

            <!-- Note -->
            <div
              class="absolute bg-yellow-400 bg-[#414141] bg-opacity-50 text-white text-[8px] px-1 py-1 rounded-md flex items-center"
              style="margin-top:-8px; margin-left:-9px; border-top-left-radius: 15px; border-bottom-right-radius: 15px;">
              ⭐ 3.9
            </div>
            <!-- Image du livre -->
            <div class="w-[80px] h-[120px] mx-auto flex items-center justify-center">
              <img src="./assets/Images/Livres/n'écoute que moi.jpg" alt="N'écoute que moi"
                class="w-full h-full rounded-md shadow-lg object-cover">
            </div>

            <!-- Titre du livre -->
            <h2 class="text-white font-bold text-center mt-1 text-[10px] leading-tight">
              N'écoute que moi</h2>
            <!-- Auteur -->
            <p class="text-white text-[8px] text-center mt-0.5">
              Victor Dixen
            </p>

            <!-- Encadré -->
            <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full" style="padding: 1.2px;">
              <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France" class="w-4 h-4 rounded-full">
              <i class='bx bx-book'></i>
              <span class="text-black font-rosarivo px-1 py-0.5 text-[7px] rounded-md">
                Livre collector</span>
            </div>

            <div class="relative bg-white bg-opacity-5 rounded-md backdrop-blur-md p-1 flex-shrink-0"
              style="border-radius: 12.6px;">
              <!-- Prix -->
              <p class="text-white font-bold text-center text-sm mt-1">
                12,99€</p>

              <!-- Boutons -->
              <div class="flex justify-around mt-2">
                <button class="bg-yellow p-2 rounded-full w-6 h-6 flex items-center justify-center">
                  <i class='bx bx-heart text-black text-lg'></i>
                </button>
                <button class="bg-yellow p-2 rounded-full w-6 h-6  flex items-center justify-center">
                  <i class='bx bx-cart text-black text-lg'></i>
                </button>
              </div>
            </div>
          </div>

        </div>

      </section>


    </section>


  </main>


  <!-- Inclusion du footer-->
  <?php include_once './reusable/footer.php'; ?>

</body>

</html>