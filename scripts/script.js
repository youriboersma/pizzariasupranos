// welcome to Tomato's Pizzaria v2.0 with SASS
const button = document.querySelector('.nav-button');
const menu = document.querySelector('nav');
button.addEventListener('click', () => {
  menu.classList.toggle('visible');
});