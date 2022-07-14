<?php
return array (
  'botman/driver-config' => 
  array (
    0 => 'stubs/telegram.php',
    1 => 'stubs/web.php',
  ),
  'botman/driver' => 
  array (
    0 => 'BotMan\\Drivers\\Telegram\\TelegramDriver',
    1 => 'BotMan\\Drivers\\Telegram\\TelegramAudioDriver',
    2 => 'BotMan\\Drivers\\Telegram\\TelegramFileDriver',
    3 => 'BotMan\\Drivers\\Telegram\\TelegramLocationDriver',
    4 => 'BotMan\\Drivers\\Telegram\\TelegramPhotoDriver',
    5 => 'BotMan\\Drivers\\Telegram\\TelegramVideoDriver',
    6 => 'BotMan\\Drivers\\Web\\WebDriver',
  ),
  'botman/commands' => 
  array (
    0 => 'BotMan\\Drivers\\Telegram\\Console\\Commands\\TelegramRegisterCommand',
  ),
);
