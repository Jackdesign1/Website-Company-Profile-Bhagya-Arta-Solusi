@extends('layouts.app')

@section('title', 'Kontak Kami | Bhagya Artha Solusi')

@section('content')
<section class="bg-white py-20">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-14 items-start">

      <!-- LEFT -->
      <div class="space-y-10">
        <div>
          <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-5">
            Hubungi Kami
          </h1>
          <p class="text-lg text-slate-600 leading-relaxed">
            Tim ahli Bhagya Artha Solusi siap membantu konsultasi pendirian PT, CV,
            legalitas usaha, dan solusi bisnis lainnya.
          </p>
        </div>

        <!-- INFO CARDS -->
        <div class="space-y-5">
          @php
            $infos = [
              ['📱','WhatsApp','+62 812-3456-789'],
              ['📧','Email','info@bhagyaartha.com'],
              ['📍','Alamat','Surabaya, Jawa Timur'],
            ];
          @endphp

          @foreach($infos as $info)
          <div class="flex gap-5 p-6 rounded-2xl bg-slate-50 hover:bg-slate-100 transition">
            <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center text-2xl">
              {{ $info[0] }}
            </div>
            <div>
              <p class="font-semibold text-slate-800">{{ $info[1] }}</p>
              <p class="text-emerald-600 font-medium">{{ $info[2] }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- RIGHT FORM -->
      <div class="bg-slate-50 rounded-3xl p-10 shadow-xl">
        <h2 class="text-2xl font-bold mb-6 text-slate-800">
          Form Konsultasi
        </h2>

        @if(session('success'))
        <div class="mb-6 p-4 rounded-xl bg-emerald-100 text-emerald-700 font-medium">
          ✅ Pesan berhasil dikirim. Kami akan menghubungi Anda.
        </div>
        @endif

        <form action="#" onsubmit="return false;" class="space-y-4">
            <input type="text" placeholder="Nama Lengkap"
                   class="w-full p-3 border rounded-lg">

            <input type="email" placeholder="Email"
                   class="w-full p-3 border rounded-lg">

            <textarea rows="5" placeholder="Pesan"
                      class="w-full p-3 border rounded-lg"></textarea>

            <button type="button"
                    onclick="alert('Terima kasih! Ini hanya simulasi form.')"
                    class="px-6 py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-semibold">
              Kirim Pesan
            </button>
          </form>

      </div>

    </div>
  </div>
</section>
@endsection
