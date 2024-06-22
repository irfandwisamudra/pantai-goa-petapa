<?php

namespace App\Repositories\Eloquent;

use App\Models\Profil;
use App\Repositories\ProfilRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class ProfilRepository.
 */
class ProfilRepository extends BaseRepository implements ProfilRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Profil $model
     */
    public function __construct(Profil $model)
    {
        parent::__construct($model);
    }

    public function getProfilAll()
    {
        return $this->model->all();
    }

    public function getProfilByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getProfilWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createProfil($data)
    {
        return $this->model->create($data);
    }

    public function updateProfil($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteProfil($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
