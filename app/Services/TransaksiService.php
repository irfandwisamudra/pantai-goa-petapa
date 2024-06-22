<?php

namespace App\Services;

use App\Models\Tiket;
use App\Models\Transaksi;
use App\Repositories\Eloquent\TiketRepository;
use App\Repositories\Eloquent\TransaksiRepository;

/**
 * Class TransaksiService.
 */
class TransaksiService
{
    protected $transaksiRepository;
    protected $tiketRepository;

    public function __construct()
    {
        $this->transaksiRepository = new TransaksiRepository(new Transaksi());
        $this->tiketRepository = new TiketRepository(new Tiket());
    }

    public function getTransaksiAll()
    {
        return $this->transaksiRepository->getTransaksiAll();
    }

    public function getTransaksiByUuid($uuid)
    {
        return $this->transaksiRepository->getTransaksiByUuid($uuid);
    }

    public function getTransaksiWhere($column, $value)
    {
        return $this->transaksiRepository->getTransaksiWhere($column, $value);
    }

    public function createTransaksi($data)
    {
        $total_harga = 0;

        for ($i = 0; $i < count($data['tiket']); $i++) {
            $tiket = $this->tiketRepository->getTiketByUuid($data['tiket'][$i]);
            $total_harga += $tiket->harga * $data['jumlah'][$i];
        }

        $data['pengunjung_uuid'] = $data['pengunjung_uuid'] ?? auth()->user()->pengunjung->uuid;
        $data['total_harga'] = $total_harga;
        $data['tanggal_transaksi'] = now();

        $transaksi = $this->transaksiRepository->createTransaksi($data);

        for ($i = 0; $i < count($data['tiket']); $i++) {
            $transaksi->tiket()->attach($data['tiket'][$i], [
                'jumlah' => $data['jumlah'][$i],
                'transaksi_uuid' => $transaksi->uuid,
                'tiket_uuid' => $data['tiket'][$i]
            ]);
        }

        return $transaksi;
    }

    public function updateTransaksi($data, $uuid)
    {
        return $this->transaksiRepository->updateTransaksi($data, $uuid);
    }

    public function deleteTransaksi($uuid)
    {
        return $this->transaksiRepository->deleteTransaksi($uuid);
    }
}
