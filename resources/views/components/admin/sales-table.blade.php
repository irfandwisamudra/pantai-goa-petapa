@php
  $data = [
      [
          'transaksi_id' => 'transaksi-1',
          'no_transaksi' => '#192770',
          'tanggal_transaksi' => '10 Mei 2024',
          'nama_pengunjung' => 'Alice Johnson',
          'tiket' => [['Pejalan Kaki', 2], ['Sepeda', 1], ['Sepeda Motor', 1], ['Mobil', 1]],
          'total harga' => 'Rp15.000',
          'status' => 'success',
      ],
      [
          'transaksi_id' => 'transaksi-2',
          'no_transaksi' => '#192769',
          'tanggal_transaksi' => '09 Mei 2024',
          'nama_pengunjung' => 'Bob Smith',
          'tiket' => [['Pejalan Kaki', 1], ['Sepeda', 1]],
          'total harga' => 'Rp20.000',
          'status' => 'pending',
      ],
      [
          'transaksi_id' => 'transaksi-3',
          'no_transaksi' => '#192768',
          'tanggal_transaksi' => '08 Mei 2024',
          'nama_pengunjung' => 'Charlie Brown',
          'tiket' => [['Sepeda Motor', 2]],
          'total harga' => 'Rp30.000',
          'status' => 'success',
      ],
      [
          'transaksi_id' => 'transaksi-4',
          'no_transaksi' => '#192767',
          'tanggal_transaksi' => '07 Mei 2024',
          'nama_pengunjung' => 'Diana Prince',
          'tiket' => [['Mobil', 2]],
          'total harga' => 'Rp20.000',
          'status' => 'success',
      ],
      [
          'transaksi_id' => 'transaksi-5',
          'no_transaksi' => '#192766',
          'tanggal_transaksi' => '06 Mei 2024',
          'nama_pengunjung' => 'Eve Adams',
          'tiket' => [['Pejalan Kaki', 1]],
          'total harga' => 'Rp10.000',
          'status' => 'expired',
      ],
      [
          'transaksi_id' => 'transaksi-6',
          'no_transaksi' => '#192765',
          'tanggal_transaksi' => '05 Mei 2024',
          'nama_pengunjung' => 'Frank White',
          'tiket' => [['Sepeda', 1], ['Sepeda Motor', 1]],
          'total harga' => 'Rp15.000',
          'status' => 'success',
      ],
      [
          'transaksi_id' => 'transaksi-7',
          'no_transaksi' => '#192764',
          'tanggal_transaksi' => '04 Mei 2024',
          'nama_pengunjung' => 'Grace Lee',
          'tiket' => [['Pejalan Kaki', 1]],
          'total harga' => 'Rp5.000',
          'status' => 'success',
      ],
      [
          'transaksi_id' => 'transaksi-8',
          'no_transaksi' => '#192763',
          'tanggal_transaksi' => '03 Mei 2024',
          'nama_pengunjung' => 'Hank Green',
          'tiket' => [['Sepeda Motor', 1]],
          'total harga' => 'Rp12.000',
          'status' => 'success',
      ],
      [
          'transaksi_id' => 'transaksi-9',
          'no_transaksi' => '#192762',
          'tanggal_transaksi' => '02 Mei 2024',
          'nama_pengunjung' => 'Ivy Blue',
          'tiket' => [['Mobil', 1]],
          'total harga' => 'Rp10.000',
          'status' => 'canceled',
      ],
      [
          'transaksi_id' => 'transaksi-10',
          'no_transaksi' => '#192761',
          'tanggal_transaksi' => '01 Mei 2024',
          'nama_pengunjung' => 'Jack Black',
          'tiket' => [['Pejalan Kaki', 1], ['Sepeda', 1], ['Sepeda Motor', 1], ['Mobil', 1]],
          'total harga' => 'Rp5.000',
          'status' => 'success',
      ],
  ];

@endphp

