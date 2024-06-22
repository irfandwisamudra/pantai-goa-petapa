<?php

namespace App\Repositories\Eloquent;

use App\Models\MediaSosial;
use App\Repositories\MediaSosialRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class MediaSosialRepository.
 */
class MediaSosialRepository extends BaseRepository implements MediaSosialRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param MediaSosial $model
     */
    public function __construct(MediaSosial $model)
    {
        parent::__construct($model);
    }

    public function getMediaSosialAll()
    {
        return $this->model->all();
    }

    public function getMediaSosialByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    public function getMediaSosialWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function createMediaSosial($data)
    {
        return $this->model->create($data);
    }

    public function updateMediaSosial($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    public function deleteMediaSosial($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
