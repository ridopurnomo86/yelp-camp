<nav class="mx-auto container py-8">
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center">
            <img src="{{ asset('assets/icons/Logo.svg') }}" alt="logo-icon" />
            <a href="/campgrounds" class="ml-6 font-medium text-md antialiased text-neutral-500 leading-10 mt-1">Home</a>
        </div>
        <div class="flex items-center">
            <a href="{{ route('login') }}" class="font-medium text-md antialiased text-neutral-500 mr-6">Login</a>
            <a href="{{ route('register') }}">
                <button class="bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded">
                    Create an account
                </button>
            </a>
        </div>
    </div>
</nav>