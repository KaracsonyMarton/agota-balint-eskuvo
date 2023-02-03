@component('emails.layouts.app')
# Kapcsolatfelvétel

## Név: {{ $request->name }}

## Kivel jössz? Kérlek írd le a nevét: {{ $request->additional_person_name }}

## RSVP: {{ $request->attending }}

## Kérsz, kértek szállást?: {{ $request->accommodation }}

Üzenet: {{ $request->message }}
@endcomponent
