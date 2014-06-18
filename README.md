Easy to use HubSpot API in Laravel 4
===================

PHP HubSpot API package for [Laravel 4](http://laravel.com/)

Most of the hard-working code is modified classes from [HubSpot/haPiHP](https://github.com/HubSpot/haPiHP).

## Setup

In composer.json:

```
"require": {
	"fungku/laravel-hubspot": "1.1.*"
}
```
then run `composer install` or `composer update`

Open `app/config/app.php` and add this to the providers array:

```
'Fungku\HubSpot\HubSpotServiceProvider',
```

Put your HubSpot API key in `/vendor/fungku/hubspot/src/config/api.php`

or set an environment variable `HUBSPOT_APIKEY`

## Examples

### Contacts:

```php
$contacts = HubSpot::contacts();

// Get 100 contacts
$contacts->get_all_contacts(array('count'=>100));

// Get a contact by email address
$contacts->get_contact_by_email('example@somedomain.com');
```

### Lists

```php
$lists = HubSpot::lists();

// Get 20 lists
$lists->get_lists(array('count'=>20));
```
