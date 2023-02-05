<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * @param MailRequest $request
     * @return RedirectResponse
     */
    public function sendEmail(MailRequest $request): RedirectResponse
    {
        try {
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($request));
            Mail::to(env('MAIL_TO_ADDRESS2'))->send(new ContactMail($request));
            Log::info('Visszajelzés:', $request->all());

            return redirect()->back()->with('success', 'Köszönjük a visszajelzésed!');
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $request->all());
            return redirect()->back()->with('error', 'Hiba történt a visszajelzés elküldése közben!');
        }
    }
}
