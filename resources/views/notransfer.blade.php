@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col justify-evenly">
            <h1 class="text-7xl font-semibold">Kamu belum memilih Pesanan!</h1>
            <div>
                <a class="bg-custpink py-4 px-4 w-48 rounded-md font-semibold" href="/list">Kembali ke Tagihan </a>
            </div>
        </div>
        <img class="w-1/2" src="/img/payment.png" alt="missing img">
    </div>
    <div class="bg-custgrey -ml-16" style="margin-top: 50px">
            
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
@endsection
