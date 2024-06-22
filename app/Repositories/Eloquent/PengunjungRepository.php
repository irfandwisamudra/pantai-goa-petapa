<?php

namespace App\Repositories\Eloquent;

use App\Models\Pengunjung;
use App\Repositories\PengunjungRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class PengunjungRepository.
 */
class PengunjungRepository extends BaseRepository implements PengunjungRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Pengunjung $model
     */
    public function __construct(Pengunjung $model)
    {
        parent::__construct($model);
    }

    /**
     * This PHP function retrieves all records of visitors from the database.
     *
     * @return All the records from the "pengunjung" table in the database are being returned.
     */
    public function getPengunjungAll()
    {
        return $this->model->latest()->get();
    }

    /**
     * This PHP function retrieves a visitor record based on a given UUID.
     *
     * @param uuid The `getPengunjungByUuid` function is used to retrieve a record from the model based
     * on the provided UUID. The UUID is a unique identifier for the record you want to retrieve. When
     * you call this function, you pass the UUID of the record you are looking for as a parameter
     *
     * @return The function `getPengunjungByUuid` is returning the result of finding a record in the
     * model by the provided UUID.
     */
    public function getPengunjungByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    /**
     * The function `getPengunjungWhere` retrieves data from the model based on a specified column and
     * value.
     *
     * @param column The `column` parameter in the `getPengunjungWhere` function is used to specify the
     * column in the database table on which you want to apply the condition for filtering the results.
     * @param value The `` parameter in the `getPengunjungWhere` function represents the value that
     * you want to search for in the specified column. When you call this function, you provide the column
     * name and the value you are looking for, and it will return a collection of records where the
     * specified
     *
     * @return The function `getPengunjungWhere` returns the result of querying the model where the
     * specified column matches the specified value. It returns a collection of records that meet the
     * specified criteria.
     */
    public function getPengunjungWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    /**
     * The function creates a new record in the database using the provided data.
     *
     * @param data The `` parameter in the `createPengunjung` function likely refers to an array of
     * data that contains the information needed to create a new "Pengunjung" (visitor or guest) in the
     * system. This data could include details such as the visitor's name, contact information
     *
     * @return The `createPengunjung` function is returning the result of creating a new record in the
     * database using the `create` method of the model with the provided ``.
     */
    public function createPengunjung($data)
    {
        return $this->model->create($data);
    }

    /**
     * The function `updatePengunjung` updates a record in the database table based on the provided UUID.
     *
     * @param data The `` parameter in the `updatePengunjung` function represents the new values that
     * you want to update in the database for a specific record identified by the UUID. It typically
     * contains key-value pairs where the keys correspond to the column names in the database table and the
     * values are the new
     * @param uuid A UUID (Universally Unique Identifier) is a 128-bit number used to uniquely identify
     * information. It is typically represented as a 32-character hexadecimal string, such as
     * "550e8400-e29b-41d4-a716-446655440000". In the context of the `
     *
     * @return The `updatePengunjung` function returns the result of updating the record in the database
     * table where the `uuid` column matches the provided `` value with the data provided in the
     * `` array.
     */
    public function updatePengunjung($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    /**
     * This PHP function deletes a record from the database based on the provided UUID.
     *
     * @param uuid The `uuid` parameter in the `deletePengunjung` function is used to uniquely identify the
     * record of the `Pengunjung` model that needs to be deleted from the database. The function retrieves
     * the record based on this `uuid` and then deletes it from the database.
     *
     * @return The `deletePengunjung` function is returning the result of deleting a record from the model
     * based on the provided UUID.
     */
    public function deletePengunjung($uuid)
    {
        return $this->model->find($uuid)->delete();
    }
}
