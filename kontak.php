<?php
// Simple form handler (demo - in production, use secure methods like PDO/email service)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    // Here: Send email or save to DB - for demo, just redirect with success
    header('Location: ?success=1');
    exit;
}
$success = isset($_GET['success']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kontak Kami — Bhagya Artha Solusi</title>
    <meta name="description" content="Hubungi tim ahli Bhagya Artha Solusi untuk konsultasi pendirian PT, CV, dan layanan bisnis lainnya. Respon cepat via WA atau email." />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles: Clean, modern with green accents for consultant vibe */
        .brand-grad { background: linear-gradient(90deg, #0f172a 0%, #0ea5e9 100%); }
        .text-grad { background: linear-gradient(90deg, #0ea5e9, #1e40af); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .green-accent { background: linear-gradient(135deg, #10b981, #059669); }
        .form-input { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); border: 1px solid rgba(16, 185, 129, 0.2); }
        .form-input:focus { border-color: #10b981; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1); }
        .btn-hover { transition: all 0.3s ease; }
        .btn-hover:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3); }
        .wa-float { position: fixed; bottom: 20px; right: 20px; z-index: 1000; }
        html { scroll-behavior: smooth; }

.nav-link::after { 
      content: ''; 
      position: absolute; 
      bottom: 0; 
      left: 50%; 
      width: 0; 
      height: 2px; 
      background: linear-gradient(90deg, #0ea5e9, #1e40af); 
      transition: all .3s ease; 
      transform: translateX(-50%);
    }
    .nav-link:hover::after { 
      width: 100%; 
    }
    .nav-link:hover { 
      color: #0ea5e9 !important; 
      transform: translateY(-1px);
    }
    .navbar-hover { 
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
    }
    .navbar-hover:hover { 
      box-shadow: 0 4px 20px rgba(14, 165, 233, 0.15); 
    }
    .card-hover { transition: all 0.28s cubic-bezier(.2,.9,.2,1); }
    .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(14,165,233,0.12); }



    </style>
</head>
<body class="antialiased text-slate-800 bg-slate-50">
<!-- NAVBAR ENHANCED -->
  <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-lg shadow-lg navbar-hover border-b border-slate-100/50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between h-20">
        <a href="#home" class="flex items-center gap-3 group">
          <div class="w-12 h-12 rounded-xl brand-grad flex items-center justify-center text-white font-extrabold text-lg shadow-lg group-hover:scale-105 transition-transform">BA</div>
          <div>
            <div class="text-xl font-bold text-slate-800">Bhagya Artha Solusi</div>
            <div class="text-sm font-semibold text-sky-600">Partner Legalitas Usahamu</div>
          </div>
        </a>

        <nav class="hidden md:flex items-center gap-10 text-base font-semibold">
          <a href="#home" class="nav-link text-slate-700">Beranda</a>
          <a href="#tentang" class="nav-link text-slate-700">Tentang Kami</a>
          <a href="#layanan" class="nav-link text-slate-700">Layanan</a>
          <a href="#blog" class="nav-link text-slate-700">Blog</a>
          <a href="#kontak" class="nav-link text-slate-700">Kontak</a>
        </nav>

        <div class="hidden md:flex items-center gap-4">
          <a href="#kontak" class="px-6 py-3 rounded-xl text-white font-semibold bg-gradient-to-r from-sky-500 to-indigo-600 shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">Konsultasi Gratis</a>
        </div>

        <div class="md:hidden">
          <button id="btnMobile" aria-label="Buka menu" class="p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400 hover:bg-slate-100 transition">
            <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
          </button>
        </div>
      </div>
    </div>

    <div id="mobileMenu" class="md:hidden hidden border-t border-slate-200 bg-white/95 backdrop-blur-sm shadow-lg">
      <div class="px-6 py-6 flex flex-col gap-4">
        <a href="#home" class="py-3 px-4 rounded-lg text-slate-700 font-semibold hover:bg-sky-50 hover:text-sky-600 transition">Beranda</a>
        <a href="#tentang" class="py-3 px-4 rounded-lg text-slate-700 font-semibold hover:bg-sky-50 hover:text-sky-600 transition">Tentang Kami</a>
        <a href="#layanan" class="py-3 px-4 rounded-lg text-slate-700 font-semibold hover:bg-sky-50 hover:text-sky-600 transition">Layanan</a>
        <a href="#blog" class="py-3 px-4 rounded-lg text-slate-700 font-semibold hover:bg-sky-50 hover:text-sky-600 transition">Blog</a>
        <a href="#kontak" class="py-3 px-4 rounded-lg text-slate-700 font-semibold hover:bg-sky-50 hover:text-sky-600 transition">Kontak</a>
        <div class="pt-4 border-t border-slate-200">
          <a href="#kontak" class="block w-full text-center px-6 py-3 rounded-xl bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-bold hover:shadow-md transition">Konsultasi Gratis</a>
        </div>
      </div>
    </div>
  </header>
    <!-- MAIN CONTACT SECTION: Clean white bg, green accents -->
    <main class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                <!-- Left: Contact Info -->
                <div class="lg:w-1/2 space-y-8">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Hubungi Kami</h1>
                        <p class="text-lg text-slate-600 leading-relaxed">Butuh informasi lebih lanjut? Yuk, hubungi kami sekarang! Tim ahli siap bantu konsultasi pendirian PT, CV, dan solusi bisnis lainnya.</p>
                    </div>

                    <!-- Contact Details: Clean cards with icons -->
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition">
                            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center mt-1">
                                <span class="text-xl text-green-600">📱</span>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800">WhatsApp</p>
                                <a href="https://wa.me/628123456789" class="text-green-600 hover:text-green-700 font-medium block">+62 812-3456-789</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition">
                            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center mt-1">
                                <span class="text-xl text-green-600">📧</span>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800">Email</p>
                                <a href="mailto:info@bhagyaartha.com" class="text-green-600 hover:text-green-700 font-medium block">info@bhagyaartha.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition">
                            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center mt-1">
                                <span class="text-xl text-green-600">📍</span>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800">Alamat</p>
                                <p class="text-slate-600">Jl. Raya Blok A No. 123, Surabaya</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Icons (subtle) -->
                    <div class="flex gap-4 pt-4 border-t border-slate-200">
                        <a href="#" class="text-slate-500 hover:text-green-600 transition"><span class="text-xl">📘</span></a>
                        <a href="#" class="text-slate-500 hover:text-green-600 transition"><span class="text-xl">🐦</span></a>
                        <a href="#" class="text-slate-500 hover:text-green-600 transition"><span class="text-xl">📷</span></a>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="lg:w-1/2">
                    <?php if ($success): ?>
                        <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-6">
                            Terima kasih! Pesan Anda telah terkirim. Kami akan hubungi dalam 24 jam.
                        </div>
                    <?php endif; ?>
                    <form method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input required type="text" name="name" placeholder="Nama Lengkap" class="form-input p-4 rounded-xl w-full focus:outline-none" />
                            <input required type="email" name="email" placeholder="Alamat Email" class="form-input p-4 rounded-xl w-full focus:outline-none" />
                        </div>
                        <input required type="tel" name="phone" placeholder="Nomor Telepon" class="form-input p-4 rounded-xl w-full focus:outline-none" />
                        <textarea required name="message" rows="5" placeholder="Ketik pesan disini..." class="form-input p-4 rounded-xl w-full focus:outline-none resize-none"></textarea>
                        <button type="submit" class="w-full py-4 rounded-xl text-white font-semibold text-lg green-accent btn-hover">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Floating WA Button -->
    <a href="https://wa.me/628123456789" class="wa-float bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg btn-hover">
        <span class="text-xl">💬</span>
    </a>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-300 py-8 mt-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2025 Bhagya Artha Solusi. Semua hak cipta dilindungi. Mitra terpercaya untuk pendirian PT & CV.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('btnMobile').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>
</body>
</html>