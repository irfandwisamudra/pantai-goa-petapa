<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex justify-center mt-16">
        <div class="container xl:max-w-screen-xl p-4">
            <div class="flex items-center justify-center">
                <a href="{{ route('user.order', auth()->user()->uuid) }}">
                    <div
                        class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-100 rounded-full">
                        <span class="text-2xl font-semibold text-white dark:text-blue-900">1</span>
                    </div>
                </a>

                <hr class="w-12 h-1 my-4 bg-gray-700 border-0 rounded md:my-10">

                <div
                    class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-900 rounded-full">
                    <span class="text-2xl font-semibold text-white">2</span>
                </div>

                <hr class="w-12 h-1 my-4 bg-gray-700 border-0 rounded md:my-10">

                <a href="">
                    <div
                        class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-100 rounded-full">
                        <span class="text-2xl font-semibold text-white dark:text-blue-900">3</span>
                    </div>
                </a>

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
                            <svg xmlns="http://www.w3.org/2000/svg" class="my-2" width="80" height="80"
                                viewBox="0 0 80 80" fill="none">
                                <path
                                    d="M68.5715 5.71429C68.5715 13.4821 66.9867 20.3497 63.817 26.317C60.6474 32.2842 56.6816 36.8452 51.9197 40C56.6816 43.1548 60.6474 47.7158 63.817 53.683C66.9867 59.6503 68.5715 66.5179 68.5715 74.2857H72.8572C73.2739 74.2857 73.6161 74.4196 73.884 74.6875C74.1518 74.9554 74.2858 75.2976 74.2858 75.7143V78.5714C74.2858 78.9881 74.1518 79.3304 73.884 79.5982C73.6161 79.8661 73.2739 80 72.8572 80H7.14293C6.72626 80 6.384 79.8661 6.11614 79.5982C5.84828 79.3304 5.71436 78.9881 5.71436 78.5714V75.7143C5.71436 75.2976 5.84828 74.9554 6.11614 74.6875C6.384 74.4196 6.72626 74.2857 7.14293 74.2857H11.4286C11.4286 66.5179 13.0135 59.6503 16.1831 53.683C19.3527 47.7158 23.3185 43.1548 28.0804 40C23.3185 36.8452 19.3527 32.2842 16.1831 26.317C13.0135 20.3497 11.4286 13.4821 11.4286 5.71429H7.14293C6.72626 5.71429 6.384 5.58036 6.11614 5.3125C5.84828 5.04464 5.71436 4.70238 5.71436 4.28571V1.42857C5.71436 1.0119 5.84828 0.669643 6.11614 0.401786C6.384 0.133929 6.72626 0 7.14293 0H72.8572C73.2739 0 73.6161 0.133929 73.884 0.401786C74.1518 0.669643 74.2858 1.0119 74.2858 1.42857V4.28571C74.2858 4.70238 74.1518 5.04464 73.884 5.3125C73.6161 5.58036 73.2739 5.71429 72.8572 5.71429H68.5715ZM62.8572 5.71429H17.1429C17.1429 11.8452 18.4078 17.5595 20.9376 22.8571H59.0626C61.5923 17.5595 62.8572 11.8452 62.8572 5.71429ZM60.3126 60C58.7054 55.8036 56.5402 52.2098 53.817 49.2188C51.0938 46.2277 48.1995 44.1071 45.134 42.8571H34.8661C31.8007 44.1071 28.9063 46.2277 26.1831 49.2188C23.4599 52.2098 21.2947 55.8036 19.6876 60H60.3126Z"
                                    fill="#ffffff" />
                            </svg>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center mx-auto text-l font-light dark:text-white">
                            <h1 class="font-bold">Menunggu Pembayaran</h1>
                            <h1>Mohon lakukan pembayaran sebelum</h1>
                            <h1>untuk menyelesaikan pemesanan</h1>
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
                                <a href="" class="flex items-center">
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
                            <div class="flex items-center">
                                <button id="pay-button"
                                    class="w-full text-white hover bg-blue-900 shadow border-blue-900 hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-xs lg:px-5 lg:p-2.5 p-3 text-center dark:bg-blue-900 dark:text-white  dark:hover:bg-blue-600 dark:hover:text-white hover:text-white md:text-base">Bayar
                                    Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        document.getElementById('pay-button').addEventListener('click', function() {
            // SnapToken acquired from previous step
            snap.pay('{{ $transaksi->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    window.location.href =
                        "{{ route('user.payment-success', ['id' => auth()->user()->uuid, 'transaksiUuid' => $transaksi->uuid]) }}";
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result,
                        null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result,
                        null, 2);
                }
            });
        });
    </script>
</x-layout>
