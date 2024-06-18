<x-admin.layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="px-4 pt-6">
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <!-- Card header -->
      <x-admin.card-header title="Daftar Postingan" breadcrumb="Postingan" breadcrumbUrl="{{ route('postingan.index') }}"
        buttonUrl="{{ route('postingan.create') }}" buttonText="Tambah Postingan Baru"></x-admin.card-header>

      @if (session()->has('success'))
        <x-alert.success>{{ session('success') }}</x-alert.success>
      @elseif (session()->has('error'))
        <x-alert.error>{{ session('error') }}</x-alert.error>
      @endif

      <!-- Table -->
      <x-admin.posts-table :postingan="$postingan"></x-admin.posts-table>
    </div>
  </div>
</x-admin.layout>
