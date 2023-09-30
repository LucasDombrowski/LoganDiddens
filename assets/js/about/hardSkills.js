let descriptions = document.getElementById("skills").getElementsByClassName("description");
let descriptionHeights = [];
for(let description of descriptions){
    descriptionHeights.push(description.offsetHeight);
}
for(let description of descriptions){
    description.style.minHeight = Math.max(...descriptionHeights) + "px";
}