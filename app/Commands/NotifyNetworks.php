<?php namespace App\Commands;

use App\Commands\Command;

use GuzzleHttp\Client;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class NotifyNetworks extends Command implements SelfHandling, ShouldBeQueued
{

    use InteractsWithQueue, SerializesModels;

    protected $email;
    protected $count;

    /**
     * Create a new command instance.
     *
     * @param $email
     */
    public function __construct($email, $count)
    {
        $this->email = $email;
        $this->count = $count;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $this->notifySlack();
        $this->delete();
    }

    public function notifySlack()
    {
        $client = new Client;
        $data = array();
        $data['username'] = 'Guido Schmitz Bot';
        $data['text'] = "Nieuwe persoon ingeschreven voor de maillijst - {$this->email}. Nummer #{$this->count}!";

        $payload = json_encode($data);
        $client->post("https://hooks.slack.com/services/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", [
            'body' => $payload
        ]);
    }

}
