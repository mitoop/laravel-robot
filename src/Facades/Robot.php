<?php

namespace Mitoop\LaravelRobot\Facades;

use Illuminate\Support\Facades\Facade;

class Robot extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'robot';
    }
}
