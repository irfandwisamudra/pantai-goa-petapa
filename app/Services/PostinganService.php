<?php

namespace App\Services;

use App\Models\Postingan;
use App\Repositories\Eloquent\PostinganRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class PostinganService.
 */
class PostinganService
{
    protected $postinganRepository;

    public function __construct()
    {
        $this->postinganRepository = new PostinganRepository(new Postingan());
    }

    public function getPostinganAll()
    {
        return $this->postinganRepository->getPostinganAll();
    }

    public function getPostinganByUuid($uuid)
    {
        return $this->postinganRepository->getPostinganByUuid($uuid);
    }

    public function getPostinganWhere($column, $value)
    {
        return $this->postinganRepository->getPostinganWhere($column, $value);
    }

    public function createPostingan($data)
    {
        if ($data['thumbnail']) {
            $thumbnail = $data['thumbnail'];
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $path = Storage::putFileAs('public/images/postingan/thumbnails', $thumbnail, $thumbnailName);
            $data['thumbnail'] = $path;
        }

        return $this->postinganRepository->createPostingan($data);
    }

    public function updatePostingan($data, $uuid)
    {
        if ($data['thumbnail']) {
            $postingan = $this->postinganRepository->getPostinganByUuid($uuid);
            Storage::delete($postingan->thumbnail);
            $thumbnail = $data['thumbnail'];
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $path = Storage::putFileAs('public/images/postingan/thumbnails', $thumbnail, $thumbnailName);
            $data['thumbnail'] = $path;
        }

        return $this->postinganRepository->updatePostingan($data, $uuid);
    }
    public function deletePostingan($uuid)
    {
        $postingan = $this->getPostinganByUuid($uuid);

        if (!$postingan->hasConstraints()) {
            Storage::delete($postingan->thumbnail);
            return $this->postinganRepository->deletePostingan($uuid);
        }

        throw new \Exception("Data tidak bisa dihapus! Data masih memiliki relasi dengan data lain.");
    }
}
