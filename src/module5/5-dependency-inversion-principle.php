<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/28/21
 * Time: 9:19 PM
 */

class Mailer
{

}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

// Refactored

interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {

    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {

    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}