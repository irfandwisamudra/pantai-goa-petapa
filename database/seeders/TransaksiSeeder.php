<?php

namespace Database\Seeders;

use App\Models\Pengunjung;
use App\Models\Tiket;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengunjungs = Pengunjung::all();
        $tikets = Tiket::all();

        $pengunjungs->each(function (Pengunjung $pengunjung) use ($tikets): void {
            $jumlah = rand(1, 5);

            $selectedTikets = $tikets->random(rand(1, 4));

            $transaksiData = [
                'pengunjung_uuid' => $pengunjung->uuid,
                'total_harga' => $selectedTikets->sum('harga') * $jumlah,
                'total_bayar' => $selectedTikets->sum('harga') * $jumlah + (rand(0, 2) * [1000, 2000, 5000][array_rand([1000, 2000, 5000])]),
                'tanggal_transaksi' => now(),
            ];

            $transaksi = Transaksi::create($transaksiData);

            $transaksiTiketData = $selectedTikets->mapWithKeys(function ($tiket) use ($transaksi, $jumlah) {
                return [
                    $tiket->uuid => [
                        'jumlah' => $jumlah,
                        'tiket_uuid' => $tiket->uuid,
                        'transaksi_uuid' => $transaksi->uuid,
                    ]
                ];
            })->toArray();

            $transaksi->tiket()->attach($transaksiTiketData);
        });
    }
}
