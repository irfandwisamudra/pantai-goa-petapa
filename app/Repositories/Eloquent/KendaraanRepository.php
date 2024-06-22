<?php

namespace App\Repositories\Eloquent;

use App\Models\Kendaraan;
use App\Repositories\KendaraanRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class KendaraanRepository.
 */
class KendaraanRepository extends BaseRepository implements KendaraanRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Kendaraan $model
     */
    public function __construct(Kendaraan $model)
    {
        parent::__construct($model);
    }

    public function getKendaraanAll()
    {
        return $this->model->all();
    }

    public function getKendaraanByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getKendaraanWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createKendaraan($data)
    {
        return $this->model->create($data);
    }

    public function updateKendaraan($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteKendaraan($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
