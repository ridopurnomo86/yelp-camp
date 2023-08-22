<article class="p-4 border rounded w-full">
    <div class="w-full h-full">
        <img loading="lazy" class="rounded mb-4 aspect-[16/9] w-full" src="{{ $image }}" alt="{{ $title }}">
    </div>
    <p class="font-bold text-black text-md antialiased mb-2">{{ $title }}</p>
    <p class="font-medium text-md mb-4 antialiased text-neutral-500 line-clamp-2 max-[765px]:text-sm">{{ $description }}</p>
    <a href="{{ $path }}">
        <button class="border bg-white text-black font-bold text-sm w-full py-2 max-[765px]:text-xs">
            View Campground
        </button>
    </a>
</article>