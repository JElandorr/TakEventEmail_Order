<x-mail::message>
    <x-mail::table>
        | Item      | Quantity | Price |
        | --------- | -------: | ----: |
        @foreach ($order->items as $item)
            | {{ $item->ticket->ticket_type->name }} | {{ $item->quantity }} | {{ $order->currency->prefix }}{{ $item->price }}{{ $order->currency->suffix }} |
        @endforeach
    </x-mail::table>
</x-mail::message>
