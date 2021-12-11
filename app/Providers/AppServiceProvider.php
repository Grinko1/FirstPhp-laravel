<?php

namespace App\Providers;

use App\Models\User;
use App\Services\NewsletterInter;
use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      app()->bind(NewsletterInter::class, function () {

        $client = (new ApiClient)->setConfig([
          'apiKey' => config('services.mailchimp.key'),
          'server' => 'us20'
      ]);
        return new NewsletterInter($client);
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     Model::unguard();
    }
}
