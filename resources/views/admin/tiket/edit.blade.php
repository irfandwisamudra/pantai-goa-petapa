<x-admin.layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="px-4 pt-6">
    <div class="grid gap-4">
      <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <x-admin.card-header-add-edit title="Tambah" breadcrumbUrl="{{ route('tiket.index') }}"
          breadcrumb="Tiket"></x-admin.card-header-add-edit>

        <div
          class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <x-admin.edit-ticket-content :item="$tiket"></x-admin.edit-ticket-content>
        </div>
      </div>
    </div>
  </div>
</x-admin.layout>
