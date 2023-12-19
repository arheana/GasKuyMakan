<nav class="bg-custblack font-medium ">
    <div class="mx-16 flex flex-row justify-between py-4">
        <div>
            <img class="h-3/4" src="/img/logoGKM2.png" alt="missing img" style="float: left; margin-top: 10px;">
        </div>
        <div class="text-white mt-4">
            <ul class="flex flex-row justify-evenly gap-8">
                <li><a class="{{ $active === 'home' ? 'text-custpink' : 'text-white' }}" href="/">Dashboard</a>
                </li>
                <li><a class="{{ $active === 'add' ? 'text-custpink' : 'text-white' }}" href="/add">Pesan Makan</a>
                </li>
                <li><a class="{{ $active === 'list' ? 'text-custpink' : 'text-white' }}" href="/list">Tagihan</a>
                </li>
                <li><a class="{{ $active === 'transfer' ? 'text-custpink' : 'text-white' }}" href="/transfer">Pembayaran</a>
                </li>
                <li><a class="{{ $active === 'mutation' ? 'text-custpink' : 'text-white' }}" href="/mutation">Daftar Pesanan</a>
                </li>
                <li><a class="{{ $active === 'balance' ? 'text-custpink' : 'text-white' }}" href="/balance">Jumlah Saldo</a>
                </li>
            </ul>
        </div>
        <a href="/add" class="bg-custpink flex flex-row pt-3 px-4 justify-evenly gap-2 rounded-md">
            <h1 class="text-white">Pesan Sekarang!</h1>
            <img class="h-1/2" src="/img/arrow.png" alt="missing img" style="margin-top: 3px;">
        </a>
    </div>
</nav>
