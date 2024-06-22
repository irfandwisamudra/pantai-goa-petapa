<x-layout>
    @php
        $total = 0;
    @endphp
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex justify-center mt-16">
        <div class="container xl:max-w-screen-xl p-4">
            <div class="flex items-center justify-center">
                <div
                    class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-900 rounded-full">
                    <span class="text-2xl font-semibold text-white ">1</span>
                </div>

                <hr class="w-12 h-1 my-4 bg-gray-700 border-0 rounded md:my-10">

                <div>
                    <div
                        class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-100 rounded-full">
                        <span class="text-2xl font-semibold text-white dark:text-blue-900">2</span>
                    </div>
                </div>

                <hr class="w-12 h-1 my-4 bg-gray-700 border-0 rounded md:my-10">

                <div>
                    <div
                        class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-blue-100 rounded-full">
                        <span class="text-2xl font-semibold text-white dark:text-blue-900">3</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mx-auto dark:text-white">
                <h1 class="text-l px-14 font-bold">Pesan</h1>
                <h1 class="text-l">Pembayaran</h1>
                <h1 class="text-l px-8">Selesai</h1>
            </div>

            <form action="{{ route('proses-pembayaran') }}" method="post">
                @csrf
                @method('POST')
                <div class="flex flex-row pt-20 gap-6 lg:gap-10">
                    {{-- SHOPPING CART --}}
                    <div class="w-1/2 md:w-3/4 mb-8">
                        <h1 class="text-lg mb-4 font-semibold dark:text-white">Keranjang belanja</h1>
                        <div
                            class="w-full bg-white border border-gray-200 shadow-xl p-6 md:p-8 dark:bg-gray-800 dark:border-gray-600 mb-4 rounded-lg">
                            <div class="relative overflow-x-auto shadow-xl sm:rounded-lg mb-4">
                                <table
                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-blue-900 dark:text-gray-300">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 lg:text-sm">
                                                Product
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:text-sm"></th>
                                            <th scope="col" class="px-6 py-3 lg:text-sm">
                                                Quantity
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:text-sm">
                                                Subtotal
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Session::get('cart') ?? [] as $item)
                                            @php
                                                $total += $item['jumlah'] * $item['harga'];
                                            @endphp
                                            <input type="hidden" name="tiket[]" value="{{ $item['uuid'] }}">
                                            <input type="hidden" name="jumlah[]" value="{{ $item['jumlah'] }}">
                                            <input type="hidden" name="total_harga" value="{{ $total }}">
                                            <tr
                                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td class="px-6 py-4">
                                                    <img src="{{ asset('images/sepeda-motor.png') }}"
                                                        alt="Tiket-sepeda-motor">
                                                </td>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white md:text-base">
                                                    {{ $item['keterangan'] }}
                                                </th>
                                                <td class="px-6 py-4 text-xs md:text-base">
                                                    {{ $item['jumlah'] }}
                                                </td>
                                                <td class="px-6 py-4 text-xs md:text-base">
                                                    Rp.
                                                    {{ number_format($item['jumlah'] * $item['harga'], 0, ',', '.') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{-- GO BACK --}}
                            <div class="mt-10 flex flex-row mx-4 lg:mx-0">
                                <div class="w-1/2 flex items-center">
                                    <a href="{{ route('home.tiket') }}" class="flex items-center">
                                        <svg class="w-5 h-5 lg:w-5 lg:h-5 text-gray-900 dark:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                                        </svg>
                                        <h1
                                            class="text-base font-semibold leading-tight tracking-tight text-gray-900 md:text-lg dark:text-white ml-2">
                                            Kembali</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ORDER SUM --}}
                    <div class="w-1/2 md:w-1/4 pe-3 md:pe-0">
                        <h1 class="text-lg font-semibold dark:text-white">Order Summary</h1>
                        <div
                            class="w-full bg-white border border-gray-200 shadow-xl lg:p-6 p-4 dark:bg-gray-800 dark:border-gray-600 mb-6 rounded-lg my-6 lg:mt-4">
                            <h1
                                class="text-sm lg:text-lg font-light leading-tight tracking-tight text-blue-950 md:text-base dark:text-white mb-2">
                                Total Payment</h1></a>
                            <h1
                                class="text-sm lg:text-lg font-extrabold leading-tight tracking-tight text-blue-950 md:text-base dark:text-white">
                                Rp. {{ number_format($total, 0, ',', '.') }}</h1></a>
                        </div>
                        <button type="submit"
                            class="w-full text-white hover bg-blue-900 shadow border-blue-900 hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-xs lg:px-5 lg:p-2.5 p-3 text-center dark:bg-blue-900 dark:text-white  dark:hover:bg-blue-600 dark:hover:text-white hover:text-white md:text-base">Pesan
                            Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
