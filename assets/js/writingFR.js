const placeholder = document.getElementById("typing");
const words = ["graphiste", "photographe", "communicant","monteur", "analyste"];
var index = 0;
function type(word){
    var i = 0;
    const writing = setInterval(()=>{
        placeholder.innerHTML += word.charAt(i);
        i ++;
        if(i>=word.length){
            clearInterval(writing);
            setTimeout(erase, 1000);
        }
    }, 100)

}

function erase(){
    const deleting = setInterval(() => {
        placeholder.innerHTML = placeholder.innerHTML.slice(0,-1);
        if(placeholder.innerHTML.length <= 0){
            clearInterval(deleting);
            index++;
            if(index>=words.length){
                index = 0;
            }
            type(words[index])
        }
    
        
    }, 50);

}

function totalTime(word){
    return (word.length*200) + 1000 + (word.length*50);
}

function sumOfTime(words){
    var total = 0;
    for(i=0;i<words.length;i++){
        total += totalTime(words[i]);

    }
    return total;
}



type(words[0]);