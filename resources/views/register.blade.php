<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="flex justify-center mt-16">
    <div class="container xl:max-w-screen-xl p-4 min-h-screen flex flex-row items-center">
      <div class="flex flex-col sm:flex-row gap-4 w-full">
        <div class="sm:w-1/3 lg:w-1/2 flex flex-row items-center">
          <div class="flex flex-col sm:flex-row">
            <div class="flex flex-col items-center gap-4 text-center">
              <div class="w-1/6">
                <img src="{{ asset('images/logo_pantai-goa-petapa_147x147.png') }}" alt="Hero Pantai Goa Petapa">
              </div>
              <h1 class="text-lg font-bold leading-tight tracking-tight text-blue-900 sm:text-lg dark:text-white">
                Pantai Goa Petapa</h1>
              <p class="text-gray-400">
                Nikmati keindahan alam dan<br>suara ombak yang <br>menenangkanjiwa Anda
              </p>
              <img src="{{ asset('images/hp-login.png') }}" alt="Hero Pantai Goa Petapa" class="w-1/2 lg:w-2/3">
            </div>
          </div>
        </div>
        <div class="sm:w-2/3 lg:w-1/2 my-10">
          <div class="flex flex-col items-center justify-center md:h-screen lg:py-0 mt-0">
            <div
              class="w-full bg-blue-100 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Register ke Pantai Goa Petapa
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('store-register') }}" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="tipe" value="user">
                  <div>
                    <label for="nama"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Masukkan nama" required="">
                    @error('nama')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <label for="email"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Masukkan email" required="">
                    @error('email')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <label for="no_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                      Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Masukkan no. telepon" required="">
                    @error('no_telepon')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <label for="password"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      required="">
                    @error('password')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <label for="konfirmasi_password"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                      Password</label>
                    <input type="password" name="konfirmasi_password" id="konfirmasi_password" placeholder="••••••••"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      required="">
                    @error('konfirmasi_password')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                  </div>
                  <button type="submit"
                    class="w-full text-gray-100 hover:underline bg-blue-900 shadow border-gray-300 hover:bg-blue-600 focus:border-blue-600 block focus:outline-none focus:ring-blue-600 font-medium rounded-lg sm:text-sm px-5 p-2.5 text-center  dark:bg-blue-900 dark:focus:ring-blue-800 dark:hover:bg-blue-600 dark:hover:text-white">Buat
                    Akun</button>
                  <p class="text-sm text-center font-light text-gray-500 dark:text-gray-400">
                    Sudah punya akun?
                    <a href="login" class="font-medium text-gray-600 hover:underline dark:text-gray-400">Login</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>
