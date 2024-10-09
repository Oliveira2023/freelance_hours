<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <input wire:model.live="search />
    <br>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
