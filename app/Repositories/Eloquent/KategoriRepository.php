<?php

namespace App\Repositories\Eloquent;

use App\Models\Kategori;
use App\Repositories\KategoriRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class KategoriRepository.
 */
class KategoriRepository extends BaseRepository implements KategoriRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Kategori $model
     */
    public function __construct(Kategori $model)
    {
        parent::__construct($model);
    }

    public function getKategoriAll()
    {
        return $this->model->with('postingan')->latest()->get();
    }

    public function getKategoriByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getKategoriWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createKategori($data)
    {
        return $this->model->create($data);
    }

    public function updateKategori($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteKategori($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
