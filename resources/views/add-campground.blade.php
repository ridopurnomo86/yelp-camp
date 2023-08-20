<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Campground</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar />
    <main class="mx-auto container">
        <div class="w-full h-full flex items-center my-10">
            <div class="w-full flex flex-col items-center justify-center">
                <div class="w-[500px] max-[768px]:w-full px-10">
                    <h1 class="text-center text-2xl max-[1200px]:text-lg font-bold text-black antialiased mb-8">Add New Campground</h1>
                    <form action="{{ route('add-campground') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="camp_name" class="block mb-2 font-medium text-md antialiased text-neutral-500">Campground Name</label>
                            <input type="text" class="rounded p-4 bg-neutral-50 block w-full @error('camp_name') border border-red-500 @enderror" placeholder="Yohana Hills" name="camp_name" id="camp_name" />
                            @error('camp_name')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="price" class="block mb-2 font-medium text-md antialiased text-neutral-500">Price</label>
                            <input type="text" class="rounded p-4 bg-neutral-50 block w-full @error('price') border border-red-500 @enderror" placeholder="$120" name="price" id="price" />
                            @error('price')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="image_url" class="block mb-2 font-medium text-md antialiased text-neutral-500">Image</label>
                            <input type="text" class="rounded p-4 bg-neutral-50 block w-full @error('image_url') border border-red-500 @enderror" placeholder="https://google.com/image/yohana-hills" name="image_url" id="image_url" />
                            @error('image_url')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="description" class="block mb-2 font-medium text-md antialiased text-neutral-500">Description</label>
                            <textarea class="rounded p-4 bg-neutral-50 block w-full @error('description') border border-red-500 @enderror" name="description" id="description">This place so great...</textarea>
                            @error('description')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <button class="w-full block bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded">
                            Add Campground
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </main>
</body>

</html>