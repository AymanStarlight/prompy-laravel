@extends('frontend.layouts.layout')
@section('content')
    <section class="w-full">
        <h1 class="head_text text-left">
            <span class="blue_gradient">My Profile</span>
        </h1>
        <p class="desc text-left">Welcome to your Profile Page</p>
        <div class="mt-10 prompt_layout">
            @if (count(auth()->user()->prompts) == 0)
                <p class="desc text-left ">You've Created no Prompts</p>
            @else
                @foreach (auth()->user()->prompts as $prompt)
                    <livewire:prompt-card :prompt="$prompt">
                @endforeach
            @endif
        </div>
    </section>
@endsection
