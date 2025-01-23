  <!-- FOOTER -->
  <footer class="relative">
    <!-- Image de fond -->
    <img src="./assets/Images/Fond/Newspaper.png" class="absolute top-0 left-0 w-full h-[28rem] object-cover scale-10"
      alt="Fond">

    <!-- Contenu superposé -->
    <footer class="relative">
      <!-- Image de fond -->
      <img src="./assets/Images/Fond/Newspaper.png" class="absolute top-0 left-0 w-full h-[28rem] object-cover scale-10"
        alt="Fond">

      <!-- Contenu superposé -->
      <div class="relative flex flex-col py-1 text-black font-rosarivo" style="margin-top: 4rem;padding : 0% 5%;">
        <div class=border-black py-4" style="padding: 0% 5%;">
          <div class="mb-4">
            <button class="flex justify-between w-full items-center text-xl font-bold"
              onclick="toggleSection('about')">
              A PROPOS <i id="arrow-about" class='bx bx-chevron-down'></i>
            </button>
            <div id="about" class="collapsible mt-2 text-sm">
              <p>BookMarket est la plateforme qui offre une seconde vie à vos livres.</p>
              <p>Notre mission est de revaloriser les livres d’occasion en proposant à chacun un service simple et
                transparent.</p>
            </div>
          </div>
          <div class="mb-4">
            <button class="flex justify-between w-full items-center text-xl font-bold"
              onclick="toggleSection('links')">
              LIENS IMPORTANTS <i id="arrow-links" class='bx bx-chevron-down'></i>
            </button>
            <div id="links" class="collapsible mt-2 text-sm">
              <ul class="list-disc pl-5">
                <li>Vendre ses livres</li>
                <li>A propos</li>
                <li>Comment acheter des livres d'occasion</li>
                <li>Livres d'occasion</li>
                <li>Blog</li>
                <li>Aide</li>
              </ul>
            </div>
          </div>
          <div class="mb-4">
            <button class="flex justify-between w-full items-center text-xl font-bold"
              onclick="toggleSection('policies')">
              POLITIQUES <i id="arrow-policies" class='bx bx-chevron-down'></i>
            </button>
            <div id="policies" class="collapsible mt-2 text-sm">
              <ul class="list-disc pl-5">
                <li>Conditions Générales</li>
                <li>Mentions Légales</li>
                <li>Politique de Confidentialité</li>
                <li>Politique d'Expédition</li>
                <li>Retours et remboursements</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- En bas bas -->
        <div class="flex justify-between mt-6 text-sm bottom-0" style="margin-top: 2rem;">
          <p>&copy; 2024 BookMarket<br>Paris, France</p>
          <div class="flex flex-col">
            <span>Nous suivre</span>
            <div class="flex">
              <i class='bx bxl-facebook text-xl mx-1'></i>
              <i class='bx bxl-twitter text-xl mx-1'></i>
              <i class='bx bxl-instagram text-xl mx-1'></i>
            </div>
          </div>
          <div class="flex flex-col text-center" style="margin-bottom: 1rem;">
            <span>Nous acceptons</span>
            <div class="flex gap-1">
              <img src="./assets/Images/Paiement-Logo/logo-CB.svg" alt="CB Logo" class="inline"
                style="width:3rem;height: 2rem;">
              <img src="./assets/Images/Paiement-Logo/logo-VISA.svg" alt="VISA Logo" class="inline w-8"
                style="width:3rem;height: 2rem;">
              <img src="./assets/Images/Paiement-Logo/logo-MC.svg" alt="MC Logo" class="inline w-8"
                style="width:3rem;height: 2rem;">

            </div>
          </div>
        </div>
      </div>
      </div>
    </footer>