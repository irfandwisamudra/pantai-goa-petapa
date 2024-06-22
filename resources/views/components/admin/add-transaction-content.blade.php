
<form action="{{ route('transaksi.store') }}" method="POST">
  <div class="flex flex-col gap-4">
    <div class="grid grid-cols-1">
      <div>
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
          Pengunjung</label>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-10">
          <select id="nama" name="nama" style="width: 100%" required>
            <option value="" selected="">Pilih pengunjung</option>
            @foreach ($pengunjung as $p)
              <option value="{{ $p->uuid }}">{{ $p->nama }} -
                {{ $p->user->no_telepon ?? $p->guest->no_telepon }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-span-2">
          <button type="button"
            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full h-full justify-center"
            data-modal-target="add-visitor-modal" data-modal-toggle="add-visitor-modal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-10 md:col-span-11" id="ticket-container">
        <div class="grid grid-cols-10 md:grid-cols-11 gap-4 ticket-row mb-4">
          <div class="col-span-11 md:col-span-7 lg:col-span-8">
            <label for="tiket-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiket</label>
            <select id="tiket-1" name="tiket[]"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              required>
              <option value="" selected="">Pilih tiket</option>
              @foreach ($tiket as $t)
                <option value="{{ $t->id }}" data-harga="{{ $t->harga }}">{{ $t->keterangan }} -
                  Rp{{ number_format($t->harga, 0, ',', '.') }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="col-span-6 md:col-span-3 lg:col-span-2">
            <label for="jumlah-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
            <div class="relative flex items-center">
              <button type="button" id="decrement-button-1" data-input-counter-decrement="jumlah-1"
                class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 18 2">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h16" />
                </svg>
              </button>
              <input type="text" name="jumlah[]" id="jumlah-1" data-input-counter data-input-counter-min="1"
                data-input-counter-max="50" aria-describedby="helper-text-explanation"
                class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="999" value="1" required />
              <button type="button" id="increment-button-1" data-input-counter-increment="jumlah-1"
                class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
                </svg>
              </button>
            </div>
          </div>
          <div class="col-span-5 md:col-span-1">
            <button type="button" id="delete-ticket-button"
              class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full h-full justify-center">
              <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="col-span-2 md:col-span-1 row-span-full col-start-11 md:col-start-12 mb-4">
        <button type="button" id="add-ticket-button"
          class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full h-full justify-center">
          <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4 mb-4">
      <div class="col-span-12 sm:col-span-6">
        <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</div>
        <div
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
          <span id="total">Loading...</span>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6">
        <label for="total_bayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bayar</label>
        <input type="number" name="total_bayar" id="total_bayar"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
          placeholder="99999" required />
      </div>
    </div>
  </div>

  <x-admin.submit-cancel-button submit="Tambah" url="{{ route('transaksi.index') }}"></x-admin.submit-cancel-button>
</form>

<script>
  $(document).ready(function() {
    $('#nama').select2({
      width: 'resolve',
      selectionCssClass: 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500',
      dropdownCssClass: 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
    });

    const updateTotal = () => {
      let total = 0;
      $('#ticket-container select').each(function() {
        let harga = $(this).find(':selected').data('harga');
        let jumlah = $(this).closest('.ticket-row').find('input').val();
        total += harga * jumlah;
      });
      $('#total').text(isNaN(total) ? 'Loading...' : 'Rp' + total.toLocaleString('id-ID'));
    };

    $('#add-ticket-button').on('click', function() {
      let ticketRow = $('.ticket-row').first().clone();
      let rowCount = $('.ticket-row').length + 1;
      ticketRow.find('select').val('');
      ticketRow.find('label').eq(0).attr('for', 'tiket-' + rowCount);
      ticketRow.find('select').attr('id', 'tiket-' + rowCount);
      ticketRow.find('label').eq(1).attr('for', 'jumlah-' + rowCount);
      ticketRow.find('button').eq(0).attr({
        'id': 'decrement-button-' + rowCount,
        'data-input-counter-decrement': 'jumlah-' + rowCount
      });
      ticketRow.find('button').eq(1).attr({
        'id': 'increment-button-' + rowCount,
        'data-input-counter-increment': 'jumlah-' + rowCount
      });
      ticketRow.find('input').attr('id', 'jumlah-' + rowCount).val('1');
      $('#ticket-container').append(ticketRow);

      ticketRow.find('button').eq(0).on('click', function() {
        let input = ticketRow.find('input');
        let value = parseInt(input.val());
        if (value > 1) input.val(value - 1);
      });

      ticketRow.find('button').eq(1).on('click', function() {
        let input = ticketRow.find('input');
        let value = parseInt(input.val());
        if (value < 50) input.val(value + 1);
      });

      ticketRow.find('input').on('input', function() {
        let value = $(this).val().replace(/\D/g, '');
        value = Math.max(1, Math.min(50, value));
        $(this).val(value);
      });

      ticketRow.find('button').eq(2).on('click', function() {
        let ticketRow = $('.ticket-row');
        if (ticketRow.length > 1) $(this).closest('.ticket-row').remove();
        updateTotal();
      });

      updateTotal();
    });

    $('#ticket-container').on('change click', 'select, button', updateTotal);
  });
</script>
