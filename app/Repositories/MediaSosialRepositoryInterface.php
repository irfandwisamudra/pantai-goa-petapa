<?php

namespace App\Repositories;

interface MediaSosialRepositoryInterface
{
    public function getMediaSosialAll();

    public function getMediaSosialByUuid($uuid);

    public function getMediaSosialWhere($column, $value);

    public function createMediaSosial($data);

    public function updateMediaSosial($data, $uuid);

    public function deleteMediaSosial($uuid);
}
