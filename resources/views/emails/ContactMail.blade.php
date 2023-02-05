@component('emails.layouts.app')
# Kapcsolatfelvétel

## Név: {{ $request->name }}

## RSVP: {{ $request->attending }}

## Kérsz, kértek szállást?: {{ $request->accommodation }}

Üzenet: {{ $request->message }}
@endcomponent
