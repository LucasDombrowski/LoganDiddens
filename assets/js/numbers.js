let container = document.querySelector("#numbers");
let numbers = document.querySelectorAll("#numbers span");
let seen = false;

function counter(number, i = 0){
    let target = number.dataset.count;
    if(i<=target){
        number.innerHTML = i;
        console.log(i);
        i++;
        setTimeout(counter,1500/target,number,i);
    } else {
        return;
    }

}

window.addEventListener("scroll",()=>{
    if(scrollY > (container.offsetTop - container.offsetHeight - window.innerHeight/2) && !seen){
        for(let number of numbers){
            counter(number);
        }
        seen = true;
    }
})
