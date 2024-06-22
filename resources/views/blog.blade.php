<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="flex flex-col justify-center mt-4 dark:text-white">
    <div class="mt-14 inset-x-0">
      <svg xmlns="http://www.w3.org/2000/svg"class="fill-blue-100 dark:fill-gray-800" viewBox="0 70 1440 200"><path fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,154.7C672,128,768,96,864,85.3C960,75,1056,85,1152,101.3C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </div>
    <div class="container xl:max-w-screen-xl px-4 mx-auto">
      <div class="flex flex-col gap-4">
        <div class="w-full mb-4">
          <h1 class="text-2xl font-bold block md:text-3xl text-center md:text-left">Blogs</h1>
        </div>

        <div class="flex flex-col md:flex-row justify-center gap-4 md:gap-8 lg:gap-16">
          <section class="flex flex-col sm:flex-row sm:flex-wrap justify-center items-center md:w-2/3">
            <div class="grid sm:grid-cols-2 gap-4 lg:gap-x-8">
              <x-blog-card></x-blog-card>
            </div>
            <div class="flex justify-center items-center mt-8">
              <x-pagination></x-pagination>
            </div>
          </section>
          <section class="lg:mb-16 md:my-0 md:w-1/3">
            <div class="lg:mb-4 md:mb-8 mb-6">
              <span class="text-3xl lg:text-xl font-bold block md:text-2xl text-center md:text-left">Recent
                Post</span>
            </div>
            <div class="grid grid-cols-2 gap-4">
              @for ($i = 0; $i < 5; $i++)
                <div class="mb-2 {{ $i == 0 ? 'col-span-2' : '' }}">
                  <div class="mb-2 rounded-lg bg-white shadow-lg hover:bg-primary-100">
                    <img src="{{ asset('images/background-jumbotron.png') }}"
                      class="w-full h-44 md:h-24 rounded-lg object-cover shadow-lg" alt="Photo">
                  </div>
                  <span class="text-sm font-semibold"><a
                      href="{{ url('/blog/' . 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-asperiores-enim') }}"
                      class="hover:underline">Lorem
                      ipsum dolor sit amet consectetur adipisicing elit. Asperiores, enim.</a></span>
                </div>
              @endfor
            </div>
            <div class="sm:flex sm:gap-4 md:block">
              <div class="mb-6 md:mb-8 w-full md:w-full">
                <span
                  class="text-3xl lg:text-xl font-bold block md:text-2xl text-center lg:text-center md:text-center mt-8 mb-4">Kategori</span>
                @for ($i = 0; $i < 4; $i++)
                  <div class="flex gap-4 mb-2">
                    <img src="{{ asset('images/circle.svg') }}" alt="Icon" class="w-3 h-3 mt-1">
                    <div class="flex flex-col">
                      <span class="lg:text-sm font-semibold text-base"><a href="#" class="hover:underline">Lorem.</a></span>
                    </div>
                  </div>
                @endfor
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="mb-0 inset-x-0">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-100 dark:fill-gray-800 scale-x-[-1]" viewBox="0 0 1440 288"><path fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,229.3C384,235,480,149,576,133.3C672,117,768,171,864,208C960,245,1056,267,1152,272C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"/></svg>
    </div>
  </section>
</x-layout>
