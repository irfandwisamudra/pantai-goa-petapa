<x-admin.layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="px-4 pt-6">
    <div class="grid gap-4">
      <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <x-admin.card-header-add-edit title="Edit" breadcrumbUrl="{{ route('transaksi.index') }}"
          breadcrumb="Transaksi"></x-admin.card-header-add-edit>

        <div
          class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <x-admin.edit-transaction-content :item="$transaksi" :pengunjung="$pengunjung"
            :tiket="$tiket"></x-admin.edit-transaction-content>
        </div>
      </div>
    </div>
  </div>

  <x-admin.add-visitor-modal></x-admin.add-visitor-modal>
</x-admin.layout>
