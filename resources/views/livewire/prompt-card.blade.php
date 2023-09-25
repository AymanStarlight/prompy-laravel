<div wire:key='{{ $prompt->id }}' class="prompt_card">
    <div class="flex justify-between items-start gap-5">

        <div class="flex-1 flex justify-start items-center gap-3 cursor-pointer">
            <img class="rounded-full object-contain" width="40" height="40"
                src={{ asset('storage/assets/images/profile_pics/' . $prompt->user->profile_img) }} alt="user_img">
            <div class="flex flex-col">
                <h3 class="font-satoshi font-semibold text-gray-900">
                    {{ $prompt->user->name }}
                </h3>
                <p class="font-inter text-sm text-gray-500">
                    {{ $prompt->user->email }}
                </p>
            </div>
        </div>
        <div class="copy_btn" onclick="copyToClipboard('{{ $prompt->prompt }}')">
            <img  src={{ asset('storage/assets/icons/copy.svg') }}
                width="16" height="16" alt="copy_icon" />
        </div>

    </div>
    <p class="my-4 font-satoshi text-sm text-gray-500" id="prompt">{{ $prompt->prompt }}</p>
    <p class="font-inter text-sm blue_gradient cursor-pointer">
        #{{ $prompt->tag }}
    </p>
    <script>
        function copyToClipboard(content) {
            navigator.clipboard.writeText(content);
            alert(content)
        }
    </script>
</div>