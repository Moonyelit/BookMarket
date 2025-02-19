<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Métadonnées et liens CSS -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKMARKET || Profil </title>

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/CSS/output.css">
  <link rel="stylesheet" href="./assets/CSS/AutreCSS/footer.css">
  <link rel="stylesheet" href="./assets/CSS/AutreCSS/profil.css">
  <!-- JAVASCRIPT -->
  <script defer src="./assets/Javascript/header.js"></script>
  <script defer src="./assets/Javascript/footer.js"></script>
  <script defer src="./assets/Javascript/profil.js"></script>

  <!-- Lien de la police d'icônes -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body class="bg-violet">

  <!-- Inclusion de l'en-tête -->
  <?php include_once './reusable/header.php'; ?>

  <main class="marginX">


    <!-- SECTION : PROFIL STANDARD -->
    <section class="bg-yellow p-6 m-[2rem] rounded-lg" style="margin-top: 6rem;"">
      <div class="flex flex-col justify-between md:flex-row">

        <!-- PHOTO DE PROFIL ORDINATEUR -->
        <div class="relative flex flex-col items-center  md:hidden">
          <img src="./assets/Images/Profil/Arabesque.svg" alt="Décoration arabesque" class="w-[500px] h-auto absolute">


          <div class="w-36 h-36 md:w-40 md:h-40 rounded-full overflow-hidden border-2 border-black shadow-lg relative">
            <img src="assets/Images/Profil/Icone profil.png" alt="Photo de profil"
              class="w-full h-full object-cover object-center">

            <!-- Bouton Changer photo -->
            <a href="#"
              class="absolute top-[70%] left-1/2 transform w-full -translate-x-1/2 bg-white bg-opacity-55 text-center text-sm font-semibold text-violet py-1 !px-[8px] pb-8 rounded-md hover:bg-opacity-75 transition duration-300">
              Changer photo
            </a>
          </div>

          <a href="#" class="text-sm font-semibold mt-3 underline text-brown hover:">
            Gérer mon compte
          </a>

        </div>

        <div>
          <ul class="font-rosarivo text-[0.9rem]" style="line-height: 2;">
            <li><span style="font-weight: bold;">Pseudo :</span> Matmar</li>
            <li><span style="font-weight: bold;"> Status : </span> Vendeur et Acheteur </li>
            <li><span style="font-weight: bold;">Nom Prénom :</span> M. Martin Martin</li>
            <li><span style="font-weight: bold;">Mail :</span> martin.matin@gmail.com </li>
            <li><span style="font-weight: bold;">Téléphone :</span> 06 12 34 56 78</li>
            <li><span style="font-weight: bold;">Adresse :</span> 12 rue des lilas </li>
            <li><span style="font-weight: bold;">Code postal :</span> 75020</li>
            <li><span style="font-weight: bold;">Ville :</span> Paris</li>


            <!-- METTRE UNE CLASSE HIDDEN EN FONCTION DU ROLE -->
            <div>
              <hr style="border: none; border-top: 1px solid #000; margin: 1rem 0;">
              <li><span style="font-weight: bold;">Nom entreprise :</span> MartinMatin</li>
              <li><span style="font-weight: bold;">Téléphone :</span>06 12 34 56 78</li>
              <li><span style="font-weight: bold;">Adresse :</span> Adresse Aléatoire </li>
              <li><span style="font-weight: bold;">Code postal :</span> 75020</li>
              <li><span style="font-weight: bold;">Ville :</span> Paris</li>
            </div>


          </ul>
        </div>

        <!-- PHOTO DE PROFIL ORDINATEUR -->
        <div class="hidden md:block relative flex-col items-center text-center  ">
          <div
            class="w-36 h-36 md:w-40 md:h-40 rounded-full overflow-hidden border-2 border-gray-500 shadow-lg relative">
            <img src="assets/Images/Profil/Icone profil.png" alt="Photo de profil"
              class="w-full h-full object-cover object-center">

            <!-- Bouton Changer photo -->
            <a href="#"
              class="absolute top-[70%] left-1/2 transform w-full -translate-x-1/2 bg-white bg-opacity-55 text-center text-sm font-semibold text-violet py-1 !px-[8px] pb-8 rounded-md hover:bg-opacity-75 transition duration-300">
              Changer photo
            </a>
          </div>

          <a href="#" class="text-sm font-semibold mt-3 underline text-brown hover:">
            Gérer mon compte
          </a>

        </div>
      </div>
    </section>


    <!-- SECTION : VENDEUR -->
    <section class="mt-5 relative m-5" id="vendeur-section" style="margin-bottom: 10rem;">

      <!-- Mon titre -->
      <div class="flex">
        <h1 class="text-yellow mb-4 font-rosarivo font-bold mr-3">Mes Annonces</h1>
        <i class='bx bx-chevron-up text-yellow border-yellow border-2 rounded-full h-[1.5rem] w-[1.5rem] bg-transparent text-center toggle-chevron'
          style="line-height: 1.4rem; vertical-align: middle; transition: transform 0.3s;"></i>
      </div>


      <!-- MON CONTENU A CACHER -->
      <article class="toggle-content hidden">

        <!-- EN COURS -->
        <article style="margin-bottom: 1.5rem;">

          <!-- Premier fond blanc -->
          <div class="px-6 pb-6 bg-white bg-opacity-10 rounded-lg">
            <h2 class="text-yellow font-rosarivo font-semibold">En cours</h2>

            <!-- Deuxieme fond blanc autour des images et infos -->
            <div class="bg-white bg-opacity-5 rounded-lg relative mx-auto p-6 flex items-center gap-6">

              <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

                <!-- Bouton d'ajout de livre aligné à droite -->

                <!-- Bouton d'ajout de livre aligné à droite -->
                <button
                  class="border-2 border-white rounded-lg w-[80px] h-[120px] flex items-center justify-center hover:bg-violet bg-opacity-30 transition">
                  <i class='bx bx-plus text-white text-4xl'></i>
                </button>


                <!-- Livre 1 -->
                <div
                  class="flex flex-col items-center w-[100px] text-center hover:scale-110 ease-in-out transition-transform">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/Palais-de-roses.jpg" alt="Un palais de roses et d'épines"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">
                    Un palais de roses et d'épines</h2>

                  <p class="text-white text-[8px] text-center mt-0.5">Sarah J. Maas</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Très bon</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">10,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Mis en ligne:</span> 08/11/2024
                  </p>
                </div>

                <!-- Livre 2 (Exemple) -->
                <div
                  class="flex flex-col items-center w-[100px] text-center hover:scale-110 ease-in-out transition-transform">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/1984.jpg" alt="1984"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">1984</h2>
                  <p class="text-white text-[8px] text-center mt-0.5">George Orwell</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Acceptable</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">2,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Mise en ligne :</span> 11/10/2024
                  </p>
                </div>

                <!-- Livre 3 -->
                <div
                  class="flex flex-col items-center w-[100px] text-center hover:scale-110 ease-in-out transition-transform">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/Kevin.jpg" alt="Il faut qu'on parle de Kevin"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">Il faut qu'on parle
                    de Kevin</h2>
                  <p class="text-white text-[8px] text-center mt-0.5">Lionel Shriver</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Bon</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">6,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Mise en ligne :</span> 11/11/2024
                  </p>
                </div>

                <!-- Livre 4 -->
                <div
                  class="flex flex-col items-center w-[100px] text-center hover:scale-110 ease-in-out transition-transform">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/Fatherland.jpg" alt="Fatherland"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">
                    Fatherland</h2>
                  <p class="text-white text-[8px] text-center mt-0.5">Robert Harris</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Bon</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">6,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Mise en ligne :</span> 11/11/2024
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>

        <!-- VOS VENTES -->
        <article style="margin-bottom: 1.5rem;">

          <!-- Premier fond blanc -->
          <div class="px-6 pb-6 bg-white bg-opacity-10 rounded-lg">
            <h2 class="text-yellow font-rosarivo font-semibold">Vos ventes</h2>

            <!-- Deuxieme fond blanc autour des images et infos -->
            <div class="bg-white bg-opacity-5 rounded-lg relative mx-auto p-6 flex items-center gap-6">

              <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

                <!-- Bouton d'ajout de livre aligné à droite -->
                <button
                  class="border-2 border-white rounded-lg w-[80px] h-[120px] flex items-center justify-center hover:bg-violet bg-opacity-30 transition">
                  <i class='bx bx-plus text-white text-4xl'></i>
                </button>


                <!-- Livre 1 -->
                <div class="flex flex-col items-center w-[100px] text-center ">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/Piliers de la Terre.jpg" alt="Les piliers de la Terre"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">Les piliers de la
                    Terre
                  </h2>
                  <p class="text-white text-[8px] text-center mt-0.5">Ken Follet</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Très bon</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">7,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Acheté:</span> 08/11/2024
                  </p>
                </div>

                <!-- Livre 2 -->
                <div class="flex flex-col items-center w-[100px] text-center">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/Meilleure-monde.jpg" alt="Le meilleur des mondes"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">Le meilleur des
                    mondes
                  </h2>
                  <p class="text-white text-[8px] text-center mt-0.5">Adlous Huxley</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Acceptable</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">2,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Acheté le:</span> 06/10/2024
                  </p>
                </div>

              </div>
            </div>
          </div>
        </article>

        <!-- DEMANDES CLIENTS -->
        <article style="margin-bottom: 1.5rem;">

          <!-- Premier fond blanc -->
          <div class="px-6 pb-6 bg-white bg-opacity-10 rounded-lg">
            <h2 class="text-yellow font-rosarivo font-semibold">Demandes clients</h2>

            <!-- Deuxieme fond blanc autour des images et infos -->
            <div class="bg-white bg-opacity-5 rounded-lg relative mx-auto p-6 flex items-center gap-6">

              <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

                <!-- Bouton d'ajout de livre aligné à droite -->
                <button
                  class="border-2 border-white rounded-lg w-[80px] h-[120px] flex items-center justify-center hover:bg-violet bg-opacity-30 transition">
                  <i class='bx bx-plus text-white text-4xl'></i>
                </button>


                <!-- Livre 1 -->
                <div class="flex flex-col items-center w-[100px] text-center ">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/keleana.jpg" alt="KELEANA - L'assassineuse"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">KELEANA -
                    L'assassineuse</h2>
                  <p class="text-white text-[8px] text-center mt-0.5">Je ne sais pas l'autrice</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Très bon</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">10,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Acheté:</span> 08/11/2024
                  </p>
                </div>

              </div>
            </div>
          </div>
        </article>
   

        
      </article>
    </section>



    <!-- SECTION : ACHETEUR -->
    <section class="mt-5 relative m-5 ">

      <!-- Mon titre -->
      <div class="flex">
        <h1 class="text-yellow mb-4 font-rosarivo font-bold mr-3">Mon historique d'achat</h1>
        <i class='bx bx-chevron-up text-yellow border-yellow border-2 rounded-full h-[1.5rem] w-[1.5rem] bg-transparent text-center toggle-chevron'
          style="line-height: 1.4rem; vertical-align: middle; transition: transform 0.3s;"></i>
      </div>


      <!-- MON CONTENU A CACHER -->
      <article class="toggle-content hidden">

        <!-- EN COURS -->
        <article style="margin-bottom: 1.5rem;">

          <!-- Premier fond blanc -->
          <div class="px-6 pb-6 bg-white bg-opacity-10 rounded-lg">
            <h2 class="text-yellow font-rosarivo font-semibold">Cette année</h2>

            <!-- Deuxieme fond blanc autour des images et infos -->
            <div class="bg-white bg-opacity-5 rounded-lg relative mx-auto p-6 flex items-center gap-6">

              <div class="flex overflow-x-auto gap-6 px-4 py-4 scrollbar-hide">

                <!-- Bouton d'ajout de livre aligné à droite -->
                <button
                  class="border-2 border-white rounded-lg w-[80px] h-[120px] flex items-center justify-center hover:bg-violet bg-opacity-30 transition">
                  <i class='bx bx-plus text-white text-4xl'></i>
                </button>


                <!-- Livre 1 -->
                <div div
                  class="flex flex-col items-center w-[100px] text-center hover:scale-110 ease-in-out transition-transform">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/Nouveau-monde.jpg" alt="Un palais de roses et d'épines"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">
                    Du nouveau monde - Tome 1</h2>

                  <p class="text-white text-[8px] text-center mt-0.5">Yusuke Kishi</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Bon</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">12,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Acheté le:</span> 10/11/2024
                  </p>
                </div>

                <!-- Livre 2 -->
                <div
                  class="flex flex-col items-center w-[100px] text-center hover:scale-110 ease-in-out transition-transform">
                  <!-- Image du livre -->
                  <div class="w-[80px] h-[120px] flex-shrink-0">
                    <img src="./assets/Images/Livres/la femme de ménage.jpg" alt="La femme de ménage"
                      class="w-full h-full rounded-md shadow-lg object-cover">
                  </div>

                  <!-- Informations du livre -->
                  <h2 class="text-yellow font-semibold text-center mt-2 text-[10px] leading-tight">La femme de ménage
                  </h2>
                  <p class="text-white text-[8px] text-center mt-0.5">Freida McFadden</p>
                  <div class="flex justify-center items-center gap-1 mt-1 bg-yellow rounded-full px-2 py-1">
                    <img src="./assets/Images/Cards-Livres/Langues/icon-french.png" alt="France"
                      class="w-4 h-4 rounded-full">
                    <span class="text-black font-rosarivo text-[8px] rounded-md">Etat : Acceptable</span>
                  </div>
                  <p class="text-white font-bold text-center text-sm mt-1">4,99€</p>
                  <p class="text-[8px] text-white">
                    <span class="text-semi-bold">Acheté le :</span> 11/10/2024
                  </p>
                </div>

              </div>
            </div>
          </div>
        </article>


      </article>
    </section>



  </main>

  <!-- Inclusion du footer-->
  <?php include_once './reusable/footer.php'; ?>

</body>

</html>