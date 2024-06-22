<form action="{{ route('transaksi.update', $item->uuid) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="flex flex-col gap-4">
    <div class="grid grid-cols-1">
      <div>
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
          Pengunjung</label>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12">
          <select id="nama" name="nama" style="width: 100%" required>
            <option value="" selected="">Pilih pengunjung</option>
            @foreach ($pengunjung as $p)
              <option value="{{ $p->uuid }}" @if ($p->uuid == $item->pengunjung->uuid) selected @endif>{{ $p->nama }}
                -
                {{ $p->user->no_telepon ?? $p->guest->no_telepon }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12" id="ticket-container">
        @foreach ($item->transaksiTiket as $t)
          <div class="grid grid-cols-12 gap-4 ticket-row mb-4" id="ticket-row-{{ $loop->index + 1 }}">
            <div class="col-span-12 sm:col-span-8 xl:col-span-10">
              <label for="tiket-{{ $loop->index + 1 }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiket</label>
              <select id="tiket-{{ $loop->index + 1 }}" name="tiket[]"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required>
                <option value="" selected="">Pilih tiket</option>
                @foreach ($tiket as $tik)
                  <option value="{{ $tik->uuid }}" @if ($tik->uuid == $t->tiket_uuid) selected @endif
                    data-harga="{{ $tik->harga }}">{{ $tik->keterangan }} -
                    Rp{{ number_format($tik->harga, 0, ',', '.') }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-span-6 sm:col-span-4 xl:col-span-2">
              <label for="jumlah-{{ $loop->index + 1 }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
              <div class="relative flex items-center">
                <button type="button" id="decrement-button-{{ $loop->index + 1 }}"
                  data-input-counter-decrement="jumlah-{{ $loop->index + 1 }}"
                  class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                  <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h16" />
                  </svg>
                </button>
                <input type="text" name="jumlah[]" id="jumlah-{{ $loop->index + 1 }}" data-input-counter
                  data-input-counter-min="1" data-input-counter-max="50" aria-describedby="helper-text-explanation"
                  class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="999" value="{{ $t->jumlah }}" required />
                <button type="button" id="increment-button-{{ $loop->index + 1 }}"
                  data-input-counter-increment="jumlah-{{ $loop->index + 1 }}"
                  class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                  <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 1v16M1 9h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        @endforeach
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
          placeholder="99999" value="{{ $item->total_bayar }}" required />
      </div>
    </div>
  </div>

  <x-admin.submit-cancel-button submit="Update" url="{{ route('transaksi.index') }}"></x-admin.submit-cancel-button>
</form>

<script>
  $(document).ready(function() {
    $('#nama').select2({
      width: 'resolve',
      selectionCssClass: 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500',
      dropdownCssClass: 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
    });

    $('#add-user-button').on('click', function() {
      $('#add-visitor-modal').removeClass('hidden');
      $('#add-visitor-modal').attr({
        'aria-hidden': 'false',
        'aria-model': 'true',
        'role': 'dialog'
      });
      $('#add-transaction-modal').addClass('hidden');
      $('#add-transaction-modal').attr({
        'aria-hidden': 'true',
        'aria-model': 'false',
        'role': 'dialog'
      });
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

    $('#ticket-container').on('change', 'select', function() {
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

      updateTotal();
    });
    
    updateTotal();
    $('#ticket-container').on('change click', 'select, button', updateTotal);
  });
</script>
