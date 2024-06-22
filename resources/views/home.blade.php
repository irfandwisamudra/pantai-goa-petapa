<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply bg-cover mt-16 flex justify-center"
    style="background-image: url('{{ asset('images/background-jumbotron.png') }}')">
    <div class="container xl:max-w-screen-xl">
      <div class="px-4 mx-auto py-24 lg:py-56 flex flex-col sm:flex-row">
        <div class="w-full sm:w-3/4">
          <p class="mb-8 text-lg font-bold text-gray-300 lg:text-3xl">Pantai Goa Petapa</p>
          <h1 class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Nikmati
            keindahan alam dan suara ombak yang menenangkan jiwa</h1>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ url('tiket') }}"
              class="py-3 px-7 text-base font-medium text-center text-white rounded-lg bg-slate-500 hover:bg-slate-600 focus:ring-4 focus:ring-slate-100 dark:focus:ring-slate-700 w-fit">
              Lihat Tiket
            </a>
            @if (!auth()->check())
              <a href="{{ url('login') }}"
                class="py-3 px-7 text-base font-medium text-center text-white rounded-lg bg-slate-500 hover:bg-slate-600 focus:ring-4 focus:ring-slate-100 dark:focus:ring-slate-700 w-fit">
                Login
              </a>
            @endif
          </div>
        </div>
        <div class="w-1/2 mx-auto sm:w-1/4">
          <img class="w-full" src="{{ asset('images/logo.png') }}" alt="Hero Pantai Goa Petapa">
        </div>
      </div>
    </div>
  </section>

  <div class="container xl:max-w-screen-xl flex flex-row gap-4 mx-auto p-4">
    <div
      class="mb-8 mt-0 lg:mb-16 md:mb-10 md:mt-5 w-full bg-white border-gray-200 shadow-2xl lg:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-600 lg:mt-14 rounded-lg py-4 flex flex-col">
      <div class="flex flex-col">
        <p class="text-lg font-bold text-blue-950 lg:text-2xl text-center mb-5 dark:text-white">Fasilitas</p>
      </div>

      <div class="flex flex-col lg:flex-row md:mx-6 mb-4 md:mb-1 lg:px-6">
        <div class="md:flex md:flex-row mb-9">
          <div class="mb-9 md:mb-0">
            <img src="{{ asset('images/park.png') }}" alt="Park" class="w-3/5 mx-auto lg:w-5/6">
            <p class="text-lg font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">Tempat
              Parkir</p>
            <p
              class="mx-auto text-base font-light text-gray-800 text-center md:text-sm dark:text-white lg:w-4/5 lg:text-base w-3/5 md:w-3/5">
              Tempat parkir selalu tersedia tanpa perlu khawatir kehabisan.</p>
          </div>
          <div class="">
            <img src="{{ asset('images/toilet.png') }}" alt="Toilet" class="w-3/5 mx-auto lg:w-5/6">
            <p class="text-lg font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">Toilet
            </p>
            <p
              class="mx-auto text-base font-light text-gray-800 text-center dark:text-white lg:w-5/6 md:text-sm lg:text-base w-3/5 md:w-3/5">
              Toilet dilengkapi dengan fasilitas yang bersih dan nyaman.</p>
          </div>
        </div>

        <div class="md:flex md:flex-row">
          <div class="md:w-full mb-9 md:mb-0">
            <img src="{{ asset('images/playground.png') }}" alt="Playground" class="w-3/5 mx-auto lg:w-4/5">
            <p class="text-lg font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white">
              Playground</p>
            <p
              class="mx-auto text-base font-light text-gray-800 text-center md:text-sm dark:text-white lg:w-4/5 lg:text-base w-3/5 md:w-3/5">
              Anak-anak bisa bermain dengan leluasa tanpa ingin pulang lebih awal</p>
          </div>
          <div class="md:w-full">
            <img src="{{ asset('images/boat.png') }}" alt="boat" class="w-3/5 mx-auto lg:w-4/5">
            <p class="font-bold text-blue-900 lg:text-2xl text-center lg:mt-4 lg:mb-1 dark:text-white text-base">Boat
            </p>
            <p
              class="mx-auto text-base font-light text-gray-800 text-center dark:text-white lg:w-4/5 md:text-sm lg:text-base w-3/5 md:w-3/5">
              Perahu tersedia untuk petualangan laut yang menyenangkan</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container xl:max-w-screen-xl flex flex-row gap-4 mx-auto p-4 my-8">
    <section class="bg-white dark:bg-gray-900">
      <div class="gap-8 items-center mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2">
        <img class="w-full" src="{{ asset('images/pantai.png') }}" alt="Image">
        <div class="mt-4 md:mt-0">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
            Keindahan Pantai Goa Petapa
          </h2>
          <p class="mb-6 font-medium text-gray-500 md:text-lg dark:text-gray-400">
            Pantai Goa Petapa adalah tempat wisata yang sangat cocok untuk menikmati keindahan alam dan suara ombak yang
            menenangkan jiwa. Pantai ini memiliki pasir putih yang lembut dan air laut yang jernih. Pantai ini juga
            dilengkapi dengan fasilitas yang memadai seperti tempat parkir, toilet, playground, dan perahu.
          </p>
          <a href="{{ url('tiket') }}"
            class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
            Pesan Tiket Sekarang
            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </div>

  <div class="container xl:max-w-screen-xl flex flex-row gap-4 mx-auto p-4 my-8">
    <section class="bg-white dark:bg-gray-900 mx-auto">
      <div class="mx-auto max-w-screen-sm text-center">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimoni</h2>
        <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">
          Apa kata mereka yang sudah berkunjung ke Pantai Goa Petapa?
        </p>
      </div>
      <div class="max-w-screen-xl mx-auto text-center">
        <div class="testimonials-slider">
          <figure class="testimonial max-w-screen-md mx-auto">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                fill="currentColor" />
            </svg>
            <blockquote>
              <p class="text-2xl font-medium text-gray-900 dark:text-white">
                "Pantai Goa Petapa sangat indah. Saya sangat menikmati pemandangan yang disuguhkan oleh pantai ini.
                Sangat cocok untuk melepas penat."
              </p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
              <img class="w-6 h-6 rounded-full" src="{{ asset('images/users/helene-engels.png') }}" alt="User Profile">
              <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                <div class="pr-3 font-medium text-gray-900 dark:text-white">Helene Engels</div>
                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Traveler</div>
              </div>
            </figcaption>
          </figure>

          <figure class="testimonial max-w-screen-md mx-auto hidden">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                fill="currentColor" />
            </svg>
            <blockquote>
              <p class="text-2xl font-medium text-gray-900 dark:text-white">
                "Pantai Goa Petapa menyuguhkan pemandangan yang sangat indah. Saya sangat menikmati keindahan alam yang
                disuguhkan oleh pantai ini."
              </p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
              <img class="w-6 h-6 rounded-full" src="{{ asset('images/users/jese-leos.png') }}" alt="User Profile">
              <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                <div class="pr-3 font-medium text-gray-900 dark:text-white">Jese Leos</div>
                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Youtuber</div>
              </div>
            </figcaption>
          </figure>

          <figure class="testimonial max-w-screen-md mx-auto hidden">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                fill="currentColor" />
            </svg>
            <blockquote>
              <p class="text-2xl font-medium text-gray-900 dark:text-white">
                "Suasana di Pantai Goa Petapa sangat tenang dan damai. Tempatnya bersih dan nyaman. Saya sangat
                menikmati waktu liburan saya di sini."
              </p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
              <img class="w-6 h-6 rounded-full" src="{{ asset('images/users/joseph-mcfall.png') }}"
                alt="User Profile">
              <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                <div class="pr-3 font-medium text-gray-900 dark:text-white">Joseph Mcfall</div>
                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Selebgram</div>
              </div>
            </figcaption>
          </figure>
        </div>

        <div class="flex justify-center mt-8">
          <button id="prev"
            class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <button id="next"
            class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    </section>
  </div>
</x-layout>

<script>
  $(document).ready(function() {
    var testimonials = $('.testimonial');
    var currentIndex = 0;
    var intervalTime = 5000;
    var interval;

    function showTestimonial(index) {
      testimonials.addClass('hidden');
      testimonials.eq(index).removeClass('hidden');
    }

    function startSlider() {
      interval = setInterval(function() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(currentIndex);
      }, intervalTime);
    }

    function stopSlider() {
      clearInterval(interval);
    }

    $('#next').on('click', function() {
      stopSlider();
      currentIndex = (currentIndex + 1) % testimonials.length;
      showTestimonial(currentIndex);
      startSlider();
    });

    $('#prev').on('click', function() {
      stopSlider();
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      showTestimonial(currentIndex);
      startSlider();
    });

    showTestimonial(currentIndex);
    startSlider();
  });
</script>
