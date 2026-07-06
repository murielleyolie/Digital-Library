let querry = document.querySelectorAll('.defile p');
let header = document.getElementById('header');
let n = 0;
let p = querry.length;
//     console.log("heloooooooooooooooooo")
//     if(n<p-1){ 
//         querry[n].style.display='transparent';
//         n++;
//         querry[n].style.display='block';
//     }
    

// function changeLeft()
// {
//     if(n !== 0){
//         querry[n].style.display='transparent';
//         n--;
//         querry[n].style.display='block';
//     }
// }
let search = document.querySelector('.proposals');
function clicks()
{
    search.style.display='block';
}

function insclick()
{
    body.style.filter='blur()';
}
// let u = "images"+querry[0].innerText;
let i = 6;
let un = document.querySelector('.un');
let deux = document.querySelector('.deux');
let trois = document.querySelector('.trois');
let quatre = document.querySelector('.quatre');
function changeUn()
{
    deux.style.backgroundColor = 'transparent';
    trois.style.backgroundColor = 'transparent';
    quatre.style.backgroundColor = 'transparent';
    header.style.backgroundImage = "url(../../../Tpe_6/frontend/assets/images/ens1.jpg)";
    un.style.backgroundColor = 'rgb(237,160,46)';
}
function changeDeux()
{
    un.style.backgroundColor = 'transparent'; 
    trois.style.backgroundColor = 'transparent';
    quatre.style.backgroundColor = 'transparent';
    header.style.backgroundImage = "url(../../../Tpe_6/frontend/assets/images/ens2.jpg)";
    deux.style.backgroundColor = 'rgb(237,160,46)';
}
function changeTrois()
{
    deux.style.backgroundColor = 'transparent';
    un.style.backgroundColor = 'transparent';
    quatre.style.backgroundColor = 'transparent';
    header.style.backgroundImage = "url(../../../Tpe_6/frontend/assets/images/ens3.jpg)";
    trois.style.backgroundColor = 'rgb(237,160,46)';
}
function changeQuatre()
{
    deux.style.backgroundColor = 'transparent';
    trois.style.backgroundColor = 'transparent';
    un.style.backgroundColor = 'transparent';
    header.style.backgroundImage = "url(../../../Tpe_6/frontend/assets/images/ens4.jpg)";
    quatre.style.backgroundColor = 'rgb(237,160,46)';
}
// alert('heloo')
// alert(querry[1].innerText);