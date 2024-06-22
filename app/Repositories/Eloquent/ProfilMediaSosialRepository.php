<?php

namespace App\Repositories\Eloquent;

use App\Models\ProfilMediaSosial;
use App\Repositories\ProfilMediaSosialRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class ProfilMediaSosialRepository.
 */
class ProfilMediaSosialRepository extends BaseRepository implements ProfilMediaSosialRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param ProfilMediaSosial $model
     */
    public function __construct(ProfilMediaSosial $model)
    {
        parent::__construct($model);
    }

    public function getProfilMediaSosialAll()
    {
        return $this->model->all();
    }

    public function getProfilMediaSosialByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getProfilMediaSosialWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createProfilMediaSosial($data)
    {
        return $this->model->create($data);
    }

    public function updateProfilMediaSosial($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteProfilMediaSosial($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
