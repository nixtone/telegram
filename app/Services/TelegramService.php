<?php

namespace App\Services;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class TelegramService extends WebhookHandler
{
    public function hello($message) {
        $this->reply('test hello 1: '.$message);
    }
}
