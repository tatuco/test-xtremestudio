<?php

namespace App\Mail;

use App\Core\EmailService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkPackMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $from;
    public $to;
    public $view;
    public $title;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $from, $to, $view, $title = 'Plazfer', $subject = 'Mensaje Informativo. Plazfer')
    {
        $this->data = $data;
        $this->from = $from;
        $this->to = $to;
        $this->view = $view;
        $this->title = $title;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      /*  $address = 'janeexampexample@example.com';
        $subject = 'This is a demo!';
        $name = 'Jane Doe';*/
      //  $resp = EmailService::send(["url" => 'https://yoplanifico-cli.herokuapp.com/workpack-invited?token='.$token.'&id='.$request->detention_id.'&user='.$user->id.'&email='.$it], env('MAIL_USERNAME'), $it, 'emails.click_workpack', 'Plazfer', 'WorkPack ' . $d->name);
       // echo $this->to." ".$this->from;
        return $this->view($this->view)
            ->from($this->from, $this->title)
            ->to($this->to)
            ->subject($this->subject)
            ->with($this->data);
    }
}
