AlexMultisiteBundle PHPUnit Tests
=================================
The unit tests for AlexMultisiteBundle are implemented using the PHPUnit testing framework and require PHPUnit to run.

Installation
------------
PHPUnit is already declared inside the `require-dev` section of the **composer.json** file of this project.
The only thing you need to do is to run the next command, to install all packages listed, including `require-dev`:

	composer install
	
Running tests
-------------
To execute all tests, run the next command:

	vendor/bin/phpunit