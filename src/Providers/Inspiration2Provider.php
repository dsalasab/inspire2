<?php


namespace Ghusr\Inspire2\Providers;
use Illuminate\Support\ServiceProvider;


class Inspiration2Provider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire2');
    }
}
