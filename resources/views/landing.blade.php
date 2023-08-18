<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YelpCamp</title>
    @vite('resources/css/app.css')
</head>

<body>
    <img class="hidden max-[1200px]:block p-10" src="{{ asset('assets/icons/Logo.svg') }}" alt="logo-icon" />
    <main class="grid min-h-screen relative grid-cols-[50%,50%] max-[1200px]:grid-cols-1">
        <div class="flex min-[1200px]:justify-center flex-col px-40 max-[1200px]:py-10 max-[1252px]:px-10 max-[1500px]:px-20">
            <div>
                <img class="absolute top-20 block max-[1200px]:hidden" src="{{ asset('assets/icons/Logo.svg') }}" alt="logo-icon" />
                <h1 class="text-6xl text-neutral-950 font-bold antialiased mb-4">Explore the best camps on Earth.</h1>
                <p class="font-medium text-lg antialiased text-neutral-500 mb-4">YelpCamp is a curated list of the best
                    camping spots on Earth. Unfiltered and un abiased reviews.</p>
                <ul>
                    <li class="flex items-center mb-3">
                        <img src="{{ asset('assets/icons/Checkmark.svg') }}" alt="checkmark-icon" />
                        <p class="ml-4 font-medium text-lg antialiased text-neutral-500">Add your own camp suggestions.
                        </p>
                    </li>
                    <li class="flex items-center mb-3">
                        <img src="{{ asset('assets/icons/Checkmark.svg') }}" alt="checkmark-icon" />
                        <p class="ml-4 font-medium text-lg antialiased text-neutral-500">Leave reviews and experience.
                        </p>
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('assets/icons/Checkmark.svg') }}" alt="checkmark-icon" />
                        <p class="ml-4 font-medium text-lg antialiased text-neutral-500">See locations for all camps.
                        </p>
                    </li>
                </ul>
                <a href="/campgrounds">
                    <button class="mt-8 bg-neutral-950 text-white font-medium text-lg antialiased py-4 px-6 rounded">
                        View Campgrounds
                    </button>
                </a>
                <div class="mt-10">
                    <p class="font-medium text-lg antialiased text-neutral-500">Partnered with:</p>
                    <div class="flex">
                        <img src="{{ asset('assets/icons/Airbnb.svg') }}" alt="airbnb-icon" />
                        <img src="{{ asset('assets/icons/Booking.svg') }}" alt="booking-icon" />
                        <img src="{{ asset('assets/icons/Plum Guide.svg') }}" alt="plum-guide-icon" />
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-full max-[1200px]:order-first bg-center">
            <img class="w-full h-full object-cover object-center max-[1200px]:aspect-[24/9] max-[1200px]:aspect-[24/9] block max-[1200px]:hidden" src="{{ asset('assets/images/Hero Image.jpg') }}" alt="hero-image-background">
            <img class="w-full h-full object-cover object-center max-[1200px]:aspect-[24/9] max-[1200px]:aspect-[24/9] hidden max-[1200px]:block" src="{{ asset('assets/images/Hero Image (Tablet and Mobile).jpg') }}" alt="hero-image-background">
        </div>
    </main>
</body>

</html>