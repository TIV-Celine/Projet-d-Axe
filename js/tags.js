const ul = document.querySelector("ul"),
input = ul.querySelector("input");

let tags = [];

function createTag(){
    //supprimer toutes les balise li avant d'ajouter afin qu'il n'y ait pas de doublons dans le tag
    ul.querySelectorAll("li").forEach(li => li.remove());
    tags.slice().reverse().forEach(tag => {
        let liTag = `<li>${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li> `;
        ul.insertAdjacentHTML("afterbegin", liTag); //insérer ou ajouter li à l'intérieur de la balise ul
    })
}

function addTag(e){
    if(e.key == "Enter"){
        let tag = e.target.value.replace(/\s+/g, ' '); //suppression des espaces indésirables de la balise utilisateur
        if(tag.length > 1 && !tags.includes(tag)){ //si la longuer de la balise est supérieure à 1 et que la balise n'existe pas déjà
            tag.split(',').forEach(tag => { //séparer chaque balise de la virgule
              tags.push(tag); //ajouter chaque balise à l'intérieur du tableau
              console.log(tags)
              createTag();
            });
        }
        e.target.value = "";
    }
}

input.addEventListener("keyup", addTag);
 
 
 