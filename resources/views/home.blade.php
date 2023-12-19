@extends('pages.main')

@section('container')
    <div class="bg-custblack text-white" style="padding-top: 50px">
        <div class="flex flex-row justify-between" style="display: flex; margin-right: 100px;">
            <h1 class="text-7xl w-[60%] font-semibold mt-16">Selamat Datang di Kantin <span
                    class="text-custpink">GaskuyMakan</span> Fakultas Ilmu Komputer</h1>
            <img class="w-1/3" src="img/Group.png" alt="missing img">
        </div>
        <div class="bg-custgrey -ml-16" style="margin-top: 70px">
            <div class="mx-12 py-12 flex flex-col md:flex-row justify-between items-center">
                <div class="flex flex-row gap-4 items-center mb-4 md:mb-0">
                    <h6 class="font-semibold text-white text-lg md:text-xl">Our Social Media</h6>
                </div>
                <div class="flex flex-row gap-4">
                    <a href="#" class="flex items-center font-semibold mt-3 text-white hover:text-blue-500 transition-colors">
                        <img src="/img/instagram.png" alt="Instagram Logo" class="w-6 h-6 mr-2"> Instagram
                    </a>
                </div>
                <div class="flex flex-row gap-4">
                    <a href="#" class="flex items-center font-semibold mt-3 text-white hover:text-pink-500 transition-colors">
                        <img src="/img/tiktok.png" alt="TikTok Logo" class="w-6 h-6 mr-2"> TikTok
                    </a>
                </div>
                <div class="flex flex-row gap-4">
                    <a href="#" class="flex items-center font-semibold mt-3 text-white hover:text-green-500 transition-colors">
                        <img src="/img/whatsapp.png" alt="WhatsApp Logo" class="w-6 h-6 mr-2"> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
