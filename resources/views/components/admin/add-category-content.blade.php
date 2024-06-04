<form method="POST">
  <div class="grid gap-4 mb-4 grid-cols-2">
    <div class="col-span-2">
      <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kategori</label>
      <input type="text" name="nama" id="nama"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan nama kategori" required>
    </div>
  </div>

  <x-admin.add-cancel-button url="{{ url('admin/kategori') }}"></x-admin.add-cancel-button>
</form>
