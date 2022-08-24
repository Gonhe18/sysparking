<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\OAuthLoginTraits;

class GoogleController extends Controller
{
    use OAuthLoginTraits;

    public function driverType(): string
    {
        return 'google';
    }
}