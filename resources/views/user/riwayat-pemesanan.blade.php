<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="flex justify-center mt-20">
    <div class="container xl:max-w-screen-xl p-4">
      <div class="flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-1/4">
          <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex flex-col items-center justify-center gap-2 text-center">
              <img class="w-24 h-24 rounded-full" src="{{ asset('images/default-profile.png') }}" alt="User Avatar">
              <h1 class="text-xl font-bold text-gray-800 dark:text-gray-200">
                {{ auth()->user()->pengunjung->nama }}</h1>
              <p class="text-sm text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</p>
            </div>
            <div class="mt-8">
              <x-user.sidebar></x-user.sidebar>
            </div>
          </div>
        </div>
        <div class="w-full md:w-3/4">
          <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Riwayat Pemesanan</h3>
            <div class="overflow-x-auto rounded-lg">
              <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                      <tr>
                        <th scope="col"
                          class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                          TANGGAL
                        </th>
                        <th scope="col"
                          class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                          NO. TRANSAKSI
                        </th>
                        <th scope="col"
                          class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                          TOTAL
                        </th>
                        <th scope="col"
                          class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                          STATUS
                        </th>
                        <th scope="col"
                          class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                          AKSI
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800">
                      @if ($transaksi->isEmpty())
                        <tr>
                          <td colspan="5"
                            class="p-4 text-sm font-normal text-gray-500 dark:text-gray-400 text-center">
                            Tidak ada data transaksi
                          </td>
                        </tr>
                      @else
                        @foreach ($transaksi as $t)
                          <tr class="{{ $loop->even ? 'bg-gray-50 dark:bg-gray-700' : '' }}">
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                              {{ $t->tanggal_transaksi }}
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                              #{{ $t->no_transaksi }}
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                              Rp{{ number_format($t->total_harga, 0, ',', '.') }}
                            </td>
                            <td class="p-4 whitespace-nowrap">
                              @if ($t->status == 'pending')
                                <span
                                  class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-blue-100 dark:bg-gray-700 dark:text-blue-400 dark:border-blue-400">Menunggu</span>
                              @elseif ($t->status == 'success')
                                <span
                                  class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Berhasil</span>
                              @elseif($t->status == 'canceled')
                                <span
                                  class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Dibatalkan</span>
                              @elseif($t->status == 'expired')
                                <span
                                  class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">Expired</span>
                              @endif
                            </td>
                            <td class="p-4 whitespace-nowrap">
                              {{-- Detail Button --}}
                              <a href="{{ route('user.history-order.show', ['id' => auth()->user()->uuid, 'transaksiId' => $t->uuid]) }}"
                                class="text-xs font-medium text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-300 inline-block">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                  <path stroke="currentColor" stroke-width="2"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                              </a>
                            </td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>
