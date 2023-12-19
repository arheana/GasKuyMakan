@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col gap-4 mt-4">
            <h1 class="font-semibold text-4xl">Transfer</h1>
            <div class="border-2 border-white flex flex-col rounded-md h-[450px] py-6 px-8 overflow-y-scroll scroll">
                <div class="text-center">
                    <h1 class="font-semibold">{{ $account -> name }}</h1>
                    <h3>{{ $account -> bank }} - {{ $account -> acc_num }}</h3>
                </div>
                <form action="/send-money" method="POST" class="flex flex-col gap-8 my-4 ">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name">Namamu</label>
                        <input readonly type="text" id="name" name="name" value="{{ $account -> name }}"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div class="flex flex-col">
                        <label for="bank">Pesananmu</label>
                        <input readonly type="text" id="bank" name="bank" value={{ $account -> bank }}
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div class="flex flex-col">
                        <label for="amount">Jumlah Harga</label>
                        <input required type="text" id="amount" name="amount"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div class="flex flex-col">
                        <label for="notes">No Teleponmu</label>
                        <input type="text" id="notes" name="notes"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div>
                        <button class="bg-custpink py-2 px-4 w-48 rounded-md font-semibold" type="submit">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
        <img class="w-1/2" src="/img/transfer.PNG" alt="missing img" style="margin-right: 100px;">
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
