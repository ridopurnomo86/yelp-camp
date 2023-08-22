<nav class="mx-auto container py-8">
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center">
            <a href="{{ route('landing') }}">
                <img src="{{ asset('assets/icons/Logo.svg') }}" alt="logo-icon" />
            </a>
            <a href="{{ route('campgrounds') }}" class="ml-6 font-medium text-md antialiased text-neutral-500 leading-10 mt-1">Home</a>
        </div>
        <div class="hidden max-[800px]:block bg-stone-200 p-2 rounded cursor-pointer" onclick="openNav()">
            <img src="{{ asset('assets/icons/Hamburger Menu.svg') }}" alt="hamburger-menu-icon" />
        </div>
        <div class="block max-[800px]:hidden">
            @auth
            <div class="flex items-center">
                <a href="{{ route('login') }}" class="font-medium text-md antialiased text-neutral-600 mr-6">{{ Auth::user()->username; }}</a>
                <form action="{{ route('logout') }}" method="POST" class="pointer">
                    @csrf
                    <button type="submit" class="cursor-pointer font-regular text-md antialiased text-neutral-500 mr-6">Logout</button>
                </form>
            </div>
            @endauth
            @guest
            <div class="flex items-center">
                <a href="{{ route('login') }}" class="font-medium text-md antialiased text-neutral-500 mr-6">Login</a>
                <a href="{{ route('register') }}">
                    <button class="bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded">
                        Create an account
                    </button>
                </a>
            </div>
            @endguest
        </div>
    </div>
</nav>