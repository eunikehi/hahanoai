@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>
Welcome to hahanoai, your Account has been created successfully. Now you can choose your best match hahanoai!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent