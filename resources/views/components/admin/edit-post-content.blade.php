<form method="POST" action="{{ route('postingan.update', $item->uuid) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="grid gap-4 mb-4 grid-cols-2">
    <div class="col-span-2 sm:col-span-1">
      <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail</label>
      <input
        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        aria-describedby="thumbnail_help" id="thumbnail" type="file" name="thumbnail" value="{{ $item->thumbnail }}"
        required>
      @error('thumbnail')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-span-2 sm:col-span-1">
      <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
      <select name="kategori_uuid" id="kategori"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required="">
        <option value="" selected>Pilih Kategori</option>
        @foreach ($kategori as $k)
          <option value="{{ $k->uuid }}" @if ($item->kategori_uuid == $k->uuid) selected @endif>{{ $k->keterangan }}
        @endforeach
      </select>
      @error('kategori_uuid')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-span-2">
      <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
      <input type="text" name="judul" id="judul"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan judul" value="{{ $item->judul }}" required>
      @error('judul')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-span-2">
      <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
      <textarea name="body" id="body">{{ $item->body }}</textarea>
      @error('body')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <x-admin.submit-cancel-button submit="Tambah" url="{{ url('admin/postingan') }}"></x-admin.submit-cancel-button>
</form>
