<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-4 pt-6">
        <div class="grid gap-4">
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col">
                        <x-admin.visitor-statistics></x-admin.visitor-statistics>
                    </div>

                    <div class="col">
                        <x-admin.statistical-numbers :tiket="$tiket" :pengunjung="$pengunjung" :users="$users"
                            :transaksi="$transaksi"></x-admin.statistical-numbers>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
