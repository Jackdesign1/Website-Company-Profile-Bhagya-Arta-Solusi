@extends('layouts.app')
@section('content')

<!-- HERO SECTION -->
<section class="relative min-h-auto flex items-center text-white overflow-hidden pt-20 pb-12"
         style="background-image: url('{{ asset('assets/images/bg.png') }}');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/55"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,0.25),transparent_55%)]"></div>

  <div class="relative max-w-4xl mx-auto px-6 text-center">
    <h1 class="text-5xl md:text-6xl xl:text-7xl font-extrabold leading-tight mb-2">
      Tentang Kami
    </h1>
  </div>
</section>

<!-- CERITA KAMI SECTION -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
      <div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
          Perjalanan Kami: Dari Mimpi Sederhana Menjadi <span class="text-blue-600">Pilihan 2900+ Entrepreneur</span>
        </h2>
        <p class="text-lg text-slate-600 mb-6 leading-relaxed">
          Sejak 2015, Bhagya Artha Solusi memulai dengan visi sederhana namun jelas: membuat pendirian usaha menjadi mudah, cepat, dan terjangkau bagi setiap entrepreneur.
        </p>
        <p class="text-lg text-slate-600 mb-6 leading-relaxed">
          Kami memahami bahwa mendirikan PT atau CV bukanlah proses yang harus ribet dan membingungkan. Oleh karena itu, kami menghadirkan solusi lengkap yang mencakup konsultasi gratis, persiapan dokumen, pengurusan perizinan, hingga pendampingan pasca-pendirian.
        </p>
        <p class="text-lg text-slate-600 leading-relaxed">
          Kini, lebih dari 2900 entrepreneur telah mempercayai kami untuk mewujudkan impian bisnis mereka. Kepercayaan ini memotivasi kami untuk terus meningkatkan kualitas layanan dan memberikan yang terbaik bagi setiap klien.
        </p>
      </div>
      <div class="relative">
        <img src="{{ asset('assets/images/Zaky.jpg') }}" alt="Tim Bhagya Artha Solusi" class="w-full rounded-3xl shadow-2xl object-cover h-96">
        <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm p-5 rounded-2xl shadow-lg max-w-xs">
          <p class="text-sm font-bold text-gray-900 mb-1">Tim Expert Kami</p>
          <p class="text-xs text-slate-600">Konsultan bersertifikat dengan pengalaman 10+ tahun di bidang legalitas bisnis</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PENCAPAIAN SECTION -->
<section class="py-24 bg-gradient-to-b from-blue-50 to-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Pencapaian Kami</h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto">Angka-angka ini bukan hanya statistik, tapi bukti kepercayaan ribuan entrepreneur terhadap layanan kami.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-12">
      <div class="text-center p-12 bg-white rounded-2xl shadow-lg border-t-4 border-blue-600 hover:shadow-xl transition">
        <div class="text-5xl font-black text-blue-600 mb-3">2900+</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Pendirian Perusahaan</h3>
        <p class="text-slate-600">PT, CV, dan berbagai bentuk usaha lainnya yang berhasil kami dirikan dengan legal dan tepat waktu</p>
      </div>

      <div class="text-center p-12 bg-white rounded-2xl shadow-lg border-t-4 border-blue-600 hover:shadow-xl transition">
        <div class="text-5xl font-black text-blue-600 mb-3">210+</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Layanan Perpajakan</h3>
        <p class="text-slate-600">Konsultasi pajak, filing SPT, dan strategi fiskal untuk optimalisasi beban pajak klien</p>
      </div>

      <div class="text-center p-12 bg-white rounded-2xl shadow-lg border-t-4 border-blue-600 hover:shadow-xl transition">
        <div class="text-5xl font-black text-blue-600 mb-3">9+</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Tahun Melayani</h3>
        <p class="text-slate-600">Pengalaman panjang membantu entrepreneur Indonesia membangun bisnis yang legal dan berkelanjutan</p>
      </div>
    </div>
  </div>
</section>

