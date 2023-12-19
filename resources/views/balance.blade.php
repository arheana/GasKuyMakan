@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col justify-evenly">
            <div class="flex flex-col gap-4">
                <h1 class="text-5xl font-bold">Sisa Saldomu :</h1>
                <h3 class="text-3xl font-semibold">Rp. {{ $fm = number_format($balance) }}</h3>
            </div>
            <div class="flex flex-row gap-4 text-center">
                <a class="bg-custpink py-4 px-4 w-48 rounded-md font-semibold" href="/mutation">Cek Pesanan</a>
                <a class="bg-custpink py-4 px-4 w-48 rounded-md font-semibold" href="/add-balance">Tambah Saldo</a>
            </div>
        </div>
        <img class="w-1/2" src="/img/saldo.png" alt="missing img">
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
