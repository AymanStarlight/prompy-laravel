@extends('frontend.layouts.layout')
@section('content')
    <div class="w-full max-w-full flex-start flex-col">
        <h1 class="head_text text-left">
            <span class="blue_gradient">Edit Post</span>
        </h1>
        <p class="desc text-left max-w-md">
            Share amazing prompts with the world, and let your
            imagination run wild with any AI-Powered platform.
        </p>
        <form action={{ route('prompt.update', $prompt->id) }} method="POST"
            class="mt-10 w-full max-w-2xl flex flex-col gap-7 glassmorphisme">
            @csrf
            @method('PUT')
            <label>
                <span class="font-satoshi font-semibold text-base text-gray-700">
                    Your AI Prompt
                </span>

                <textarea required placeholder="Write your prompt here..." required class="form_textarea" name="prompt">{{ old('prompt', $prompt->prompt) }}</textarea>
            </label>
            <label>
                <span class="font-satoshi font-semibold text-base text-gray-700">
                    Tag
                    <span class="font-normal">
                        (Ex: webdev)
                    </span>
                </span>

                <input required placeholder="#tag" required class="form_input" name="tag" value="{{ old('tag', $prompt->tag) }}"></input>

                <div class="flex-end mx-3 my-5 gap-4">
                    <a href={{ route('profile.index') }} class="text-gray-500 text-sm">
                        Cancel
                    </a>

                    <button type="submit" class="text-sm px-5 py-1.5 bg-blue-500 rounded-full text-white">
                        Edit
                    </button>
                </div>
            </label>

        </form>
    </div>
@endsection
