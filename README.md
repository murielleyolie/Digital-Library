# Tpe_6 Bookstore

This is a PHP/MySQL bookstore project with frontend and backend separated into `frontend` and `backend` directories.

## What is included

- `backend/`: PHP controllers, models, config, and database connection
- `frontend/`: views, CSS, JS, images, and templates
- `database/biblio.sql`: SQL dump to recreate the database

## Requirements

- PHP 7.x or 8.x
- MySQL or MariaDB
- Apache (WAMP/XAMPP/other)

## Setup

1. Clone the repository.
2. Copy the project into your web root or configure your web server to serve the `Tpe_6` folder.
3. Import the SQL dump into MySQL:
   ```bash
   mysql -u root -p < database/biblio.sql
   ```
4. Update `backend/config/variables.inc.php` if your database credentials differ.
5. Open the app in your browser at:
   ```
   http://localhost/Tpe_6/
   ```

## Notes

- `variables.inc.php` now builds public URLs dynamically from the incoming request.
- `database/biblio.sql` contains the schema and initial data for the `biblio` database.
- Remove `backend/config/constants.php` if you want to keep only the portable config.
