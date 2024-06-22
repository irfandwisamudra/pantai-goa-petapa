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
              <p class="text-gray-400">Enjoy the beauty of nature and<br>sooting sound of the
                waves<br>that calm your soul</p>
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
                  Sign up to Pantai Goa Petapa
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('pengunjung.store') }}" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="tipe" value="user">
                  <div>
                    <label for="name"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="nama" id="name"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Enter your name" required="">
                  </div>
                  <div>
                    <label for="email"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Enter your email" required="">
                  </div>
                  <div>
                    <label for="notel"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                    <input type="text" name="no_telepon" id="notel"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Enter your phone" required="">
                  </div>
                  <div>
                    <label for="password"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      required="">
                  </div>
                  <div>
                    <label for="password2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Re-type
                      Password</label>
                    <input type="password" name="confirmation_password" id="password" placeholder="••••••••"
                      class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      required="">
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox"
                          class="w-4 h-4 border border-gray-300 rounded bg-white shadow focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                          me</label>
                      </div>
                    </div>
                    <a href="#"
                      class="text-sm font-medium text-gray-900 hover:underline dark:text-gray-300">Forgot
                      password?</a>
                  </div>
                  <button type="submit"
                    class="w-full text-gray-100 hover:underline bg-blue-900 shadow border-gray-300 hover:bg-blue-600 focus:border-blue-600 block focus:outline-none focus:ring-blue-600 font-medium rounded-lg sm:text-sm px-5 p-2.5 text-center  dark:bg-blue-900 dark:focus:ring-blue-800 dark:hover:bg-blue-600 dark:hover:text-white">Create
                    Account</button>
                  <p class="text-sm text-center font-light text-gray-500 dark:text-gray-400">
                    Already have an account yet? <a href="login"
                      class="font-medium text-gray-600 hover:underline dark:text-gray-400">Sign
                      in</a>
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
