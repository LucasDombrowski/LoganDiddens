let cards = document.getElementsByClassName("card");
for(let card of cards){
    card.addEventListener("click",()=>{
    card.getElementsByTagName("div")[0].getElementsByTagName("div")[0].style.opacity = 1;
    card.querySelector("h4").style.display = "none";

    });
}