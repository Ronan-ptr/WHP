
// Afficher NAV_side

    // Creation de deux constantes 
    const ShowNAVside = document.querySelector('.ACT_NAV_side'); // associe constante à class ACT (action)
    const StateNAVside = document.querySelector('.NAV_side'); // associe constante à la NAV_side

    // Achtions sur constantes
    ShowNAVside.addEventListener('click', () => {StateNAVside.classList.toggle('active');});
    // Ecoute la constante showNavside, quand clic bascule la constante StateNAVside dans un état opposée (Bouton On/Off)
    // Toggle = Basculer à la valeur oppose