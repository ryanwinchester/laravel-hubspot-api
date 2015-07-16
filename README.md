Easy to use Hubspot API for Laravel 5.1
===================

[![Latest Stable Version](https://poser.pugx.org/fungku/laravel-hubspot/v/stable.svg)](https://packagist.org/packages/fungku/laravel-hubspot)
[![Total Downloads](https://poser.pugx.org/fungku/laravel-hubspot/downloads.svg)](https://packagist.org/packages/fungku/laravel-hubspot)
[![Latest Unstable Version](https://poser.pugx.org/fungku/laravel-hubspot/v/unstable.svg)](https://packagist.org/packages/fungku/laravel-hubspot)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fungku/laravel-hubspot-api/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fungku/laravel-hubspot-api/?branch=master)
[![License](https://poser.pugx.org/fungku/laravel-hubspot/license.svg)](https://packagist.org/packages/fungku/laravel-hubspot)

PHP Hubspot API package for [Laravel 5.1](http://laravel.com/)

## Setup

In composer.json:

```json
"require": {
	"fungku/laravel-hubspot": "dev-develop@dev"
}
```

then run `composer install` or `composer update`

Open `config/app.php` and add this to the **providers** array:

```
Fungku\Hubspot\HubspotServiceProvider::class,
```

and this to your **aliases** array:

```
Fungku\Hubspot\Facades\Hubspot::class,
```

TO SET YOUR API KEY:

Add your api key to the `.env` file like: 

```
HUBSPOT_API_KEY=my-api-key
```

Publish the config file to edit it:

```bash
php artisan vendor:publish
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

