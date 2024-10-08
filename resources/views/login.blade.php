{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="container mt-5">
        <h2>Login Customer</h2>

        <!-- Jika ada pesan kesalahan, tampilkan di sini -->
        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
        <form method="POST" action="/login">
          
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <div class="mt-3" id="loginMessage"></div>
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
</html> --}}

<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Login Customer</h2>

        <!-- Jika ada pesan kesalahan, tampilkan di sini -->
        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>

    <!-- jQuery & Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

