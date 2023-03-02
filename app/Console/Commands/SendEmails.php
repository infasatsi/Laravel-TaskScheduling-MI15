<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    protected $signature = 'emails:send';

    protected $description = 'Send test email';


    public function handle()
    {
        Mail::raw('This is a test mail for Laravel task scheduling...', function ($message) {
            $message->to('scheduler@example.com');
            $message->subject('Task scheduling in Laravel');
        });
        $this->info('Email sent successfully!');
    }
}
