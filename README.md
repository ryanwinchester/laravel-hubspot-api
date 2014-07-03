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

TO SET YOUR API KEY:

Run the following command: `$ php artisan config:publish fungku/laravel-hubspot`

This will generate a config file to: `app/config/packages/fungku/laravel-hubspot/api.php`

You can then update this file with your api key from HubSpot and set the user agent.

You could also set an environment variable, `HUBSPOT_APIKEY`



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
