<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * @param Request $request
     * @return string
     */
    protected function redirectTo($request): string
    {
        if (! $request->expectsJson()) {
            return route('login');
        }

        return '';
    }

    protected function redirectIfAdmin(Request $request): string
    {

        if (! $request->expectsJson()) {
            return route('admin.login');
        }

        return '';
    }

    /**
     * Handle an unauthenticated user.
     *
     * @param  Request  $request
     * @param  array  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function unauthenticated($request, array $guards)
    {
        foreach ($guards as $guard) {

            switch ($guard) {
                case 'admin':
                    throw new AuthenticationException(
                        'Unauthenticated.', $guards, $this->redirectIfAdmin($request)
                    );
                default:
                    throw new AuthenticationException(
                        'Unauthenticated.', $guards, $this->redirectTo($request)
                    );
            }

        }
    }
}
