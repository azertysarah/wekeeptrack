
let answer1=document.querySelector('.answer1')
let answer2=document.querySelector('.answer2')
let answer3=document.querySelector('.answer3')
let answer4=document.querySelector('.answer4')
let background1=document.querySelector('.background1')
let background2=document.querySelector('.background2')
let background3=document.querySelector('.background3')
let background4=document.querySelector('.background4')
let question=document.getElementById('question')
let button=document.getElementById('button')
let confirm=document.getElementById('confirm')
let correction=document.getElementById('correction')
let logo=document.querySelector('.logo')
function logochange(){
    
    logo.setAttribute('src','photo/logo.3.png');
}
function logoback(){
    logo.setAttribute('src','photo/logo.png')
}




let a='0'
let b=0
let score=0
let showscore=document.getElementById('score')
function click1()
{
    if(a==='0'){
        answer1.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        answer4.style.color="#70e000"/*la réponse est vraie*/
        
        button.style.opacity="1"
        correction.textContent='Animal reserves started in medieval times for hunting reasons. Real animal reserve for the sole purpose of protecting the animals for the protection of biodiversity started in th 19th century'
        
    }else if(a==="1") {
        answer1.style.backgroundColor="#32502E"
        b=b-2
        confirm.style.opacity=1
    }
    else if(a==="2"){
        
        answer1.style.color="#70e000"/*la réponse est vraie*/
        
        button.style.opacity="1"
        correction.textContent="It is generally noticed that the heart rate varies according to the size of the animals. Thus small animals have a high heart rate, which is not the case with large animals."
        score=score+1
    }else if(a==="3"){
        answer1.style.backgroundColor="#32502E"
        b=b+1
        confirm.style.opacity=1
    }

}
function click2()
{
    if(a==='0'){
        answer2.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        answer4.style.color="#70e000"/*la réponse est vraie*/
        
        button.style.opacity="1"
        correction.textContent='Animal reserves started in medieval times for hunting reasons. Real animal reserve for the sole purpose of protecting the animals for the protection of biodiversity started in th 19th century'
    }else if(a==="1") {
        
        answer2.style.backgroundColor="#32502E"
        b=b+1
        confirm.style.opacity="1"
        
    
    }
        
    
    else if(a==="2"){
        
        answer1.style.color="#70e000"/*la réponse est vraie*/
        answer2.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        button.style.opacity="1"
        correction.textContent="It is generally noticed that the heart rate varies according to the size of the animals. Thus small animals have a high heart rate, which is not the case with large animals."
    }else if(a==="3"){
        answer2.style.backgroundColor="#32502E"
        b=b+1
        confirm.style.opacity=1
    }


}
function click3()
{
    if(a==='0'){
        answer3.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        answer4.style.color="#70e000"/*la réponse est vraie*/
        
        button.style.opacity="1"
        correction.textContent='Animal reserves started in medieval times for hunting reasons. Real animal reserve for the sole purpose of protecting the animals for the protection of biodiversity started in th 19th century'
    }else if(a==="1"){
        answer3.style.backgroundColor="#32502E"
        b=b-2
        confirm.style.opacity="1"
    }else if(a==="2"){
        
        answer1.style.color="#70e000"/*la réponse est vraie*/ 
        answer3.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        button.style.opacity="1"
        correction.textContent="It is generally noticed that the heart rate varies according to the size of the animals. Thus small animals have a high heart rate, which is not the case with large animals."
    }else if(a==="3"){
        answer3.style.backgroundColor="#32502E"
        b=b+1
        confirm.style.opacity=1
    }

}
function click4()
{
    if(a==='0'){
        
        answer4.style.color="#70e000"/*la réponse est vraie*/
        
        button.style.opacity="1"
        correction.textContent='Animal reserves started in medieval times for hunting reasons. Real animal reserve for the sole purpose of protecting the animals for the protection of biodiversity started in th 19th century'
        score=score+1
    }else if(a==="1"){
        answer4.style.backgroundColor="#32502E"
        b=b+1
        confirm.style.opacity="1"
    
    }else if(a==="2"){
        
        answer1.style.color="#70e000"/*la réponse est vraie*/
        answer4.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        button.style.opacity="1"
        correction.textContent="It is generally noticed that the heart rate varies according to the size of the animals. Thus small animals have a high heart rate, which is not the case with large animals."
    }else if(a==="3"){
        answer4.style.backgroundColor="#32502E"
        b=b-3
        confirm.style.opacity=1
    }

}
function confirmclicked()
{
    if (a==="1"){
        
        answer1.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        answer3.style.color="rgb(207, 5, 5)"/*la réponse est fausse*/
        answer2.style.color="#70e000"/*la réponse est vraie*/
        answer4.style.color="#70e000"/*la réponse est vraie*/
        button.style.opacity="1"
        confirm.style.opacity="0"
        if (b>=1){
            score=score+b
        }
    }else if (a==="3"){
        
        answer1.style.color="#70e000"/*la réponse est vraie*/
        answer3.style.color="#70e000"/*la réponse est vraie*/
        answer2.style.color="#70e000"/*la réponse est vraie*/
        answer4.style.color="red"
        button.style.opacity="1"
        confirm.style.opacity="0"
        if (b>=1){
            score=score+b
        }
    }
}

function buttonclicked()
{
    
    /*retourne le style de départ*/
    answer1.style.color="white"
    answer2.style.color="white"
    answer3.style.color="white"
    answer4.style.color="white"
    correction.textContent=''
    button.style.opacity="0"/*jusqu'ici*/

    if(a==="0"){
        answer1.textContent= "Nature reserve are usually smaller"
        answer2.textContent= "Nature reserve are usually bigger"
        answer3.textContent= "Nature reserve are less protected"
        answer4.textContent= "Nature reserve are more protected"
        question.textContent="What is the difference between a nature reserve and a national park?   Multiple answers are possible"
        a="1"
    }else if(a==="1"){
        answer1.style.backgroundColor="rgba(0,0,0,0)"
        answer2.style.backgroundColor="rgba(0,0,0,0)"
        answer3.style.backgroundColor="rgba(0,0,0,0)"
        answer4.style.backgroundColor="rgba(0,0,0,0)"
        question.textContent=" Which animal has the highest heart rate?"
        answer1.textContent= "Mice"
        answer2.textContent= "Elephants"
        answer3.textContent= "Whales"
        answer4.textContent= "Humans"
        a="2"
        
    }else if(a==="2"){
        question.textContent="What does a nature reserve seek to protect?   Multiple answers are possible"
        answer1.textContent= "Flora"
        answer2.textContent= "Fauna"
        answer3.textContent= "Geological resources"
        answer4.textContent= "Local human population"
        a="3"
    }else if (a==="3"){
        answer1.style.backgroundColor="rgba(0,0,0,0)"
        answer2.style.backgroundColor="rgba(0,0,0,0)"
        answer3.style.backgroundColor="rgba(0,0,0,0)"
        answer4.style.backgroundColor="rgba(0,0,0,0)"
        
        background1.style.backgroundColor="rgba(0,0,0,0)"
        background2.style.backgroundColor="rgba(0,0,0,0)"
        background3.style.backgroundColor="rgba(0,0,0,0)"
        background4.style.backgroundColor="rgba(0,0,0,0)"

        answer1.textContent= ""
        answer2.textContent= ""
        answer3.textContent= ""
        answer4.textContent= ""
        
            
        
        showscore.textContent= "your score is: "+score
        a="4"
        
    }

    
}



