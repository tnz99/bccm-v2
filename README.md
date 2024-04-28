# Climate Change Project

## How to run the project for local development
**Note**: You can use the same docker file for production deployment.

### Prerequisite

- Following are the requirements to run this project.

    1. Docker Desktop
    2. Git

### Command to run the project

- if you are running the project for first time run:

    `docker-compose up --build`

    next, get into the docker container and run `composer install`

- else run 

    `docker-compose up`

###  How to access phpmyadmin

- You can access phpmyadmin dashboard by visiting at

    `http://localhost:8080`

Credentails to login to PhpMyAdmin
- `username: root`
- `password: root_password`

- You can change the values as per your requirement.

### How to access laravel project

- You can access laravel project at

    `http://localhost:8000`

## Static Code Analyzer

## Git Workflow

Use GitHub pull request to collobrate on new feature and fixes. 

## Git Branching

### Branch Naming Convention

`fullname/branch_type/<your_actual_branch_name>`

Example: `tenzintshomo/feature/login`

#### Branch Type
- `feature` -> for any new feature your are working on.

    For Example you could be working on login or dashboard.

- `fix` -> for any fix related to feature.

    For Example you could be working on on a fix for login or dashboard.
