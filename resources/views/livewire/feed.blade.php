<section class="feed">
    <div class="mt-10 prompt_layout">
        @foreach ($prompts as $prompt)
            <livewire:prompt-card :prompt='$prompt'>
        @endforeach
    </div>
</section>
