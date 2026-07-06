let edit = document.querySelector('.fas fa-pen');
let deletes = document.querySelector('.fas fa-trash');
let appear1 = document.getElementById('.editBook');
let appear2 = document.getElementById('.deleteBook');
edit.addEventListener('click',function()
{
    appear1.style.display="block";
})
deletes.addEventListener('click',function()
{
    appear2.style.display="block";
})