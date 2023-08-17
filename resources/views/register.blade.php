<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="grid min-h-screen grid-cols-[50%,50%] max-[1200px]:grid-cols-1">
        <div class="w-full h-full px-16 py-10">
            <div class="flex items-center justify-between max-[1200px]:mb-12">
                <img src="{{ asset('assets/icons/Logo.svg') }}" alt="logo-icon" />
                <a href="{{ route('campgrounds') }}">
                    <span class="flex items-center">
                        <img src="{{ asset('assets/icons/arrow-left.svg') }}" alt="arrow-left-icon" />
                        <p class="ml-2 font-medium text-md antialiased text-neutral-500">Back to campgounds</p>
                    </span>
                </a>
            </div>
            <div class="w-full h-full flex min-[1200px]:items-center min-[1200px]:justify-center">
                <div>
                    <h1 class="text-3xl text-neutral-950 font-bold antialiased mb-6">Start exploring camps from all around the world.</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="username" class="block mb-2 font-medium text-md antialiased text-neutral-500">Username</label>
                            <input type="text" class="rounded p-4 bg-neutral-50 block w-full @error('username') border border-red-500 @enderror" placeholder="johndoe_91" name="username" id="username" />
                            @error('username')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 font-medium text-md antialiased text-neutral-500">Password</label>
                            <input type="password" class="rounded p-4 bg-neutral-50 block w-full @error('password') border border-red-500 @enderror" placeholder="Choose Password" name="password" id="password" />
                            @error('password')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <button class="w-full block bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded">
                            Create an account
                        </button>
                    </form>
                    <span class="flex mt-4">
                        <p class="mr-1 font-medium text-sm antialiased text-neutral-500">Already a user?</p>
                        <a href="{{ route('login') }}" class="underline font-bold text-sm antialiased text-cyan-500">Sign in</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="bg-fuchsia-50 w-full h-full flex flex-col items-center justify-center">
            <div class="max-w-[300px] max-[1200px]:px-16 max-[1200px]:py-10 max-[1200px]:max-w-full">
                <h1 class="text-2xl text-neutral-950 font-bold antialiased mb-6">"YelpCamp has honestly saved me hours of research time, and the camps on here are definitely well picked and added."</h1>
                <div class="flex items-center">
                    <div class="mr-4">
                        <img src="{{ asset('assets/icons/User Testimonial.svg') }}" alt="user-testimonial-icon">
                    </div>
                    <div>
                        <p class="font-bold text-black antialiased text-lg">May Andrews</p>
                        <p class="font-regular text-neutral-500 antialiased text-md">Professional Hiker</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>