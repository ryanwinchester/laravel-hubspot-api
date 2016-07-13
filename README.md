Easy to use Hubspot API for Laravel 5.2
===================

[![Latest Stable Version](https://poser.pugx.org/ryanwinchester/laravel-hubspot/v/stable.svg)](https://packagist.org/packages/ryanwinchester/laravel-hubspot)
[![Total Downloads](https://poser.pugx.org/ryanwinchester/laravel-hubspot/downloads.svg)](https://packagist.org/packages/ryanwinchester/laravel-hubspot)
[![Latest Unstable Version](https://poser.pugx.org/ryanwinchester/laravel-hubspot/v/unstable.svg)](https://packagist.org/packages/ryanwinchester/laravel-hubspot)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ryanwinchester/laravel-hubspot-api/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ryanwinchester/laravel-hubspot-api/?branch=master)
[![License](https://poser.pugx.org/ryanwinchester/laravel-hubspot/license.svg)](https://packagist.org/packages/ryanwinchester/laravel-hubspot)

PHP Hubspot API package for [Laravel 5.2](http://laravel.com/)

## Setup

In composer.json:

```json
"require": {
	"ryanwinchester/laravel-hubspot-api": "dev-develop@dev"
}
```

then run `composer install` or `composer update`

Open `config/app.php` and add this to the **providers** array:

```
SevenShores\Hubspot\HubspotServiceProvider::class,
```

and this to your **aliases** array:

```
'Hubspot'   => SevenShores\Hubspot\Facades\Hubspot::class,
```

TO SET YOUR API KEY:

Add your api key to the `.env` file like:

```
HUBSPOT_SECRET=my-api-key
```

Publish the config file to edit it:

```bash
php artisan vendor:publish --tag="ryanwinchester/laravel-hubspot"
```

This will generate a config file to: `config/hubspot.php`

You can then update this file with your api key from Hubspot or use the `.env` file.


## Examples

### Contacts:

```php
// Get 100 contacts
$contacts = Hubspot::contacts()->all([
	'count' => 100
]);

// Get a contact by email address
$contact = Hubspot::contacts()->getByEmail('example@somedomain.com');

```

### Lists

```php
// Get 20 lists
$lists = Hubspot::lists()->all([
	'count' => 20
]);

```

