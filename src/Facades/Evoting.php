<?php

namespace Helaplus\Evoting\Facades;

use Illuminate\Support\Facades\Facade;

class Evoting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ussd';
    }
}