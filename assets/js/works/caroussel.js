
let caroussel = document.getElementById("caroussel");
let images = caroussel.getElementsByTagName("img");
let imageSize = (images[1].clientWidth / caroussel.clientWidth) * 100;
if(images.length < 3){
  while(images.length < 3){
    caroussel.innerHTML += "<img src='" + images[0].src + "'>";
  }
}
images = caroussel.getElementsByTagName("img");
let translateValue = imageSize - (100-imageSize)/2;
document.getElementById("leftArrow").style.left = (translateValue + 5) + "%";
document.getElementById("rightArrow").style.left = (100 - (translateValue + 5)) + "%";
images[1].style.opacity = 1;
caroussel.style.transform = "translateX(-"+translateValue+"%)";

    function slideLeft(){
        document.getElementById("rightArrow").style.display = "none";
        document.getElementById("leftArrow").style.display = "none";
        images = caroussel.getElementsByTagName("img");
        images[1].style.opacity = 0.5;
        caroussel.innerHTML = "<img src='" + images[images.length - 1].src + "'>" + caroussel.innerHTML;
        caroussel.style.transform = "translateX(-" + (imageSize + translateValue)  + "%)";
        setTimeout(() => {
            caroussel.style.transition = "all 0.5s"; 
            caroussel.style.transform = "translateX(-" + translateValue +"%)";
        }, 100);
        setTimeout(() => {
            images[images.length-1].remove();
            caroussel.style.transition = "none";
            images[1].style.opacity = 1;
            document.getElementById("rightArrow").style.display = "flex";
            document.getElementById("leftArrow").style.display = "flex";
        }, 600);
    }

    function slideRight(){
        document.getElementById("rightArrow").style.display = "none";
        document.getElementById("leftArrow").style.display = "none";
        images = caroussel.getElementsByTagName("img");
        images[1].style.opacity = 0.5;
        caroussel.innerHTML = caroussel.innerHTML + "<img src='" + images[0].src + "'>";
        setTimeout(() => {
            caroussel.style.transition = "all 0.5s";
            caroussel.style.transform = "translateX(-" + (imageSize + translateValue)  + "%)";
        }, 100);
        setTimeout(() => {
            images[0].remove();
            caroussel.style.transition = "none";
            caroussel.style.transform = "translateX(-" + translateValue +"%)";
            images[1].style.opacity = 1;
            document.getElementById("rightArrow").style.display = "flex";
            document.getElementById("leftArrow").style.display = "flex";
        }, 600);
    }

    const autoSlider = setInterval(slideRight, 2000);
      caroussel.addEventListener("mouseover",function(){
        clearInterval(autoSlider);
    });
  
