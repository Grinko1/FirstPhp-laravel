<?php

namespace App\Services;
use \MailchimpMarketing\ApiClient;

class Newsletter implements NewsletterInter
{

    public function __construct ( ApiClient $client)
    {
        //
    }
    public function subscribe (string $email, string $list = null)
    {
        $list= config('services.mailchimp.lists.subscribers');
     

        return $this->client->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
    ]);
    }


}