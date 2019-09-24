<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 3:49 PM
 */

namespace App\Providers;
use App\Repositories\Bill\BillEloquentRepository;
use App\Repositories\Bill\BillRepositoryInterface;
use App\Repositories\Email\EmailEloquentRepository;
use App\Repositories\Email\EmailRepositoryInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmailRepositoryInterface::class, EmailEloquentRepository::class);
        $this->app->bind(BillRepositoryInterface::class, BillEloquentRepository::class);


    }
}