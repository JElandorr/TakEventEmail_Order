@component('mail::message')
    Hi {{ $orderMessage->order->user->name }}, you received new message: {{ $orderMessage->title }}<br>
    {!!  $orderMessage->message !!}

    @component('mail::button', ['url' => env('APP_URL') . '/orders'])
        View Order
    @endcomponent

    <span style="color: #887171">You <b>can</b> directly reply to this email.</span><br>
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
