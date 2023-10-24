<?php

namespace External\Http;

use Application\UseCase\CreateUserUseCaseInterface;

class UserController
{
    private CreateUserUseCaseInterface $createUserUseCase;

    public function __construct( CreateUserUseCaseInterface $createUserUseCase )
    {
        $this->createUserUseCase = $createUserUseCase;
    }

    public function createUser()
    {
        // Handle HTTP request, get data, and call the use case
        $username = $_POST['username'];
        $email = $_POST['email'];

        $this->createUserUseCase->execute($username, $email);
    }
}