@component('mail::message')

# Dear {{ $user_email }},

I hope you are well.

Just a reminder about the upcoming Weekly challenge. <br>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Best regards,<br>
Kum Jude <br>
{{ config('app.name') }}
@endcomponent
