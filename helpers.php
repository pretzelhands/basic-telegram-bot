<?php

function telegram(): \Telegram\Bot\Api
{
    return new \Telegram\Bot\Api(
        env('TELEGRAM_BOT_TOKEN')
    );
}
