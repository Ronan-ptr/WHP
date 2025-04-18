// Attendre que le DOM soit complètement chargé

document.addEventListener("DOMContentLoaded", function () {
    // Récupérer le formulaire et le tableau
    const form = document.querySelector(".DIV_FRM form");
    const tableBody = document.querySelector("table tbody");
  
    // Écouter la soumission du formulaire
    form.addEventListener("submit", function (e) {
      e.preventDefault();  // Empêcher la soumission classique (action vers Test.php)
  
      // Récupérer les valeurs des champs
      const iso = document.getElementById("ID_ISO").value.trim();
      const name = document.getElementById("ID_nom").value.trim();
      const web = document.getElementById("ID_Web").value.trim();
      const flagInput = document.getElementById("ID_Flag");
  
      // formatage du code iso en majuscule
      const isoUpper = iso.toUpperCase();

      // enregistrer l'image dans le dossier Ressources
      const flag = flagInput.files[0]; // récupérer le fichier image
      const flagName = `${isoUpper}_Flag.png`; // renommer l'image avec le code iso en majuscule
      const flagPath = `Res/${flagName}`; // chemin de l'image

    // Création d'une nouvelle ligne de tableau
    const newRow = document.createElement("tr");

    // Création des cellules <td> et ajout des données correspondantes

    // Cellule ISO
    const cellIso = document.createElement("td");
    cellIso.textContent = isoUpper;
    newRow.appendChild(cellIso);

    // Cellule Flag avec image
    const cellFlag = document.createElement("td");
    const imgFlag = document.createElement("img");
    imgFlag.src = imageUrl;
    imgFlag.alt = `${isoUpper} Flag`;
    imgFlag.classList.add("IMG_Flg");
    cellFlag.appendChild(imgFlag);
    newRow.appendChild(cellFlag);

    // Cellule Nom
    const cellNom = document.createElement("td");
    cellNom.textContent = name;
    newRow.appendChild(cellNom);

    // Cellule Web
    const cellWeb = document.createElement("td");
    cellWeb.textContent = web;
    newRow.appendChild(cellWeb);

    // Ajoute la nouvelle ligne au corps du tableau
    tableBody.appendChild(newRow);

    // Réinitialise le formulaire
    form.reset();
    });
});



      // Un client web ne peut pas enregister directement un fichier sur un serveur. Il faut donc faire une requete au serveur.
      // Un client Web peut envoyer des données au serveur avec la méthode fetch()
      // créer un objet FormData pour envoyer les données au serveur
      const formData = new FormData();
      formData.append("iso", isoUpper);
      formData.append("name", name);
      formData.append("web", web);
      formData.append("flag", flag);

      // envoyer les données au serveur
      fetch("Test.php", {
        method: "POST",
        body: formData
      })

        .then(response => response.text())
        .then(data => console.log(data));
      

        