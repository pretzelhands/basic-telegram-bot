<?php

require 'bootstrap.php';

$telegram = telegram();
$telegram->setWebhook(['url' => env('TELEGRAM_WEBHOOK')]);
$telegram->sendMessage([
    'chat_id' => env('ADMIN_CHAT_ID'),
    'text' => 'Successfully set up webhook'
]);
