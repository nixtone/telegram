<?php

namespace App\Services;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class TelegramService extends WebhookHandler
{
    public function hello($message) {
        // $this->chat()->html('test2')->send();
        // $this->chat()->sendMessage($message)->send();
        $this->reply('testHello: '.$message);
    }
}
