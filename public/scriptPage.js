document.addEventListener('scroll', ()=>{
    let navbar =document.querySelector('#navbar')

    if(window.scrollY>120){
        navbar.classList.add('bg-navbarDesktop')
    }else{
        navbar.classList.remove('bg-navbarDesktop')
    }
})

    // scale on resize
    window.onload = function(){
        document.querySelector('.cont_principal').className= "cont_principal cont_error_active";  
          
        } 