<?php

namespace App\Repositories\Eloquent;

use App\Models\Transaksi;
use App\Repositories\TransaksiRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class TransaksiRepository.
 */
class TransaksiRepository extends BaseRepository implements TransaksiRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Transaksi $model
     */
    public function __construct(Transaksi $model)
    {
        parent::__construct($model);
    }

    public function getTransaksiAll()
    {
        return $this->model->with(['tiket', 'pengunjung'])->latest()->get();
    }

    public function getTransaksiByUuid($uuid)
    {
        return $this->model->with(['tiket', 'pengunjung'])->find($uuid);
    }

    public function getTransaksiWhere($column, $value)
    {
        return $this->model->where($column, $value)->latest()->get();
    }

    public function createTransaksi($data)
    {
        return $this->model->create($data);
    }

    public function updateTransaksi($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteTransaksi($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
