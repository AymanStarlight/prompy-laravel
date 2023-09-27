<div wire:key='{{ $prompt->id }}' class="prompt_card">
    <div class="flex justify-between items-start gap-5">

        <div class="flex-1 flex justify-start items-center gap-3 cursor-pointer">
            <img class="rounded-full object-fill w-[40px] h-[40px]"
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
        <div class="copy_btn" onclick="copyToClipboard('{{ $prompt->id }}', '{{ $prompt->prompt }}')">
            <img id={{ "copied" . $prompt->id }} src="{{ asset('storage/assets/icons/copy.svg') }}" width="16" height="16"
                 />
        </div>

    </div>
    <p class="my-4 font-satoshi text-sm text-gray-500" id="prompt">{{ $prompt->prompt }}</p>
    <a href={{ route('home.index', $prompt->tag) }} class="font-inter text-sm blue_gradient ">
        #{{ $prompt->tag }}
    </a>
    @auth
        @if (auth()->user()->id === $prompt->user_id and str_contains(url()->current(), 'myprofile'))
            <div class="mt-5 flex-center gap-4 border-t border-gray-100 pt-3">
                <a href={{ route('prompt.edit', $prompt->id) }} class="font-inter text-sm green_gradient cursor-pointer">
                    Edit
                </a>
                <form method="POST" action={{ route('prompt.delete', $prompt->id) }}>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="font-inter text-sm orange_gradient cursor-pointer">
                        Delete
                    </button>
                </form>
            </div>
        @endif
    @endauth
</div>

<script>
    function copyToClipboard(id, content) {
        navigator.clipboard.writeText(content);
        document.getElementById(`copied${id}`).src = "{{ asset('storage/assets/icons/tick.svg') }}"
        setTimeout(() => {
            document.getElementById(`copied${id}`).src = "{{ asset('storage/assets/icons/copy.svg') }}"
        }, 1700);
    }
</script>
