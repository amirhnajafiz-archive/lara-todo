# Lara-Todo

This is a course that I took at Udmey, to create a website with Laravel and Vue.js

## Start
First we need to download and setup <b>Composer</b>. After that we setup the project:
```shell
composer create-project laravel/laravel TodoList
```

After that we need to require the laravel ui:
```shell
composer require laravel/ui
```

And for the Vue we need to install artisan vue:
```shell
php artisan ui vue
```

After that open the <b>.env</b> file and set your database information init. Like database name, server, port ....

### Note
If you got the error "<i>No Application Encryption Key Has Been Specified</i>" just run the command bellow:
```shell
php artisan key:generate
```
Before using Laravel's encrypter, you must set a key option in your config/app.php configuration file.<br />
Click [here](https://laravel.com/docs/7.x/encryption#configuration) for more.