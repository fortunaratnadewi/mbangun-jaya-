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