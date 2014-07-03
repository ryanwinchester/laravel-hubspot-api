<?php

return array(
	
	/*
	|--------------------------------------------------------------------------
	| HubSpot API Key
	|--------------------------------------------------------------------------
	|
	| This is the API Key for your hubspot account. By default we look for an
	| environment variable. You can set these using dot files.
	| 
	| e.g. in .env.php in production or .env.local.php in local environment
	|
	*/
	
	'key' => getenv('HUBSPOT_APIKEY'),

	/*
	|--------------------------------------------------------------------------
	| HubSpot UserAgent
	|--------------------------------------------------------------------------
	|
	| HubSpot HaPiHP accepts a useragent string in the constructor so I let you
	| set it here in the config.
	|
	*/
	
	'useragent' => 'Default_user_agent',

);
