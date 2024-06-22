<?php

namespace App\Repositories;

interface KomentarRepositoryInterface
{
    public function getKomentarAll();

    public function getKomentarByUuid($uuid);

    public function getKomentarWhere($column, $value);

    public function createKomentar($data);

    public function updateKomentar($data, $uuid);

    public function deleteKomentar($uuid);
}
