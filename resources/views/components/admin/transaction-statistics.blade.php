<div
  class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
  <div class="flex items-center justify-between mb-4">
    <div class="flex-shrink-0">
      <h3 class="flex flex-col items-start mb-4 text-lg font-semibold text-gray-900 dark:text-white">Transaksi</h3>
      <span
        class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">Rp{{ number_format(5800000, 0, ',', '.') }}</span>
    </div>
    <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
      <span class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400 mr-1.5">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
        12,5%
      </span>
      Sejak bulan lalu
    </p>
  </div>
  <div id="transaction-statistics"></div>
  <!-- Card Footer -->
  <div class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
    <div>
      <button
        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
        type="button" data-dropdown-toggle="transaction-statistics-dropdown">7 hari terakhir <svg class="w-4 h-4 ml-2"
          fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
      <!-- Dropdown menu -->
      <div
        class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
        id="transaction-statistics-dropdown">
        <div class="px-4 py-3" role="none">
          <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
            04 Mei 2024 - 10 Mei 2024
          </p>
        </div>
        <ul class="py-1" role="none">
          <li>
            <a href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
              role="menuitem">7 hari terakhir</a>
          </li>
          <li>
            <a href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
              role="menuitem">14 hari terakhir</a>
          </li>
          <li>
            <a href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
              role="menuitem">30 hari terakhir</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="flex-shrink-0">
      <a href="{{ route('transaksi.index') }}"
        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
        LIHAT TRANSAKSI
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>
