@extends('frontend.layouts.layout')
@section('content')
    <section>
        <section class="w-full flex-center flex-col">
            <h1 class="head_text text-center">
                Explore & Share
                <br class="" />
                <span class="red_gradient text-center">AI-Powered Prompts</span>
            </h1>
            <p class="desc text-center">
                <span class="font-bold text-primary-red">Prompy</span> is an AI
                prompting tool brewed to unleash the creative powers of AI Platforms.
                Discover, Create and share the best prompts.
            </p>
        </section>
        <section class="feed">
            @if ($tag)
                <a class="green_gradient" href={{ route('home.index') }}>All Prompts</a>
            @endif
            <div class="mt-10 prompt_layout">
                @foreach ($prompts as $prompt)
                    <livewire:prompt-card :prompt='$prompt'>
                @endforeach
            </div>
        </section>
    </section>
@endsection
