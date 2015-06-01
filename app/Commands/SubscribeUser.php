<?php namespace App\Commands;

use App\Subscriber;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesCommands;

class SubscribeUser extends Command implements SelfHandling
{

    use DispatchesCommands;

    protected $email;

    /**
     * Create a new command instance.
     *
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        Subscriber::create(['email' => $this->email]);
        $this->dispatch(new NotifyNetworks($this->email, Subscriber::count()));
    }
}