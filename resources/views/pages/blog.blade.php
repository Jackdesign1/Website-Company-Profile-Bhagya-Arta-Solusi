@extends('layouts.app')
@section('content')
<!-- HERO SECTION -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden" style="background-image: url('{{ asset('assets/images/bg.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/55"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,0.25),transparent_55%)]"></div>
  <div class="relative max-w-7xl mx-auto px-6 py-28 text-center">
    <h1 class="text-5xl md:text-6xl xl:text-7xl font-extrabold leading-tight mb-6">
      <span class="block">📰 Berita & Insights</span>
      <span class="block bg-gradient-to-r from-blue-400 to-indigo-500 bg-clip-text text-transparent">
        Artikel Terbaru untuk Entrepreneur
      </span>
    </h1>
    <p class="text-lg md:text-xl text-slate-200 leading-relaxed max-w-3xl mx-auto mb-10">
      Pelajari tips bisnis, update regulasi terbaru, dan strategi sukses dari para ahli kami—untuk membekali Anda dengan pengetahuan praktis yang langsung bisa diterapkan.
    </p>
    <a href="{{ route('kontak') }}" class="inline-block px-10 py-4 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">
      Konsultasi Gratis
    </a>
  </div>
</section>

<!-- ARTIKEL SECTION -->
<section class="py-24 bg-gradient-to-b from-slate-50 to-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- ARTIKEL 1 -->
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-200">
        <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="Pentingnya Mendirikan Badan Usaha Resmi" class="w-full h-48 object-cover">
        <div class="p-6">
          <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold mb-3">📚 Panduan</span>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Pentingnya Segera Mendirikan Badan Usaha Resmi</h3>
          <p class="text-slate-600 text-sm mb-4 leading-relaxed">Mengapa banyak entrepreneur lokal masih belum mendirikan PT atau CV? Pelajari keuntungan resmi vs ilegal—dan bagaimana langkah sederhana ini bisa lindungi aset serta akselerasi pertumbuhan bisnis Anda.</p>
          <div class="flex justify-between items-center text-xs text-slate-500 mb-2">
            <span>15 Des 2024</span>
          </div>
          <a href="#" class="text-blue-600 font-bold hover:text-blue-700">Baca →</a>
        </div>
      </article>
      <!-- ARTIKEL 2 -->
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-200">
        <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="Update UU Pajak 2024" class="w-full h-48 object-cover">
        <div class="p-6">
          <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-bold mb-3">💰 Pajak & Keuangan</span>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Update UU Pajak 2024: Apa yang Harus Diketahui?</h3>
          <p class="text-slate-600 text-sm mb-4 leading-relaxed">Peraturan pajak terus berubah. Kami summarize update penting yang impact langsung ke bisnis Anda—dari potensi penghematan hingga risiko denda, agar Anda tetap compliant tanpa stres.</p>
          <div class="flex justify-between items-center text-xs text-slate-500 mb-2">
            <span>12 Des 2024</span>
          </div>
          <a href="#" class="text-blue-600 font-bold hover:text-blue-700">Baca →</a>
        </div>
      </article>
      <!-- ARTIKEL 3 -->
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-200">
        <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="Kisah Sukses Klien" class="w-full h-48 object-cover">
        <div class="p-6">
          <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-bold mb-3">🚀 Success Story</span>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Dari Usaha Kecil Jadi PT: Kisah Sukses Klien</h3>
          <p class="text-slate-600 text-sm mb-4 leading-relaxed">Bagaimana Budi berhasil mengembangkan usaha kecilnya hingga omset ratusan juta dalam 2 tahun? Temukan inspirasi dan langkah praktis dari perjalanan nyata klien kami.</p>
          <div class="flex justify-between items-center text-xs text-slate-500 mb-2">
            <span>10 Des 2024</span>
          </div>
          <a href="#" class="text-blue-600 font-bold hover:text-blue-700">Baca →</a>
        </div>
      </article>
    </div>
    <div class="text-center mt-16">
      <a href="#" class="inline-block px-10 py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition duration-300">
        Lihat Semua Artikel →
      </a>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="py-24 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 -left-4 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
    <div class="absolute -bottom-8 right-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
  </div>
  <div class="relative max-w-4xl mx-auto px-6">
    <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Terapkan Insight Ini?</h2>
    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">Artikel kami dirancang untuk aksi langsung—hubungi tim untuk konsultasi gratis dan terapkan strategi sukses hari ini.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('kontak') }}" class="inline-block px-10 py-4 rounded-xl bg-white text-blue-600 font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">
        💬 Konsultasi Gratis
      </a>
      <a href="tel:+628123456789" class="inline-block px-10 py-4 rounded-xl border-2 border-white text-white font-bold text-lg hover:bg-white/10 transition duration-300">
        📞 Hubungi Sekarang
      </a>
    </div>
  </div>
</section>
@endsection
