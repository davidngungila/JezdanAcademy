@props(['user' => null])

@php
    $user = $user ?? auth()->user();
    $initials = strtoupper(substr($user->name ?? 'JD', 0, 2));
@endphp

<div {{ $attributes->merge(['class' => 'ava']) }}>
    @if($user?->avatar)
        <img src="{{ asset('storage/'.$user->avatar) }}" alt="{{ $user->name ?? 'User' }}">
    @else
        {{ $initials }}
    @endif
</div>
