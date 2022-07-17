@component('mail::message')
# Dear {{ Auth::user()->name }},

Thank you for staying with us. <br>
<strong>Your account has been upgraded to premium.</strong> You can now access all features on our platform.
We wish you all the best as you walk your way  to success.




Thanks,<br>
{{ config('app.name').' '.__('Team') }}
@endcomponent
