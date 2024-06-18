<form method="POST" action="{{ route('tiket.update', $item->uuid) }}">
  @csrf
  @method('PUT')
  <div class="grid gap-4 mb-4 grid-cols-2">
    <div class="col-span-2 sm:col-span-1">
      <label for="jenis_kendaraan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
        Kendaraan</label>
      <input type="text" name="jenis_kendaraan" id="jenis_kendaraan"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan jenis kendaraan" value="{{ $item->kendaraan->jenis_kendaraan }}" required>
    </div>
    <div class="col-span-2 sm:col-span-1">
      <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
      <input type="text" name="harga" id="harga"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan harga" value="{{ $item->harga }}" required>
    </div>
    <div class="col-span-2">
      <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
      <input type="text" name="keterangan" id="keterangan"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan keterangan" value="{{ $item->keterangan }}" required>
    </div>
  </div>

  <x-admin.submit-cancel-button submit="Update" url="{{ route('tiket.index') }}"></x-admin.submit-cancel-button>
</form>
