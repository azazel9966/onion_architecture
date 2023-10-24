<?php

namespace Domain\User;

interface UserRepositoryInterface
{
    /**
     * Find a user by their unique identifier (e.g., user ID).
     *
     * @param int $userId
     * @return User|null
     */
    public function findById( int $userId ): ?User;

    /**
     * Find a user by their username.
     *
     * @param string $username
     * @return User|null
     */
    public function findByUsername( string $username ): ?User;

    /**
     * Find a user by their email address.
     *
     * @param string $email
     * @return User|null
     */
    public function findByEmail( string $email ): ?User;

    /**
     * Save a user to the repository (e.g., persist it to a database).
     *
     * @param User $user
     */
    public function save( User $user );

    /**
     * Delete a user from the repository.
     *
     * @param User $user
     */
    public function delete( User $user );
}