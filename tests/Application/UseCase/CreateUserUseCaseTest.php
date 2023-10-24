<?php

use Application\UseCase\CreateUserUseCase;
use Domain\User\UserRepositoryInterface;
use PHPUnit\Framework\TestCase;

class CreateUserUseCaseTest extends TestCase
{
    public function testCreateUser()
    {
        // Arrange
        $userRepository = $this->createMock(UserRepositoryInterface::class);
        $createUserUseCase = new CreateUserUseCase($userRepository);

        $username = 'testuser';
        $email = 'test@example.com';

        // Assert that the save method will be called once with the provided user
        $userRepository->expects($this->once())
            ->method('save')
            ->with($this->callback(function ($user) use ($username, $email) {
                return $user->getUsername() === $username && $user->getEmail() === $email;
            }));

        // Act
        $createUserUseCase->execute($username, $email);
    }
}