<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex justify-center mt-16">
        <div class="container xl:max-w-screen-xl p-4">
            <div class="flex items-center justify-center">
                <div
                    class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-100 rounded-full">
                    <span class="text-2xl font-semibold text-white dark:text-blue-900">1</span>
                </div>

                <hr class="w-12 h-1 my-4 bg-gray-700 border-0 rounded md:my-10">

                <div
                    class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-100 rounded-full">
                    <span class="text-2xl font-semibold text-white dark:text-blue-900">2</span>
                </div>

                <hr class="w-12 h-1 my-4 bg-gray-700 border-0 rounded md:my-10">

                <div
                    class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-900 rounded-full">
                    <span class="text-2xl font-semibold text-white">3</span>
                </div>

            </div>
            <div class="flex items-center justify-center mx-auto dark:text-white">
                <h1 class="text-l px-16">Pesan</h1>
                <h1 class="text-l">Pembayaran</h1>
                <h1 class="text-l px-16 font-bold">Selesai</h1>
            </div>
            <div class="flex flex-col sm:flex-row pt-20 gap-10">
                {{-- KONFIRMASI PESANAN --}}
                <div class="w-full mb-8">
                    <h1 class="text-l mb-4 font-semibold dark:text-white">Konfirmasi Pemesanan</h1>
                    <div
                        class="w-full bg-blue-100 border border-gray-200 shadow-xl sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-600 my-4 rounded-lg py-4">
                        <div class="flex justify-center">
                            <svg class="my-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="80" height="80" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center mx-auto text-l font-light dark:text-white">
                            <h1 class="font-bold">Pembayaran Berhasil</h1>
                            <h1>Silahkan download dan tunjukkan tiket ketika memasuki tempat wisata.</h1>
                            <h1>Tiket akan dikirimkan melalui email.</h1>
                        </div>

                        <div class="flex flex-row pt-20 gap-10 dark:text-white mx-4 lg:mx-0">
                            {{-- KONFIRMASI PESANAN --}}
                            <div class="w-1/2 mb-8 text-sm  font-bold lg:text-base lg:w-full">
                                <h1 class="mb-3">Nomor Transaksi</h1>
                                <h1 class="mb-3">Total Pembayaran</h1>
                                <h1 class="mb-3">Nama Pemesan</h1>
                                <h1 class="mb-3">Nomor Telepon</h1>
                            </div>
                            <div class="w-1/2 lg:w-full mb-8 text-end font-light text-sm lg:text-base">
                                <h1 class="mb-3">#{{ $transaksi->no_transaksi }}</h1>
                                <h1 class="mb-3">Rp.
                                    {{ number_format($transaksi->total_harga, 0, ',', '.') }}</h1>
                                <h1 class="mb-3">{{ $transaksi->pengunjung->nama }}</h1>
                                <h1 class="mb-3">{{ $transaksi->pengunjung->user->no_telepon }}</h1>
                            </div>
                        </div>

                        {{-- GO BACK --}}
                        <div class="mt-10 flex mx-4 lg:mx-0 justify-between">
                            <div class="w-1/2 flex items-center">
                                <a href="{{ route('user.order', auth()->user()->uuid) }}" class="flex items-center">
                                    <svg class="w-5 h-5 lg:w-5 lg:h-5 text-gray-900 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round"
                                            d="M13 5H1m0 0 4 4M1 5l4-4" />
                                    </svg>
                                    <h1
                                        class="text-base font-semibold leading-tight tracking-tight text-gray-900 md:text-lg dark:text-white ml-2">
                                        Kembali</h1>
                                </a>
                            </div>
                            <div>
                                <div class="flex items-center">
                                    {{-- <a href="{{ route('user.history-order', ['id' => auth()->user()->uuid]) }}"
                                        class="w-full mr-4 text-white hover bg-blue-900 shadow border-blue-900 hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-xs lg:px-5 lg:p-2.5 p-3 text-center dark:bg-blue-900 dark:text-white  dark:hover:bg-blue-600 dark:hover:text-white hover:text-white md:text-base">Riwayat
                                        Pemesanan</a> --}}
                                    <a href="{{ route('user.print-tiket', ['id' => auth()->user()->uuid, 'transaksiUuid' => $transaksi->uuid]) }}"
                                        target="_blank"
                                        class="w-full text-white hover bg-blue-900 shadow border-blue-900 hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-xs lg:px-5 lg:p-2.5 p-3 text-center dark:bg-blue-900 dark:text-white  dark:hover:bg-blue-600 dark:hover:text-white hover:text-white md:text-base">Print
                                        Tiket
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
