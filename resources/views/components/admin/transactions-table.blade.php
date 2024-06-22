<div class="flex flex-col mt-4">
  <div class="min-w-full align-middle">
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600 display" id="transactions-table">
        <thead class="bg-gray-50 dark:bg-gray-700">
          <tr>
            <th scope="col"
              class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
              NO. TRANSAKSI
            </th>
            <th scope="col"
              class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
              TANGGAL
            </th>
            <th scope="col"
              class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
              PENGUNJUNG
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
          @foreach ($items as $item)
            <tr>
              <td class="p-4 text-sm font-normal text-gray-900 dark:text-white">
                #{{ $item->no_transaksi }}
              </td>
              <td class="p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                {{ $item->tanggal_transaksi }}
              </td>
              <td class="p-4 text-sm font-semibold text-gray-900 dark:text-white">
                {{ $item->pengunjung->nama }}
              </td>
              <td class="p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                Rp{{ number_format($item->total_harga, 0, ',', '.') }}
              </td>
              <td class="p-4 whitespace-nowrap">
                <select
                  class="text-sm font-semibold rounded-lg border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 dark:bg-gray-700 dark:focus:ring-primary-300 focus:ring-2 focus:ring-gray-200 focus:border-gray-200">
                  <option value="pending"
                    class="bg-purple-100 text-purple-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md border border-blue-100 dark:bg-gray-700 dark:text-blue-400 dark:border-blue-400"
                    @if ($item->status == 'pending') selected @endif>
                    Menunggu
                  </option>
                  <option value="success"
                    class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500"
                    @if ($item->status == 'success') selected @endif>
                    Berhasil
                  </option>
                  <option value="canceled"
                    class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400"
                    @if ($item->status == 'canceled') selected @endif>
                    Dibatalkan
                  </option>
                  <option value="expired"
                    class="bg-orange-100 text-orange-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300"
                    @if ($item->status == 'expired') selected @endif>
                    Expired
                  </option>
                </select>
              </td>
              <td class="p-4 whitespace-nowrap">
                {{-- Detail Button --}}
                <a href="{{ route('transaksi.show', $item->uuid) }}"
                  class="text-xs font-medium text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-300 inline-block">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2"
                      d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                </a>

                {{-- Edit Button --}}
                <a href="{{ route('transaksi.edit', $item->uuid) }}"
                  class="inline-block text-xs font-medium text-yellow-600 dark:text-yellow-400 hover:text-yellow-500 dark:hover:text-yellow-300">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                  </svg>
                </a>

                {{-- Delete Button --}}
                <button
                  class="text-xs font-medium text-red-600 dark:text-red-400 hover:text-red-500 dark:hover:text-red-300"
                  data-modal-target="deleteTransaksiModal-{{ $item['transaksi_id'] }}"
                  data-modal-toggle="deleteTransaksiModal-{{ $item['transaksi_id'] }}">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                  </svg>
                </button>
                {{-- Delete Transaksi Modal --}}
                <div
                  class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                  id="deleteTransaksiModal-{{ $item['transaksi_id'] }}">
                  <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                      <!-- Modal header -->
                      <div class="flex justify-end p-2">
                        <button type="button"
                          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                          data-modal-hide="deleteTransaksiModal-{{ $item['transaksi_id'] }}">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                          </svg>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <form class="p-4 md:p-5" method="POST">
                        <input type="hidden" name="transaksi_id" value="{{ $item['transaksi_id'] }}">
                        <div class="p-6 pt-0 text-center">
                          <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                          </svg>
                          <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400 whitespace-normal">
                            Apakah Anda yakin ingin menghapus transaksi ini?
                          </h3>
                          <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                            Yes, I'm sure
                          </button>
                          <a href="#"
                            class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            data-modal-hide="deleteTransaksiModal-{{ $item['transaksi_id'] }}">
                            No, cancel
                          </a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  let table = $('#transactions-table').DataTable({
    "paging": true,
    "searching": true,
    "ordering": true,
    "order": [],
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "lengthMenu": [
      [10, 25, 50, 100, -1],
      [10, 25, 50, 100, "All"]
    ],
    "language": {
      "search": "_INPUT_",
      "searchPlaceholder": "Cari transaksi...",
      "lengthMenu": "Tampilkan _MENU_ data per halaman",
      "zeroRecords": "Data tidak ditemukan",
      "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
      "infoEmpty": "Data tidak tersedia",
      "infoFiltered": "(difilter dari _MAX_ total data)",
    },
  });
</script>
