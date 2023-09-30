const rightArrow = document.getElementById("rightArrow");
const leftArrow = document.getElementById("leftArrow");
const caroussel = document.getElementById("caroussel");
const count = caroussel.getElementsByClassName("card");
var index = 0;
let size = 33;
if(window.matchMedia("(max-width: 1000px)").matches){
    size = 50;
} 
leftArrow.style.opacity = 0.5;
rightArrow.addEventListener("click",function(){
        index ++;
        if(index >= (count.length - Math.round(100/size))){
            index = count.length - Math.round(100/size);
            rightArrow.style.opacity = 0.5;
        }
        leftArrow.style.opacity = 1;
        caroussel.style.transform = "translateX(" + index*(-size) + "%)";

})
leftArrow.addEventListener("click",function(){
    index --;
    if(index < 0){
        index = 0;
    }
    if(index<=0){
        leftArrow.style.opacity = 0.5;
    }
    rightArrow.style.opacity = 1;
    caroussel.style.transform = "translateX(" + index*(-size) + "%)";

})
window.addEventListener("resize",function(){
    if(this.matchMedia("(max-width: 1000px)").matches){
        size = 50;
        caroussel.style.transform = "translateX(0%)";
        leftArrow.style.opacity = 0.5;
    } else {
        size = 33;
    }
})