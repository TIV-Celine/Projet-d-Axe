const ul = document.querySelector("ul"),
input = ul.querySelector("input");

function addTag(e) {
    if(e.key == "Enter"){
        let tag = e.target.value.replace(/\s+/g, ' ');
        console.log(e.target.value);
    }
}

input.addEventListener("keyup", addTag);