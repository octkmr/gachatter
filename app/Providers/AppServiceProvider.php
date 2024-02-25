<?php

namespace App\Providers;

use App\Domain\Repositories\Character\IFetchRepository as ICharacterFetchRepository;
use App\Infrastructure\Repositories\Character\FetchRepository as CharacterFetchRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(
            ICharacterFetchRepository::class,
            CharacterFetchRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
