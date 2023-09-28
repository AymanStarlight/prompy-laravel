@extends('frontend.layouts.layout')
@section('content')
    <section class="w-full">
        <h1 class="head_text text-left">
            <span class="orange_gradient">{{ $user->name }} Profile</span>
        </h1>
        <p class="desc text-left">Welcome to their Profile Page</p>
        <div class="mt-10 prompt_layout">
            @if (count(($user->prompts)) == 0)
                <p class="desc text-left ">{{ $user->name }} has Created no Prompts</p>
            @else
                @foreach ($user->prompts as $prompt)
                    <livewire:prompt-card :prompt="$prompt">
                @endforeach
            @endif
        </div>
    </section>
@endsection
