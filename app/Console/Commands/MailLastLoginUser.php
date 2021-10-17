<?php

namespace App\Console\Commands;

use App\Mail\LastLoginUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailLastLoginUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:last-login-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail user who last logged in 7 days ago';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $limit = Carbon::now()->subDays(2);
        $users = User::where('lastLogin', '<' , $limit)->get();

        foreach($users as $key => $user) {
            Mail::to($user->email)->send(new LastLoginUser());
        }
    }
}