<!-- KEUNGGULAN SECTION -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Mengapa Memilih Kami?</h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto">Kami bukan hanya penyedia jasa, tetapi partner strategis dalam membangun fondasi bisnis Anda yang kuat dan legal.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-10 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200 hover:shadow-xl transition">
        <div class="text-5xl mb-6">⚖️</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Legalitas 100% Terjamin</h3>
        <p class="text-slate-600 leading-relaxed">Semua proses sesuai dengan regulasi Kemenkumham, Pajak, dan instansi pemerintah terbaru. Setiap dokumen dijamin valid dan diakui secara hukum.</p>
      </div>

      <div class="p-10 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200 hover:shadow-xl transition">
        <div class="text-5xl mb-6">⚡</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Proses Super Cepat</h3>
        <p class="text-slate-600 leading-relaxed">Rata-rata penyelesaian hanya 3-7 hari untuk PT/CV lengkap. Anda bisa fokus mengembangkan bisnis sementara kami urus administrasi.</p>
      </div>

      <div class="p-10 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200 hover:shadow-xl transition">
        <div class="text-5xl mb-6">🤝</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Pendampingan Penuh</h3>
        <p class="text-slate-600 leading-relaxed">Dari konsultasi gratis awal hingga follow-up 6 bulan pasca-pendirian. Kami ada di setiap langkah perjalanan bisnis Anda.</p>
      </div>

      <div class="p-10 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200 hover:shadow-xl transition">
        <div class="text-5xl mb-6">💰</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Harga Transparan</h3>
        <p class="text-slate-600 leading-relaxed">Biaya dijelaskan sejak awal tanpa ada biaya tersembunyi. Anda tahu persis berapa yang harus dikeluarkan untuk setiap layanan.</p>
      </div>

      <div class="p-10 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200 hover:shadow-xl transition">
        <div class="text-5xl mb-6">👥</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Tim Expert & Berpengalaman</h3>
        <p class="text-slate-600 leading-relaxed">Konsultan kami bersertifikat dengan pengalaman 10+ tahun. Mereka menguasai setiap detail regulasi dan best practices industri.</p>
      </div>

      <div class="p-10 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200 hover:shadow-xl transition">
        <div class="text-5xl mb-6">📊</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Track Record Terbukti</h3>
        <p class="text-slate-600 leading-relaxed">2900+ pendirian sukses, 98% rating kepuasan klien, dan ribuan testimoni positif dari entrepreneur Indonesia.</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI SECTION -->
<section class="py-24 bg-gradient-to-b from-slate-50 to-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Apa Kata Klien Kami?</h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto">Kepercayaan dan kepuasan klien adalah ukuran kesuksesan kami.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-10 bg-white rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition">
        <div class="flex items-center mb-6">
          <img src="{{ asset('assets/images/Zaky.jpg') }}" alt="Muhammad Zaky" class="w-16 h-16 rounded-full object-cover border-4 border-blue-200 mr-4">
          <div>
            <p class="font-bold text-gray-900">Muhammad Zaky</p>
            <p class="text-sm text-slate-500">Project Manager, Bara Api Digital</p>
          </div>
        </div>
        <p class="text-slate-700 italic leading-relaxed">"Proses pendirian PT saya yang awalnya terasa rumit dan membingungkan jadi sangat mudah berkat tim Bhagya Artha. Hanya 5 hari PT saya sudah terbit resmi! Tim mereka sangat profesional, responsif, dan detail. Highly recommended!"</p>
        <div class="flex text-yellow-400 mt-4">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="p-10 bg-white rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition">
        <div class="flex items-center mb-6">
          <img src="{{ asset('assets/images/Zaky.jpeg') }}" alt="Sari Wijaya" class="w-16 h-16 rounded-full object-cover border-4 border-blue-200 mr-4">
          <div>
            <p class="font-bold text-gray-900">Sari Wijaya</p>
            <p class="text-sm text-slate-500">Owner, Kios Batik Tradisional</p>
          </div>
        </div>
        <p class="text-slate-700 italic leading-relaxed">"Harga layanan super terjangkau dengan kualitas yang excellent! Tim mereka sangat detail dan sabar menjelaskan setiap langkah proses. Tidak ada yang dirasa ribet. Saya sangat puas dan rekomen ke teman-teman bisnis saya."</p>
        <div class="flex text-yellow-400 mt-4">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="p-10 bg-white rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition">
        <div class="flex items-center mb-6">
          <img src="{{ asset('assets/images/Zaky.jpg') }}" alt="Andi Pratama" class="w-16 h-16 rounded-full object-cover border-4 border-blue-200 mr-4">
          <div>
            <p class="font-bold text-gray-900">Andi Pratama</p>
            <p class="text-sm text-slate-500">CEO, E-Commerce Startup</p>
          </div>
        </div>
        <p class="text-slate-700 italic leading-relaxed">"Timnya sangat ramah, cepat tanggap, dan memahami kebutuhan bisnis startup saya. Mereka hemat waktu saya untuk fokus ke product development. Hasilnya legal, berkualitas tinggi, dan sesuai deadline. Terima kasih Bhagya Artha!"</p>
        <div class="flex text-yellow-400 mt-4">⭐⭐⭐⭐⭐</div>
      </div>
    </div>
  </div>
