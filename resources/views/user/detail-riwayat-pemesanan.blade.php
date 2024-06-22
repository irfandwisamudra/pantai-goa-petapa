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
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Detail Riwayat Pemesanan</h3>
            <div
              class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-800 sm:p-6 dark:bg-gray-800">
              <div class="grid gap-4 md:gap-6 md:grid-cols-4">
                <div class="col-span-4 flex justify-between md:col-span-2">
                  <div>
                    <h4 class="xl:text-lg font-semibold text-gray-800 dark:text-gray-200">From</h4>
                    <h3 class="text-xl xl:text-2xl font-semibold text-gray-800 dark:text-gray-200">
                      Super Admin</h3>
                  </div>
                  <div>
                    <h4 class="xl:text-lg font-semibold text-gray-800 dark:text-gray-200">To</h4>
                    <h3 class="text-xl xl:text-2xl font-semibold text-gray-800 dark:text-gray-200">
                      {{ $transaksi->pengunjung->nama }}
                    </h3>
                  </div>
                </div>
                <div
                  class="col-span-4 flex justify-end text-end -order-1 md:order-none md:col-span-2 border-b border-gray-200 dark:border-gray-800 md:border-none">
                  <div class="mb-3">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Order</h4>
                    <h3 class="text-xl xl:text-2xl font-semibold text-gray-800 dark:text-gray-200">
                      #{{ $transaksi->no_transaksi }}</h3>
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Status:
                      @if ($transaksi->status == 'pending')
                        <span
                          class="bg-purple-100 text-purple-800 text-sm px-2.5 py-0.5 rounded-md border border-blue-100 dark:bg-gray-700 dark:text-blue-400 dark:border-blue-400">Menunggu</span>
                      @elseif ($transaksi->status == 'success')
                        <span
                          class="bg-green-100 text-green-800 text-sm px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Berhasil</span>
                      @elseif($transaksi->status == 'canceled')
                        <span
                          class="bg-red-100 text-red-800 text-sm px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Dibatalkan</span>
                      @elseif($transaksi->status == 'expired')
                        <span
                          class="bg-orange-100 text-orange-800 text-sm px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">Expired</span>
                      @endif
                    </h4>
                  </div>
                </div>
                <div class="col-span-4 flex flex-col gap-2">
                  @foreach ($transaksi->transaksiTiket as $item)
                    <div
                      class="grid grid-cols-6 items-center p-4 md:p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-800 dark:hover:bg-gray-800">
                      <div class="col-span-2 sm:col-span-3">
                        <h5 class="text-lg lg:text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          {{ $item->tiket->kendaraan->jenis_kendaraan }}</h5>
                        <p class="text-gray-800 dark:text-gray-400">
                          Rp{{ number_format($item->tiket->harga, 0, ',', '.') }}
                        </p>
                      </div>
                      <div class="col-span-4 sm:col-span-3 flex justify-between">
                        <p class="font-semibold text-gray-800 dark:text-gray-400">Jumlah:
                          {{ $item->jumlah }}
                        </p>
                        <p class="font-semibold text-gray-800 dark:text-gray-400">
                          Rp{{ number_format($item->tiket->harga * $item->jumlah, 0, ',', '.') }}
                        </p>
                      </div>
                    </div>
                  @endforeach
                </div>
                <div class="col-span-4 grid grid-cols-6 justify-between">
                  <div class="col-span-3 md:col-span-4">
                    <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">Metode
                      Pembayaran</h4>
                    <h3 class="text-xl xl:text-2xl font-semibold text-gray-800 dark:text-gray-200">
                      Dana</h3>
                  </div>
                  <div class="col-span-3 md:col-span-2">
                    <div class="flex justify-between items-center">
                      <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">Total
                      </h4>
                      <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}</h4>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">Total
                        Bayar</h4>
                      <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Rp{{ number_format($transaksi->total_bayar, 0, ',', '.') }}</h4>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Kembali</h4>
                      <h4 class="lg:text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Rp{{ number_format($transaksi->total_bayar - $transaksi->total_harga, 0, ',', '.') }}
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{ route('user.history-order', auth()->user()->uuid) }}"
              class="flex gap-2 items-center lg:text-lg font-semibold text-gray-800 dark:text-gray-200">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 12h14M5 12l4-4m-4 4 4 4" />
              </svg>
              <span class="inline-block">Kembali</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>
