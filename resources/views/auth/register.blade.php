{{-- resources/views/auth/register.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar - MedinovaCare</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen flex items-center justify-center px-4">

  <div class="w-full max-w-xl bg-white shadow-lg rounded-lg p-8">
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
      <p class="text-slate-500 text-sm">Daftar akun baru untuk memulai</p>
    </div>

    <form action="{{ route('register') }}" method="post">
      @csrf

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Nama Lengkap</label>
        <input type="text" name="nama" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nama') border-red-500 @enderror" value="{{ old('nama') }}" required>
        @error('nama')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Email</label>
        <input type="email" name="email" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Alamat</label>
        <input type="text" name="alamat" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('alamat') border-red-500 @enderror" value="{{ old('alamat') }}" required>
        @error('alamat')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Nomor KTP</label>
        <input type="text" name="no_ktp" maxlength="16" minlength="16" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('no_ktp') border-red-500 @enderror" value="{{ old('no_ktp') }}" required>
        @error('no_ktp')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Nomor HP</label>
        <input type="text" name="no_hp" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('no_hp') border-red-500 @enderror" value="{{ old('no_hp') }}" required>
        @error('no_hp')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Password</label>
        <input type="password" name="password" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror" required>
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-sm text-slate-700">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <div class="mb-4 flex items-start gap-2">
        <input type="checkbox" id="agreeTerms" name="terms" required class="mt-1">
        <label for="agreeTerms" class="text-sm text-slate-600">
          Saya setuju dengan <a href="#" class="text-blue-600 hover:underline">syarat</a> yang berlaku
        </label>
      </div>

      <input type="hidden" name="role" value="pasien">

      <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 transition">
        Daftar
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-600">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk</a>
    </p>
  </div>

</body>
</html>
