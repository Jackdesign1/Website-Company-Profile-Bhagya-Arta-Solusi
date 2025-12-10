<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-lg shadow-lg border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between h-20">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
          <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-slate-900 to-sky-500
                      flex items-center justify-center text-white font-extrabold text-lg
                      shadow-lg transition group-hover:scale-105">
            BA
          </div>
          <div>
            <div class="text-xl font-bold text-slate-800">
              Bhagya Artha Solusi
            </div>
            <div class="text-sm font-semibold text-sky-600">
              Partner Legalitas Usahamu
            </div>
          </div>
        </a>

        <!-- Menu Desktop -->
        <nav class="hidden md:flex items-center gap-10 text-base font-semibold">
          <a href="{{ route('home') }}" class="nav-link">Beranda</a>
          <a href="{{ route('tentang') }}" class="nav-link">Tentang Kami</a>
          <a href="{{ route('layanan') }}" class="nav-link">Layanan</a>
          <a href="{{ route('blog') }}" class="nav-link">Blog</a>
          <a href="{{ route('kontak') }}" class="nav-link">Kontak</a>
        </nav>

        <!-- CTA -->
        <div class="hidden md:flex">
          <a href="{{ route('kontak') }}"
             class="px-6 py-3 rounded-xl text-white font-semibold
                    bg-gradient-to-r from-sky-500 to-indigo-600
                    shadow-lg transition hover:scale-105">
            Konsultasi Gratis
          </a>
        </div>

        <!-- Mobile Button -->
        <button onclick="toggleMenu()"
                class="md:hidden p-2 rounded-lg hover:bg-slate-100">
          ☰
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
      <div class="px-6 py-6 flex flex-col gap-4 font-medium text-slate-700">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('tentang') }}">Tentang Kami</a>
        <a href="{{ route('layanan') }}">Layanan</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('kontak') }}">Kontak</a>
      </div>
    </div>
  </header>

  <script>
  function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  }
  </script>
