@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col gap-4 mt-4">
            <h1 class="font-semibold text-4xl">Menunggu Pembayaran</h1>
            <p class="font-normal text-1xl">klik pesananmu dalam daftar untuk membayar!</p>
            <div class="border-2 border-white rounded-md h-[450px] py-6 px-8 overflow-y-scroll scroll flex flex-col gap-4">
                    @foreach ($accounts as $a)
                        <a href="/list/{{ $a->acc_num }}" class="border-2 border-white rounded-md py-2 pl-4 pr-16">
                            <h1 class="font-semibold">{{ $a -> name }}</h1>
                            <h3>{{ $a -> bank }} - {{ $a -> acc_num }}</h3>
                        </a>
                        {{-- @dd($a); --}}
                    @endforeach
            </div>
        </div>
        <img class="w-1/2" src="/img/tagihan2.png" alt="missing img">
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
