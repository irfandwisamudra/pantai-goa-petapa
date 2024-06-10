<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply bg-cover mt-16 flex justify-center"
        style="background-image: url('{{ asset('images/background-jumbotron.png') }}')">
        <div class="container xl:max-w-screen-xl">
            <div class="px-4 mx-auto py-14 flex flex-col lg:py-10">
                <div class="w-full text-center lg:w-3/5 lg:mx-auto">
                    <p class="mt-8 mb-2 text-medium font-extrabold text-white lg:text-3xl lg:mt-3">PANTAI GOA PETAPA</p>
                    <h1 class="text-sm px-20 font-thin leading-5 text-white lg:text-lg">Pantai Goa Petapa adalah
                        destinasi wisata yang menawarkan keindahan alam pantai dan berbagai fasilitas menarik bagi
                        pengunjung. Pilih tiketmu untuk memulai eksplorasi Pantai Goa Petapa!</h1>
                </div>
            </div>
        </div>
    </section>

    <main class="flex flex-col items-center pt-10 mb-12 mx-6 lg:mx-32" id="explore">
        {{-- SHOPPING PRODUCT --}}
        <div class="w-full mb-8">
            <div class="relative overflow-x-auto shadow-xl sm:rounded-lg mb-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-blue-900 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3 lg:text-sm">
                                Product
                            </th>
                            <th scope="col" class="py-3 lg:text-sm"></th>
                            <th scope="col" class="py-3 lg:text-sm"></th>
                            <th scope="col" class="px-6 py-3 lg:text-sm">
                                Harga
                            </th>
                            <th scope="col" class="py-3 lg:text-sm"></th>
                            <th scope="col" class="py-3 lg:text-sm"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiket as $t)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    <img src="{{ asset('images/mobil.png') }}" alt="Tiket-mobil">
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white md:text-base">
                                    {{ $t->keterangan }}
                                </th>
                                {{-- PANAH --}}
                                <td class="px-6 py-4 text-xs md:text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                        viewBox="0 0 16 15" fill="none">
                                        <path
                                            d="M12.172 7.03898L6.808 2.19071L8.222 0.912659L16 7.94283L8.222 14.973L6.808 13.695L12.172 8.84668H0V7.03898H12.172Z"
                                            fill="#B4B1B1" />
                                        <path
                                            d="M12.172 7.03898L6.808 2.19071L8.222 0.912659L16 7.94283L8.222 14.973L6.808 13.695L12.172 8.84668H0V7.03898H12.172Z"
                                            fill="#323643" class="dark:fill-slate-400" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-xs md:text-base">
                                    Rp. {{ number_format($t->harga, 0, ',', '.') }}
                                </td>
                                {{-- AKSI --}}
                                <td class="px-6 my-6 lg:my-10 text-xs md:text-base flex flex-row">
                                    {{-- MINUS --}}
                                    <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21.375 0.75H2.625C2.12772 0.75 1.65081 0.947544 1.29917 1.29917C0.947544 1.65081 0.75 2.12772 0.75 2.625V21.375C0.75 21.8723 0.947544 22.3492 1.29917 22.7008C1.65081 23.0525 2.12772 23.25 2.625 23.25H21.375C21.8723 23.25 22.3492 23.0525 22.7008 22.7008C23.0525 22.3492 23.25 21.8723 23.25 21.375V2.625C23.25 2.12772 23.0525 1.65081 22.7008 1.29917C22.3492 0.947544 21.8723 0.75 21.375 0.75ZM18.5625 12.9375H5.4375C5.18886 12.9375 4.9504 12.8387 4.77459 12.6629C4.59877 12.4871 4.5 12.2486 4.5 12C4.5 11.7514 4.59877 11.5129 4.77459 11.3371C4.9504 11.1613 5.18886 11.0625 5.4375 11.0625H18.5625C18.8111 11.0625 19.0496 11.1613 19.2254 11.3371C19.4012 11.5129 19.5 11.7514 19.5 12C19.5 12.2486 19.4012 12.4871 19.2254 12.6629C19.0496 12.8387 18.8111 12.9375 18.5625 12.9375Z"
                                                fill="#365486" class="dark:fill-slate-400" />
                                        </svg></button>
                                    <p
                                        class="px-6 font-medium text-sm text-gray-900 whitespace-nowrap dark:text-white md:text-base">
                                        0</p>
                                    {{-- PLUS --}}
                                    <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21.375 0.75H2.625C2.12772 0.75 1.65081 0.947544 1.29917 1.29917C0.947544 1.65081 0.75 2.12772 0.75 2.625V21.375C0.75 21.8723 0.947544 22.3492 1.29917 22.7008C1.65081 23.0525 2.12772 23.25 2.625 23.25H21.375C21.8723 23.25 22.3492 23.0525 22.7008 22.7008C23.0525 22.3492 23.25 21.8723 23.25 21.375V2.625C23.25 2.12772 23.0525 1.65081 22.7008 1.29917C22.3492 0.947544 21.8723 0.75 21.375 0.75ZM18.5625 12.9375H12.9375V18.5625C12.9375 18.8111 12.8387 19.0496 12.6629 19.2254C12.4871 19.4012 12.2486 19.5 12 19.5C11.7514 19.5 11.5129 19.4012 11.3371 19.2254C11.1613 19.0496 11.0625 18.8111 11.0625 18.5625V12.9375H5.4375C5.18886 12.9375 4.9504 12.8387 4.77459 12.6629C4.59877 12.4871 4.5 12.2486 4.5 12C4.5 11.7514 4.59877 11.5129 4.77459 11.3371C4.9504 11.1613 5.18886 11.0625 5.4375 11.0625H11.0625V5.4375C11.0625 5.18886 11.1613 4.9504 11.3371 4.77459C11.5129 4.59877 11.7514 4.5 12 4.5C12.2486 4.5 12.4871 4.59877 12.6629 4.77459C12.8387 4.9504 12.9375 5.18886 12.9375 5.4375V11.0625H18.5625C18.8111 11.0625 19.0496 11.1613 19.2254 11.3371C19.4012 11.5129 19.5 11.7514 19.5 12C19.5 12.2486 19.4012 12.4871 19.2254 12.6629C19.0496 12.8387 18.8111 12.9375 18.5625 12.9375Z"
                                                fill="#365486" class="dark:fill-slate-400" />
                                        </svg></button>
                                </td>
                                {{-- PILIH --}}
                                <td class="px-6 py-4 text-xs md:text-base">
                                    <button type="submit"
                                        class="border border-gray-500 w-full text-white hover bg-blue-900 shadow hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-xs lg:px-5 lg:p-2.5 py-2 px-6 text-center dark:bg-blue-900 dark:text-white dark:hover:bg-blue-600 dark:hover:text-white hover:text-white md:text-base">
                                        Pilih
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-1/3 lg:w-1/6 md:w-1/4 pe-3 md:pe-0">
            <a href="{{ auth()->check() ? route('user.order', auth()->user()->uuid) : route('login') }}">
                <button type="submit"
                    class="w-full text-white hover bg-blue-900 shadow border-blue-900 hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-xs lg:px-5 lg:p-2.5 p-3 text-center dark:bg-blue-900 dark:text-white dark:hover:bg-blue-600 dark:hover:text-white hover:text-white md:text-base">
                    Lihat Keranjang
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2" width="10" height="10"
                        viewBox="0 0 15 15" fill="none">
                        <path
                            d="M12 12C11.1675 12 10.5 12.6675 10.5 13.5C10.5 13.8978 10.658 14.2794 10.9393 14.5607C11.2206 14.842 11.6022 15 12 15C12.3978 15 12.7794 14.842 13.0607 14.5607C13.342 14.2794 13.5 13.8978 13.5 13.5C13.5 13.1022 13.342 12.7206 13.0607 12.4393C12.7794 12.158 12.3978 12 12 12ZM0 0V1.5H1.5L4.2 7.1925L3.18 9.03C3.0675 9.24 3 9.4875 3 9.75C3 10.1478 3.15804 10.5294 3.43934 10.8107C3.72064 11.092 4.10218 11.25 4.5 11.25H13.5V9.75H4.815C4.76527 9.75 4.71758 9.73025 4.68242 9.69508C4.64725 9.65992 4.6275 9.61223 4.6275 9.5625C4.6275 9.525 4.635 9.495 4.65 9.4725L5.325 8.25H10.9125C11.475 8.25 11.97 7.935 12.225 7.4775L14.91 2.625C14.9625 2.505 15 2.3775 15 2.25C15 2.05109 14.921 1.86032 14.7803 1.71967C14.6397 1.57902 14.4489 1.5 14.25 1.5H3.1575L2.4525 0M4.5 12C3.6675 12 3 12.6675 3 13.5C3 13.8978 3.15804 14.2794 3.43934 14.5607C3.72064 14.842 4.10218 15 4.5 15C4.89782 15 5.27936 14.842 5.56066 14.5607C5.84196 14.2794 6 13.8978 6 13.5C6 13.1022 5.84196 12.7206 5.56066 12.4393C5.27936 12.158 4.89782 12 4.5 12Z"
                            fill="white" />
                    </svg>
                </button>
            </a>
        </div>
    </main>
</x-layout>
