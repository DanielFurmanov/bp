<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {login}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a user';

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
     * @return mixed
     */
    public function handle()
    {
        // todo add validation
        $login = $this->argument('login');
        $email = $this->ask('Provide user email');
        $password = $this->secret('What is the password?');

        $user = new User();
        $user->name = $login;
        $user->password = Hash::make($password);
        $user->email = $email;

        if (!$user->save()) {
            // todo add reason
            $this->error('Cant save the user!');
            die();
        }

        $this->info('User created');
    }
}
