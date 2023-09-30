let animatedElements = document.querySelectorAll(".animated");
let titles = document.querySelectorAll("section:not(#home) h1");
window.scrollTo(0,10);
for(let animatedElement of animatedElements){
    window.addEventListener("scroll",()=>{
        if(window.innerHeight/2 > animatedElement.getBoundingClientRect().top){
            animatedElement.classList.remove("animated");
        }

    })
}

for(let title of titles){
    window.addEventListener("scroll",()=>{
        if(window.innerHeight/2 > title.getBoundingClientRect().top){
            title.style.animation = "fade-in-up 1s forwards";
        }

    })
}