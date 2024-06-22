<?php

// TODO: Add documentation

namespace App\Services;

use App\Models\Pengunjung;
use App\Repositories\Eloquent\PengunjungRepository;

/**
 * Class PengunjungService.
 */
class PengunjungService
{
    protected $pengunjungRepository;

    /**
     * PengunjungService constructor.
     */
    public function __construct()
    {
        $this->pengunjungRepository = new PengunjungRepository(new Pengunjung());
    }

    public function getPengunjungAll()
    {
        return $this->pengunjungRepository->getPengunjungAll();
    }

    public function getPengunjungByUuid($uuid)
    {
        return $this->pengunjungRepository->getPengunjungByUuid($uuid);
    }

    public function getPengunjungWhere($column, $value)
    {
        return $this->pengunjungRepository->getPengunjungWhere($column, $value);
    }

    public function createPengunjung($data)
    {
        return $this->pengunjungRepository->createPengunjung($data);
    }

    public function updatePengunjung($data, $uuid)
    {
        return $this->pengunjungRepository->updatePengunjung($data, $uuid);
    }

    public function deletePengunjung($uuid)
    {
        $pengunjung = $this->getPengunjungByUuid($uuid);

        if ($pengunjung->user()->exists()) {
            $pengunjung->user()->delete();
        } else if ($pengunjung->guest()->exists()) {
            $pengunjung->guest()->delete();
        }

        return $this->pengunjungRepository->deletePengunjung($uuid);
    }

    public function isUser($uuid)
    {
        return $this->pengunjungRepository->getPengunjungByUuid($uuid)->user()->exists() ? true : false;
    }

    public function isPengunjung($uuid)
    {
        return $this->pengunjungRepository->getPengunjungByUuid($uuid)->pengunjung()->exists() ? true : false;
    }
}
