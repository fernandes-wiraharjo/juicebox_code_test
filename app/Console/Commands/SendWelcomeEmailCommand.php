<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Console\Command;

class SendWelcomeEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:welcome-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::first();
        SendWelcomeEmail::dispatch($user);
    }
}
