<?php

namespace Infrastructure\Persistence;

use Domain\User\User;
use Domain\User\UserRepositoryInterface;
use \PDO;

class UserRepository implements UserRepositoryInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @inheritDoc
     */
    public function findById(int $userId): ?User
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    public function findByUsername(string $username): ?User
    {
        // TODO: Implement findByUsername() method.
    }

    /**
     * @inheritDoc
     */
    public function findByEmail(string $email): ?User
    {
        // TODO: Implement findByEmail() method.
    }

    /**
     * @inheritDoc
     */
    public function save(User $user)
    {
        // TODO: Implement save() method.
        $stmt = $this->pdo->prepare("INSERT INTO users (username, email) VALUES (?, ?)");

        $stmt->execute([$user->getUsername(), $user->getEmail()]);
    }

    /**
     * @inheritDoc
     */
    public function delete(User $user)
    {
        // TODO: Implement delete() method.
    }
}