document.addEventListener('DOMContentLoaded', function() {
    // Récupérer les éléments
    const editButton = document.getElementById('editButton');
    const editForm = document.getElementById('editCountryForm');

    // Quand on clique sur EDIT
    editButton.addEventListener('click', function() {
        // Récupérer les valeurs actuelles de la page
        const currentData = {
            nom: document.querySelector('.country-title').textContent.split(' ')[0],
            capitale: document.querySelector('td h3').textContent,
            chef: document.querySelectorAll('td h3')[1].textContent,
            devise: document.querySelectorAll('td h3')[2].textContent
        };

        // Pré-remplir le formulaire
        document.getElementById('nom').value = currentData.nom;
        document.getElementById('capitale').value = currentData.capitale;
        document.getElementById('chef').value = currentData.chef;
        document.getElementById('devise').value = currentData.devise;

        // Afficher le formulaire
        editForm.style.display = 'block';
    });

    // Ajouter un bouton pour fermer le formulaire
    const closeButton = document.createElement('button');
    closeButton.textContent = 'X';
    closeButton.className = 'close-form';
    editForm.insertBefore(closeButton, editForm.firstChild);

    closeButton.addEventListener('click', function() {
        editForm.style.display = 'none';
    });
}); 