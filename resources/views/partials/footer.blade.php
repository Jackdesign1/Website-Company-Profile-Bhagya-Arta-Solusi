<footer class="bg-gradient-to-b from-slate-900 to-slate-950 text-gray-300 border-t border-slate-800">

    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-sky-400 to-cyan-300 bg-clip-text text-transparent mb-2">
                        Bhagya Artha
                    </h3>
                    <p class="text-xs text-sky-400 font-semibold">SOLUSI BISNIS & LEGALITAS</p>
                </div>
                <p class="text-sm text-gray-400 leading-relaxed mb-4">
                    Partner terpercaya untuk pendirian PT, CV, dan semua kebutuhan legalitas usaha Anda. Melayani UMKM hingga perusahaan besar dengan profesional dan transparan.
                </p>
                <div class="flex gap-4">
                    <a href="https://wa.me/628123456789" target="_blank" class="w-10 h-10 bg-slate-800 hover:bg-sky-600 rounded-lg flex items-center justify-center transition duration-300" title="WhatsApp">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.413-2.393-1.476-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004c-1.025 0-2.031.313-2.896.893l-.202.12-2.096-.548.558 2.051-.13.21c-.664.799-1.015 1.719-1.015 2.708 0 2.485 2.027 4.5 4.519 4.5 1.21 0 2.347-.368 3.285-1.063 1.197-.959 1.957-2.423 1.957-3.969 0-2.487-2.027-4.5-4.516-4.5m5.849-3.808c-1.488-1.346-3.437-2.084-5.516-2.084-4.345 0-7.917 3.52-7.917 7.839 0 1.437.364 2.847 1.054 4.105L2.885 22l4.355-1.286c1.199.657 2.55 1.003 3.965 1.003 4.347 0 7.921-3.52 7.921-7.839 0-2.096-.795-4.057-2.238-5.571"/>
                        </svg>
                    </a>
                    <a href="mailto:info@bhagyaarthasolusi.com" class="w-10 h-10 bg-slate-800 hover:bg-sky-600 rounded-lg flex items-center justify-center transition duration-300" title="Email">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </a>
                    <a href="https://www.google.com/maps" target="_blank" class="w-10 h-10 bg-slate-800 hover:bg-sky-600 rounded-lg flex items-center justify-center transition duration-300" title="Maps">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Layanan Quick Links -->
            <div>
                <h5 class="font-bold text-white mb-6 text-lg flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-sky-400 to-indigo-600 rounded"></span>
                    Layanan Utama
                </h5>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('layanan') }}#pt" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Pendirian PT
                    </a></li>
                    <li><a href="{{ route('layanan') }}#cv" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Pendirian CV
                    </a></li>
                    <li><a href="{{ route('layanan') }}#perizinan" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Perizinan Usaha
                    </a></li>
                    <li><a href="{{ route('layanan') }}#merek" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Perlindungan Merek
                    </a></li>
                    <li><a href="{{ route('layanan') }}#audit" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Legal Audit
                    </a></li>
                    <li><a href="{{ route('layanan') }}#konsultasi" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Konsultasi Bisnis
                    </a></li>
                </ul>
            </div>

            <!-- Navigasi -->
            <div>
                <h5 class="font-bold text-white mb-6 text-lg flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-sky-400 to-indigo-600 rounded"></span>
                    Navigasi
                </h5>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Beranda
                    </a></li>
                    <li><a href="{{ route('tentang') }}" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Tentang Kami
                    </a></li>
                    <li><a href="{{ route('layanan') }}" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Layanan
                    </a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Blog & Tips
                    </a></li>
                    <li><a href="{{ route('kontak') }}" class="text-gray-400 hover:text-sky-400 transition duration-300 flex items-center gap-2">
                        <span>›</span> Hubungi Kami
                    </a></li>
                </ul>
            </div>

            <!-- Kontak Info -->
            <div>
                <h5 class="font-bold text-white mb-6 text-lg flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-sky-400 to-indigo-600 rounded"></span>
                    Hubungi Kami
                </h5>
                <div class="space-y-4 text-sm">
                    <div>
                        <p class="text-gray-500 text-xs uppercase font-semibold mb-1">Telepon</p>
                        <a href="tel:+628123456789" class="text-sky-400 hover:text-sky-300 font-semibold transition">
                            +62 812-3456-789
                        </a>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs uppercase font-semibold mb-1">Email</p>
                        <a href="mailto:info@bhagyaarthasolusi.com" class="text-sky-400 hover:text-sky-300 font-semibold transition break-all">
                            info@bhagyaarthasolusi.com
                        </a>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs uppercase font-semibold mb-1">Alamat</p>
                        <p class="text-gray-400 leading-relaxed">
                            Jl. Raya Blok A No. 123<br>
                            Surabaya, Jawa Timur 60123
                        </p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs uppercase font-semibold mb-1">Jam Operasional</p>
                        <p class="text-gray-400">Senin - Jumat: 09:00 - 18:00 WIB<br>
                        Sabtu: 10:00 - 15:00 WIB</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-slate-800 my-8"></div>

      <<!-- Bottom Footer -->
<div class="flex flex-col items-center justify-center gap-1">
    <p class="text-sm text-gray-400 text-center">
      Copyright © 2025 Bhagya Artha Solusi
    </p>

    <p class="text-sm text-gray-400 text-center">
      Developed by
      <a
        href="https://www.baraapidigital.com"
        target="_blank"
        class="text-sky-400 hover:text-sky-300 font-semibold transition"
      >
        Bara Api Digital
      </a>
    </p>
  </div>


    </div>

</footer>
