<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex justify-center mt-4">
        <div class="container xl:max-w-screen-xl p-4">
            <div class="flex lg:flex-col flex-row pt-20 gap-4">
                {{-- HUBUNGI KAMI --}}
                <div class="w-full mb-8">
                    <h1 class="mb-4 font-semibold lg:text-lg dark:text-white">Hubungi Kami</h1>
                    <div
                        class="w-full bg-blue-100 border border-gray-200 shadow-xl lg:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-600 my-4 rounded-lg py-4">
                        <form id="contactForm" action="javascript:void(0);" method="post" onsubmit="showAlert()">
                            <div class="flex flex-col lg:flex-row lg:gap-6 lg:w-full">
                                {{-- NAMA LENGKAP --}}
                                <div class="namalengkap lg:w-1/2 w-full">
                                    <label for="namalengkap"
                                        class="lg:text-lg text-sm font-semibold dark:text-white ms-4 lg:ms-0 md:text-base">Nama
                                        Lengkap<span class="text-red-700">*</span></label>
                                    <div class="flex flex-row gap-10 m-4 lg:mx-0">
                                        <div class="w-full rounded-lg">
                                            <input type="text" name="namalengkap" id="namalengkap"
                                                class="w-full bg-white shadow border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lg:py-4 lg:text-base"
                                                placeholder="Masukkan Nama Lengkap" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex md:flex-row lg:gap-6 lg:w-full">
                                    {{-- EMAIL --}}
                                    <div class="email w-1/2 lg:w-full">
                                        <label for="email"
                                            class="lg:text-lg text-sm font-semibold dark:text-white ms-4 lg:ms-0 md:text-base">Email<span
                                                class="text-red-700 ">*</span></label>
                                        <div class="flex flex-row gap-10 m-4 lg:mx-0">
                                            <div class="w-full rounded-lg">
                                                <input type="email" name="email" id="email"
                                                    class="w-full bg-white shadow border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lg:py-4 lg:text-base"
                                                    placeholder="Masukkan Email" required="">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- TELEPON --}}
                                    <div class="telepon w-1/2 lg:w-full">
                                        <label for="notel"
                                            class="lg:text-lg text-sm font-semibold dark:text-white ms-4 lg:ms-0 md:text-base">No.
                                            Telp<span class="text-red-700">*</span></label>
                                        <div class="flex flex-row gap-10 m-4 lg:mx-0">
                                            <div class="w-full rounded-lg">
                                                <input type="text" name="notel" id="notel"
                                                    class="w-full bg-white shadow border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lg:py-4 lg:text-base"
                                                    placeholder="Masukkan Nomor Telepon" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-full flex lg:flex-row flex-col">
                                <div class="lg:w-1/2 w-full">
                                    <label for="lokasi"
                                        class="lg:text-lg text-sm font-semibold dark:text-white ms-4 lg:ms-0 md:text-base">Lokasi</label>
                                    <div class="lg:ms-0 lg:me-6 lg:mt-4 m-4">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15834.903932784351!2d112.79205323181527!3d-7.157645635548374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd802ced08960c5%3A0x7b2406a342114256!2sPantai%20Goa%20Petapa!5e0!3m2!1sid!2sid!4v1717248902252!5m2!1sid!2sid"
                                            class="rounded-lg w-full h-64 border-0" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                </div>
                                {{-- PESAN --}}
                                <div class="lg:w-1/2 w-full pesan">
                                    <label for="pesan"
                                        class="lg:text-lg text-sm font-semibold dark:text-white ms-4 lg:ms-0 md:text-base">Pesan<span
                                            class="text-red-700">*</span></label>
                                    <div class="flex flex-row gap-10 m-4 lg:mx-0">
                                        <div class="w-full rounded-lg ">
                                            <textarea name="pesan" id="pesan" cols="30" rows="10"
                                                class="w-full bg-white shadow border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 lg:py-2 lg:text-base"
                                                placeholder="Masukkan Pesan" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex justify-center mt-10">
                                <a href=""><button type="submit"
                                        class="w-full text-white hover bg-blue-900 shadow border-blue-900 hover:bg-blue-600 block focus:outline-none font-bold rounded-lg text-sm p-2.5 text-center  dark:text-white dark:hover:text-white hover:text-white lg:text-base md:text-base">Kirim</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function showAlert() {
            alert('Pesan terkirim!');
            setTimeout(function() {
                window.location.href = "kontak";
            }, 1000);
        }
    </script>
</x-layout>
