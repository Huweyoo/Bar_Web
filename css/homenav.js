let menu = document.querySelector('#menu-icon');
let menubar = document.querySelector('.menubar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    menubar.classList.toggle(open);
}