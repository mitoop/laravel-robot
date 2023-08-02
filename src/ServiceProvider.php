<?php

namespace Mitoop\LaravelRobot;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Mitoop\Robot\Robot;

class ServiceProvider extends LaravelServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->singleton(Robot::class, function ($app) {
            return new Robot(config('robot'));
        });

        $this->app->alias(Robot::class, 'robot');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $path = realpath(__DIR__.'/../config/robot.php');

            $this->publishes([$path => config_path('robot.php')], 'config');
        }
    }

    public function provides(): array
    {
        return ['robot', Robot::class];
    }
}
