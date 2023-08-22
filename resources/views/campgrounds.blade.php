<x-layout title="Campgrounds">
    <main>
        <div class="bg-stone-200 rounded px-10 py-16 max-[520px]:px-8 max-[520px]:py-12">
            <h1 class="text-3xl text-neutral-950 font-bold antialiased mb-2">Welcome to YelpCamp!</h1>
            <p class="font-medium text-md antialiased text-neutral-500 mb-2 max-w-[350px]">View our hand-picked campgrounds from all over the world, or add your own.</p>
            <div class="flex max-[520px]:flex-col max-[520px]:mt-4 max-[520px]:items-start max-[520px]:w-full items-center mb-4">
                <div class="relative mr-4 max-[520px]:w-full">
                    <img class="absolute top-5 left-3 block " src="{{ asset('assets/icons/Search Icon.svg') }}" alt="search-icon" />
                    <input type="text" placeholder="Search for camps" class="px-9 py-4 text-neutral-500 rounded border max-[520px]:w-full max-[520px]:block" />
                </div>
                <button class="bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded max-[520px]:mt-4 max-[520px]:w-full">
                    Search
                </button>
            </div>
            <a href="{{ route('add-campground') }}" class="underline font-medium text-md antialiased text-neutral-500 mb-2">Or add your own campground</a>
        </div>
        <div class="my-20 grid grid-cols-3 max-[1200px]:grid-cols-2 max-[654px]:grid-cols-1 gap-8">
            @foreach ($camps as $camp)
            <div class="w-full">
                <x-cards.camp-card path="/campgrounds/{{ $camp->slug }}" title="{{ $camp->camp_name }}" description="{{ $camp->description }}" image="{{ $camp->image_url }}" />
            </div>
            @endforeach
        </div>
    </main>
</x-layout>