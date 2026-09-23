<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();

        if ($user->is_admin) {
            return redirect()->intended('/admin');
        }

        return redirect()->intended('/dashboard');
    }
}