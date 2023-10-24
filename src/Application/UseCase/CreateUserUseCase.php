<?php

namespace Application\UseCase;

use Domain\User\User;
use Domain\User\UserRepositoryInterface;

class CreateUserUseCase implements CreateUserUseCaseInterface
{
    private UserRepositoryInterface $userRepository;

    public function __construct( UserRepositoryInterface $userRepository )
    {
        $this->userRepository = $userRepository;
    }

    public function execute(string $username, string $email)
    {
        // Business logic to create a user
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);

        // Save the user to the repository
        $this->userRepository->save($user);
    }
}