<?php

namespace App\Services;

interface NewsletterInter 
{
    public function subscribe(string $email, string $list = null);
}