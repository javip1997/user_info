

Installation

Follow these steps to get the project up and running on your local machine.

Clone the repository: git clone <repository_url>
   
cd <project_directory>

Install Composer dependencies: composer install

Migrate database tables: php artisan migrate

Seed the database : php artisan migrate:fresh --seed

Usage

Describe how to use the project once it's installed. Include examples or command snippets if applicable.
Contributing

Explain how others can contribute to the project. Include guidelines for pull requests and code reviews.
License

Specify the project's license (e.g., MIT, Apache 2.0) and include any necessary disclaimers or credits.
Support

Provide contact information or links to documentation for getting support with the project.Install

After Clone Install composer in root directory using "composer install" command
Then Use php artisan migrate command to create tables
use php artisan migrate:fresh --seed command to seed the db
