var intervalID = setInterval(imgchange,5000);

let img1=document.querySelector('.img1')
let more=document.querySelector('.more')

let moretext1=document.querySelector('#moretext1')
let moretext2=document.querySelector('#moretext2')
let moretext3=document.querySelector('#moretext3')
let manage1=document.querySelector('#manage1')
let manage2=document.querySelector('#manage2')
let manage0=document.querySelector('.manage')

let logo1=document.querySelector('#logoqm')
let logo2=document.querySelector('#logohr')
let logo3=document.querySelector('#logobio')
let text1=document.querySelector('#text1')
let text2=document.querySelector('#text2')
let text3=document.querySelector('#text3')
let info1=document.querySelector('#info1')
let info2=document.querySelector('#info2')
let info3=document.querySelector('#info3')

let a=0
function imgchange(){
    
    if(a===0) {
        

        img1.setAttribute('src','photo/zebre.4.png')
        a=1
        
    }else if (a===1){
        img1.setAttribute('src','photo/elephant.7.jpg')
        a=2
    }else {
        img1.setAttribute('src','photo/elephant.6.jpeg')
        a=0
    }
    
} 



function sizechange(){
    more.style.height="15vw"
    more.style.width="10vw"
    
    moretext1.textContent="contact"
    moretext2.textContent="manage your account"
    moretext3.textContent="GCU"    
}
function sizereturn(){
    more.style.height="2.5vw"
    more.style.width="3.4vw"
    moretext1.textContent=""
    moretext2.textContent=""
    moretext3.textContent=""
}

function manage(){
    manage0.style.height="15vw"
    manage0.style.width="13vw"
    
    manage1.textContent="Manage accounts"
    manage2.textContent="Add accounts"
        
}
function manageback(){
    manage0.style.height="2.5vw"
    manage0.style.width="7vw"
    manage1.textContent=""
    manage2.textContent=""
    
}



function logochange1(){
    logo1.setAttribute('src','photo/question-mark.2.png')
    text1.style.backgroundColor="rgb(51,51,51)"
    text1.style.color="#fff"
}
function logochange2(){
    logo2.setAttribute('src','photo/heartrate.2.png')
    text2.style.backgroundColor="rgb(51,51,51)"
    text2.style.color="#fff"
}
function logochange3(){
    logo3.setAttribute('src','photo/bio.2.png')
    text3.style.backgroundColor="rgb(51,51,51)"
    text3.style.color="#fff"
}


function textclick1(){
    info1.style.opacity="0.8"
    
}
function textclick2(){
    info2.style.opacity="0.8"
    
}
function textclick3(){
    info3.style.opacity="0.8"
    
}


function logoback1(){
    logo1.setAttribute('src','photo/question-mark.png')
    text1.style.backgroundColor="inherit"
    text1.style.color="rgb(51,51,51)"
    info1.style.opacity="0"
}
function logoback2(){
    logo2.setAttribute('src','photo/heartrate.png')
    text2.style.backgroundColor="inherit"
    text2.style.color="rgb(51,51,51)"
    info2.style.opacity="0"
}
function logoback3(){
    logo3.setAttribute('src','photo/bio.png')
    text3.style.backgroundColor="inherit"
    text3.style.color="rgb(51,51,51)"
    info3.style.opacity="0"
}

