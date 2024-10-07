<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset') }}/css/bacground.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Mbangun Jaya</title>
    <!-- Link CSS (Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo.png') }}" alt="Logo" style="width: 50px;">
        </a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
            <li><a class="text-black hover:text-orange-400 transition duration-300" href="/login.blade.php">Daftar</a></li>

            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
</nav>


    <!-- Hero Section -->
    <div class="hero-section">
    <img id="banner-image" src="{{ asset('image/latar1.jpeg') }}" alt="Banner Image">
    <h1 class="overlay-text"> SELAMAT DATANG DI TOKO MBANGUN JAYA</h1>
</div>

    <script>
    const images = [
        "{{ asset('image/latar2.jpeg') }}",
        "{{ asset('image/latar3.jpeg') }}",
        "{{ asset('image/latar1.jpeg') }}",
        "{{ asset('image/latar1.jpeg') }}"
    ];

    let currentIndex = 0;
    const imageElement = document.getElementById('banner-image');

    // Fungsi untuk mengganti gambar
    function changeImage() {
        currentIndex = (currentIndex + 1) % images.length;
        imageElement.src = images[currentIndex]; // Mengganti sumber gambar
    }

    // Mengganti gambar setiap 5 detik (5000 ms)
    setInterval(changeImage, 5000);
</script>
</div>

    <!-- Product Section -->
    <div class="container mt-4">
        <h4>Bahan Struktur</h4>
        <div class="row">
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/semen.jpeg') }}" class="img-fluid" alt="Semen">
                <h5>Semen</h5>
                <p>Rp. 65.000/karung</p>
                <span>⭐ 4.5</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/besi.jpeg') }}" class="img-fluid" alt="Besi">
                <h5>Besi</h5>
                <p>Rp. 20.000</p>
                <span>⭐ 4.2</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/pasir.jpeg') }}" class="img-fluid" alt="Pasir">
                <h5>Pasir</h5>
                <p>Rp. 150.000</p>
                <span>⭐ 4.2</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/genteng.jpeg') }}" class="img-fluid" alt="Genteng">
                <h5>Genteng</h5>
                <p>Rp. 10.000/buah</p>
                <span>⭐ 5.0</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
        </div>

    </div>

    <!-- Product peralatan Section -->
    <div class="container mt-4">
        <h4>Peralatan</h4>
        <div class="row">
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/palu.jpeg') }}" class="img-fluid" alt="Semen">
                <h5>Palu</h5>
                <p>Rp. 25.000/karung</p>
                <span>⭐ 4.9</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/gergaji.jpeg') }}" class="img-fluid" alt="Besi">
                <h5>gergaji</h5>
                <p>Rp. 20.000</p>
                <span>⭐ 4.4</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/obeng.png') }}" class="img-fluid" alt="Pasir">
                <h5>obeng</h5>
                <p>Rp. 20.000</p>
                <span>⭐ 4.2</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
            <div class="col-md-3 product-card">
                <img src="{{ asset('image/paku.jpeg') }}" class="img-fluid" alt="Genteng">
                <h5>Paku</h5>
                <p>Rp. 20.000/buah</p>
                <span>⭐ 4.8</span>
                <p><small>2 Hari pengiriman</small></p>
            </div>
        </div>
        
    </div>
    <!-- Link JS (Bootstrap) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>