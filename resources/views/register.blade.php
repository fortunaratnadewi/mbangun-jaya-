<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function handleRegister(event) {
      event.preventDefault();
      // Simulasi proses pendaftaran berhasil
      window.location.href = "/success";  // Redirect ke halaman sukses
    }
  </script>
</head>
<body class="bg-[#4D98B3] flex items-center justify-center min-h-screen">

  <!-- Container utama -->
  <div class="bg-gray-100 w-2/3 p-8 rounded-lg shadow-lg flex relative">
    
    <!-- Section teks kiri -->
    <div class="w-1/2 flex items-center justify-center bg-[#4D98B3] rounded-lg">
      <h1 class="text-white text-3xl font-bold text-center leading-snug">Belanja Lebih Mudah Bersama Kami</h1>
    </div>

    <!-- Form Sign Up -->
    <div class="w-1/2 p-8 rounded-lg relative bg-gray-200">
      <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>
      <form onsubmit="handleRegister(event)">
        <!-- Input Nama -->
        <div class="mb-4 relative">
          <span class="material-icons absolute left-3 top-3 text-gray-400">person</span>
          <input type="text" class="w-full px-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Name" required>
        </div>
        <!-- Input Email -->
        <div class="mb-4 relative">
          <span class="material-icons absolute left-3 top-3 text-gray-400">mail</span>
          <input type="email" class="w-full px-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Email" required>
        </div>
        <!-- Input Password -->
        <div class="mb-4 relative">
          <span class="material-icons absolute left-3 top-3 text-gray-400">lock</span>
          <input type="password" class="w-full px-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password" required>
        </div>
        <!-- Button Register -->
        <div class="mb-4">
          <button type="submit" class="bg-blue-500 text-white w-full py-2 rounded-lg hover:bg-blue-600">Create Account</button>

        </div>
        <p class="text-center">Sudah punya akun? <a href="login.html" class="text-orange-400 font-bold hover:underline">Login</a></p>
        <div class="text-center mt-4 text-gray-500">OR</div>
        <button class="bg-white text-black w-full mt-4 py-2 rounded-lg border hover:bg-gray-200 flex items-center justify-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" class="w-5 h-5 mr-2" alt="Google">
          <span>Masuk dengan Google</span>
        </button>

      </form>
    </div>

    <!-- Lingkaran di Kiri Atas dan Kanan Bawah -->
    <div class="absolute top-[-30px] left-[-30px] w-20 h-20 bg-orange-400 rounded-full"></div>
    <div class="absolute bottom-[-30px] right-[-30px] w-20 h-20 bg-orange-400 rounded-full"></div>
  </div>

</body>
</html>
