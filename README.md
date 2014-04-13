laravel-hubspot-api
===================

PHP HubSpot API wrapper for Laravel 4

Uses [HubSpot/haPiHP](https://github.com/HubSpot/haPiHP)

## Setup

Put your HubSpot API key in `src/config/api.php`

## Examples

### Get a contact by email address:

```php
$contacts = HubSpot::contacts();

$contacts->findByEmail('example@somedomain.com');
```
