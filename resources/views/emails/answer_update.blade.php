@component('mail::message')
# Dear {{ Auth::user()->name }},

Answer for your question is now available <br>

<div>{!! $question !!}</div>
<div style="padding:10px;">{!! $answer !!} <br> </div>




Thanks,<br>
{{ config('app.name').' '.__('Team') }}
@endcomponent
