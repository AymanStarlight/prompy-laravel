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
            <form class="relative w-full flex-center" id="searchForm">
                <input type="text" name="search" value="{{ request('search') }}" class="search_input peer"
                    placeholder="Search for tags or prompts" id="search" onkeyup="resetTimeout(event)" />
            </form>
            {{-- @if ($tag)
                <a class="green_gradient mt-8" href={{ route('home.index') }}>All Prompts</a>
            @endif --}}
            <div class="prompt_layout">
                @foreach ($prompts as $prompt)
                    <livewire:prompt-card :prompt='$prompt'>
                @endforeach
            </div>
        </section>
    </section>

    <script>
        const input = document.getElementById('search');
        const form = document.getElementById('searchForm');

        // Set the cursor position to the end of the input value
        input.setSelectionRange(input.value.length, input.value.length);

        // Automatically focus the input
        input.focus();


        let timeoutId;

        function startTimeout() {
            // Set a timeout of 5 seconds (5000 milliseconds)
            timeoutId = setTimeout(() => {
                form.submit()
            }, 600);
        }

        function resetTimeout(e) {

            // Clear the existing timeout
            clearTimeout(timeoutId);

            // Start a new timeout
            startTimeout();
        }
    </script>
@endsection
