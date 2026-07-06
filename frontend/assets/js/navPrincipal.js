let links = document.getElementsByTagName('a');
let linksLen = links.length;
// alert(linksLen);
for(const element of links)
{
    element.addEventListener("click",function(){
        element.style.color= "blue";
    })
}
// for(let i=0;i<linksLen;i++)
// {
//     links[i].onclick = function(){
//         links[i].color = "blue";
//     }
// }
