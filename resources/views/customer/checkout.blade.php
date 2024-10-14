<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | MBangun Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header Section -->
    <div class="product-header flex items-center justify-between mb-6">
        <img src="{{ asset('image/logo.png') }}" alt="Logo Toko" class="store-logo w-32">
        <nav class="navbar">
            <ul class="flex space-x-4">
                <li><a href="/halamanPemesanan" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Contact Us</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Profil</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search" class="border border-gray-300 rounded-lg px-4 py-2">
        </div>
        <div class="cart-icon">
            <a href="#"><img src="{{ asset('image/keranjang.png') }}" alt="Cart" class="w-8 h-8"></a>
        </div>
    </div>

    <!-- MBangun Jaya with blue background -->
    <div class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl font-semibold ml-4">
            MBangun Jaya |
            <a href="/register.blade.php" class="text-orange-400 font-bold hover:underline">Checkout</a>
        </h1>
    </div>

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <!-- Address and Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Product Detail Section -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Alamat:</h2>
                <div class="border rounded-lg p-4 shadow-sm">
                    <div class="mb-4">
                        <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Detail Barang</button>
                    </div>

                    <!-- Product Semen -->
                    <div class="flex justify-between items-center mb-4">
                        <img src="semen.jpeg" alt="Semen" class="w-16 h-16 object-cover">
                        <div class="w-full pl-4">
                            <p class="font-semibold text-lg">Semen</p>
                        </div>
                        <div class="flex items-center">
                            <p class="font-semibold" id="semenPrice">Rp. 20.000</p>
                            <div class="flex items-center ml-4">
                                <button class="px-2 py-1 bg-gray-200" onclick="updateQuantity('semen', -1)">-</button>
                                <input type="number" id="semenQuantity" class="w-10 text-center mx-2 border border-gray-300" value="2" min="0" onchange="calculateTotal()">
                                <button class="px-2 py-1 bg-gray-200" onclick="updateQuantity('semen', 1)">+</button>
                            </div>
                            <p class="ml-4 font-semibold" id="semenTotal">Rp. 40.000</p>
                        </div>
                    </div>

                    <!-- Product Besi -->
                    <div class="flex justify-between items-center">
                        <img src="besi.jpeg" alt="Besi" class="w-16 h-16 object-cover">
                        <div class="w-full pl-4">
                            <p class="font-semibold text-lg">Besi</p>
                        </div>
                        <div class="flex items-center">
                            <p class="font-semibold" id="besiPrice">Rp. 20.000</p>
                            <div class="flex items-center ml-4">
                                <button class="px-2 py-1 bg-gray-200" onclick="updateQuantity('besi', -1)">-</button>
                                <input type="number" id="besiQuantity" class="w-10 text-center mx-2 border border-gray-300" value="1" min="0" onchange="calculateTotal()">
                                <button class="px-2 py-1 bg-gray-200" onclick="updateQuantity('besi', 1)">+</button>
                            </div>
                            <p class="ml-4 font-semibold" id="besiTotal">Rp. 20.000</p>
                        </div>
                    </div>
                </div>

                <!-- Total Section -->
                <div class="border-t mt-6 pt-4">
                    <p class="text-gray-500">Ongkir: Rp. 10.000</p>
                    <p class="text-gray-500">Biaya Penanganan: Rp. 2.000</p>
                    <p class="text-gray-500">Asuransi: Rp. 3.000</p>
                    <div class="flex justify-between items-center mt-2">
                        <p class="font-bold text-lg">Total:</p>
                        <p class="font-bold text-lg" id="finalTotal">Rp. 81.000</p>
                    </div>
                </div>
            </div>

            <!-- Payment Section -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Metode Pembayaran</h2>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <form>
                        <div class="mb-4">
                            <label for="card-name" class="block text-gray-700">Nama Kartu:</label>
                            <input type="text" id="card-name" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="Nama di kartu">
                        </div>
                        <div class="mb-4">
                            <label for="card-number" class="block text-gray-700">Nomor Kartu:</label>
                            <input type="text" id="card-number" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="Nomor kartu">
                        </div>
                        <div class="flex space-x-4 mb-4">
                            <div class="w-1/2">
                                <label for="expiry-date" class="block text-gray-700">Tanggal Kadaluarsa:</label>
                                <input type="text" id="expiry-date" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="MM/YY">
                            </div>
                            <div class="w-1/2">
                                <label for="cvv" class="block text-gray-700">CVV:</label>
                                <input type="text" id="cvv" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="CVV">
                            </div>
                        </div>
                        <button class="w-full bg-orange-500 text-white px-4 py-2 rounded-lg">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for updating total price dynamically -->
    <script>
        // Prices for each product
        const prices = {
            semen: 20000,
            besi: 20000
        };

        // Update quantity with buttons and recalculate total
        function updateQuantity(product, delta) {
            const quantityInput = document.getElementById(product + 'Quantity');
            let quantity = parseInt(quantityInput.value) + delta;
            if (quantity < 0) quantity = 0;
            quantityInput.value = quantity;
            calculateTotal();
        }

        // Calculate the total for each product and the final total
        function calculateTotal() {
            const semenQuantity = parseInt(document.getElementById('semenQuantity').value);
            const besiQuantity = parseInt(document.getElementById('besiQuantity').value);

            const semenTotal = semenQuantity * prices['semen'];
            const besiTotal = besiQuantity * prices['besi'];

            document.getElementById('semenTotal').textContent = 'Rp. ' + semenTotal.toLocaleString();
            document.getElementById('besiTotal').textContent = 'Rp. ' + besiTotal.toLocaleString();

            const shipping = 10000;
            const handling = 2000;
            const insurance = 3000;
            const finalTotal = semenTotal + besiTotal + shipping + handling + insurance;

            document.getElementById('finalTotal').textContent = 'Rp. ' + finalTotal.toLocaleString();
        }

        // Initialize the total calculation on page load
        calculateTotal();
    </script>
</body>
</html>
