@component('emails.layouts.app')
# Kapcsolatfelvétel

## Név: {{ $request->name }}

## +1 fő neve: {{ $request->additional_person_name }}

## RSVP: {{ $request->attending }}

Üzenet: {{ $request->message }}
@endcomponent
