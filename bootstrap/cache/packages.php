<?php return array (
  'botman/botman' => 
  array (
    'providers' => 
    array (
      0 => 'BotMan\\BotMan\\BotManServiceProvider',
    ),
    'aliases' => 
    array (
      'BotMan' => 'BotMan\\BotMan\\Facades\\BotMan',
    ),
  ),
  'botman/driver-telegram' => 
  array (
    'providers' => 
    array (
      0 => 'BotMan\\Drivers\\Telegram\\Providers\\TelegramServiceProvider',
    ),
  ),
  'botman/driver-web' => 
  array (
    'providers' => 
    array (
      0 => 'BotMan\\Drivers\\Web\\Providers\\WebServiceProvider',
    ),
  ),
  'botman/studio-addons' => 
  array (
    'providers' => 
    array (
      0 => 'BotMan\\Studio\\Providers\\StudioServiceProvider',
      1 => 'BotMan\\Studio\\Providers\\RouteServiceProvider',
    ),
  ),
  'botman/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'BotMan\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'kingflamez/laravelrave' => 
  array (
    'providers' => 
    array (
      0 => 'KingFlamez\\Rave\\RaveServiceProvider',
    ),
    'aliases' => 
    array (
      'Rave' => 'KingFlamez\\Rave\\Facades\\Rave',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'maatwebsite/excel' => 
  array (
    'providers' => 
    array (
      0 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    ),
    'aliases' => 
    array (
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'unicodeveloper/laravel-paystack' => 
  array (
    'providers' => 
    array (
      0 => 'Unicodeveloper\\Paystack\\PaystackServiceProvider',
    ),
    'aliases' => 
    array (
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
    ),
  ),
);