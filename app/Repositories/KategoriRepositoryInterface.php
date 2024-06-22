<?php

namespace App\Repositories;

interface KategoriRepositoryInterface
{
    public function getKategoriAll();

    public function getKategoriByUuid($uuid);

    public function getKategoriWhere($column, $value);

    public function createKategori($data);

    public function updateKategori($data, $uuid);

    public function deleteKategori($uuid);
}
