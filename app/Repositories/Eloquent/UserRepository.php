<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * This PHP function retrieves all user records from the database.
     *
     * @return The `getUserAll()` function is returning all records from the model.
     */
    public function getUserAll()
    {
        return $this->model->latest()->get();
    }

    /**
     * The function `getUserByUuid` retrieves a user record based on the provided UUID.
     *
     * @param uuid The `getUserByUuid` function is used to retrieve a user record from the database based
     * on the provided UUID (Universally Unique Identifier). The UUID serves as a unique identifier for
     * each user record in the database. When you call this function with a specific UUID, it will query
     * the database using the
     *
     * @return The function `getUserByUuid` is returning the user with the specified UUID by querying the
     * model using the `find` method.
     */
    public function getUserByUuid($uuid)
    {
        return $this->model->find($uuid);
    }

    /**
     * The function `getUserWhere` retrieves records from the model based on a specified column and
     * value.
     *
     * @param column The `` parameter in the `getUserWhere` function represents the column name in
     * the database table that you want to use for filtering the query results.
     * @param value The `value` parameter in the `getUserWhere` function represents the value that you
     * want to search for in the specified column. This value will be used as a filter criteria to
     * retrieve the user data from the database based on the specified column.
     *
     * @return The function `getUserWhere` is returning the result of querying the model where the
     * specified column matches the specified value. It returns a collection of results that match the
     * query criteria.
     */
    public function getUserWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    /**
     * The function `createUser` creates a new user using the provided data.
     *
     * @param data The `` parameter in the `createUser` function likely contains the information
     * needed to create a new user. This could include data such as the user's name, email, password,
     * and any other relevant information required to create a user account.
     *
     * @return The `createUser` function is returning the result of creating a new user record in the
     * database using the data provided in the `` parameter.
     */
    public function createUser($data)
    {
        return $this->model->create($data);
    }

    /**
     * The updateUser function updates a user record in the database based on the provided data and
     * UUID.
     *
     * @param data The `` parameter in the `updateUser` function likely contains an array of
     * key-value pairs representing the data that you want to update for the user. For example, it
     * could include fields like name, email, age, etc., along with their new values.
     * @param uuid A universally unique identifier (UUID) is a 128-bit number used to uniquely identify
     * information in computer systems. It is typically represented as a string of 32 hexadecimal
     * characters separated by hyphens, such as "550e8400-e29b-41d4-a716-446655440
     *
     * @return The `updateUser` function is returning the result of updating the record in the database
     * table associated with the model where the 'uuid' column matches the provided `` value with
     * the data provided in the `` array.
     */
    public function updateUser($data, $uuid)
    {
        return $this->model->find($uuid)->update($data);
    }

    /**
     * This PHP function deletes a user record based on the provided UUID.
     *
     * @param uuid The `uuid` parameter in the `deleteUser` function is used to specify the unique
     * identifier of the user that you want to delete from the database. The function will locate the
     * user with the provided `uuid` and delete that user's record from the database.
     *
     * @return the result of deleting a user record from the database based on the provided UUID.
     */
    public function deleteUser($uuid)
    {
        return $this->model->find($uuid)->delete();
    }

    public function deleteUserWhere($column, $value)
    {
        return $this->model->where($column, $value)->delete();
    }
}
