const altura = document.body.scrollHeight  -window.innerHeight;
const fondo = document.getElementById('fondo');

window.onscroll = () => {
    const anchcoFondo = (window.pageYOffset / altura) * 900;
    if (anchcoFondo <=100){
        fondo.style.width = anchcoFondo + '%';
    }
    
}