<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable{
    use Queueable, SerializesModels;

    protected $email;
    protected $title;
    protected $content;
    protected $name;
    protected $ip;

    public function __construct($email, $title, $content, $name, $ip){
        $this->email = $email;
        $this->title = $title;
        $this->content = $content;
        $this->name = $name;
        $this->ip = $ip;
    }

    public function build(){
        $this->replyTo($this->email);
        return $this->view('emails.contact')->with(['title' => $this->title, 'content' => $this->content, 'name' => $this->name, 'ip' => $this->ip]);
    }
}
