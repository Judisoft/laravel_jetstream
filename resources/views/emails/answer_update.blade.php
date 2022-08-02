@component('mail::message')
# Dear {{ $question_author }},

Question answered!<br>

<div style="font-weight:500;color:red;">Question: {!! $question !!}</div>
<div style="padding:10px;border:3px solid #ddd;background-color:#eee;font-weight:700;">{!! $answer !!} </div> <br><br>




Thanks,<br>
{{ config('app.name').' '.__('Team') }}
@endcomponent
