@component('mail::message')
# Please activate your account

Click on the button below to acivate your account.

@component('mail::button', ['url' => route('activation.activate', $token)])
Activate 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
