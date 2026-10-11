# Tasks for Today

A CodeIgniter 4 task management app backed by MySQL.

## Setup

Configure the `database.default.*` values in `.env` for your local MySQL server. The default configuration uses the `tasks_today` database and the local XAMPP `root` account with no password.

Create the database and load the schema and sample records:

```sh
mysql -u root -e "CREATE DATABASE tasks_today CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci"
php spark migrate
php spark db:seed TaskManagementSeeder
```

The seeder adds eight tasks across multiple dates, including today, and one demo user.

## Pages

- `/` — today's tasks
- `/tasks` — all tasks ordered by date
- `/profile` — demo user profile
- `/about` — system information and developer

Run locally with `php spark serve`, or serve the `public` directory through Apache.
