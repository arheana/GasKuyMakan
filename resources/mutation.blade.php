@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between" style="padding-top: 25px;">
        <div class="flex flex-col gap-4 mt-4">
            <h1 class="font-semibold text-4xl">Daftar Pesanan</h1>
            <div class="border-2 border-white rounded-md h-[450px] py-6 px-8 overflow-y-scroll scroll flex flex-col gap-4">
                @foreach ($mutation as $m)
                <div class="border-2 border-white rounded-md py-2 px-4 w-[300px]">
                    <div class="flex flex-row justify-between">
                        <h1 class="font-semibold">{{ $m -> status }}</h1>
                        <h1>- Rp. {{ number_format($m -> amount) }}</h1>
                    </div>
                    <h3>{{ $m -> name }} - {{ $m -> bank }}</h3>
                </div>
                @endforeach
            </div>
        </div>
        <img class="w-1/2" src="img/list.png" alt="missing img" style="margin-right: 100px;">
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
