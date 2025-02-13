# laravel-from-scratch

From the Laravel from Scratch course - https://learning.oreilly.com/course/laravel-from-scratch/9781836640035/

# Useful Laravel commands

Run the vite hot reloading server: `npm run dev`

Make a controller with a class only: `php artisan make:controller {ControllerName}`

Make a controller with a class with standard resource methods: `php artisan make:controller {ControllerName} --resource`

- These need to be run at the root of the Laravel project (Might not be the root of the git repo)

Create a new component: `php artisan make:component {component-name}`

Create a new model: `php artisan make:model {ModelName}`

# Useful PostgreSQL setup commands

Start PostgreSQL server: `brew services start postgresql`

Check services that are running: `brew services list`

Log into the PostgreSQL shell: `psql postgres`

# Useful PostgreSQL commands

See all databases: `\list` or `\l`

See all users: `\du`

Exit the terminal: `\q`

Create a database: `psql -U {default_username} -d postgres` and then `CREATE DATABASE {database_name};`

Create a user with superuser access: `CREATE USER {username} WITH SUPERUSER PASSWORD '{password}';`

Give all privileges to database for user: `GRANT ALL PRIVILAGES ON DATABASE {database_name} TO {username}`

# Tinker commands for CRUD (Create, Read, Update, Delete)

Enter tinker: `php artisan tinker`

View a class: `App\Models\Job::all()`

Show the table schema: `Schema::getColumnListing('{name_of_table}')`

Use a class easily: `$job = App\Models\Job::class`

View a class after doing previous command: `$job::all()`

Add a record in the database: `$job::create(['title' => 'Job 1','description' => 'This is job one'])`

Find a record in the database: `$job::find(4)`

Update a record in the database: `$job::find(1)->update(['title' => 'Updated Job One'])`

Delete a record in the database: `$job::find(4)->delete()`

# Other useful commands

Run a migration: `php artisan migrate`

Create a migration file: `php artisan make:migration {migration_name(should use underscores)}`

Rollback migrations: `php artistan migrate:rollback`

# Useful info

Create props with @props(), with an array of the props inside. To reference it, use it as a normal attribute in the HTML element. However in the HTML if you need anything other than a string, using `:` before the attribute name to get the value.

# Useful docs

Laravel Naming Conventions: https://github.com/alexeymezenin/laravel-best-practices#follow-laravel-naming-conventions
