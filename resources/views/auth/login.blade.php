<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk - MedinovaCare</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen flex items-center justify-center px-4">

  <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
    <div class="text-center mb-6">
      <div class="flex justify-center mb-2">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M8.25 4.5v15m7.5-15v15M3.75 9h16.5m-16.5 6h16.5" />
          </svg>
        </div>
      </div>
      <h1 class="text-2xl font-bold text-blue-800">MedinovaCare</h1>
      <p class="text-slate-500 text-sm">Masuk untuk memulai sesi Anda</p>
    </div>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4 text-sm">
        <strong>Sukses:</strong> {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4 text-sm">
        <strong>Gagal:</strong> {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" id="loginForm">
      @csrf
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
        <input type="email" name="email" id="email"
               class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
               placeholder="contoh@email.com" value="{{ old('email') }}" required autofocus>
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
        <input type="password" name="password" id="password"
               class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror"
               placeholder="********" required>
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex items-center justify-between mb-6">


      </div>

      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 transition">
        Masuk
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-600">
      Belum punya akun?
      <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar</a>
    </p>
  </div>

</body>
</html>
