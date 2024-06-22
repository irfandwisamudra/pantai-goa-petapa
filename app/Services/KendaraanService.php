<?php

namespace App\Services;

use App\Models\Kendaraan;
use App\Repositories\Eloquent\KendaraanRepository;

/**
 * Class KendaraanService.
 */
class KendaraanService
{
    protected $kendaraanRepository;

    public function __construct()
    {
        $this->kendaraanRepository = new KendaraanRepository(new Kendaraan());
    }

    public function getKendaraanAll()
    {
        return $this->kendaraanRepository->getKendaraanAll();
    }

    public function getKendaraanByUuid($uuid)
    {
        return $this->kendaraanRepository->getKendaraanByUuid($uuid);
    }

    public function getKendaraanWhere($column, $value)
    {
        return $this->kendaraanRepository->getKendaraanWhere($column, $value);
    }

    public function createKendaraan($data)
    {
        return $this->kendaraanRepository->createKendaraan($data);
    }

    public function updateKendaraan($data, $uuid)
    {
        return $this->kendaraanRepository->updateKendaraan($data, $uuid);
    }

    public function deleteKendaraan($uuid)
    {
        return $this->kendaraanRepository->deleteKendaraan($uuid);
    }
}
