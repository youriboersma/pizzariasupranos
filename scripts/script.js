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

const pizzaData = {
    "Pizza Margherita": {
        image: "../images/margherita.jpg",
        description: "Pizzadeeg (bloem, water, zout, gist, olijfolie), tomatensaus (gepelde tomaten, zout, olijfolie, basilicum), mozzarella (Mozzarella di Bufala of Fior di Latte), verse basilicumblaadjes, extra vierge olijfolie.",
        basePrice: 7
    },
    "Vivaldi’s Quatro Stagiani": {
        image: "../images/quattro.jpg",
        description: "Pizzadeeg, tomatensaus, kaas, champignons, artisjokken, ham, en zwarte olijven. Geïnspireerd door de vier seizoenen.",
        basePrice: 7
    },
    "Mexican Fiesta": {
        image: "../images/fiesta.jpg",
        description: "Pizzadeeg, tomatensaus, kaas, pittige chorizo, jalapeño-pepers, rode ui, en maïs. Een pittige en kleurrijke Mexicaanse twist!",
        basePrice: 8
    },
    "Chicken Kebab": {
        image: "../images/kebab.jpg",
        description: "Pizzadeeg, tomatensaus, kaas, gegrilde kip, champignons, en een vleugje knoflooksaus.",
        basePrice: 6.5
    },
    "Veggi": {
        image: "../images/veggie.jpg",
        description: "Pizzadeeg, tomatensaus, kaas, een mix van verse seizoensgroenten zoals paprika, courgette, en rode ui. Perfect voor vegetariërs!",
        basePrice: 7.5
    },
    "Caprese": {
        image: "../images/caprese.jpg",
        description: "Pizzadeeg, tomatensaus, mozzarella, verse tomaten, basilicum en een scheutje balsamico voor een klassieke Italiaanse smaak.",
        basePrice: 9
    }
};

// Function to open and populate the modal
function openPizzaModal(pizzaName) {
    const pizzaInfo = pizzaData[pizzaName];

    // Set the modal content based on the pizza clicked
    document.getElementById('pizzaModalTitle').textContent = pizzaName;
    document.getElementById('pizzaModalImage').src = pizzaInfo.image;
    document.getElementById('pizzaModalDescription').textContent = pizzaInfo.description;

    // Display the modal
    document.getElementById('pizzaModal').style.display = 'block';
}

// Close the modal
function closePizzaModal() {
    document.getElementById('pizzaModal').style.display = 'none';
}

// Event listener for closing the modal
document.querySelector('.close').addEventListener('click', closePizzaModal);
document.getElementById('pizzaModal').addEventListener('click', (event) => {
    if (event.target === document.getElementById('pizzaModal')) {
        closePizzaModal();
    }
});

// Event listener for pizza cards (excluding the + button and select dropdown)
document.querySelectorAll('.product-card').forEach(card => {
    card.addEventListener('click', (event) => {
        // Ignore clicks on interactive elements like buttons and selects
        if (
            event.target.classList.contains('add-btn') || // Exclude the + button
            event.target.tagName.toLowerCase() === 'select' // Exclude the select dropdown
        ) {
            return;
        }

        // Get the pizza name from the card and open the modal
        const pizzaName = card.querySelector('h3').textContent;
        openPizzaModal(pizzaName);
    });
});

// Function to open the custom pizza modal
function openCustomPizzaModal() {
    document.getElementById('customPizzaModal').style.display = 'block';
    calculateCustomPizzaPrice(); // Initialize price
}

// Function to close the custom pizza modal
function closeCustomPizzaModal() {
    document.getElementById('customPizzaModal').style.display = 'none';
}

// Function to calculate the total price for the custom pizza
function calculateCustomPizzaPrice() {
    const basePrice = parseFloat(document.getElementById('customPizzaSize').selectedOptions[0].dataset.price);
    const toppings = document.querySelectorAll('.toppings-list input[type="checkbox"]:checked');
    const toppingsPrice = toppings.length * 0.50; // Each topping costs 0.50
    const totalPrice = basePrice + toppingsPrice;

    document.getElementById('customPizzaTotal').textContent = `${totalPrice.toFixed(2)}€`;
}

// Add event listeners for toppings checkboxes and size dropdown
document.getElementById('customPizzaSize').addEventListener('change', calculateCustomPizzaPrice);
document.querySelectorAll('.toppings-list input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', calculateCustomPizzaPrice);
});

// Function to add the custom pizza to the cart
function addCustomPizzaToCart() {
    const size = document.getElementById('customPizzaSize').selectedOptions[0].textContent;
    const toppings = Array.from(document.querySelectorAll('.toppings-list input[type="checkbox"]:checked'))
        .map(topping => topping.value)
        .join(', ');

    const price = document.getElementById('customPizzaTotal').textContent;

    alert(`Added to Cart:\nSize: ${size}\nToppings: ${toppings || 'None'}\nPrice: ${price}`);
    closeCustomPizzaModal();
}

// Add event listener to the "Custom Pizza" product card to open the modal
document.querySelector('.product-card.custom-pizza').addEventListener('click', openCustomPizzaModal);

// Adding event listener for closing the custom pizza modal
document.querySelectorAll('.custom-pizza .close').forEach(closeButton => {
    closeButton.addEventListener('click', closeCustomPizzaModal);
});

// Event listener to close the custom pizza modal if clicking outside the modal content
document.getElementById('customPizzaModal').addEventListener('click', (event) => {
    if (event.target === document.getElementById('customPizzaModal')) {
        closeCustomPizzaModal();
    }
});