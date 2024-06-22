<?php

namespace App\Repositories\Eloquent;

use App\Models\TransaksiTiket;
use App\Repositories\TransaksiTiketRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class TransaksiTiketRepository.
 */
class TransaksiTiketRepository extends BaseRepository implements TransaksiTiketRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param TransaksiTiket $model
     */
    public function __construct(TransaksiTiket $model)
    {
        parent::__construct($model);
    }

    public function getTransaksiTiketAll()
    {
        return $this->model->all();
    }

    public function getTransaksiTiketByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getTransaksiTiketWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createTransaksiTiket($data)
    {
        return $this->model->create($data);
    }

    public function updateTransaksiTiket($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteTransaksiTiket($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
