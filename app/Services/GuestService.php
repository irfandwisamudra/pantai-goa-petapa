<?php

namespace App\Services;

use App\Models\Guest;
use App\Repositories\Eloquent\GuestRepository;

/**
 * Class GuestService.
 */
class GuestService
{
    protected $guestRepository;

    /**
     * GuestService constructor.
     */
    public function __construct()
    {
        $this->guestRepository = new GuestRepository(new Guest());
    }

    /**
     * The function `getGuestAll` retrieves all guest data from the guest repository.
     *
     * @return The `getGuestAll()` method is being called on the `guestRepository` object and the result of
     * that method call is being returned.
     */
    public function getGuestAll()
    {
        return $this->guestRepository->getGuestAll();
    }

    /**
     * The function `getGuestByUuid` retrieves a guest by their UUID from the guest repository.
     *
     * @param uuid The `getGuestByUuid` function is a method that retrieves a guest based on their unique
     * identifier, which is referred to as the UUID (Universally Unique Identifier). The UUID is a 128-bit
     * number represented as a hexadecimal string and is used to uniquely identify entities in a system.
     * When you
     *
     * @return The `getGuestByUuid` method is being called on the `guestRepository` object with the
     * `` parameter, and the result of this method call is being returned.
     */
    public function getGuestByUuid($uuid)
    {
        return $this->guestRepository->getGuestByUuid($uuid);
    }

    /**
     * This PHP function retrieves a guest based on a specified column and value.
     *
     * @param column The "column" parameter in the `getGuestWhere` function is used to specify the column
     * name in the database table on which you want to apply the condition for fetching the guest data.
     * @param value The value parameter is the value that you want to search for in the specified column.
     * When calling the getGuestWhere method, you provide the column name and the value you are looking for
     * in that column. The method will then search for guests where the specified column matches the
     * provided value.
     *
     * @return The `getGuestWhere` method is being called on the `guestRepository` object with the provided
     * `` and `` parameters, and the result of this method call is being returned.
     */
    public function getGuestWhere($column, $value)
    {
        return $this->guestRepository->getGuestWhere($column, $value);
    }

    /**
     * The function creates a guest using the data provided.
     *
     * @param data The `createGuest` function takes a parameter named ``, which likely contains the
     * information needed to create a new guest entry. This data could include details such as the
     * guest's name, contact information, and any other relevant information required for creating a
     * guest record.
     *
     * @return The `createGuest` method is being called on the `guestRepository` object with the ``
     * parameter, and the result of this method call is being returned.
     */
    public function createGuest($data)
    {
        return $this->guestRepository->createGuest($data);
    }

    /**
     * The function `updateGuest` updates a guest record in the database using the provided data and UUID.
     *
     * @param data The `data` parameter in the `updateGuest` function likely refers to the information or
     * details that need to be updated for a guest. This could include fields such as the guest's name,
     * contact information, reservation details, or any other relevant information associated with the
     * guest record.
     * @param uuid The `uuid` parameter in the `updateGuest` function is a unique identifier for the guest
     * that you want to update. It is used to specify which guest's information should be updated in the
     * database.
     *
     * @return The `updateGuest` method is returning the result of calling the `updateGuest` method on the
     * `guestRepository` object with the provided `` and `` parameters.
     */
    public function updateGuest($data, $uuid)
    {
        return $this->guestRepository->updateGuest($data, $uuid);
    }

    /**
     * The function `deleteGuest` deletes a guest record based on the provided UUID.
     *
     * @param uuid The `deleteGuest` function takes a parameter called ``, which is likely a unique
     * identifier for the guest that you want to delete from the guest repository. This UUID is used to
     * identify the specific guest record that needs to be deleted from the repository.
     *
     * @return The `deleteGuest` method from the `guestRepository` is being called with the ``
     * parameter, and the return value of this method is being returned by the `deleteGuest` function.
     */
    public function deleteGuest($uuid)
    {
        return $this->guestRepository->deleteGuest($uuid);
    }

    public function deleteGuestWhere($column, $value)
    {
        return $this->guestRepository->deleteGuestWhere($column, $value);
    }
}
