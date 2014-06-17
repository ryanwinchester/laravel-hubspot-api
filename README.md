Easy to use HubSpot API in Laravel 4
===================

PHP HubSpot API package for [Laravel 4](http://laravel.com/)

Most of the hard-working code is modified classes from [HubSpot/haPiHP](https://github.com/HubSpot/haPiHP).

## Setup

In composer.json:

```
"require": {
	"fungku/hubspot": "dev-master"
}
```
then run `composer install` or `composer update`

Open `app/config/app.php` and add this to the providers array:

```
'Fungku\HubSpot\HubSpotServiceProvider',
```

Put your HubSpot API key in `/vendor/fungku/hubspot/src/config/api.php`

## Examples

### Contacts:

```php
$contacts = HubSpot::contacts();

// Get 100 contacts
$contacts->all(array('count'=>100));

// Get a contact by email address
$contacts->findByEmail('example@somedomain.com');
```

### Lists

```php
$lists = HubSpot::lists();

// Get 20 lists
$lists->all(array('count'=>20));
```
