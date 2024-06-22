<?php

namespace App\Repositories\Eloquent;

use App\Models\Guest;
use App\Repositories\GuestRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class GuestRepository.
 */
class GuestRepository extends BaseRepository implements GuestRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Guest $model
     */
    public function __construct(Guest $model)
    {
        parent::__construct($model);
    }

    /**
     * The function `getGuestAll` retrieves all guest records from the model.
     *
     * @return The `getGuestAll()` function is returning all records from the model.
     */
    public function getGuestAll()
    {
        return $this->model->all();
    }

    /**
     * The function `getGuestByUuid` retrieves a guest record based on the provided UUID.
     *
     * @param uuid The `getGuestByUuid` function is used to retrieve a guest record from the database based
     * on the provided UUID (Universally Unique Identifier). The UUID is a unique identifier assigned to
     * each guest record in this context. When you call this function with a specific UUID, it will search
     * for and return
     *
     * @return The `getGuestByUuid` function is returning the guest model with the specified UUID.
     */
    public function getGuestByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    /**
     * The function `getGuestWhere` retrieves guest data based on a specified column and value.
     *
     * @param column The `column` parameter in the `getGuestWhere` function represents the column name in
     * the database table that you want to use for filtering the results.
     * @param value The `value` parameter in the `getGuestWhere` function is the value that you want to
     * search for in the specified column. This value will be used as a filter criteria to retrieve the
     * guest data from the database based on the specified column.
     *
     * @return The function `getGuestWhere` returns the result of querying the model where the specified
     * column matches the specified value. It returns a collection of guest records that meet the specified
     * criteria.
     */
    public function getGuestWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    /**
     * The function creates a new guest record using the provided data.
     *
     * @param data The `` parameter in the `createGuest` function likely contains the information
     * needed to create a new guest entry in the database. This data could include details such as the
     * guest's name, email, phone number, address, and any other relevant information required for creating
     * a guest record.
     *
     * @return The `createGuest` function is returning the result of creating a new guest record in the
     * database using the data provided as input.
     */
    public function createGuest($data)
    {
        return $this->model->create($data);
    }

    /**
     * The function `updateGuest` updates a guest record in the database based on the provided data and
     * UUID.
     *
     * @param data The `` parameter in the `updateGuest` function likely contains an array of
     * key-value pairs representing the data that you want to update for a guest in your database. This
     * data could include fields such as name, email, address, or any other information related to the
     * guest.
     * @param uuid The `uuid` parameter in the `updateGuest` function is a unique identifier for the guest
     * that you want to update in the database. It is used to locate the specific guest record that needs
     * to be updated.
     *
     * @return The `updateGuest` function is returning the result of updating the guest record in the
     * database with the provided data based on the UUID.
     */
    public function updateGuest($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    /**
     * This PHP function deletes a guest record from the database based on the provided UUID.
     *
     * @param uuid The `uuid` parameter in the `deleteGuest` function is a unique identifier for the guest
     * that you want to delete from the database. The function uses this `uuid` to locate and delete the
     * corresponding guest record from the database.
     *
     * @return The `deleteGuest` function is returning the result of deleting a record from the model where
     * the `uuid` column matches the provided `` value.
     */
    public function deleteGuest($uuid)
    {
        return $this->model->find($uuid)->delete();
    }

    public function deleteGuestWhere($column, $value)
    {
        return $this->model->where($column, $value)->delete();
    }
}
