# Tasks for Today Management System

## Setup

1. Create a new CodeIgniter 4 project, then copy the `app/` folder from this submission into it.
2. Create a MySQL database, for example `tasks_today`.
3. Set the database connection in `.env`:

```ini
database.default.hostname = localhost
database.default.database = tasks_today
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

4. Run the database migration and seed data:

```bash
php spark migrate
php spark db:seed DemoDataSeeder
```

5. Start the server with `php spark serve`, then visit:

- `/` for today's tasks
- `/tasks` for all tasks
- `/profile` for the demo user
- `/about` for developer information

The seeder creates eight tasks across several dates (including the current date) and exactly one demo user.
