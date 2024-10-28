// welcome to Tomato's Pizzaria v2.0 with SASS
const button = document.querySelector('.nav-button');
const menu = document.querySelector('nav');
button.addEventListener('click', () => {
  menu.classList.toggle('visible');
});

function filterCategory(category) {
  let products = document.getElementsByClassName('product-card');
  for (let i = 0; i < products.length; i++) {
      if (category === 'all') {
          products[i].style.display = 'block';
      } else if (products[i].classList.contains(category)) {
          products[i].style.display = 'block';
      } else {
          products[i].style.display = 'none';
      }
  }
  
  // Remove the active class from all buttons
  let buttons = document.getElementsByClassName('menu-btn');
  for (let i = 0; i < buttons.length; i++) {
      buttons[i].classList.remove('active');
  }
  // Add the active class to the clicked button
  event.currentTarget.classList.add('active');
}

function updatePrice(selectElement) {
    // Get the selected size
    const selectedSize = selectElement.value;

    // Get the base price (medium size price) from the price element's data attribute
    const priceElement = selectElement.closest('.product-card').querySelector('.price');
    const basePrice = parseFloat(priceElement.getAttribute('data-base-price'));

    // Initialize the new price as the base price
    let newPrice = basePrice;

    // Apply size adjustments
    if (selectedSize === 'small') {
        newPrice = basePrice * 0.9;  // 10% discount for small
    } else if (selectedSize === 'large') {
        newPrice = basePrice * 1.13;  // 13% increase for large
    } else if (selectedSize === 'family') {
        newPrice = basePrice * 1.25;  // 25% increase for family
    }

    // Update the price element with the new price, formatted to two decimal places
    priceElement.textContent = `${newPrice.toFixed(2)}€`;
}