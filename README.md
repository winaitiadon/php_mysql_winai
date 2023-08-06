# php_mysql_winai
=============
How to Deploy
=============

Use
$sudo -i

-Run the following command to clone the GitHub repository:

$git clone https://github.com/winaitiadon/php_mysql_winai
project directory:

$sudo chmod 777 -R myweb

$cd myweb
Deploy the Project with Docker Compose:

Run the following command to start the Docker Compose services:

$docker-compose up -d --build


=============
Topology
=============

a. Dockerfile:

The Dockerfile is used to create a custom PHP and Apache image.
FROM php:7.4-apache: This sets the base image to the official PHP 7.4 with Apache image.
RUN docker-php-ext-install mysqli: This installs the mysqli PHP extension required for MySQL database connectivity.
COPY mybooks /var/www/html: This copies the contents of the mybooks project folder into the container's web server directory.
EXPOSE 80: This exposes port 80 of the container (Apache port) to allow communication with the host machine.
CMD ["apache2-foreground"]: This specifies the command to run when the container starts, which starts the Apache server in the foreground.
b. docker-compose.yml:

The Docker Compose YAML file defines the services to be run as containers and their configurations.
The db service is configured with the MySQL 5.7 image and environment variables for setting up the MySQL database with the specified credentials and database name. The data is persisted on the host machine using a volume (db_data).
The web service builds the custom PHP and Apache image using the Dockerfile in the current context (the mybooks project folder). It depends on the db service to ensure the database is running before starting the web server.
The web service also maps port 8000 of the host to port 80 of the container, making the web application accessible on http://localhost:8000/myweb/
A custom network mybooks-network is created to connect the containers.
c. mybooks PHP scripts:

The main PHP scripts are index.php, edit.php, and add.php.
index.php: This script displays the list of books from the MySQL database in a table. It has buttons for editing and deleting books. The "Add a Book" button links to the add.php page.
edit.php: This script handles editing a book's details. It fetches book details from the database, allows editing, and updates the database with the changes.
add.php: This script handles adding a new book to the database. It takes input for the book name and description and inserts the new book into the database.
d. Database Connection:

The database connection settings in the PHP scripts are defined based on the MySQL service name (db) and the provided MySQL credentials (username: user, password: sm@rt).
With this setup, you have a Docker Compose environment running the Mybooks web application with a MySQL database, making it portable and easy to manage across different systems. The application allows you to view, add, edit, and delete books using a simple web interface.
