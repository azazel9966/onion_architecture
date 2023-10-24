<?php

namespace Application\UseCase;

interface CreateUserUseCaseInterface
{
    public function execute(string $username, string $email);
}