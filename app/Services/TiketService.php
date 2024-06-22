<?php

namespace App\Services;

use App\Models\Tiket;
use App\Repositories\Eloquent\TiketRepository;

/**
 * Class TiketService.
 */
class TiketService
{
    protected $tiketRepository;

    public function __construct()
    {
        $this->tiketRepository = new TiketRepository(new Tiket());
    }

    public function getTiketAll()
    {
        return $this->tiketRepository->getTiketAll();
    }

    public function getTiketByUuid($uuid)
    {
        return $this->tiketRepository->getTiketByUuid($uuid);
    }

    public function getTiketWhere($column, $value)
    {
        return $this->tiketRepository->getTiketWhere($column, $value);
    }

    public function createTiket($data)
    {
        return $this->tiketRepository->createTiket($data);
    }

    public function updateTiket($data, $uuid)
    {
        return $this->tiketRepository->updateTiket($data, $uuid);
    }

    public function deleteTiket($uuid)
    {
        return $this->tiketRepository->deleteTiket($uuid);
    }
}
