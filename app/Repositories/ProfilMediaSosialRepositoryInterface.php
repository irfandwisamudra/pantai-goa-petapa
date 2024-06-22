<?php

namespace App\Repositories;

interface ProfilMediaSosialRepositoryInterface
{
    public function getProfilMediaSosialAll();

    public function getProfilMediaSosialByUuid($uuid);

    public function getProfilMediaSosialWhere($column, $value);

    public function createProfilMediaSosial($data);

    public function updateProfilMediaSosial($data, $uuid);

    public function deleteProfilMediaSosial($uuid);
}
