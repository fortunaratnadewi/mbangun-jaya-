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

    <!-- Product Section Template -->
    <template id="product-template">
        <div class="bg-white p-4 rounded-lg shadow-lg min-w-[200px]">
            <img src="" class="w-full h-40 object-cover mb-4" alt="">
            <h5 class="font-semibold"></h5>
            <p class="text-gray-600"></p>
            <span class="text-yellow-500"></span>
            <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Tambah Barang</button>
            <button class="mt-2 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Checkout</button>
        </div>
    </template>

    <!-- Product Sections -->
    <div class="container mx-auto px-4 py-8">
        <h4 class="text-2xl font-bold mb-6">Material Konstruksi</h4>
        <div class="flex space-x-4 overflow-x-scroll pb-4" id="construction-products">
            <!-- Products will be injected here -->
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <h4 class="text-2xl font-bold mb-6">Peralatan</h4>
        <div class="flex space-x-4 overflow-x-scroll pb-4" id="tools-products">
            <!-- Products will be injected here -->
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <h4 class="text-2xl font-bold mb-6">Cat Tembok</h4>
        <div class="flex space-x-4 overflow-x-scroll pb-4" id="paint-products">
            <!-- Products will be injected here -->
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <h4 class="text-2xl font-bold mb-6">Electrical Tool</h4>
        <div class="flex space-x-4 overflow-x-scroll pb-4" id="electrical-products">
            <!-- Products will be injected here -->
        </div>
    </div>

    <script>
        const products = {
            construction: [
                { name: 'Semen', price: 'Rp. 65.000/karung', rating: '⭐ 4.5', image: '{{ asset("image/semen.jpeg") }}' },
                { name: 'Besi', price: 'Rp. 20.000', rating: '⭐ 4.2', image: '{{ asset("image/besi.jpeg") }}' },
                { name: 'Pipa', price: 'Rp. 150.000', rating: '⭐ 4.2', image: '{{ asset("image/pipa1.webp") }}' },
                { name: 'Genteng', price: 'Rp. 10.000/buah', rating: '⭐ 5.0', image: '{{ asset("image/genteng.jpeg") }}' },
                { name: 'Pasir', price: 'Rp. 50.000/karung', rating: '⭐ 4.6', image: '{{ asset("image/pasir.jpeg") }}' },
                { name: 'Batu', price: 'Rp. 75.000/karung', rating: '⭐ 4.4', image: '{{ asset("image/batu.jpeg") }}' },
                { name: 'Batu Bata', price: 'Rp. 200.000/100 buah', rating: '⭐ 4.7', image: '{{ asset("image/batubata.jpeg") }}' },
            ],
            tools: [
                { name: 'Palu', price: 'Rp. 25.000', rating: '⭐ 4.9', image: '{{ asset("image/palu.jpeg") }}' },
                { name: 'Gergaji', price: 'Rp. 20.000', rating: '⭐ 4.4', image: '{{ asset("image/gergaji.jpeg") }}' },
                { name: 'Obeng', price: 'Rp. 20.000', rating: '⭐ 4.2', image: '{{ asset("image/obeng.png") }}' },
                { name: 'Paku', price: 'Rp. 20.000/buah', rating: '⭐ 5.0', image: '{{ asset("image/paku.jpeg") }}' },
                { name: 'Kunci Inggris', price: 'Rp. 30.000', rating: '⭐ 4.5', image: '{{ asset("image/kunci.jpeg") }}' },
                { name: 'Bor', price: 'Rp. 300.000', rating: '⭐ 4.6', image: '{{ asset("image/bor.jpeg") }}' },
                { name: 'Gerinda', price: 'Rp. 400.000', rating: '⭐ 4.8', image: '{{ asset("image/gerinda.jpeg") }}' },
            ],
            paints: [
                { name: 'Cat Tembok Anti Gores', price: 'Rp. 150.000/kaleng', rating: '⭐ 4.2', image: '{{ asset("image/catA1.webp") }}' },
                { name: 'Cat Tembok Interior', price: 'Rp. 120.000/kaleng', rating: '⭐ 4.5', image: '{{ asset("image/catB1.webp") }}' },
                { name: 'Cat Tembok Eksterior', price: 'Rp. 180.000/kaleng', rating: '⭐ 4.7', image: '{{ asset("image/catC1.jpeg") }}' },
                { name: 'Cat Tembok Glossy', price: 'Rp. 160.000/kaleng', rating: '⭐ 4.3', image: '{{ asset("image/catD1.jpg") }}' },
            ],
            electrical: [
                { name: 'Kabel Listrik LOTUSku 2x1,5 2x1.5 mm NYM - 50 Yard', price: 'Rp. 50.000/m', rating: '⭐ 4.6', image: '{{ asset("image/kabel1.jpeg") }}' },
                { name: 'VETTO Stop Kontak V8202 / TK SNI', price: 'Rp. 15.000', rating: '⭐ 4.4', image: '{{ asset("image/stopkontak1.webp") }}' },
                { name: 'Saklar Seri New Gee Urea BROCO', price: 'Rp. 10.000', rating: '⭐ 5.0', image: '{{ asset("image/saklar1.webp") }}' },
                { name: 'Philips Led Bulb 8W E27 6500K', price: 'Rp. 30.000', rating: '⭐ 4.9', image: '{{ asset("image/lampu1.webp") }}' },
                { name: 'Fuse', price: 'Rp. 5.000', rating: '⭐ 4.7', image: '{{ asset("image/fuse.jpeg") }}' },
                { name: 'MCB', price: 'Rp. 75.000', rating: '⭐ 4.8', image: '{{ asset("image/mcb.jpeg") }}' },
                { name: 'Pengaman Listrik', price: 'Rp. 25.000', rating: '⭐ 4.6', image: '{{ asset("image/pengaman.jpeg") }}' },
            ],
        };

        function injectProducts(category, elementId) {
            const container = document.getElementById(elementId);
            container.innerHTML = ''; // Clear the container
            products[category].forEach(product => {
                const template = document.getElementById('product-template').content.cloneNode(true);
                template.querySelector('img').src = product.image;
                template.querySelector('h5').innerText = product.name;
                template.querySelector('p').innerText = product.price;
                template.querySelector('span').innerText = product.rating;
                container.appendChild(template);
            });
        }

        // Initial load of products
        injectProducts('construction', 'construction-products');
        injectProducts('tools', 'tools-products');
        injectProducts('paints', 'paint-products');
        injectProducts('electrical', 'electrical-products');

    </script>
</body>
</html>
