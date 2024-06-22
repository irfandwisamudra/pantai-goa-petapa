<div
  class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
  <div class="flex items-center justify-between mb-4">
    <div class="flex-shrink-0">
      <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Analisis Pengunjung</h3>
    </div>
  </div>
  <div id="visitor-analytics"></div>
  <!-- Card Footer -->
  <div class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
    <div>
      <button
        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
        type="button" data-dropdown-toggle="visitor-analytics-dropdown">7 hari terakhir <svg class="w-4 h-4 ml-2"
          fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
      <!-- Dropdown menu -->
      <div
        class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
        id="visitor-analytics-dropdown">
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
      <a href="{{ route('pengunjung.index') }}"
        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
        LIHAT PENGUNJUNG
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>
