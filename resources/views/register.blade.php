{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>

    // function handleRegister(event) {
    //   event.preventDefault();
    //   // Simulasi proses pendaftaran berhasil
    //   window.location.href = "/success";  // Redirect ke halaman sukses
    // }

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
</html> --}}


<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Register Customer</h2>
        
        <!-- Formulir pendaftaran -->
        <form method="POST" action="/register">
            @csrf <!-- Menyertakan token CSRF untuk keamanan -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        

        <!-- Menampilkan pesan kesalahan atau sukses -->
        <div class="mt-3">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <!-- jQuery & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


