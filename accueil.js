var intervalID = setInterval(imgchange,5000);
    

let img1=document.querySelector('.img1')
let img2=document.querySelector('.img2')
let img3=document.querySelector('.img3')
let opacity = "1"
let opacity2 ="0"
function imgchange(){
    
    if(opacity === '1') {
        img1.style.opacity="0"
        img2.style.opacity="1"
        opacity="0"
        opacity2="1"
    }else if (opacity2 ==='1'){
        img2.style.opacity="0"
        img3.style.opacity="1"
        opacity2="0"
    }else {
        img3.style.opacity="0"
        img1.style.opacity="1"
        opacity="1"
    }
    
} 
let logo=document.querySelector('.logo')
function logochange(){
    
    logo.setAttribute('src','photo/logo.png');
}
function logoback(){
    logo.setAttribute('src','photo/logo.3.png')
}


