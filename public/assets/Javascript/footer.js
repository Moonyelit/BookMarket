// Fonction pour basculer la visibilité des sections du footer avec animation de glissement
function toggleSection(section) {
    const element = document.getElementById(section);
    const arrow = document.getElementById('arrow-' + section);

    if (element.classList.contains('open')) {
        // Cacher la section
        element.classList.remove('open');
        arrow.classList.remove('rotate-180');
    } else {
        // Fermer toutes les autres sections
        document.querySelectorAll('.collapsible').forEach(el => {
            el.classList.remove('open');
        });

        document.querySelectorAll('.bx-chevron-down').forEach(icon => {
            icon.classList.remove('rotate-180');
        });

        // Afficher la section sélectionnée
        element.classList.add('open');
        arrow.classList.add('rotate-180');
    }
}