</section>

<!-- LAYANAN SECTION -->
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
      Layanan Lengkap Kami
    </h2>
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

<!-- FAQ SECTION -->
<section class="py-24 bg-white">
  <div class="max-w-4xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">Tanya Jawab Umum</h2>
    <p class="text-center text-slate-600 mb-12 text-lg">Jawaban atas pertanyaan yang sering kami terima dari klien baru.</p>

    <div class="space-y-6">
      <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-blue-600">
        <h3 class="font-bold text-gray-900 mb-3 text-lg">Apa perbedaan PT dan CV?</h3>
        <p class="text-slate-600 leading-relaxed">PT (Perseroan Terbatas) adalah badan usaha dengan tanggung jawab terbatas dan dapat memiliki multiple shareholders, sementara CV (Commanditaire Vennootschap) adalah usaha dengan tanggung jawab pribadi pemilik. Pilih PT untuk bisnis yang ingin berkembang besar, dan CV untuk bisnis kecil/menengah dengan struktur sederhana.</p>
      </div>

      <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-blue-600">
        <h3 class="font-bold text-gray-900 mb-3 text-lg">Apakah modal harus disetor ke bank?</h3>
        <p class="text-slate-600 leading-relaxed">Ya, minimal 25% dari modal dasar harus disetor ke rekening bank atas nama perusahaan untuk PT. Untuk CV, persyaratan lebih fleksibel. Kami akan membantu Anda menghitung dan mengaturnya sesuai dengan regulasi yang berlaku.</p>
      </div>

      <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-blue-600">
        <h3 class="font-bold text-gray-900 mb-3 text-lg">Berapa lama proses pendirian?</h3>
        <p class="text-slate-600 leading-relaxed">Rata-rata 3-7 hari untuk PT/CV lengkap dengan semua perizinan. Waktu bisa lebih cepat jika dokumen Anda siap dengan baik. Kami juga menyediakan express service jika Anda membutuhkan penyelesaian lebih cepat.</p>
      </div>

      <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-blue-600">
        <h3 class="font-bold text-gray-900 mb-3 text-lg">Bisakah memakai alamat rumah sebagai domisili?</h3>
        <p class="text-slate-600 leading-relaxed">Ya, untuk usaha kecil memang diperbolehkan menggunakan alamat rumah asalkan memiliki izin dari RT/RW setempat. Namun, kami merekomendasikan menggunakan virtual office untuk meningkatkan kredibilitas dan profesionalitas bisnis Anda.</p>
      </div>

      <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-blue-600">
        <h3 class="font-bold text-gray-900 mb-3 text-lg">Apa yang Anda butuhkan dari saya untuk memulai?</h3>
        <p class="text-slate-600 leading-relaxed">Kami hanya butuh data pribadi dasar (KTP, kartu keluarga), nama perusahaan, KBLI usaha, dan alamat domisili. Sisanya kami urus semuanya. Konsultasi awal gratis kami membantu Anda mempersiapkan semua yang diperlukan.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 -left-4 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
    <div class="absolute -bottom-8 right-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
  </div>

  <div class="relative max-w-4xl mx-auto px-6">
    <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Wujudkan Legalitas Usaha Anda?</h2>
    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
      Hubungi tim kami hari ini untuk konsultasi gratis. Mari bersama-sama membangun fondasi bisnis yang kuat, legal, dan berkelanjutan.
    </p>
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
