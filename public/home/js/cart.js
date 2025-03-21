let cart = JSON.parse(localStorage.getItem('cart')) || [];

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCart();
}

function updateCart() {
    localStorage.setItem('cart', JSON.stringify(cart));

    const cartCountElement = document.querySelector('.header-cart-count');
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCountElement.textContent = totalItems;

    const cartWrapper = document.getElementById('cart-product');
    if (cartWrapper) {
        cartWrapper.innerHTML = '';
        cart.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="product-thumbnail">&nbsp;</td>
                <td class="product-thumbnail">
                    <img src="${item.image}" alt="${item.name}" />
                </td>
                <td class="product-name">
                    ${item.name}<br>
                    <small>${item.artist}</small>
                </td>
                <td class="product-price">£${item.price.toFixed(2)}</td>
                <td class="product-quantity">
                    <input type="number" min="1" value="${item.quantity}" onchange="updateItemQuantity(${item.id}, this.value)" />
                </td>
                <td class="product-subtotal">£${(item.price * item.quantity).toFixed(2)}</td>
                <td class="product-remove">
                    <button onclick="removeFromCart(${item.id})" class="remove-btn">
                        <i class="bi bi-x-circle"></i>
                    </button>
                </td>
            `;
            cartWrapper.appendChild(row);
        });

        const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const cartTotals = document.querySelector('.cart-totals tbody tr');
        if (cartTotals) {
            cartTotals.innerHTML = `
                <th>Total</th>
                <td>£${total.toFixed(2)}</td>
            `;
        }
    }
}

function updateItemQuantity(productId, newQuantity) {
    newQuantity = parseInt(newQuantity);
    if (newQuantity < 1 || isNaN(newQuantity)) {
        alert("Quantity must be at least 1");
        updateCart(); // reset the input value if invalid
        return;
    }
    const productIndex = cart.findIndex(item => item.id === productId);
    if (productIndex !== -1) {
        cart[productIndex].quantity = newQuantity;
        updateCart();
    }
}

function addToCart() {
    const quantityInput = document.getElementById('quantity');
    const quantity = parseInt(quantityInput?.value || 1);

    const product = {
        id: Date.now(), 
        name: document.querySelector('.product-title').textContent,
        artist: document.querySelector('.product-info h3').textContent,
        price: parseFloat(document.querySelector('.product-price h1').textContent.replace('£', '')),
        image: document.querySelector('#single-image').src,
        quantity: quantity
    };

    const existingProductIndex = cart.findIndex(item => 
        item.name === product.name && item.artist === product.artist
    );

    if (existingProductIndex !== -1) {
        cart[existingProductIndex].quantity += quantity;
    } else {
        cart.push(product);
    }

    updateCart();
    alert('Product added to cart!');
}

updateCart();

document.addEventListener('DOMContentLoaded', function() {
    const addToCartButton = document.getElementById('add-to-cart');
    if (addToCartButton) {
        addToCartButton.onclick = addToCart;
    }
});

function initializeFavorites() {
    const favoriteCheckbox = document.getElementById('favorite');
    if (favoriteCheckbox) {
        const productName = document.querySelector('.product-title')?.textContent;
        const productArtist = document.querySelector('.product-info h3')?.textContent;
        const productId = `${productName}-${productArtist}`;
       
        const favorites = JSON.parse(localStorage.getItem('favorites')) || {};
       
        favoriteCheckbox.checked = favorites[productId] || false;

        favoriteCheckbox.addEventListener('change', function() {
            favorites[productId] = this.checked;
            localStorage.setItem('favorites', JSON.stringify(favorites));
        });
    }
}

document.addEventListener('DOMContentLoaded', initializeFavorites);
