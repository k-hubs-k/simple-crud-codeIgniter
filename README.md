# Simple CRUD

Discovering [CodeIgniter](https://codeigniter.com/) by doing simple CRUD operations

# My configurations

- **PHP:** PHP 8.2.23 (cli) (built: Aug 27 2024 15:32:20) (NTS gcc x86_64)
- **MySQL:** mysql Ver 8.0.39 for Linux on x86_64 (Source distribution)
- **Composer:** Composer version 2.7.9 2024-09-04 14:43:28

# Run

- Initialize the Database by executing requests in `app/Database/initialize.sql`
- Add or edit these rows in .env file:

  ```
  CI_ENVIRONMENT = development

  database.default.hostname = localhost
  database.default.database = CodeIgniter
  database.default.username = root
  database.default.password = <your-mysql-password>
  database.default.DBDriver = MySQLi
  database.default.DBPrefix =
  database.default.port = 3306
  ```

# Serve

`php spark serve` to launch it on port 8080
