const ul = document.querySelector("ul"),
input = ul.querySelector("input");

function addTag(e){
    if(e.key == "Enter"){
        console.log(e.target.value);
    }
}
input.addEventListener("keyup", addTag);
