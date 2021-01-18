<?php


namespace Pretzel\Commands;

use Telegram\Bot\Commands\Command;

class HelloCommand extends Command
{
    protected $name = 'hello';
    protected $pattern = '{name}?';

    public function handle()
    {
        $arguments = collect($this->arguments);

        $this->replyWithMessage([
            'text' => sprintf(
                'Hello %s!',
                $arguments->get('name', 'World')
            )
        ]);
    }
}
