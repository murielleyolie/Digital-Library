let submit = document.querySelector(".submitButton");
// alert("ohhhhhhh");
// console.log("fghjk");
// alert(terme);
// alert(submit);
submit.addEventListener('click',function(elt)
{
    let terme = document.querySelector(".termetexte").value;
    if(terme == ''){
        elt.preventDefault();
    }
    else
    {
        submit.style.marginTop = '30px 0px';
    }
})