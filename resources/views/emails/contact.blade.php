@component('mail::message')
#De la:
{{ $mesaj->nume }}, <strong> Telefon: {{ $mesaj->telefon }} </strong>
<br/>
#Email:
{{ $mesaj->email }}
<br/>
#Firma:
@if ($mesaj->firma)
   {{ $mesaj->firma }}
@else
    {{ "Nedeclarata" }}
@endif

<br/>
#Continutul mesajului:
{{ $mesaj->mesaj }}

