<?php

namespace App\Repositories;

interface PostinganRepositoryInterface
{
    public function getPostinganAll();

    public function getPostinganByUuid($uuid);

    public function getPostinganWhere($column, $value);

    public function createPostingan($data);

    public function updatePostingan($data, $uuid);

    public function deletePostingan($uuid);
}
