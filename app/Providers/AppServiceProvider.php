<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // TwillNavigation::addLink(
        //     NavigationLink::make()->forModule('pages')
        // );

        // TwillNavigation::addLink(
        //     NavigationLink::make()->forModule('offices')
        // );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')
                ->title('About')
                ->doNotAddSelfAsFirstChild()
                ->setChildren([
                    NavigationLink::make()->forModule('pages'),
                    NavigationLink::make()->forModule('offices'),
                ])
        );
    }
}
