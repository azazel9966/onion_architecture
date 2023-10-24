<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Domain\User\User;
use Infrastructure\Persistence\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testSaveUser()
    {
        // Arrange
        $pdo = new \PDO('sqlite::memory:');
        $userRepository = new UserRepository($pdo);

        $user = new User();
        $user->setUsername('testuser');
        $user->setEmail('test@example.com');

        // Act
        $userRepository->save($user);

        // Assert
        // Implement assertions to check if the user was saved correctly in the database
    }
}