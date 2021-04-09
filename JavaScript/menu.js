var cheminComplet = document.location.href;
var nomDuFichier = cheminComplet.substring(cheminComplet.lastIndexOf( "/" )+1 );

const menuLien = document.querySelectorAll("a");
console.log(menuLien);

const arrayMenuLien = [...menuLien];

arrayMenuLien.map((lien, index) => {
    if(lien.getAttribute("href") == nomDuFichier){
         document.querySelectorAll("a")[index].className += "selected"
    }
});