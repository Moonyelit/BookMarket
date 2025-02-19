// MENU BURGER
const menuToggle = document.querySelector('#menu-icon');
const menu = document.getElementById('menu');

menuToggle.addEventListener('click', () => {
  menu.classList.toggle('-translate-x-full');

  menuToggle.classList.toggle('rotate-90');

  if (menu.classList.contains('-translate-x-full')) {
    menuToggle.classList.remove('bx-x');
    menuToggle.classList.add('bx-menu');
  } else {
    menuToggle.classList.remove('bx-menu');
    menuToggle.classList.add('bx-x');
  }
});

// OVERLAY MENU BURGER
overlay.addEventListener('click', () => {
    menu.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
  });


// BARRE DE CONNEXION
document.addEventListener('DOMContentLoaded', () => {
  const userIcon = document.getElementById('user-icon');
  const loginForm = document.getElementById('login-form');
  const closeLoginForm = document.getElementById('close-login-form');
  const logoutOption = document.getElementById('logout-option');
  const logoutButton = document.getElementById('logout-button');

  let isLoggedIn = false; // Remplacer par la vérification réelle de l'état de connexion

  userIcon.addEventListener('click', () => {
    if (isLoggedIn) {
      toggleSlide(logoutOption);
    } else {
      toggleSlide(loginForm);
    }
  });

  closeLoginForm.addEventListener('click', () => {
    toggleSlide(loginForm);
  });

  logoutButton.addEventListener('click', () => {
    // Logique de déconnexion
    isLoggedIn = false;
    toggleSlide(logoutOption);
    alert('Déconnecté avec succès');
  });

  // Fonction pour gérer l'animation de glissement
  function toggleSlide(element) {
    if (element.classList.contains('hidden')) {
      element.classList.remove('hidden');
      requestAnimationFrame(() => {
        element.style.transform = 'translateY(0)';
        element.style.opacity = '1';
        element.style.transition = 'transform 0.5s ease, opacity 0.5s ease';
      });
    } else {
      element.style.transform = 'translateY(-100%)';
      element.style.opacity = '0';
      element.style.transition = 'transform 0.5s ease, opacity 0.5s ease';
      setTimeout(() => {
        element.classList.add('hidden');
        element.style.transition = '';
      }, 500); // Délai correspondant à la durée de l'animation
    }
  }
});
