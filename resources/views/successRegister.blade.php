<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berhasil Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Redirect ke halaman register setelah 
    setTimeout(function() {
      window.location.href = "/login";  // 
    }, 3000);
  </script>
</head>
<body class="bg-[#4D98B3] flex items-center justify-center min-h-screen">

  <!-- Container pesan berhasil -->
  <div class="bg-gray-100 w-1/3 p-8 rounded-lg shadow-lg text-center">
    <svg class="w-16 h-16 mx-auto text-orange-500 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
    </svg>
    <h2 class="text-2xl font-bold mb-4">Sign Up</h2>
    <p class="text-lg text-orange-500 mb-4">Berhasil</p>
    <a href="login.html" class="bg-orange-400 text-white px-4 py-2 rounded-lg">Login</a>
  </div>

</body>
</html>
