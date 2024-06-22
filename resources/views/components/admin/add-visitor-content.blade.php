<form action="{{ route('pengunjung.store') }}" method="POST">
  @csrf
  <div class="grid gap-4 mb-4 grid-cols-2">
    <div class="col-span-2 sm:col-span-1">
      <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
      <input type="text" name="nama" id="nama"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan nama" required>
      @error('nama')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-span-2 sm:col-span-1">
      <label for="no_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telepon</label>
      <input type="text" name="no_telepon" id="no_telepon"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Masukkan no. telepon" required>
      @error('no_telepon')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-span-2">
      <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
      <select name="tipe" id="tipe"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required>
        <option value="guest">Guest</option>
        <option value="user" {{ old('tipe') === 'user' ? 'selected' : '' }}>Member</option>
      </select>
      @error('tipe')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div id="extra-fields" class="grid gap-4 grid-cols-2"></div>

  <x-admin.submit-cancel-button submit="Tambah" url="{{ route('pengunjung.index') }}"></x-admin.submit-cancel-button>
</form>

<script>
  $(document).ready(function() {
    function toggleEmailPasswordFields() {
      let tipe = $('#tipe').val();
      if (tipe === 'user') {
        $('#extra-fields').html(`
          <div class="col-span-2 sm:col-span-1">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Masukkan email" required>
            @error('email')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-span-2 sm:col-span-1">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Masukkan password" required>
            @error('password')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
        `);
        $('#extra-fields').addClass('mb-4');
      } else {
        $('#extra-fields').html('');
        $('#extra-fields').removeClass('mb-4');
      }
    }

    toggleEmailPasswordFields();

    $('#tipe').change(function() {
      toggleEmailPasswordFields();
    });
  });
</script>
