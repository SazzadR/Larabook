<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class SendQueuedEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    private $emailData;

    /**
     * Create a new job instance.
     *
     * @param $emailData
     */
    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Execute the job.
     *
     * @param Mailer $mailer
     */
    public function handle(Mailer $mailer)
    {
        $data = $this->emailData;

        $mailer->send('email.template', $data, function ($message) use ($data) {
            $message->from($this->emailData['from'], 'Larabook');
            $message->to($this->emailData['to']);
            $message->subject($this->emailData['subject']);
        });
    }
}
