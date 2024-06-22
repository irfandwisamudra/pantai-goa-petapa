<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="mt-24 mx-5 bg-center bg-no-repeat bg-gray-700 bg-blend-multiply bg-cover lg:mt-32 md:mt-24 md:mx-5 lg:mx-32 rounded-2xl"
    style="background-image: url('{{ asset('images/background-jumbotron.png') }}')">
    <div class="container xl:max-w-screen-xl mx-auto">
      <div class="py-10 lg:py-20 md:py-10 flex flex-col">
        <div class="w-full flex justify-center">
          <img width="100" src="{{ asset('images/logo.png') }}" alt="Hero Pantai Goa Petapa">
        </div>
        <div class="w-full flex justify-center">
          <p class="text-lg font-bold text-white lg:text-3xl">Pantai Goa Petapa</p>
        </div>
      </div>
    </div>
  </section>

  <p class="text-lg font-bold text-gray-800 lg:text-3xl text-center lg:my-4 md:my-4 my-4 dark:text-white">Tentang Pantai Goa Petapa</p>

  <div class="flex lg:mx-32 flex-row gap-4 md:mx-5 mx-5">
    <div class="mb-8 w-full bg-blue-100 border border-gray-200 shadow-xl lg:py-10 md:p-8 dark:bg-gray-800 dark:border-gray-600 md:my-0 my-0 lg:my-4 rounded-lg flex lg:flex-row md:flex-row py-4 flex-col">
      <img src="{{ asset('images/pantai.png') }}" alt="Hero Pantai Goa Petapa" class="lg:px-5 lg:me-3 lg:w-1/2 md:w-1/2 md:mx-5 w-4/5 py-6 mx-auto lg:mx-6">
      <p class="w-full lg:w-1/2 px-12 mx-auto my-auto text-base font-light text-gray-800 text-justify pb-6 dark:text-white lg:mx-3 md:px-6 md:leading-8 md:pt-3 lg:leading-10 lg:tracking-wide lg:text-xl"><span class="font-extrabold dark:text-white md:w-1/2 lg:text-xl">Pantai Goa Petapa</span> adalah destinasi wisata yang menawarkan keindahan alam pantai dan berbagai fasilitas menarik bagi pengunjung. Terletak di daerah yang strategis, pantai ini dikenal dengan pemandangan laut yang memukau, pasir putih yang lembut, dan suasana yang tenang, menjadikannya tempat ideal untuk berlibur dan bersantai.</p>
    </div>
  </div>

  <div class="flex lg:mx-32 flex-row gap-4 md:mx-5 mx-5">
    <div class="mb-8 mt-0 lg:mb-20 md:mb-10 md:mt-8 w-full bg-white border-gray-200 shadow-2xl lg:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-600 lg:mt-8 rounded-lg py-4 flex flex-col">
      <div class="flex flex-col">
        <p class="text-lg font-bold text-blue-950 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">Tim Kami</p>
        <p class="mx-auto text-base font-light text-gray-800 text-center dark:text-white">Kelompok 2 Rekayasa Perangkat Lunak</p>
      </div>

      <div class="flex flex-col lg:flex-row md:flex-row md:gap-2 mb-4 md:mb-1 lg:px-6">
        <div class="lg:w-1/3 md:w-1/3">
          <img src="{{ asset('images/irfan.png') }}" alt="Irfan" class="w-4/5 mx-auto">
          <p class="text-lg font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">Irfan Dwi Samudra</p>
          <p class="mx-auto text-base font-light text-gray-800 text-center md:text-sm dark:text-white">Front-End Developer &<br>UI Designer for Admin<br>- 220411100083 -</p>
        </div>
        <div class="lg:w-1/3 md:w-1/3">
          <img src="{{ asset('images/rizka.png') }}" alt="Rizka" class="w-4/5 mx-auto">
          <p class="text-lg font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">Nurul Rizka</p>
          <p class="mx-auto text-base font-light text-gray-800 text-center md:text-sm dark:text-white">Front-End Developer &<br>UI Designer for User<br>- 220411100136 -</p>
        </div>
        <div class="lg:w-1/3 md:w-1/3 mb-3">
          <img src="{{ asset('images/wahyu.png') }}" alt="Wahyu" class="w-4/5 mx-auto">
          <p class="text-lg font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">Wahyu Cahyanto B. A.</p>
          <p class="mx-auto text-base font-light text-gray-800 text-center md:text-sm dark:text-white">Back-End Developer<br>- 220411100155 -</p>
        </div>
      </div>
    </div>
  </div>
</x-layout>
