<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YelpCamp</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar />
    <main class="mx-auto container grid grid-cols-[30%,auto] gap-8 mb-20">
        <div class="p-12 border rounded w-full h-min">
            <iframe class="rounded" height="400" src="https://api.maptiler.com/maps/basic-v2/?key=O9g5DTVe3HSKnZAHGhjm#0.6/{{ $camp->latitude }}/{{ $camp->longitude }}"></iframe>
            <!-- <img class="w-full" src="{{ asset('assets/images/Map.png') }}" alt="map-image" /> -->
        </div>
        <div>
            <article class="p-12 border rounded w-full">
                <div class="w-full h-full">
                    <img loading="lazy" class="rounded mb-4 aspect-[16/9] w-full" src="{{ asset($camp->image_url) }}" alt="{{ $camp->camp_name }}">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <p class="font-bold text-black text-md antialiased">{{ $camp->camp_name }}</p>
                    <p class="font-medium text-black text-md antialiased">${{ $camp->price }}/night</p>
                </div>
                <p class="font-medium text-md mb-4 antialiased text-neutral-500">{{ $camp->description }}</p>
                <p class="font-medium italic text-md mb-4 antialiased text-neutral-500">Submitted by {{ $camp->user->username }}</p>
            </article>
            <div class="p-12 border rounded w-full mt-8">
                <div>
                    <div class="flex items-center mb-4 justify-between">
                        <p class="font-bold text-md antialiased text-neutral-950">Adam Jones</p>
                        <p class="font-regular text-md antialiased text-neutral-500">{{ $camp->created_at->diffForHumans() }}</p>
                    </div>
                    <p class="font-medium text-md border-b-[1px] border-neutral-300 pb-4 antialiased text-neutral-500">
                        Honestly one of the best experience ever, took us a while to figure out how to get there but it was amazing!
                    </p>
                </div>
                <div class="flex items-end justify-end">
                    <button class="flex mt-8 bg-neutral-950  py-2 px-6 rounded">
                        <p class="text-white font-medium text-md antialiased">Leave a Review</p>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>