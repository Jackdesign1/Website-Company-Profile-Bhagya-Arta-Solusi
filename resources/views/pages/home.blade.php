@extends('layouts.app')
@section('content')
<!-- HERO SECTION -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden" style="background-image: url('{{ asset('assets/images/bg.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/55"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,0.25),transparent_55%)]"></div>
  <div class="relative max-w-7xl mx-auto px-6 py-28 grid lg:grid-cols-2 gap-16 items-center w-full">
    <!-- LEFT CONTENT -->
    <div class="fade-in">
      <h1 class="text-5xl md:text-6xl xl:text-7xl font-extrabold leading-tight mb-8">
        <span class="block text-white">Legalitas Usaha Anda</span>
        <span class="block bg-gradient-to-r from-blue-400 to-indigo-500 bg-clip-text text-transparent">
          Tanpa Ribet & Cepat
        </span>
      </h1>
      <p class="text-lg md:text-xl text-slate-200 leading-relaxed max-w-2xl mb-10">
        Kami melayani pengurusan <span class="font-semibold text-white">PT, CV, dan semua perizinan usaha</span>
        di seluruh Indonesia dengan fokus unggulan di <span class="font-semibold text-blue-300">Jawa Timur</span>.
        Proses jelas, pendampingan profesional, dan semua dikerjakan sesuai regulasi resmi
        tanpa membuat Anda pusing dengan urusan administrasi.
      </p>
      <div class="flex flex-wrap gap-4">
        <a href="{{ route('kontak') }}" class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">
          Konsultasi Gratis
        </a>
        <a href="{{ route('layanan') }}" class="px-8 py-4 rounded-xl bg-white text-blue-600 font-bold text-lg border border-blue-200 shadow hover:shadow-md transition duration-300">
          Lihat Layanan
        </a>
      </div>
    </div>
    <!-- RIGHT CONTENT -->
    <div class="hidden lg:flex justify-center lg:justify-end">
      <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-8 md:p-10 shadow-2xl border border-white/20 max-w-sm">
        <h3 class="text-xl font-bold mb-6 text-blue-300">Mengapa Banyak Pelaku Usaha Memilih Kami?</h3>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <span class="text-2xl">✅</span>
            <div>
              <p class="font-semibold text-white">Ahli Jawa Timur</p>
              <p class="text-sm text-slate-300">Memahami regulasi daerah dan kebutuhan pelaku usaha lokal</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-2xl">🤝</span>
            <div>
              <p class="font-semibold text-white">Didampingi Penuh</p>
              <p class="text-sm text-slate-300">Dari konsultasi hingga selesai, kami tidak meninggalkan Anda</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-2xl">📄</span>
            <div>
              <p class="font-semibold text-white">Transparan & Jelas</p>
              <p class="text-sm text-slate-300">Biaya dan proses dijelaskan sejak awal tanpa kejutan</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-2xl">🛡️</span>
            <div>
              <p class="font-semibold text-white">Legal & Terjamin</p>
              <p class="text-sm text-slate-300">Semua pengurusan sesuai hukum dan regulasi resmi</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<style>
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .fade-in {
    animation: fadeIn 0.8s ease-in;
  }
</style>

<!-- TENTANG SECTION -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
          Mengapa Kami Jadi Pilihan <span class="text-blue-600">2000+ Entrepreneur?</span>
        </h2>
        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
          Sejak 2015, Bhagya Artha Solusi telah menjadi partner terpercaya dalam mewujudkan impian bisnis ribuan entrepreneur. Kami tidak hanya sekadar jasa pendirian, tapi mitra yang peduli dengan kesuksesan jangka panjang bisnis Anda.
        </p>
        <ul class="space-y-4 mb-10">
          <li class="flex items-start gap-4">
            <div class="text-2xl">🎯</div>
            <div>
              <p class="font-semibold text-gray-900">Visi yang Jelas</p>
              <p class="text-slate-600">Membuat pendirian bisnis semudah memesan kopi, tanpa ribet dan transparan</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <div class="text-2xl">💼</div>
            <div>
              <p class="font-semibold text-gray-900">Tim Profesional Bersertifikat</p>
              <p class="text-slate-600">Konsultan hukum, akuntansi, dan bisnis dengan pengalaman puluhan tahun</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <div class="text-2xl">🏆</div>
            <div>
              <p class="font-semibold text-gray-900">Track Record Terbukti</p>
              <p class="text-slate-600">2000+ klien puas, 98% rating kepuasan, proses tercepat 5 hari</p>
            </div>
          </li>
        </ul>
        <a href="{{ route('tentang') }}" class="inline-block px-8 py-4 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-700 transition">
          Baca Cerita Kami Lengkap →
        </a>
      </div>
      <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-10 border border-blue-200">
        <div class="space-y-6">
          <!-- TESTIMONI 1 -->
          <div class="bg-white p-6 rounded-2xl shadow-sm border border-blue-100">
            <p class="text-sm text-blue-600 font-semibold mb-3">⭐ Testimoni Klien</p>
            <p class="text-gray-700 italic mb-5">"Proses PT saya yang terasa rumit jadi sangat mudah. Hanya 5 hari sudah terbit! Profesional dan responsif banget."</p>
            <div class="flex items-center gap-4">
              <img src="{{ asset('assets/images/zaky.jpg') }}" alt="Muhammad Zaky" class="w-12 h-12 rounded-full object-cover border border-blue-200" />
              <div>
                <p class="text-sm font-semibold text-gray-900">Muhammad Zaky</p>
                <p class="text-xs text-slate-500">Project Manager Bara Api Digital</p>
              </div>
            </div>
          </div>
          <!-- TESTIMONI 2 -->
          <div class="bg-white p-6 rounded-2xl shadow-sm border border-blue-100">
            <p class="text-sm text-blue-600 font-semibold mb-3">⭐ Testimoni Klien</p>
            <p class="text-gray-700 italic mb-5">"Harga super terjangkau, kualitas excellent! Detail dan sabar menjelaskan setiap langkah. Highly recommended!"</p>
            <div class="flex items-center gap-4">
              <img src="{{ asset('assets/images/butik.jpg') }}" alt="Andin Dwi Mutiara" class="w-12 h-12 rounded-full object-cover border border-blue-200" />
              <div>
                <p class="text-sm font-semibold text-gray-900">Andin Dwi Mutiara</p>
                <p class="text-xs text-slate-500">Owner Kios Batik</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JANGKAUAN JAWA TIMUR SECTION -->
<section class="py-24 bg-gradient-to-b from-slate-50 to-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-bold mb-4">🏆 Keunggulan Kompetitif</span>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
        Konsultan Legalitas Usaha Terbaik <span class="text-blue-600">di Jawa Timur</span>
      </h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
        Dengan jaringan luas se-Indonesia dan keahlian mendalam di Jawa Timur, kami memberikan layanan terbaik dengan memahami karakteristik unik setiap daerah. Surabaya adalah kantor utama dan pusat keunggulan kami.
      </p>
    </div>

    <!-- MAP VISUALIZATION -->
    <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200 overflow-hidden">
      <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Jangkauan Layanan Kami</h3>
      <div class="relative w-full bg-gradient-to-b from-gray-50 to-gray-100 rounded-xl p-8 min-h-80 flex items-center justify-center">
        <div class="text-center">
          <img src="{{ asset('assets/images/jatim.png') }}" alt="Peta Jawa Timur" class="max-w-full h-auto mx-auto opacity-95 mb-6 shadow-md rounded-lg">
          <p class="text-slate-600 text-lg font-semibold">Kantor Utama: Surabaya, Jawa Timur</p>
          <p class="text-slate-500 text-sm mt-2">Mitra di 25+ Kota | 2000+ Klien Puas | Respons 24 Jam</p>
        </div>

    </div>
  </div>
</section>

<!-- LAYANAN SECTION -->
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Layanan Lengkap Kami</h2>
    <p class="text-slate-600 text-lg max-w-3xl mx-auto mb-16 leading-relaxed">
      Dari konsultasi awal hingga penyelesaian dokumen, kami handle semua kebutuhan legalitas dan perizinan bisnis Anda dengan tim profesional bersertifikat dan berpengalaman puluhan tahun.
    </p>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @foreach ([
        ['🏢', 'Pendirian PT', 'Dirikan PT resmi dengan proses cepat 3-7 hari. Kami urus Akta Pendirian, NPWP, SIUP, dan TDP hingga terbit.'],
        ['📋', 'Pendirian CV', 'Bentuk CV Anda dengan mudah dan cepat. Lengkap dengan Surat Keterangan Usaha, NPWP, dan semua dokumen administrasi yang diperlukan.'],
        ['📜', 'Perizinan Usaha', 'NIB, OSS, SIUP, TDP, dan berbagai izin khusus lainnya. Kami handle semua perizinan sesuai jenis usaha Anda dengan aman dan legal.'],
        ['🏷️', 'Perlindungan Merek', 'Lindungi brand dan merek dagang usaha Anda secara maksimal di mata hukum. Proses registrasi yang aman dan terjamin.'],
        ['🔍', 'Legal Audit', 'Audit legalitas bisnis Anda untuk keamanan jangka panjang. Identifikasi risiko hukum dan solusi pencegahannya.'],
        ['💬', 'Konsultasi Bisnis', 'Diskusi langsung dengan ahli berpengalaman untuk strategi bisnis, tax planning, dan solusi administrasi tanpa biaya tambahan.']
      ] as [$icon, $title, $desc])
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 group hover:border-blue-300 hover:-translate-y-1">
        <div class="text-5xl mb-6 transform group-hover:scale-110 transition duration-300">{{ $icon }}</div>
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

<!-- PROMO SECTION -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="inline-block px-4 py-2 rounded-full bg-red-100 text-red-700 text-sm font-bold mb-4">🎉 Penawaran Terbatas</span>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Promo Spesial Bulan Ini</h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto">Manfaatkan penawaran eksklusif kami untuk pendirian usaha Anda dengan harga terbaik tahun ini.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- PROMO 1 -->
      <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-2xl border-2 border-blue-300 shadow-xl relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-red-500 text-white px-6 py-2 rounded-bl-xl font-bold text-sm">DISKON 30%</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 mt-6">Paket Pendirian PT</h3>
        <p class="text-slate-600 mb-6">Pendirian PT lengkap dengan Akta, NPWP, SIUP, dan TDP semua termasuk dalam satu paket hemat.</p>
        <div class="mb-6">
          <p class="text-sm text-slate-600">Harga Normal:</p>
          <p class="text-2xl font-bold text-gray-900">Rp 5.000.000</p>
          <p class="text-sm text-slate-600 line-through">Rp 7.000.000</p>
        </div>
        <a href="{{ route('kontak') }}" class="block w-full bg-blue-600 text-white py-3 rounded-lg font-bold text-center hover:bg-blue-700 transition">Ambil Promo Sekarang</a>
      </div>
      <!-- PROMO 2 -->
      <div class="bg-gradient-to-br from-indigo-50 to-purple-50 p-8 rounded-2xl border-2 border-indigo-300 shadow-xl relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-indigo-600 text-white px-6 py-2 rounded-bl-xl font-bold text-sm">HEMAT 25%</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 mt-6">Paket Bundling PT + Virtual Office</h3>
        <p class="text-slate-600 mb-6">Pendirian PT lengkap ditambah alamat kantor virtual di lokasi strategis selama 1 tahun.</p>
        <div class="mb-6">
          <p class="text-sm text-slate-600">Harga Normal:</p>
          <p class="text-2xl font-bold text-gray-900">Rp 8.500.000</p>
          <p class="text-sm text-slate-600 line-through">Rp 11.000.000</p>
        </div>
        <a href="{{ route('kontak') }}" class="block w-full bg-indigo-600 text-white py-3 rounded-lg font-bold text-center hover:bg-indigo-700 transition">Ambil Promo Sekarang</a>
      </div>
      <!-- PROMO 3 -->
      <div class="bg-gradient-to-br from-purple-50 to-violet-50 p-8 rounded-2xl border-2 border-purple-300 shadow-xl relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-purple-600 text-white px-6 py-2 rounded-bl-xl font-bold text-sm">GRATIS 3 BULAN</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 mt-6">Konsultasi Pajak Premium</h3>
        <p class="text-slate-600 mb-6">3 bulan konsultasi pajak gratis setelah pendirian + laporan keuangan bulanan hingga 6 bulan.</p>
        <div class="mb-6">
          <p class="text-sm text-slate-600">Paket Lengkap:</p>
          <p class="text-2xl font-bold text-gray-900">Rp 6.500.000</p>
          <p class="text-sm text-blue-600 font-semibold">Konsultasi 3 bln GRATIS</p>
        </div>
        <a href="{{ route('kontak') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-bold text-center hover:bg-purple-700 transition">Ambil Promo Sekarang</a>
      </div>
    </div>
    <div class="text-center mt-12 p-8 bg-yellow-50 rounded-2xl border border-yellow-300">
      <p class="text-gray-700 mb-2"><span class="font-bold text-lg">⏰ Promo Terbatas!</span> Penawaran berakhir akhir bulan ini.</p>
      <p class="text-slate-600">Hubungi kami sekarang juga sebelum kuota penuh!</p>
    </div>
  </div>
</section>

<!-- BERITA & INSIGHT SECTION -->
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-bold mb-4">📰 Berita & Insights</span>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Artikel Terbaru untuk Entrepreneur</h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto">Pelajari tips bisnis, update regulasi terbaru, dan strategi sukses dari para ahli kami.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <!-- ARTIKEL 1 -->
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition border border-gray-200">
        <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="Blog" class="w-full h-48 object-cover">
        <div class="p-8">
          <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold mb-3">📚 Panduan</span>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Pentingnya Segera Mendirikan Badan Usaha Resmi</h3>
          <p class="text-slate-600 text-sm mb-4">Mengapa banyak entrepreneur lokal masih belum mendirikan PT atau CV? Pelajari keuntungan resmi vs ilegal.</p>
          <div class="flex justify-between items-center text-xs text-slate-500">
            <span>15 Des 2024</span>
            <a href="#" class="text-blue-600 font-bold hover:text-blue-700">Baca →</a>
          </div>
        </div>
      </article>
      <!-- ARTIKEL 2 -->
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition border border-gray-200">
        <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="Blog" class="w-full h-48 object-cover">
        <div class="p-8">
          <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-bold mb-3">💰 Pajak & Keuangan</span>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Update UU Pajak 2024: Apa yang Harus Diketahui?</h3>
          <p class="text-slate-600 text-sm mb-4">Peraturan pajak terus berubah. Kami summarize update penting yang impact langsung ke bisnis Anda.</p>
          <div class="flex justify-between items-center text-xs text-slate-500">
            <span>12 Des 2024</span>
            <a href="#" class="text-blue-600 font-bold hover:text-blue-700">Baca →</a>
          </div>
        </div>
      </article>
      <!-- ARTIKEL 3 -->
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition border border-gray-200">
        <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="Blog" class="w-full h-48 object-cover">
        <div class="p-8">
          <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-bold mb-3">🚀 Success Story</span>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Dari Usaha Kecil Jadi PT: Kisah Sukses Klien</h3>
          <p class="text-slate-600 text-sm mb-4">Bagaimana Budi berhasil mengembangkan usaha kecilnya hingga omset ratusan juta dalam 2 tahun.</p>
          <div class="flex justify-between items-center text-xs text-slate-500">
            <span>10 Des 2024</span>
            <a href="#" class="text-blue-600 font-bold hover:text-blue-700">Baca →</a>
          </div>
        </div>
      </article>
    </div>
    <div class="text-center">
      <a href="#" class="inline-block px-10 py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition">Lihat Semua Artikel →</a>
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
    <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Mulai Perjalanan Bisnis Anda?</h2>
    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">Jangan biarkan birokrasi menghalangi impian Anda. Konsultasi gratis hari ini dan wujudkan legalitas usaha yang solid besok.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('kontak') }}" class="inline-block px-10 py-4 rounded-xl bg-white text-blue-600 font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">
        💬 Mulai Konsultasi Gratis
      </a>
      <a href="tel:+628123456789" class="inline-block px-10 py-4 rounded-xl border-2 border-white text-white font-bold text-lg hover:bg-white/10 transition duration-300">
        📞 Telepon Langsung
      </a>
    </div>
  </div>
</section>
@endsection
