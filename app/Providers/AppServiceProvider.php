<?php

namespace App\Providers;

use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\TaskRepositoryInterface;
use App\Interfaces\NotificationRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TaskRepository;
use App\Repositories\NotificationRepository;
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
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->singleton(NotificationRepositoryInterface::class, NotificationRepository::class);
    }
}
