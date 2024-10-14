<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Toko Bangunan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4">
    <div class="max-w-3xl mx-auto bg-white shadow-lg p-6">
        <!-- Cart Header -->
        <h1 class="text-2xl font-bold mb-4">Keranjang Saya</h1>
        <div id="cart-items">
            <!-- Cart items will be added here dynamically -->
        </div>

        <!-- Checkout Section -->
        <div class="mt-4 flex justify-between items-center">
            <p class="text-lg font-semibold">Total: <span id="totalPrice">Rp0</span></p>
            <button id="checkoutButton" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Checkout</button>
        </div>
    </div>

    <script>
        class Cart {
            constructor() {
                this.items = [];
            }

            addItem(item) {
                const existingItem = this.items.find(cartItem => cartItem.id === item.id);
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    this.items.push({ ...item, quantity: 1 });
                }
                this.updateCart();
            }

            removeItem(id) {
                this.items = this.items.filter(item => item.id !== id);
                this.updateCart();
            }

            updateCart() {
                const cartItemsDiv = document.getElementById('cart-items');
                const totalPriceDiv = document.getElementById('totalPrice');
                cartItemsDiv.innerHTML = '';
                let totalPrice = 0;

                this.items.forEach(item => {
                    totalPrice += item.price * item.quantity;
                    cartItemsDiv.innerHTML += `
                        <div class="flex justify-between items-center mb-4 bg-gray-50 p-4 rounded-lg">
                            <div>
                                <p class="text-lg font-bold">${item.name}</p>
                                <p class="text-sm text-gray-500">${item.quantity} x Rp${item.price.toLocaleString()}</p>
                            </div>
                            <div>
                                <button class="bg-red-500 text-white px-2 py-1 rounded-lg" onclick="cart.removeItem(${item.id})">Hapus</button>
                            </div>
                        </div>`;
                });

                totalPriceDiv.textContent = `Rp${totalPrice.toLocaleString()}`;
            }

            checkout() {
                if (this.items.length === 0) {
                    alert('Keranjang kosong!');
                } else {
                    alert('Checkout berhasil! Total: ' + document.getElementById('totalPrice').textContent);
                    this.items = [];
                    this.updateCart();
                }
            }
        }

        // Create an instance of the Cart class
        const cart = new Cart();

        // Dummy product data (replace with dynamic product data)
        const products = [
            { id: 1, name: "Besi Beton 12mm", price: 70000 },
            { id: 2, name: "Semen Gresik 50kg", price: 65000 },
        ];

        // Simulate adding items to the cart 
        cart.addItem(products[0]);
        cart.addItem(products[1]);

        // Bind the checkout button
        document.getElementById('checkoutButton').addEventListener('click', () => cart.checkout());
    </script>
</body>

</html>
