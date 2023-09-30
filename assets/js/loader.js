let loader = document.getElementById("loader");
document.addEventListener("DOMContentLoaded",()=>{
    setTimeout(()=>{
        loader.remove();
        if(window.location.href.split('/').reverse()[0][0] == "#"){
            window.location.href = window.location.href.split('/').reverse()[0];
        }
    } ,2000);
});