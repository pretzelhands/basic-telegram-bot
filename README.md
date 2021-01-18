# Telegram Base Bot in PHP

This bot demonstrates how to implement a basic Telegram chat bot in PHP, as [described in this article](https://pretzelhands.com/posts/build-a-telegram-bot-in-php).

## Requirements

To fully take advantage of this repository, the following dependencies should be met

* PHP 7.2+
* Installed [`beyondcode/expose`](https://github.com/beyondcode/expose)

## Getting started

To get started, adjust `composer.json` and add a `--subdomain=<YOUR_SUBDOMAIN>` option to the `dev` script.

Second, update the `WEBHOOK_URL` variable in `.env` to correspond to `<YOUR_SUBDOMAIN>.sharedwithexpose.com`.

Once that is settled, please gather a Telegram token from [@Botfather](https://t.me/botfather) on Telegram and add it to the provided `.env` file.
Then, your own Telegram chat ID using [@RawDataBot](https://t.me/RawDataBot) and insert it as well.

Finally, run the following things:

```bash
$ composer install
$ php setup.php
$ composer run dev
```

After running these commands you should have received a message from your bot stating that your webhook has been set up correctly.
You can now begin adding commands to your bot!
