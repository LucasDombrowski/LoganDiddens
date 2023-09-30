var inputs = document.getElementById("works").getElementsByTagName("input");
let phone = document.getElementById("phone");
for(i=0;i<inputs.length;i++){
    inputs[i].addEventListener("input",function(){
        var labelsList = document.getElementById("works").getElementsByTagName("label");
        phone.getElementsByTagName("span")[0].innerHTML = this.labels[0].innerHTML;
        for(j=0;j<labelsList.length;j++){
            labelsList[j].classList.remove("active");
        }
        
        this.labels[0].classList.add("active");
        this.labels[1].classList.add("active");
        phone.classList.remove("active");
    });
}


phone.addEventListener("click",function(){
    if(phone.classList.contains("active")){
        phone.classList.remove("active");
    } else {
        phone.classList.add("active");

    }
    
})