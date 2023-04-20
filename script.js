const search = document.getElementById("search-bar");
const result = document.getElementById("result");
const result2 = document.getElementById("result2");

if (search) {
  search.addEventListener("keyup", () => {
    result.innerHTML = "";
    if (search.value != "") {
      //   console.log("recherche.php/?search=" + search.value);
      fetch("recherche.php/?search=" + search.value)
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          data.forEach((element) => {
            let e = document.createElement("p");
            
            e.innerHTML =
              '<a href= "element.php?id=' + element.id + '">' + element.nom;
             
            result.appendChild(e);
          });
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
