<x-mail::message>
# Introduction

Une demande de contact a été initiée par <strong>M., Mme {{ $data['name'] }} </strong> via l'adresse <a href="mailto:{{$data['email']}}">{{$data['email']}}</a> .

Vous trouverez le contenu du message ci-dessous.

---------------------------------------------------------------------

{{$data['message']}}


--------------------------------------------------------------------
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
