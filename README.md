laravel-hubspot-api
===================

PHP HubSpot API wrapper for Laravel 4


Put your HubSpot API key in `src/config/api.php`

# Examples

get a Contact by email address:

    $contacts = HubSpot::contacts();
    
    $contacts->findByEmail('example@somedomain.com');
