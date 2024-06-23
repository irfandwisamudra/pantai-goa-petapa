<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="flex justify-center mt-10 min-h-screen">
    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900 w-full">
      <a href="/" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
        <img src="{{ asset('images/logo-navbar.png') }}" class="mr-4 h-11" alt="Pantai Goa Petapa Logo">
        <span>Pantai Goa Petapa</span>
      </a>
      <!-- Card -->
      <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
          Login ke Admin Pantai Goa Petapa
        </h2>
        @if (session()->has('error'))
          <x-alert.error>{{ session('error') }}</x-alert.error>
        @endif
        <form class="mt-8 space-y-6" action="{{ route('admin.login') }}" method="POST">
          @csrf
          @method('POST')
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="name@company.com" required>
            @error('email')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              required>
            @error('password')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <button type="submit"
            class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
        </form>
      </div>
    </div>
  </section>
</x-layout>
