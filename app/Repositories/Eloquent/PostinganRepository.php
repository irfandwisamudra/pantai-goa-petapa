<?php

namespace App\Repositories\Eloquent;

use App\Models\Postingan;
use App\Repositories\PostinganRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class PostinganRepository.
 */
class PostinganRepository extends BaseRepository implements PostinganRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Postingan $model
     */
    public function __construct(Postingan $model)
    {
        parent::__construct($model);
    }

    public function getPostinganAll()
    {
        return $this->model->with(['komentar', 'kategori'])->latest()->get();
    }

    public function getPostinganByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getPostinganWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createPostingan($data)
    {
        return $this->model->create($data);
    }

    public function updatePostingan($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deletePostingan($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
