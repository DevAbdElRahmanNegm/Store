<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 7/14/2022
 * Time: 1:22 PM
 */

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class adminMiddleware extends Middleware
{

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('get.admin.login');
        }
    }
}