<?php

namespace App\Domain\Rules\Redirect;

use Filament\Http\Responses\Auth\Contracts\LogoutResponse as Responsable;
use Illuminate\Http\RedirectResponse;

class LogoutRedirectRule implements Responsable
{
    public function toResponse($request): RedirectResponse
    {
        // change this to your desired route
        return redirect()->route('home');
    }
}
