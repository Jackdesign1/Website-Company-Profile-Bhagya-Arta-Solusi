@extends('layouts.app')
@section('content')
<!-- HERO SECTION -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden" style="background-image: url('{{ asset('assets/images/bg.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/55"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,0.25),transparent_55%)]"></div>
  <div class="relative max-w-7xl mx-auto px-6 py-28 text-center">
    <h1 class="text-5xl md:text-6xl xl:text-7xl font-extrabold leading-tight mb-6">
      <span class="block">Layanan</span>
      <span class="block bg-gradient-to-r from-blue-400 to-indigo-500 bg-clip-text text-transparent">
        Lengkap Kami
      </span>
    </h1>
    <p class="text-lg md:text-xl text-slate-200 leading-relaxed max-w-3xl mx-auto mb-10">
      Dari konsultasi awal hingga penyelesaian dokumen, tim profesional bersertifikat kami dengan pengalaman puluhan tahun siap menangani setiap kebutuhan legalitas dan perizinan bisnis Anda—agar Anda bisa fokus membangun visi, bukan birokrasi.
    </p>
    <a href="{{ route('kontak') }}" class="inline-block px-10 py-4 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">
      Konsultasi Gratis
    </a>
  </div>
</section>

<!-- LAYANAN SECTION -->
<section class="py-24 bg-gradient-to-b from-slate-50 to-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Layanan Lengkap Kami</h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
        Setiap layanan dirancang untuk menyederhanakan perjalanan legalitas usaha Anda—cepat, aman, dan tanpa ribet. Pilih yang sesuai kebutuhan, dan biarkan kami urus sisanya.
      </p>
    </div>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @foreach ([
        ['🏢', 'Pendirian PT', 'Wujudkan PT resmi dengan proses super cepat 3-7 hari. Kami tangani Akta Pendirian, NPWP, SIUP, TDP—semua hingga siap operasi, agar bisnis Anda langsung meluncur tanpa hambatan birokrasi.'],
        ['📋', 'Pendirian CV', 'Bangun CV fleksibel untuk usaha kecil Anda dengan kemudahan maksimal. Sertakan Surat Keterangan Usaha, NPWP, dan dokumen administrasi lengkap—ideal untuk startup yang ingin skalabel tanpa beban berat.'],
        ['📜', 'Perizinan Usaha', 'Navigasi kerumitan perizinan dengan percaya diri: NIB, OSS, SIUP, TDP, hingga izin khusus. Sesuaikan dengan jenis usaha Anda, aman secara legal—agar compliance jadi pondasi kuat pertumbuhan.'],
        ['🏷️', 'Perlindungan Merek', 'Jaga aset paling berharga Anda: brand dan merek dagang. Proses registrasi hukum yang teliti dan terjamin, lindungi inovasi dari kompetitor—sehingga bisnis Anda tetap unggul di pasar.'],
        ['🔍', 'Legal Audit', 'Perkuat fondasi bisnis dengan audit mendalam: identifikasi risiko hukum dini dan solusi pencegahan. Pastikan operasi aman jangka panjang, hindari jebakan yang bisa merugikan masa depan Anda.'],
        ['💬', 'Konsultasi Bisnis', 'Diskusi mendalam dengan ahli berpengalaman: strategi bisnis holistik, tax planning cerdas, dan solusi administrasi tanpa biaya tambahan. Dapatkan panduan personal untuk akselerasi sukses Anda.']
      ] as [$icon, $title, $desc])
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 group hover:border-blue-300 hover:-translate-y-1">
        <div class="text-5xl mb-6 transform group-hover:scale-110 transition duration-300 text-blue-600">{{ $icon }}</div>
        <h3 class="text-xl font-bold mb-4 text-gray-900">{{ $title }}</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-6">{{ $desc }}</p>
        <a href="{{ route('layanan') }}" class="inline-block text-blue-600 font-semibold hover:text-blue-700 hover:underline">
          Pelajari Lebih Lanjut →
        </a>
      </div>
      @endforeach
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
    <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Wujudkan Legalitas Usaha Anda?</h2>
    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">Pilih layanan di atas dan hubungi kami untuk konsultasi gratis. Kami siap jadi mitra sukses Anda dari hari pertama.</p>
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
