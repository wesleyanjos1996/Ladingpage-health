// Abre menu
document.querySelector('.btn-menu').addEventListener('click', e => {
    document.querySelector('.menu').style.display = 'block'
})

// Fecha menu
document.querySelector('.btn-close').addEventListener('click', e => {
    document.querySelector('.menu').style.display = 'none'
})