#Laravel 5 Foundation 5 Starter [![ProjectStatus](http://stillmaintained.com/bazzdream/Laravel-5-Foundation-5-Starter.png)](http://stillmaintained.com/bazzdream/Laravel-5-Foundation-5-Starter)
[![Build Status](https://api.travis-ci.org/bazzdream/Laravel-5-Foundation-5-Starter.png)](https://travis-ci.org/bazzdream/Laravel-5-Foundation-5-Starter)

Laravel 5 Foundation 5 Starter is a sample application for beginning development with Laravel 5 for the backend and Zurb Foundation 5 for the frontend.

## Features (for now)

* Foundation 5.x
* Custom Error Pages
	* 403 for forbidden page accesses
	* 404 for not found pages
	* 500 for internal server errors
* Asset Management
    * Gulp tasks for merging and minifying assets
* Packages included:
	* [IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
    * [Intervention Image](http://image.intervention.io/)
	* [Generators](https://github.com/laracasts/Laravel-5-Generators-Extended)
    * [Former for L5](https://github.com/formers/former/tree/4.0)

## Issues
See [github issue list](https://github.com/bazzdream/Laravel-5-Foundation-5-Starter/issues) for current list.

## Recommendations
I recommend that you use Gulp to compile and minify your assets. See the /gulpfile.js for a demo.

-----

##Requirements

	PHP >= 5.4.0
	MCrypt PHP Extension

Installation instructions for the mcrypt extension are available [here](http://php.net/manual/en/mcrypt.installation.php).

##How to install
### Step 1: Get the code
#### Option 1: Git Clone

```bash
$ git clone git://github.com/bazzdream/Laravel-5-Foundation-5-Starter.git laravel
```

#### Option 2: Download the repository

    https://github.com/bazzdream/Laravel-5-Foundation-5-Starter/archive/master.zip

### Step 2: Use Composer to install dependencies
#### Option 1: Composer is not installed globally

```bash
$ cd laravel
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar install
```

#### Option 2: Composer is installed globally

```bash
$ cd laravel
$ composer install
```

If you haven't already, you might want to make [composer be installed globally](http://andrewelkins.com/programming/php/setting-up-composer-globally-for-laravel-4/) for future ease of use.

Some packages used to preprocess and minify assests are required on the development environment.

When you deploy your project on a production environment you will want to upload the ***composer.lock*** file used on the development environment and only run `php composer.phar install` on the production server.

This will skip the development packages and ensure the version of the packages installed on the production server match those you developed on.

!!!NEVER!!! run `composer update` on your production server.

### Step 3: Use Bower and NPM to install the frontend dependencies

```bash
$ npm install
$ bower install
```

This is required to get the latest Foundation 5 framework and other dependencies right in your project.
The Zurb Foundation library and other bower components are located ***resources/assets/bower*** as defined in ***.bowerrc***.

### Step 4: Configure Environment

Duplicate the ***.env.example*** and rename to ***.env*** to configure your environment to your needs.
Also this new file will not be pushed to your repo as you can see in ***.gitignore***.

### Step 5: Migrate Database/Tables

Run this command to create the default Users table:

```bash
$ php artisan migrate
```

### Step 6: Set Encryption Key

You can use artisan to do this

```bash
$ php artisan key:generate
```

### Step 7: Make sure /storage is writable by your web server.

If permissions are set correctly:

```bash
$ chmod -R 775 storage
```

Should work, if not try

```bash
$ chmod -R 777 storage
```

-----
## Application Structure

The structure of this starter site is the same as default Laravel 5.

## Asset Management

With the use of Gulp and Laravel 5 elixir the automation of tasks is like magic.
See ***gulpfile.js*** to get an overview where the Gulp task runner will handle our assets after running:

```bash
$ gulp && gulp watch
```

This will minify and merge our assets. Cool, huh?

### Development

For ease of development you'll want to enable a couple useful packages. This requires editing the `config/app.php` file.

```php
'providers' => [
    [...]
    /* Uncomment for use in development */
    //  'Laracasts\Generators\GeneratorsServiceProvider', // Generators
    //  'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider', // IDE Helpers
],
```
Uncomment the Generators and IDE Helpers. Then you'll want to run a composer update with the dev flag.

```bash
$ php composer update --dev
```
This adds the generators and ide helpers.
To make it build the ide helpers automatically the post-update-cmd in `composer.json` is modified like this:

```json
"post-update-cmd": [
	"php artisan ide-helper:generate",
	"php artisan optimize"
]
```

### Production Launch

By default debugging is enabled. Before you go to production you should disable debugging in `config/app.php`

```
    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),
```

## Troubleshooting

## Composer asking for login / password

Try using this with doing the install instead.

```bash
$ composer install --dev --prefer-source --no-interaction
```

## License

This is free software distributed under the terms of the MIT license

## Additional information

Inspired by [Laravel-4-Bootstrap-Starter-Site](https://github.com/andrewelkins/Laravel-4-Bootstrap-Starter-Site)

Any questions? Feel free to [contact me](http://twitter.com/mett_wurst).
