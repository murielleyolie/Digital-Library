let div = document.querySelectorAll('.textfield');
function changeBorder($value){

    if($value === 1)
    {
        div[0].style.borderColor = 'black';
        div[1].style.borderColor = '#ccc';
    }
    else
    {
        div[1].style.borderColor = 'black';
        div[0].style.borderColor = '#ccc';
    }
}
