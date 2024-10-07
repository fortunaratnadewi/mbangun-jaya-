<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="flex items-center justify-center min-h-screen" style="background-color: #4D98B3; padding: 50px;">
   <!-- Icon Lingkaran di Kiri Atas dan Kanan Bawah -->
   <div class="absolute top-0 left-0 w-20 h-20 bg-orange-400 rounded-full z-10"></div>
    <div class="absolute bottom-0 right-0 w-20 h-20 bg-orange-400 rounded-full z-10"></div>

  <!-- Container untuk form login -->
  <div class="bg-gray-200 w-96 p-8 rounded-lg shadow-lg relative">
    

    <!-- Icon User -->
    <div class="flex justify-center mb-4">
      <div class="bg-orange-400 rounded-full p-4">
        <svg class="w-16 h-16 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
        </svg>
      </div>
    </div>

    <!-- Title User Login -->
    <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">User Login</h2>

    <!-- Form Login -->
    <form action="">
      <!-- Email Input -->
      <div class="mb-4 relative">
        <label class="block mb-1 text-gray-600" for="email">
          <svg class="inline-block w-5 h-5 mr-2 text-gray-600 absolute top-3 left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 16v6m-8 0v-6m0-8v6m8 0v-6"></path>
          </svg>
          <!-- Icon Email -->
        </label>
        <input id="email" type="email" class="w-full px-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="email">
      </div>

      <!-- Password Input -->
      <div class="mb-6 relative">
        <label class="block mb-1 text-gray-600" for="password">
          <svg class="inline-block w-5 h-5 mr-2 text-gray-600 absolute top-3 left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 4V6m0 4V10"></path>
          </svg>
          <!-- Icon Password -->
        </label>
        <input id="password" type="password" class="w-full px-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="password">
      </div>

      <!-- Button Login -->
      <div class="flex justify-center">
        <button class="bg-blue-400 text-gray-600 px-4 py-2 rounded-lg w-full hover:bg-orange-500 transition duration-300">
          Login
        </button>
      </div>
    </form>

    <!-- Link ke Sign Up -->
    <p class="text-center text-sm text-gray-600 mt-4">Belum punya akun? <a href="/register.blade.php" class="text-orange-400 font-bold hover:underline">Sign up</a></p>
  </div>
</body>
</html>
