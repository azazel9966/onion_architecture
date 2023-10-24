Directory Structure:

- config/
    - DatabaseConnection.php
- src/
    - Application/
        - UseCase/
            - CreateUserUseCaseInterface.php
            - CreateUserUseCase.php
        - User/
            - User.php
    - Domain/
        - User/
            - User.php
            - UserRepositoryInterface.php
    - External/
        - Http/
            - UserController.php
    - Infrastructure/
        - Persistence/
            - UserRepository.php
- tests/
    - Application/
        - UseCase/
            - CreateUserUseCaseTest.php
    - Infrastructure/
        - Persistence/
            - UserRepositoryTest.php

