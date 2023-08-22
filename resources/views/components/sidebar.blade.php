<div id="sidebar" onclick="closeNav()" tabindex="-1" aria-labelledby="drawer-top-label" style="display: none" class="fixed z-[30] left-0 top-0 w-full h-full overflow-gidden bg-black bg-opacity-80">
    <aside onclick="closeNav()" class="fixed bg-white top-0 z-[50] w-full h-[300px] bg-opacity-100">
        <div class="mx-auto container py-8">
            @auth
            <div>
                <a href="{{ route('login') }}" class="py-4 font-medium text-md antialiased text-neutral-600 mr-6">{{ Auth::user()->username; }}</a>
                <form action="{{ route('logout') }}" method="POST" class="pointer">
                    @csrf
                    <button type="submit" class="py-4 cursor-pointer font-regular text-md antialiased text-neutral-500 mr-6">Logout</button>
                </form>
            </div>
            @endauth
            @guest
            <div>
                <a href="{{ route('login') }}" class="py-4 font-medium text-md antialiased text-neutral-500 mr-6">Login</a>
                <a href="{{ route('register') }}">
                    <button class="py-4 bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded">
                        Create an account
                    </button>
                </a>
            </div>
            @endguest
        </div>
    </aside>
</div>