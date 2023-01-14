<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * @param MailRequest $request
     * @return RedirectResponse
     */
    public function sendEmail(MailRequest $request): RedirectResponse
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($request));
        return redirect()->back()->with('success', 'Sikeres E-mail küldés!');
    }
}
