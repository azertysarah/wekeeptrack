let more=document.querySelector('.more')
let moretext1=document.querySelector('#moretext1')
let moretext2=document.querySelector('#moretext2')
let moretext3=document.querySelector('#moretext3')
let manage1=document.querySelector('#manage1')
let manage2=document.querySelector('#manage2')
let manage0=document.querySelector('.manage')

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
    manage2.textContent="add accounts"
        
}
function manageback(){
    manage0.style.height="2.5vw"
    manage0.style.width="7vw"
    manage1.textContent=""
    manage2.textContent=""
    
}