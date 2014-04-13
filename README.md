laravel-hubspot-api
===================

PHP HubSpot API wrapper for Laravel 4

Most of the code is from [HubSpot/haPiHP](https://github.com/HubSpot/haPiHP).

## Setup

```
"require": {
	"fungku/hubspot": "dev-master"
}
```

Open `app/config/app.php` and add this to the providers array:

```
'Fungku\HubSpotServiceProvider',
```

Put your HubSpot API key in `src/config/api.php`

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
