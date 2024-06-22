<x-admin.layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="px-4 pt-6">
    <div class="grid gap-4">
      <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <x-admin.card-header-add-edit title="Tambah" breadcrumbUrl="{{ route('transaksi.index') }}"
          breadcrumb="Transaksi"></x-admin.card-header-add-edit>

        @if (session()->has('success'))
          <x-alert.success>{{ session('success') }}</x-alert.success>
        @elseif (session()->has('error'))
          <x-alert.error>{{ session('error') }}</x-alert.error>
        @endif

        <div
          class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <x-admin.add-transaction-content :pengunjung="$pengunjung" :tiket="$tiket"></x-admin.add-transaction-content>
        </div>
      </div>
    </div>
  </div>

  <x-admin.add-visitor-modal></x-admin.add-visitor-modal>
</x-admin.layout>
