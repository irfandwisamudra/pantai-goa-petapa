<?php

namespace App\Repositories\Eloquent;

use App\Models\Tiket;
use App\Repositories\TiketRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class TiketRepository.
 */
class TiketRepository extends BaseRepository implements TiketRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Tiket $model
     */
    public function __construct(Tiket $model)
    {
        parent::__construct($model);
    }

    public function getTiketAll()
    {
        return $this->model->latest()->get();
    }

    public function getTiketByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getTiketWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createTiket($data)
    {
        return $this->model->create($data);
    }

    public function updateTiket($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteTiket($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
