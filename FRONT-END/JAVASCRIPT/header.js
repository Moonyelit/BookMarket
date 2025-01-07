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