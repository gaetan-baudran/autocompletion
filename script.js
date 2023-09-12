const search = document.getElementById("search-bar");
const result = document.getElementById("result");
const result2 = document.getElementById("result2");

if (search) {
  search.addEventListener("keyup", () => {
    result.innerHTML = "";
    if (search.value != "") {
      fetch("recherche.php/?search=" + search.value)
        .then((response) => response.json())
        .then((data) => {
          data.forEach((element) => {
            let e = document.createElement("p");
            
  
            // Ajoutez un lien vers element.php
            let link = document.createElement("a");
            link.href = "element.php?id=" + element.id;
            link.textContent = element.nom;
  
            e.appendChild(link); // Ajoutez le lien à l'élément <p>
  
            result.appendChild(e);
          });
        })
        .catch((error) => {
          console.error("Une erreur s'est produite lors de la récupération des données : ", error);
        });
    }
  });
}




if (search) {
  search.addEventListener("keyup", () => {
    result2.innerHTML = "";
    if (search.value != "") {
      //   console.log("auto.php/?search=" + search.value);
      fetch("recherche.php/?search2=" + search.value)
        .then((response) => {
          return response.json();
        })
        .then((data) => {
            console.log(data);
          data.forEach((element) => {
            let e = document.createElement("p");
            
            e.innerHTML =
              '<a href= "element.php?id=' + element.id + '">' + element.nom;
             
            result2.appendChild(e);
          });
        });
    }
  });
}
// console.log(window.location.href);
// désactiver la touche ENTREE

window.addEventListener("keypress", function (event) {
  if (event.key === "Enter") {
      event.preventDefault();
      return false;
  }
});
