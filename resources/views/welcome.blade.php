<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedinovaCare</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen flex items-center justify-center text-slate-800">

  <div class="text-center max-w-xl px-6">
    <!-- Logo / Icon -->
    <div class="flex justify-center mb-6">
      <div class="bg-blue-100 p-4 rounded-full">
        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 4.5v15m7.5-15v15M3.75 9h16.5m-16.5 6h16.5" />
        </svg>
      </div>
    </div>

    <!-- Judul -->
    <h1 class="text-4xl sm:text-5xl font-bold mb-4 tracking-tight text-blue-900">MedinovaCare</h1>
    <p class="text-lg text-slate-600 mb-8">
      Sistem informasi poliklinik digital untuk layanan kesehatan yang lebih baik, cepat, dan terintegrasi.
    </p>

    <!-- Tombol -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('login') }}"
         class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold shadow hover:bg-blue-700 transition">
        Masuk
      </a>
      <a href="{{ route('register') }}"
         class="bg-white border border-blue-600 text-blue-600 px-6 py-3 rounded-full font-semibold shadow hover:bg-blue-50 transition">
        Daftar
      </a>
    </div>

    <!-- Footer -->
    <p class="mt-10 text-sm text-slate-400">&copy; 2025 MedinovaCare. Semua hak dilindungi.</p>
  </div>

</body>
</html>
