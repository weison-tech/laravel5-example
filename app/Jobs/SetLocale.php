<?php

namespace App\Jobs;

use App\Jobs\Job;
use Request;
use Illuminate\Contracts\Bus\SelfHandling;

class SetLocale extends Job implements SelfHandling
{
    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['zh-CN','en'];

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        if(!session()->has('locale'))
        {
            session()->put('locale', Request::getPreferredLanguage($this->languages));
        }

        app()->setLocale(session('locale'));
    }
}
