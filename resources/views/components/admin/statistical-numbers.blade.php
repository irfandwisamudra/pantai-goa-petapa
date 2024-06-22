@php
    $keuntungan = 0;

    foreach ($transaksi as $t) {
        $keuntungan += $t->total_bayar;
    }
@endphp

<div
    class="bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800 px-4 py-8 lg:py-16 lg:px-6">
    <div class="max-w-screen-xl mx-auto text-center">
        <dl class="grid gap-8 sm:gap-0 mx-auto text-gray-900 sm:grid-cols-4 dark:text-white">
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">Rp. {{ number_format($keuntungan, 0, ',', '.') }}
                </dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Total Keuntungan</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ count($pengunjung) }}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Total Pengunjung</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ count($tiket) }}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Total Tiket</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ count($users) }}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Total Members</dd>
            </div>
        </dl>
    </div>
</div>
