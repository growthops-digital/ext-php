<?php

namespace Growthops\Providers;

use Illuminate\Support\ServiceProvider;

class GrowthopsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        require_once(__DIR__ . '/../Helpers/utility_helpers.php');
    }
}
