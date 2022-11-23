
// image slider code

let i=0;
let images = ["banner.jpg","person.png","blue_iphone.jpg","black_iphone.jpg"];
let img = document.getElementById("product_img");
let imgnum = document.getElementById("img_number");

function prev_img(){
    i--;

    if(i==-1){
        i= images.length-1;
        imgnum.innerHTML= i+1;
        img.src = images[i];
    }else{
        imgnum.innerHTML= i+1;
        img.src = images[i];
    }
}

function next_img(){
    i++;

    if(i==images.length){
        i=0;
        imgnum.innerHTML= i+1;
        img.src = images[i];
    }else{
        imgnum.innerHTML= i+1;
        img.src = images[i];
    }
}

// end of image slider code
