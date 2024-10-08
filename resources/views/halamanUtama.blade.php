<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Mbangun Jaya</title>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a class="flex items-center" href="#">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-12">
                    <span class="ml-3 text-xl font-bold">Toko Mbangun Jaya</span>
                </a>
                <form class="flex">
                    <input class="form-input py-2 px-4 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" type="search" placeholder="Search" aria-label="Search">
                    <button class="px-4 bg-blue-500 text-white rounded-r-lg">Search</button>
                </form>
                <ul class="flex items-center space-x-4">
                    <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-800">Contact Us</a></li>
                    <li><a href="/about" class="text-gray-600 hover:text-gray-800">Profil</a></li>
                    <li><a href="/login" class="text-gray-600 hover:text-gray-800">Daftar</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative">
        <img id="banner-image" src="{{ asset('image/latar1.jpeg') }}" alt="Banner Image" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">SELAMAT DATANG DI TOKO MBANGUN JAYA</h1>
        </div>
    </div>

    <!-- Product Section -->
    <div class="container mx-auto px-4 py-8">
        <h4 class="text-2xl font-bold mb-6">Bahan Struktur</h4>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Product Card -->
           <!-- Product Card with Checkout Button -->
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/semen.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Semen">
                <h5 class="font-semibold">Semen</h5>
                <p class="text-gray-600">Rp. 65.000/karung</p>
                <span class="text-yellow-500">⭐ 4.5</span>
                <p class="text-sm text-gray-500">2 Hari pengiriman</p>
                <!-- Tambah Barang Button -->
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
                <!-- Checkout Button -->
                <button class="mt-2 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Checkout</button>
            </div>


            <!-- Copy for Other Products -->
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/besi.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Besi">
                <h5 class="font-semibold">Besi</h5>
                <p class="text-gray-600">Rp. 20.000</p>
                <span class="text-yellow-500">⭐ 4.2</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/pasir.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Pasir">
                <h5 class="font-semibold">Pasir</h5>
                <p class="text-gray-600">Rp. 150.000</p>
                <span class="text-yellow-500">⭐ 4.2</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/genteng.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Genteng">
                <h5 class="font-semibold">Genteng</h5>
                <p class="text-gray-600">Rp. 10.000/buah</p>
                <span class="text-yellow-500">⭐ 5.0</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>
        </div>
    </div>

    <!-- Product Section (Peralatan) -->
    <div class="container mx-auto px-4 py-8">
        <h4 class="text-2xl font-bold mb-6">Peralatan</h4>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Copy structure for peralatan products -->
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/palu.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Palu">
                <h5 class="font-semibold">Palu</h5>
                <p class="text-gray-600">Rp. 25.000</p>
                <span class="text-yellow-500">⭐ 4.9</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/gergaji.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Gergaji">
                <h5 class="font-semibold">Gergaji</h5>
                <p class="text-gray-600">Rp. 20.000</p>
                <span class="text-yellow-500">⭐ 4.4</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/obeng.png') }}" class="w-full h-40 object-cover mb-4" alt="Obeng">
                <h5 class="font-semibold">Obeng</h5>
                <p class="text-gray-600">Rp. 20.000</p>
                <span class="text-yellow-500">⭐ 4.2</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('image/paku.jpeg') }}" class="w-full h-40 object-cover mb-4" alt="Paku">
                <h5 class="font-semibold">Paku</h5>
                <p class="text-gray-600">Rp. 20.000/buah</p>
                <span class="text-yellow-500">⭐ 4.8</span>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        const images = [
            "{{ asset('image/latar2.jpeg') }}",
            "{{ asset('image/latar3.jpeg') }}",
            "{{ asset('image/latar1.jpeg') }}",
            "{{ asset('image/latar1.jpeg') }}"
        ];

        let currentIndex = 0;
        const imageElement = document.getElementById('banner-image');

        function changeImage() {
            currentIndex = (currentIndex + 1) % images.length;
            imageElement.src = images[currentIndex];
        }

        setInterval(changeImage, 5000);
    </script>
</body>
</html>
