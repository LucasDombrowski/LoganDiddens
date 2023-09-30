let buttons = document.querySelectorAll(".more");
let informations = document.querySelectorAll(".informations");
var heights = [];
for(i=0;i<buttons.length;i++){
    heights.push(informations[i].offsetHeight);
    informations[i].style.maxHeight = "0px";
    buttons[i].addEventListener("click",function(){  
        if(this.offsetParent.classList.contains("hidden")){
            this.offsetParent.classList.remove("hidden");
            this.offsetParent.querySelector(".informations").style.maxHeight = Math.max(...heights) + "px";
        } else {
            this.offsetParent.classList.add("hidden");
            this.offsetParent.querySelector(".informations").style.maxHeight = "0px";
        }
    })
}
