<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Toko - Mbangun Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tambahan untuk ukuran peta */
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Container Utama -->
    <div class="container mx-auto px-4 py-6">
        <!-- Bagian Atas (Navigasi dan Judul) -->
        <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center space-x-4">
                <img src="logo.png" alt="Logo" class="w-12">
                <h1 class="text-2xl font-bold">Mbangun Jaya</h1>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-700">Home</a>
                <a href="#" class="text-gray-700">Contact Us</a>
                <a href="#" class="text-gray-700">Profil</a>
            </div>
        </div>

        <!-- Konten Utama (Lokasi Toko dan Peta) -->
        <div class="mt-6 flex space-x-4">
            <!-- Informasi Toko -->
            <div class="w-1/3 p-4 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Mbangun Jaya</h2>
                <p>Jl. Affandi, Terowol Pos 20, Seturan, Caturtunggal, Kec. Depok, Kab. Sleman, Yogyakarta</p>
                <p class="mt-2 text-blue-500">+62 274 513301</p>
                <p>Open: 08:00</p>
            </div>

            <!-- Peta -->
            <div class="w-2/3 h-96 rounded-lg shadow-md">
                <div id="map" class="w-full h-full"></div>
            </div>
        </div>
    </div>

    <!-- Script Google Maps -->
    <script>
        function initMap() {
            // Koordinat lokasi toko
            const storeLocation = { lat: -7.782921, lng: 110.408982 };
            
            // Buat peta baru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: storeLocation,
            });
            
            // Tambah marker ke peta
            new google.maps.Marker({
                position: storeLocation,
                map: map,
            });
        }
    </script>

    <!-- Menyertakan Google Maps API dengan API Key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

</body>
</html>