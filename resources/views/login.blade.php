<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="flex justify-center mt-10">
    <div class="container xl:max-w-screen-xl p-4">
      <div class="flex flex-col sm:flex-row gap-4">
        <div class="w-1/2">
          <div class="mt-20 flex flex-col sm:flex-row">
            <div class="w-1/6">
              <img src="{{ asset('images/logo_pantai-goa-petapa_147x147.png') }}" alt="Hero Pantai Goa Petapa">
            </div>
            <div class="py-2 px-5 text-right">
              <h1 class="text-lg font-bold leading-tight tracking-tight text-blue-900 md:text-lg dark:text-blue-900">Pantai Goa Petapa</h1>
              <p class="text-gray-400">Enjoy the beauty of nature and<br>sooting sound of the waves<br>that calm your soul</p>
            </div>
          </div>
          <div class="w-3/4 flex justify-end items-center mx-20 my-10">
            <img src="{{ asset('images/hp-login.png') }}" alt="Hero Pantai Goa Petapa">
          </div>
        </div>
        <div class="w-1/2 pt-16">
          <div class="flex flex-col items-center justify-center md:h-screen lg:py-0 mt-0">
            <div class="w-full bg-slate-200 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <br><h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign in to Pantai Goa Petapa
                </h1><br>
                <form class="space-y-4 md:space-y-6" action="#">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-white shadow border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div><br>
                  <div class="flex items-center justify-between">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-white shadow focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                      </div>
                    </div>
                      <a href="#" class="text-sm font-medium text-primary-900 hover:underline dark:text-gray-300">Forgot password?</a>
                  </div><br>
                  <button type="submit" class="w-full text-gray-100 hover:underline bg-blue-900 shadow border-gray-300 hover:bg-blue-600 focus:border-blue-600 block focus:outline-none focus:ring-blue-600 font-medium rounded-lg sm:text-sm px-5 p-2.5 text-center  dark:bg-blue-900 dark:focus:ring-blue-800 dark:hover:bg-blue-600 dark:hover:text-white">Sign in</button>
                  <button type="submit" class="w-full flex items-center justify-center text-gray-900 bg-white shadow border-blue-900 hover:bg-blue-600 hover:text-white focus:border-blue-900 focus:outline-none focus:ring-blue-900 font-medium rounded-lg sm:text-sm px-5 py-2.5 text-center dark:bg-white dark:hover:bg-blue-600 dark:hover:text-white dark:focus:ring-primary-800"><img src="{{ asset('images/google.png') }}" width="20" alt="">&ensp;&emsp;Sign in with Google</button>                  
                  <p class="text-sm text-center font-light text-gray-500 dark:text-gray-400">
                    Don’t have an account yet? <a href="#" class="font-medium text-gray-600 hover:underline dark:text-primary-500">Sign up</a>
                  </p>
                </form><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>