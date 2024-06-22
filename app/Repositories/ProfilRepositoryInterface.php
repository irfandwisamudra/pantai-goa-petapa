<?php

namespace App\Repositories;

interface ProfilRepositoryInterface
{
    public function getProfilAll();

    public function getProfilByUuid($uuid);

    public function getProfilWhere($column, $value);

    public function createProfil($data);

    public function updateProfil($data, $uuid);

    public function deleteProfil($uuid);
}
