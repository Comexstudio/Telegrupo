    // Declaramos las variables
    const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('toggle-menu'),
    closeMenu =document.getElementById('close-menu')



    // Abre el menu
toggleMenu.addEventListener('click', () => {
    navMenu.classList.toggle('show')
})

    // Cierra el menu
closeMenu.addEventListener('click', () => {
    navMenu.classList.remove('show')
})