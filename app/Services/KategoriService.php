<?php

namespace App\Services;

use App\Models\Kategori;
use App\Repositories\Eloquent\KategoriRepository;

/**
 * Class KategoriService.
 */
class KategoriService
{
    protected $kategoriRepository;

    public function __construct()
    {
        $this->kategoriRepository = new KategoriRepository(new Kategori());
    }

    public function getKategoriAll()
    {
        return $this->kategoriRepository->getKategoriAll();
    }

    public function getKategoriByUuid($uuid)
    {
        return $this->kategoriRepository->getKategoriByUuid($uuid);
    }

    public function getKategoriWhere($column, $value)
    {
        return $this->kategoriRepository->getKategoriWhere($column, $value);
    }

    public function createKategori($data)
    {
        return $this->kategoriRepository->createKategori($data);
    }

    public function updateKategori($data, $uuid)
    {
        return $this->kategoriRepository->updateKategori($data, $uuid);
    }

    public function deleteKategori($uuid)
    {
        return $this->kategoriRepository->deleteKategori($uuid);
    }
}
