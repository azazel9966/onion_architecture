<?php

use Infrastructure\Persistence\UserRepository;
use External\Http\UserController;
use Application\UseCase\CreateUserUseCase;


// Load the database configuration
require 'config/database.php';
require 'config/DatabaseConnection.php';

$databaseConnection = DatabaseConnection::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
$pdo = $databaseConnection->getPDO();

// Create instances of your classes and inject the PDO instance
$userRepository = new UserRepository($pdo);
$createUserUseCase = new CreateUserUseCase($userRepository);
$userController = new UserController($createUserUseCase);
