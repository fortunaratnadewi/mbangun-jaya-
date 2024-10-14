<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset') }}/css/halamanPemesanan.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palu Baja Berkualitas</title>
    <style>
        .product-image {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image {
            width: 288px;
            height: auto;
        }

        .thumbnail-container {
            display: flex;
            gap: 16px;
        }

        .thumbnail {
            background-color: #e5e7eb;
            border: none;
            border-radius: 8px;
            padding: 4px;
            cursor: pointer;
        }

        .thumbnail-image {
            width: 50px;
            height: 75px;
            object-fit: cover;
        }

        .thumbnail {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="product-container mx-auto p-4 max-w-5xl bg-white shadow-md">
        <!-- Header Section -->
        <div class="product-header flex items-center justify-between mb-6">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Toko" class="store-logo w-32">
            <nav class="navbar">
                <ul class="flex space-x-4">
                    <li><a href="/halamanUtama" class="text-gray-700 hover:text-blue-500">Home</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Contact Us</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Profil</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Search" class="border border-gray-300 rounded-lg px-4 py-2">
            </div>
            <div class="cart-icon">
                <a href="/cart"><img src="{{ asset('image/keranjang.png') }}" alt="Cart" class="w-8 h-8"></a>
            </div>
        </div>

        <!-- Main Product Details Section -->
        <div class="product-details flex flex-col md:flex-row gap-6">
            <div class="product-image flex flex-col items-center">
                <img id="mainImage" src="{{ asset('image/palu.jpeg') }}" alt="Palu Baja" class="main-image mb-4">

                <!-- Thumbnail Buttons -->
                <div class="thumbnail-container">
                    <button class="thumbnail" onclick="changeImage('image/palu.jpeg')">
                        <img src="{{ asset('image/palu.jpeg') }}" class="thumbnail-image" alt="gambar 1">
                    </button>
                    <button class="thumbnail" onclick="changeImage('image/palu1.jpeg')">
                        <img src="{{ asset('image/palu1.webp') }}" class="thumbnail-image" alt="gambar 2">
                    </button>
                    <button class="thumbnail" onclick="changeImage('image/palu2.jpeg')">
                        <img src="{{ asset('image/palu2.webp') }}" class="thumbnail-image" alt="gambar 3">
                    </button>
                </div>
            </div>
            <div class="product-info">
                <h1 class="text-2xl font-bold mb-2">Palu Baja Berkualitas</h1>
                <div class="rating flex items-center space-x-2 mb-2">
                    <span class="text-yellow-500">★★★★★</span>
                    <span class="text-gray-600">4.8 | 30 Penilaian</span>
                </div>
                <h2 class="text-xl font-bold text-red-600 mb-4">Rp. 50.000</h2>
                <p class="mb-2">Return: <span class="text-green-600">Bebas Pengembalian</span></p>
                <p class="mb-4">Pengiriman: Kota Jakarta Timur</p>

                <!-- Quantity Selector -->
                <div class="quantity-control flex items-center mb-4">
                    <label for="quantity" class="mr-4">Kuantitas:</label>
                    <button class="decrease px-2 py-1 bg-gray-200 rounded-l-lg hover:bg-gray-300">-</button>
                    <input type="number" id="quantity" class="w-12 text-center border-t border-b border-gray-300" value="0" min="0">
                    <button class="increase px-2 py-1 bg-gray-200 rounded-r-lg hover:bg-gray-300">+</button>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons flex space-x-4 mb-4">
                    <button class="cart-button bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Masukkan Keranjang</button>
                    <button class="buy-button bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli Sekarang</button>
                </div>

                <!-- Social Share and Favorite -->
                <div class="social-share flex items-center space-x-4">
                    <a href="#"><img src="image/facebook.jpeg" alt="Share on Facebook" class="w-8 h-8 hover:opacity-80"></a>
                    <a href="#"><img src="image/pintress.jpeg" alt="Share on Pinterest" class="w-8 h-8 hover:opacity-80"></a>
                    <a href="#" class="favorite-button text-red-500 text-xl hover:text-red-600">❤ Favorite</a>
                </div>
            </div>
        </div>

        <!-- Product Specifications -->
        <div class="specifications mt-8 bg-gray-50 p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-4">Spesifikasi Produk</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                <strong>Kategori:</strong> Mbangun Jaya > 
                <a href="/produk-peralatan" class="text-blue-500 hover:text-blue-700">Peralatan</a>
                </div>
                <div><strong>Stok:</strong> 3.200</div>
                <div><strong>Merek:</strong> StrongHammer</div>
                <div><strong>Kode Barang:</strong> pl9852</div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="description mt-4 bg-gray-50 p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-2">Deskripsi Produk</h2>
            <ul class="list-disc list-inside">
                <li>Palu baja dengan pegangan ergonomis.</li>
                <li>Tahan lama dan kuat untuk pekerjaan pertukangan berat.</li>
                <li>Desain anti-slip pada gagang untuk keamanan ekstra.</li>
                <li>Minimal pembelian 5 buah.</li>
                <li>Informasi lebih lanjut, silakan hubungi tim layanan kami.</li>
            </ul>
        </div>

        <!-- Product Reviews Section -->
        <div class="reviews mt-8 bg-gray-50 p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-4">Penilaian Produk</h2>
            <div class="flex items-center space-x-2 mb-4">
                <span class="text-yellow-500">★★★★★</span>
                <span class="text-gray-600">4.8 dari 5 | 30 Ulasan</span>
            </div>
            <div class="review-item p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center space-x-2">
                    <img src="image/user1.jpeg" alt="User" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-bold">Rina M.</p>
                        <span class="text-yellow-500">★★★★★</span>
                        <span class="text-gray-500">Palu Berkualitas Tinggi</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-2">Sangat nyaman digunakan, kuat, dan tahan lama. Cocok untuk berbagai pekerjaan rumah maupun proyek pertukangan.</p>

                <!-- Section for the uploaded image -->
                <div class="review-image-container flex space-x-4 mt-4">
                    <img src="image/palu4.webp" alt="Gambar Ulasan" class="w-32 h-32 object-cover rounded-lg">
                    <img src="image/palu3.webp" alt="Gambar Ulasan" class="w-32 h-32 object-cover rounded-lg">
                    
                    <!-- Extra images hidden by default -->
                    <div id="extraImages" class="hidden flex space-x-4">
                        <img src="image/palu4.webp" alt="Gambar Ulasan Tambahan" class="w-32 h-32 object-cover rounded-lg">
                        <img src="image/palu3.webp" alt="Gambar Ulasan Tambahan" class="w-32 h-32 object-cover rounded-lg">
                    </div>
                    
                    <!-- Show more button -->
                    <button id="showMoreBtn" class="w-32 h-32 bg-gray-200 text-gray-700 rounded-lg flex justify-center items-center text-lg font-bold">
                        +2
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to change the main image -->
    <script>
        function changeImage(imagePath) {
            document.getElementById("mainImage").src = imagePath;
        }

        document.getElementById('showMoreBtn').addEventListener('click', function() {
            var extraImages = document.getElementById('extraImages');
            if (extraImages.classList.contains('hidden')) {
                extraImages.classList.remove('hidden');
                this.textContent = 'Show Less';
            } else {
                extraImages.classList.add('hidden');
                this.textContent = '+2';
            }
        });
    </script>
</body>

</html>
