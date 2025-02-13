# laravel-from-scratch

From the Laravel from Scratch course - https://learning.oreilly.com/course/laravel-from-scratch/9781836640035/

# Commands to remember

Run the vite hot reloading server: `npm run dev`

Make a controller with a class only: `php artisan make:controller xController`

Make a controller with a class with standard resource methods: `php artisan make:controller TestController --resource`

- These need to be run at the root of the Laravel project (Might not be the root of the git repo)

Create a new component: `php artisan make:component x`

# Useful info

Create props with @props(), with an array of the props inside. To reference it, use it as a normal attribute in the HTML element. However in the HTML if you need anything other than a string, using `:` before the attribute name to get the value.

# Useful docs

Laravel Naming Conventions: https://github.com/alexeymezenin/laravel-best-practices#follow-laravel-naming-conventions
