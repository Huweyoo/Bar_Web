

var x = document.querySelectorAll(".image-box");

var count = 0;

setInterval(()=>{

    if(count<x.length){
        x[count].style.display = "block";
        x[count].classList += " animate";
        if (count != 0 ) {
            x[count-1].style.display = "none";
            x[count-1].classList -= " animate";
        }

        count++;
    }else{
        x[count-1].style.display = "none";
        x[count-1].classList -= " animate";

        count = 0;
        x[count].style.display = "block";
        x[count].classList += " animate";
    }
}, 3000)


