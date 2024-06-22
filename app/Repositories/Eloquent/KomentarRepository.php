<?php

namespace App\Repositories\Eloquent;

use App\Models\Komentar;
use App\Repositories\KomentarRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class KomentarRepository.
 */
class KomentarRepository extends BaseRepository implements KomentarRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Komentar $model
     */
    public function __construct(Komentar $model)
    {
        parent::__construct($model);
    }

    public function getKomentarAll()
    {
        return $this->model->all();
    }

    public function getKomentarByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getKomentarWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createKomentar($data)
    {
        return $this->model->create($data);
    }

    public function updateKomentar($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteKomentar($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
