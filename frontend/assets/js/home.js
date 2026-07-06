let tab = document.querySelectorAll('#home tr');
// alert("je meursssssssssssssss");
for(const element of tab)
{
    element.addEventListener('click',function(){
        let a = this.querySelector('a');
        window.location.href=a.href;
    })
}
