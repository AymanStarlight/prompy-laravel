<nav class="flex-between w-full mb-16 pt-3">
    <a href={{ route('home.index') }} class="flex gap-2 flex-center">
        <img src={{ asset('storage/assets/images/logo-robot.svg') }} alt="Prompy Logo" class="object-contain"
            width="45" height="45" />
    </a>

    {{-- Desktop Navigation --}}

    <div class="sm:flex hidden">
        @auth

            <div class="flex gap-3 md:gap-5">
                <div>
                    <a href={{ route('create.index') }} class="blue_btn">
                        Create Post
                    </a>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="outline_btn">Sign Out</button>
                </form>

                <a href={{ route('profile.index') }}>
                    <img src={{ asset('storage/assets/images/profile_pics/' . auth()->user()->profile_img) }}
                        class="rounded-full object-fill w-[37px] h-[37px]" alt="profile" />
                </a>
            </div>
        @else
            <div class="flex gap-2">
                <a href="{{ route('login') }}" class="blue_btn">
                    Sign In
                </a>

                <a href="{{ route('register') }}" class="blue_btn">
                    Register
                </a>
            </div>
        @endauth
    </div>

    {{-- Mobile Navigation --}}

    <div class="sm:hidden flex relative">
        @auth
            <div class="flex">

                <img src={{ asset('storage/assets/images/profile_pics/' . auth()->user()->profile_img) }}
                    class="rounded-full object-fill w-[42px] h-[42px]" alt="profile"
                    wire:click="toggleDropDown" />

                @if ($dropDown)
                    <div class="dropdown">
                        <a href={{ route('profile.index') }} class="dropdown_link" wire:click="closeDropDown">
                            My Profile
                        </a>
                        <a href={{ route('create.index') }} class="dropdown_link" wire:click="closeDropDown">
                            Create Prompt
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="outline_btn"
                                wire:click="closeDropDown">Sign Out</button>
                        </form>
                    </div>
                @endif


            </div>
        @else
            <a href="{{ route('login') }}" class="blue_btn">
                Sign In
            </a>
        @endauth
    </div>

</nav>
