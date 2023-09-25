@extends('frontend.layouts.layout')
@section('content')
    <div class="w-full max-w-full flex-start flex-col">
        <h1 class="head_text text-left">
            <span class="blue_gradient">Create Post</span>
        </h1>
        <p class="desc text-left max-w-md">
            Create and share amazing prompts with the world, and let your
            imagination run wild with any AI-Powered platform.
        </p>
        <form action={{ route('prompt.store') }} method="POST" class="mt-10 w-full max-w-2xl flex flex-col gap-7 glassmorphisme">
            @csrf
            <label>
                <span class="font-satoshi font-semibold text-base text-gray-700">
                    Your AI Prompt
                </span>

                <textarea placeholder="Write your prompt here..." required class="form_textarea" name="prompt"></textarea>
            </label>
            <label>
                <span class="font-satoshi font-semibold text-base text-gray-700">
                    Tag
                    <span class="font-normal">
                        (Ex: webdev)
                    </span>
                </span>

                <input placeholder="#tag" required class="form_input" name="tag"></input>

                <div class="flex-end mx-3 my-5 gap-4">
                    <a href={{ route('home.index') }} class="text-gray-500 text-sm">
                        Cancel
                    </a>

                    <button type="submit" class="text-sm px-5 py-1.5 bg-blue-500 rounded-full text-white">
                        Create
                    </button>
                </div>
            </label>

        </form>
    </div>
@endsection