<div class="flex flex-col mt-6">
  <div class="overflow-x-auto rounded-lg">
    <div class="inline-block min-w-full align-middle">
      <div class="overflow-hidden shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
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
                SUBTOTAL
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
            @foreach ($data as $item)
              <tr class="{{ $loop->even ? 'bg-gray-50 dark:bg-gray-700' : '' }}">
                <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $item['no_transaksi'] }}
                </td>
                <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                  {{ $item['tanggal_transaksi'] }}
                </td>
                <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $item['nama_pengunjung'] }}
                </td>
                <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                  {{ $item['total harga'] }}
                </td>
                <td class="p-4 whitespace-nowrap">
                  @if ($item['status'] == 'success')
                    <span
                      class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Berhasil</span>
                  @elseif($item['status'] == 'canceled')
                    <span
                      class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Dibatalkan</span>
                  @elseif($item['status'] == 'expired')
                    <span
                      class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">Expired</span>
                  @elseif($item['status'] == 'pending')
                    <span
                      class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">Menunggu</span>
                  @else
                    <span
                      class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">Ditunda</span>
                  @endif
                </td>
                <td class="p-4 whitespace-nowrap">
                  <button
                    class="text-xs font-medium text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-300">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-width="2"
                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                      <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                  </button>

                  {{-- Edit Button --}}
                  <button type="button"
                    class="text-xs font-medium text-yellow-600 dark:text-yellow-400 hover:text-yellow-500 dark:hover:text-yellow-300"
                    data-modal-target="editTransaksiModal-{{ $item['transaksi_id'] }}"
                    data-modal-toggle="editTransaksiModal-{{ $item['transaksi_id'] }}">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                    </svg>
                  </button>
                  {{-- Edit Transksi Modal --}}
                  <div id="editTransaksiModal-{{ $item['transaksi_id'] }}" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden top-4 fixed md:top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                          class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Transaksi
                          </h3>
                          <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="editTransaksiModal-{{ $item['transaksi_id'] }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5" method="POST">
                          <input type="hidden" name="transaksi_id" value="{{ $item['transaksi_id'] }}">
                          <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                              <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Pengunjung</label>
                              <div class="w-full flex gap-4">
                                <input type="text"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                  id="nama_pengunjung" name="nama_pengunjung" value="{{ $item['nama_pengunjung'] }}"
                                  readonly>
                              </div>
                            </div>
                            <div class="col-span-2">
                              <div class="w-full flex flex-col gap-4">
                                @foreach ($item['tiket'] as $tiket)
                                  <div class="flex gap-4 ticket-row">
                                    <div class="flex-1">
                                      <label for="tiket-1"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiket</label>
                                      <select id="tiket-1" name="tiket[]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                        <option value="" selected="">Select tiket</option>
                                        <option value="tiket-1" {{ $tiket[0] == 'Pejalan Kaki' ? 'selected' : '' }}>
                                          Pejalan Kaki</option>
                                        <option value="tiket-2" {{ $tiket[0] == 'Sepeda' ? 'selected' : '' }}>
                                          Sepeda
                                        </option>
                                        <option value="tiket-3" {{ $tiket[0] == 'Sepeda Motor' ? 'selected' : '' }}>
                                          Sepeda Motor</option>
                                        <option value="tiket-4" {{ $tiket[0] == 'Mobil' ? 'selected' : '' }}>Mobil
                                        </option>
                                      </select>
                                    </div>
                                    <div class="w-fit">
                                      <label for="jumlah-{{ $item['transaksi_id'] }}-{{ $loop->index + 1 }}"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                      <div class="relative flex items-center max-w-[8rem]">
                                        <button type="button"
                                          id="decrement-button-{{ $item['transaksi_id'] }}-{{ $loop->index + 1 }}"
                                          data-input-counter-decrement="jumlah-{{ $item['transaksi_id'] }}-{{ $loop->index + 1 }}"
                                          class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                          <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                          </svg>
                                        </button>
                                        <input type="text" name="jumlah[]"
                                          id="jumlah-{{ $item['transaksi_id'] }}-{{ $loop->index + 1 }}"
                                          data-input-counter data-input-counter-min="1" data-input-counter-max="50"
                                          aria-describedby="helper-text-explanation"
                                          class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="999" value="{{ $tiket[1] }}" required>
                                        <button type="button"
                                          id="increment-button-{{ $item['transaksi_id'] }}-{{ $loop->index + 1 }}"
                                          data-input-counter-increment="jumlah-{{ $item['transaksi_id'] }}-{{ $loop->index + 1 }}"
                                          class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                          <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                          </svg>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                              </div>
                            </div>
                          </div>
                          <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                            </svg>
                            Tambah
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <button
                    class="text-xs font-medium text-red-600 dark:text-red-400 hover:text-red-500 dark:hover:text-red-300">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                    </svg>
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>