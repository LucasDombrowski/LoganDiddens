var inputs = document.getElementById("skills").getElementsByTagName("input");
for(i=0;i<inputs.length;i++){
    inputs[i].addEventListener("input",function(){
        var labels = document.getElementById("skills").getElementsByTagName("label");
        for(j = 0;j<labels.length;j++){
            labels[j].classList.remove("active");
        }
        this.labels[0].classList.add("active");
    })
}